<?php
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        
        $pass = [];

        $alphaLength = strlen($alphabet) - 1;
        
        for ($i = 0; $i < $_GET['password']; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }

        return implode($pass);
    }
?>