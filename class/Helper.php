<?php

class Helper {

    public static function getBrowser($user_agent) {
        
        $browsers = [
            'Opera' => '/Opera/',
            'Chrome' => '/Chrome/',
            'Firefox' => '/Firefox/',
            'Safari' => '/Safari/',
            'IE' => '/Trident/'
        ];


        foreach($browsers as $browser => $pattern) {

            if(preg_match($pattern, $user_agent)) {
                return $browser;
            }

        }


        return 'Unknown';

    }

}