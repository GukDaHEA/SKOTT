<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        function MobileCheck() {
            //mozilla/5.0 (windows nt 6.1; win64; x64) applewebkit/537.36 (khtml, like gecko) chrome/60.0.3112.113 safari/537.36
            $HTTP_USER_AGENT = strtolower($_SERVER['HTTP_USER_AGENT']);
            $os="Computer";
            $MobileArray  = array("lg","iphone","lgtelecom","skt","mobile","samsung","nokia","blackberry","android","android","sony","phone",
               "LG","IPHONE","LGTELECOM","SKT","MOBILE","SAMSUNG","NOKIA","BLACKBERRY","ANDROID","ANDROID","SONY","PHONE");
               
            for($i=0; $i<sizeof($MobileArray); $i++){ 
                   if (strpos($HTTP_USER_AGENT, $MobileArray[$i])) {
                        $os= "Mobile";
                    }
            } 
            return $os=="Mobile" ? TRUE :FALSE;   
        }
