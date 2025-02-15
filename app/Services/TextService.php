<?php

namespace App\Services;

class TextService
{
    /**
     * Get text content from configuration
     *
     * @param string $key Dot notation key for text content
     * @return string|null
     */
    public function getText(string $key, string $locale = null): ?string
    {
        return trans("text.{$key}", [], $locale);
    }

    /**
     * Get text content with replacements
     *
     * @param string $key Dot notation key for text content
     * @param array $replacements Key-value pairs for text replacement
     * @return string|null
     */
    public function getTextWithReplacements(string $key, array $replacements = []): ?string
    {
        $text = $this->getText($key);
        
        if ($text === null) {
            return null;
        }

        return strtr($text, $replacements);
    }
}
