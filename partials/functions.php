<?php

    function random_psw($length)
    {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!"£$%&/()=?^*-"';
        $password = array();
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $size - 1);
            $password[] = $chars[$n];
        }
        return implode($password); 
    }
    
?>