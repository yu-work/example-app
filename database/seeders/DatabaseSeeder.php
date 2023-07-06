<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(SeederTypesTable::class);
        $this->call(SeederCountriesTable::class);
        $this->call(SeederUsersTable::class);
        $this->call(PhoneSeeder::class);
        $this->call(DestinationSeeder::class);
        $this->call(FlightTable::class);
        $this->call(ProductSeeder::class);
        $this->call(PriceSeeder::class);
    }
}
