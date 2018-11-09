<?php

    function extractTabByType($tab,$type){
        $tab1=array();
        foreach($tab as $n){
            if(gettype($n)=="$type") {
                array_push($tab1, $n);
            }
        }
    return $tab1;
    }




    print_r(extractTabByType([1,2.3,4,5.7],"integer"));

