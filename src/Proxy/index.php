<?php

require_once '../vendor/autoload.php';

use Proxy\CachingDownloader;
use Proxy\Downloader;
use Proxy\SimpleDownloader;

function clientCode(Downloader $downloader) {
    $downloader->download('http://example.com');

    $downloader->download('http://example.com');
}

echo "Executing client code with real subject:\n";
$realSubject = new SimpleDownloader();
clientCode($realSubject);

echo "\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new CachingDownloader($realSubject);
clientCode($proxy);