<?php
/**
 * 验证
 */

return [
//    'phone'=>[
//        'name' => '\"手机号\"',
//        'pattern' =>'/^1[34578]\d{9}$/',
//    ],
//    'email'=>[
//        'name'=>'邮箱地址',
//        'pattern' => '/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/',
//    ],
    'phone' =>'/^1[34578]\d{9}$/',             //手机正则
    'email' => '/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/',     //邮箱正则
    'code'=>'/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|Xx)$/',  //身份证正则
    'password'=>'/^[0-9A-Za-z]{6,20}$/',      //密码正则

];