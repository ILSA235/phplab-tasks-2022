<?php

namespace src\oop\app\src\Transporters;

class CurlStrategy implements TransportInterface
{
    public function getContent(string $url): string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $html = curl_exec($ch);
        $html = iconv('CP1251', mb_detect_encoding($html), $html);
        curl_close($ch);
        return $html;
    }
}