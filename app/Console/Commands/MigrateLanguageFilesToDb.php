<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Models\Translation;

class MigrateLanguageFilesToDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lang:migrate-to-db {--dry-run : Show what would be migrated without actually migrating}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate language files content to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $isDryRun = $this->option('dry-run');
        $langPath = lang_path();
        
        $this->info('Starting language files migration...');
        
        // Get all language directories
        $langDirs = File::directories($langPath);
        $this->withProgressBar($langDirs, function ($langDir) use ($isDryRun) {
            $locale = basename($langDir);
            
            // Get all PHP files in the language directory
            $files = File::files($langDir);
            
            DB::beginTransaction();
            try {
                foreach ($files as $file) {
                    $filename = $file->getBasename('.php');
                    $translations = require $file->getPathname();
                    
                    $this->processTranslations($locale, $filename, $translations, $isDryRun);
                }
                if (!$isDryRun) {
                    DB::commit();
                }
            } catch (\Exception $e) {
                DB::rollBack();
                $this->error("\nError processing {$locale}: {$e->getMessage()}");
            }
        });
        
        $this->newLine(2);
        $this->info('Migration completed!');
    }

    /**
     * Process translations array recursively
     */
    private function processTranslations(string $locale, string $group, array $translations, bool $isDryRun, string $prefix = '')
    {
        foreach ($translations as $key => $value) {
            $fullKey = $prefix ? "{$prefix}.{$key}" : $key;
            
            if (is_array($value)) {
                $this->processTranslations($locale, $group, $value, $isDryRun, $fullKey);
            } else {
                if ($isDryRun) {
                    $this->line("Would migrate: [{$locale}] {$group}.{$fullKey} = {$value}");
                } else {
                    try {
                        DB::transaction(function () use ($locale, $group, $fullKey, $value) {
                            Translation::updateOrCreate(
                                [
                                    'locale' => $locale,
                                    'group' => $group,
                                    'key' => $fullKey,
                                ],
                                ['value' => $value]
                            );
                        });
                        $this->line("Migrated: [{$locale}] {$group}.{$fullKey} = {$value}");
                    } catch (\Exception $e) {
                        $this->error("Failed to migrate: [{$locale}] {$group}.{$fullKey}: {$e->getMessage()}");
                    }
                }
            }
        }
    }
}
