<?php

namespace KSHDestiny\Inspire\Controllers;

use KSHDestiny\Inspire\Inspire;

class InspirationController
{
    public function index()
    {
        $inspire = new Inspire;
        $quote = $inspire->justDoIt();
        return view('inspire::index',compact('quote'));
    }
}
