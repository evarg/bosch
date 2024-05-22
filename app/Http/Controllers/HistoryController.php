<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Saloon\XmlWrangler\XmlReader;

class HistoryController extends Controller
{
    public function index(){

        $reader = XmlReader::fromFile(storage_path('history.xml'));
        var_dump($reader->value('History')->sole());

        // var_dump($reader->element('History.EventData.0')->sole()->getAttributes());
        // $names = $reader->value('History')->collect();
    }
}
