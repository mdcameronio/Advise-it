<?php

class Plan
{

    private $_token;
    private $_fall1;
    private $_fall2;
    private $_fall3;
    private $_fall4;
    private $_fallNotes;
    private $_winter1;
    private $_winter2;
    private $_winter3;
    private $_winter4;
    private $_winterNotes;
    private $_spring1;
    private $_spring2;
    private $_spring3;
    private $_spring4;
    private $_springNotes;
    private $_summer1;
    private $_summer2;
    private $_summer3;
    private $_summer4;
    private $_summerNotes;


    public function __construct($token = " ",$fall1 =" ",$fall2 =" ",$fall3 =" ",$fall4 =" ",$fallNotes=" ",$winter1=" ",$winter2=" ",$winter3=" ",$winter4=" ",$winterNotes=" ",$spring1=" ",$spring2=" ",$spring3=" ",$spring4=" ",$springNotes=" ",$summer1=" ",$summer2=" ",$summer3=" ",$summer4=" ",$summerNotes=" " )
    {
        $this->_token = $token;
        $this->_fall1 = $fall1;
        $this->_fall2 = $fall2;
        $this->_fall3 = $fall3;
        $this->_fall4 = $fall4;
        $this->_fallNotes = $fallNotes;
        $this->_winter1 = $winter1;
        $this->_winter2 = $winter2;
        $this->_winter3 = $winter3;
        $this->_winter4 = $winter4;
        $this->_winterNotes = $winterNotes;
        $this->_spring1 = $spring1;
        $this->_spring2 = $spring2;
        $this->_spring3 = $spring3;
        $this->_spring4 = $spring4;
        $this->_springNotes = $springNotes;
        $this->_summer1 = $summer1;
        $this->_summer2 = $summer2;
        $this->_summer3 = $summer3;
        $this->_summer4 = $summer4;
        $this->_summerNotes = $summerNotes;

    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * @param string $token
     */
    public function setToken($token)
    {
        $this->_token = $token;
    }

    /**
     * @return mixed|string
     */
    public function getFall1()
    {
        return $this->_fall1;
    }

    /**
     * @param mixed|string $fall1
     */
    public function setFall1($fall1)
    {
        $this->_fall1 = $fall1;
    }

    /**
     * @return mixed|string
     */
    public function getFall2()
    {
        return $this->_fall2;
    }

    /**
     * @param mixed|string $fall2
     */
    public function setFall2($fall2)
    {
        $this->_fall2 = $fall2;
    }

    /**
     * @return mixed|string
     */
    public function getFall3()
    {
        return $this->_fall3;
    }

    /**
     * @param mixed|string $fall3
     */
    public function setFall3($fall3)
    {
        $this->_fall3 = $fall3;
    }

    /**
     * @return mixed|string
     */
    public function getFall4()
    {
        return $this->_fall4;
    }

    /**
     * @param mixed|string $fall4
     */
    public function setFall4($fall4)
    {
        $this->_fall4 = $fall4;
    }

    /**
     * @return mixed|string
     */
    public function getFallNotes()
    {
        return $this->_fallNotes;
    }

    /**
     * @param mixed|string $fallNotes
     */
    public function setFallNotes($fallNotes)
    {
        $this->_fallNotes = $fallNotes;
    }

    /**
     * @return mixed|string
     */
    public function getWinter1()
    {
        return $this->_winter1;
    }

    /**
     * @param mixed|string $winter1
     */
    public function setWinter1($winter1)
    {
        $this->_winter1 = $winter1;
    }

    /**
     * @return mixed|string
     */
    public function getWinter2()
    {
        return $this->_winter2;
    }

    /**
     * @param mixed|string $winter2
     */
    public function setWinter2($winter2)
    {
        $this->_winter2 = $winter2;
    }

    /**
     * @return mixed|string
     */
    public function getWinter3()
    {
        return $this->_winter3;
    }

    /**
     * @param mixed|string $winter3
     */
    public function setWinter3($winter3)
    {
        $this->_winter3 = $winter3;
    }

    /**
     * @return mixed|string
     */
    public function getWinter4()
    {
        return $this->_winter4;
    }

    /**
     * @param mixed|string $winter4
     */
    public function setWinter4($winter4)
    {
        $this->_winter4 = $winter4;
    }

    /**
     * @return mixed|string
     */
    public function getWinterNotes()
    {
        return $this->_winterNotes;
    }

    /**
     * @param mixed|string $winterNotes
     */
    public function setWinterNotes($winterNotes)
    {
        $this->_winterNotes = $winterNotes;
    }

    /**
     * @return mixed|string
     */
    public function getSpring1()
    {
        return $this->_spring1;
    }

    /**
     * @param mixed|string $spring1
     */
    public function setSpring1($spring1)
    {
        $this->_spring1 = $spring1;
    }

    /**
     * @return mixed|string
     */
    public function getSpring2()
    {
        return $this->_spring2;
    }

    /**
     * @param mixed|string $spring2
     */
    public function setSpring2($spring2)
    {
        $this->_spring2 = $spring2;
    }

    /**
     * @return mixed|string
     */
    public function getSpring3()
    {
        return $this->_spring3;
    }

    /**
     * @param mixed|string $spring3
     */
    public function setSpring3($spring3)
    {
        $this->_spring3 = $spring3;
    }

    /**
     * @return mixed|string
     */
    public function getSpring4()
    {
        return $this->_spring4;
    }

    /**
     * @param mixed|string $spring4
     */
    public function setSpring4($spring4)
    {
        $this->_spring4 = $spring4;
    }

    /**
     * @return mixed|string
     */
    public function getSpringNotes()
    {
        return $this->_springNotes;
    }

    /**
     * @param mixed|string $springNotes
     */
    public function setSpringNotes($springNotes)
    {
        $this->_springNotes = $springNotes;
    }

    /**
     * @return mixed|string
     */
    public function getSummer1()
    {
        return $this->_summer1;
    }

    /**
     * @param mixed|string $summer1
     */
    public function setSummer1($summer1)
    {
        $this->_summer1 = $summer1;
    }

    /**
     * @return mixed|string
     */
    public function getSummer2()
    {
        return $this->_summer2;
    }

    /**
     * @param mixed|string $summer2
     */
    public function setSummer2($summer2)
    {
        $this->_summer2 = $summer2;
    }

    /**
     * @return mixed|string
     */
    public function getSummer3()
    {
        return $this->_summer3;
    }

    /**
     * @param mixed|string $summer3
     */
    public function setSummer3($summer3)
    {
        $this->_summer3 = $summer3;
    }

    /**
     * @return mixed|string
     */
    public function getSummer4()
    {
        return $this->_summer4;
    }

    /**
     * @param mixed|string $summer4
     */
    public function setSummer4($summer4)
    {
        $this->_summer4 = $summer4;
    }

    /**
     * @return mixed|string
     */
    public function getSummerNotes()
    {
        return $this->_summerNotes;
    }

    /**
     * @param mixed|string $summerNotes
     */
    public function setSummerNotes($summerNotes)
    {
        $this->_summerNotes = $summerNotes;
    }









}