<?php

namespace KSHDestiny\Inspire;
use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt()
    {
        $response = Http::get('https://zenquotes.io/api/random');

        // return $response[0]['q']." is written by <b>".$response[0]['a']."</b>" ;
        return $response[0];
    }
}
