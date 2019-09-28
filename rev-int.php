<?php
    class Solution {

        /**
         * @param Integer $x
         * @return Integer
         */
        function reverse($x) {
            
            $nve = 0;
            if($x < 0){
                $nve = 1;
            }
            
            $ray = strrev($x);
            $res = (int)$ray;
            if($nve == 1){
                $res -= ($res*2);
            }
            
            /*
            / PHP_INT_MAX and PHP_INT_MIN can be used on 32 bit systems.
            */
            if($res > 2147483647 || $res < -2147483648){
                return 0;
            }
            
            
            
            return $res;
            
        }
    }