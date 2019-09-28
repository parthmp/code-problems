<?php
/*
/ Runtime: 28 ms, faster than 90.32% of PHP online submissions for Median of Two Sorted Arrays.
/ Memory Usage: 15.3 MB, less than 50.00% of PHP online submissions for Median of Two Sorted Arrays.
*/
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        
        $merged = array_merge($nums1, $nums2);
        sort($merged);
        
        $middle_index = ceil(((count($merged)-1)/2));
        
        if(count($merged)%2 == 0){
           return  (float)(($merged[$middle_index]+$merged[$middle_index-1])/2);
        }else{
            return (float)$merged[$middle_index];
        }
        
    }
}