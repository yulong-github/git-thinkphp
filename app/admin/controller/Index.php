<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\admin\controller;

class Index
{
    public function index() {
        dump(config());
    }
    
    public function dome(){
        $conf1 = ['username'=>'xiaoming'];
        $conf2 = ['username'=>'huangsan'];
        var_dump( array_merge($conf1,$conf2));
    }
}
