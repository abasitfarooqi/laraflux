<?php

namespace App\Http\Controllers;

use App\Services\BrowsershotService;
use Illuminate\Http\Request;

class CaptureController extends Controller
{
    protected $browsershot;

    public function __construct(BrowsershotService $browsershot)
    {
        $this->browsershot = $browsershot;
    }

    /**
     * Capture a webpage (URL) as PNG or PDF
     */
    public function fromUrl(Request $request, $type)
    {
        $url = $request->get('url', 'https://laravel.com');
        $filePath = $this->browsershot->generate($url, $type);

        return response()->download($filePath);
    }

    /**
     * Capture raw HTML or Blade view as PNG/PDF
     */
    public function fromHtml(Request $request, $type)
    {
        $html = $request->get('html', '<h1>Hello World</h1>');
        $filePath = $this->browsershot->generate($html, $type, true);

        return response()->download($filePath);
    }

    /**
     * Capture a Blade view (example: resources/views/invoice.blade.php)
     */
    public function fromView($type)
    {
        $html = view('invoice', ['name' => 'John Doe'])->render();
        $filePath = $this->browsershot->generate($html, $type, true);

        return response()->download($filePath);
    }
}
