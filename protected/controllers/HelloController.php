<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HelloController extends Controller
{
    public function actionUser(){
        $res  = TblUser::getUser();
       var_dump($res);
    }
}