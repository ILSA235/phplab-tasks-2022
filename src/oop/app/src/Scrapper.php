<?php
/**
 * Create Class - Scrapper with method getMovie().
 * getMovie() - should return Movie Class object.
 *
 * Note: Use next namespace for Scrapper Class - "namespace src\oop\app\src;"
 * Note: Dont forget to create variables for TransportInterface and ParserInterface objects.
 * Note: Also you can add your methods if needed.
 */

namespace src\oop\app\src;

use src\oop\app\src\Models\Movie;

class Scrapper
{
    protected $getcontent;
    protected $parsecontent;


    public function __construct($getcontent, $parsecontent)
    {
        $this->getcontent = $getcontent;
        $this->parsecontent = $parsecontent;
    }

    public function getMovie()
    {
        $url = func_get_args();
        $get = $this->getcontent->getContent($url[0]);
        $parse = $this->parsecontent->parseContent($get);
        $movieSet = new Movie();
        $title = $movieSet->setTitle($parse[0]);
        $poster = $movieSet->setPoster($parse[1]);
        $description = $movieSet->setDescription($parse[2]);
        return $movieSet;
    }
}