<?php

class Scanner
{
    public function hasWWW($url)
    {
        return str_contains($url, 'www.');
    }
}

?>