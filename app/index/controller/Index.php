<?php
namespace app\index\controller;
use app\common\controller\Index as indexCommon;

class Index
{
    public function index()
    {
        return " this is index index index";
    }
    
    public function common(){
        $common = new indexCommon();
        return $common->index();
    }
}
