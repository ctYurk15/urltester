<?php

class Scanner
{
    public function hasWWW($url)
    {
        return strpos($url, 'www.');
    }
}

?>