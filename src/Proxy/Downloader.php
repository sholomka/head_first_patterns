<?php

namespace Proxy;

interface Downloader
{
    public function download(string $url): string;
}