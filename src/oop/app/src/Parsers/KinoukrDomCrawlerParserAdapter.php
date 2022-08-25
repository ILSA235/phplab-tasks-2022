<?php

namespace src\oop\app\src\Parsers;

use Symfony\Component\DomCrawler\Crawler;

class KinoukrDomCrawlerParserAdapter implements ParserInterface
{
    public function parseContent(string $siteContent)
    {
        $crawler = new Crawler($siteContent);
        $title = $crawler->filter('#fheader > h1')->text();
        $poster = $crawler->filter('.fposter > a')->link()->getUri();
        $description = $crawler->filter('#fdesc')->text();
        return [$title, $poster, $description];
    }
}