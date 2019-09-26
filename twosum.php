<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @param Integer $target
         * @return Integer[]
         */
        function twoSum($nums, $target) {
            
            $filteredRay = &$nums;
            
            for($z = 0 ; $z < count($nums) ; $z++){
                
                for($k = 0 ; $k < count($filteredRay) ; $k++){
                    if((($nums[$z]+$filteredRay[$k]) == $target) && ($z != $k)){
                        return [$z, $k];
                    }
                }
                
            }
            return [0, 0];
        }
    }
    