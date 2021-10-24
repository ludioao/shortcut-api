<?php


namespace LudioAo\Shortcut\Services;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class ShortcutService
{
    private $http;

    public function __construct(?$apiKey = null)
    {
        $apiKey = $apiKey ?? Config::get('shortcut.api_key');

        $this->http = Http::withoutVerifying()
            ->baseUrl(Config::get('shortcut.base_url'))
            ->withHeaders(
                [
                    'Shortcut-Token' => $apiKey
                ]
            );


    }


}
