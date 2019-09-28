<?php

class Solution {
    
    public function getSmallestRay($rays){
        $key = 0;
        $tmp_counted = 0;
        for($z = 0 ; $z < count($rays) ; $z++){
            if($tmp_counted == 0){
                $tmp_counted = count($rays[$z]);
                
            }else if($tmp_counted > count($rays[$z])){
                
                $tmp_counted = count($rays[$z]);
                $key = $z;
                
            }
        }
        
        return $key;
    }
    
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        
        $res = [];
        
        
        
        $rays = array_map('str_split', $strs);
        
        $small_key = $this->getSmallestRay($rays);
        
        $looper = $rays[$small_key];
        
        unset($rays[$small_key]);
        
        $rays = array_values($rays);
        
        $breakpoint = 1;
        
        for($z = 0 ; $z < count($looper); $z++){
            $found = 0;
            
            for($k = 0 ; $k < count($rays) ; $k++){
                
                
                if(isset($rays[$k][$z]) && $breakpoint == 1){
                    if($rays[$k][$z] == $looper[$z]){
                         $found++;
                    }else{
                        $breakpoint = 0;
                    }
                }else{
                    $breakpoint = 0;
                }
               
                
            }
            
            if($found == (count($rays))){
                array_push($res, $looper[$z]);
            }
        }
        
        
        return implode("", $res);
        
    }
}