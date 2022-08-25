<?php

namespace src\oop\app\src\Parsers;

class FilmixParserStrategy implements ParserInterface
{
    public function parseContent(string $siteContent)
    {
        preg_match_all("#<h1 .*>(.+?)<\/h1>#", $siteContent, $title);
        preg_match_all("/<img src=\"(.+?)\" class=\"poster poster-tooltip\" .*>/", $siteContent, $poster);
        preg_match_all("/<div class=\"full-story\">(.+?)<\/div>/", $siteContent, $description);
        $title = $title[1];
        $poster = $poster[1];
        $description = $description[1];
        return [$title[0], $poster[0], $description[0]];
    }
}