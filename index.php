<?php
		require_once "vendor/autoload.php";
		
		use GuzzleHttpClient;
		
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'https://kinoukr.com/4166-pravdyva-istoriya-bandy-kelli.html');
        var_dump($res);