<?php


function checkLoginAndPassword($login,$password){
    $users = ['artem'=>'123','alina'=>'456'];
   return isset($users[$login]) && $password == $users[$login];
}

assert(true == checkLoginAndPassword('artem','123'));
assert(false == checkLoginAndPassword('artem123','123'));
assert(false == checkLoginAndPassword('artem','123456'));