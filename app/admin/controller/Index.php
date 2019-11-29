<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 namespace app\admin\controller;
 use app\common\controller\Index as adminCommon;//设置别名
 
 
 class Index
 {
     public function index() {
         return "this is admin index index";
     }   
     public function common(){
         $common = new adminCommon();
         return $common->index();
     }
 }

