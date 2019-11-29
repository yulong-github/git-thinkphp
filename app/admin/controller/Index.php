<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 namespace app\admin\controller;
 use app\common\controller\Index as adminCommon;//设置公共类别名：use路径 as 别名
 use app\common\controller\User;
 
 
 class Index extends User
 {
     public function index() {
         return "this is admin index index";
     }   
     public function common(){
         $common = new adminCommon();
         return $common->index();
     }
     
     public function dome() {
         return $this->getUserName('xiaoming');
     }
 }

