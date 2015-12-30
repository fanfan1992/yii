<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TblUser extends CActiveRecord {

    public function tableName() {
        return "tbl_user";
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public static  function getUser(){
        $criteria = new CDbCriteria;
        $criteria->select = "username";
        $res =self::model()->findAll($criteria);
        foreach($res as $val){
            $result[] = $val;
          //  $result[]  = "<br/>";
        }
        return $result;
    }

}
