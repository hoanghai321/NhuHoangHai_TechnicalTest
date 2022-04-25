<?php

namespace App\Helpers;

class Singleton
{
    private $foo;

    public function send()
    {
        $log = 'Send!';
        return $log;
    }

    public static function log($log){
        return app(Singleton::class)->send();
    }
}

