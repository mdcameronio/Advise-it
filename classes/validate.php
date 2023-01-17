<?php
include('database/dataLayer.php');

class validate
{

    /**
     * this generates a unique token using letters and numbers as a 6 char string
     * then checks the data base if it allready exist if it doesent it will return the string
     * @return string a 6 char unique string
     */
    static function genToken()
    {
        $tvarify = new data();

            while (true){
                $randToken = "";
                $letters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
                    for ($i = 0; $i < 6; $i++) {
                        $pickarray = rand(0, 1);
                        if ($pickarray == 0) {
                            $randLetter = rand(0, 25);
                            $randToken .= $letters[$randLetter];
                        } else {
                            $randToken .= rand(0, 9);
                        }
                    }
                $chex = $tvarify->checkToken($randToken);
                if(sizeof($chex)==0)
                {
                    break;
                }
            }
        return $randToken;
    }

}