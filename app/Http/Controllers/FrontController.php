<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class FrontController extends Controller
{
    protected $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('text_left')->sortBy('id','ASC');
        $this->extract->tuneSelection('on_check')->sortBy('id','ASC');
        $this->extract->tuneSelection('clients')->sortBy('id','ASC');
        $this->extract->tuneSelection('advantages')->sortBy('id','ASC');
        $this->extract->tuneSelection('recommend')->sortBy('id','ASC');
    }

    public function getIndex(){
        $all = $this->extract->getBlock('static_all_site');
        $offer = $this->extract->getBlock('offer');
        $quick = $this->extract->getBlock('quick_start');
        $client = $this->extract->getBlock('clients_block');
        $inclusive = $this->extract->getBlock('all_inclusive');
        $cost = $this->extract->getBlock('shops');
        $rec = $this->extract->getBlock('recommendations');

        return view('front.index.index',[
            'all' => $all,
            'offer' => $offer,
            'quick' => $quick,
            'client' => $client,
            'inclusive' => $inclusive,
            'cost'      => $cost,
            'rec'       => $rec
        ]);
    }
}
