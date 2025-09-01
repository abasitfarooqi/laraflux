<?php

namespace App\Services;

use Spatie\Browsershot\Browsershot;

class BrowsershotService
{
    /**
     * Generate a screenshot or PDF from a URL.
     *
     * @param string $url  The webpage URL
     * @param string $type 'png' or 'pdf'
     * @param string|null $fileName  Optional custom file name
     * @return string  Full saved file path
     */
    public function generate(string $url, string $type = 'png', string $fileName = null): string
    {
        $allowed = ['png', 'pdf'];

        if (!in_array($type, $allowed)) {
            throw new \InvalidArgumentException("Invalid type. Allowed: png, pdf");
        }

        $fileName = $fileName ?? 'output_' . time() . '.' . $type;
        $filePath = storage_path('app/public/' . $fileName);

        $browsershot = Browsershot::url($url);

        if ($type === 'png') {
            $browsershot->setScreenshotType('png')->save($filePath);
        } elseif ($type === 'pdf') {
            $browsershot->format('A4')->save($filePath);
        }

        return $filePath;
    }
}
