<?php

class Plan
{

    private $_token;
    private $_fall;
    private $_fallNotes;
    private $_winter;
    private $_winterNotes;
    private $_spring;
    private $_springNotes;
    private $_summer;
    private $_summerNotes;


    public function __construct($token = " ",$fall =" ",$fallNotes=" ",$winter=" ",$winterNotes=" ",$spring=" ",$springNotes=" ",$summer=" ",$summerNotes=" " )
    {
        $this->_token = $token;
        $this->_fall = $fall;
        $this->_fallNotes = $fallNotes;
        $this->_winter = $winter;
        $this->_winterNotes = $winterNotes;
        $this->_spring = $spring;
        $this->_springNotes = $springNotes;
        $this->_summer = $summer;
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
     * @return string
     */
    public function getFall()
    {
        return $this->_fall;
    }

    /**
     * @param string $fall
     */
    public function setFall($fall)
    {
        $this->_fall = $fall;
    }

    /**
     * @return string
     */
    public function getFallNotes()
    {
        return $this->_fallNotes;
    }

    /**
     * @param string $fallNotes
     */
    public function setFallNotes($fallNotes)
    {
        $this->_fallNotes = $fallNotes;
    }

    /**
     * @return string
     */
    public function getWinter()
    {
        return $this->_winter;
    }

    /**
     * @param string $winter
     */
    public function setWinter($winter)
    {
        $this->_winter = $winter;
    }

    /**
     * @return string
     */
    public function getWinterNotes()
    {
        return $this->_winterNotes;
    }

    /**
     * @param string $winterNotes
     */
    public function setWinterNotes($winterNotes)
    {
        $this->_winterNotes = $winterNotes;
    }

    /**
     * @return string
     */
    public function getSpring()
    {
        return $this->_spring;
    }

    /**
     * @param string $spring
     */
    public function setSpring($spring)
    {
        $this->_spring = $spring;
    }

    /**
     * @return string
     */
    public function getSpringNotes()
    {
        return $this->_springNotes;
    }

    /**
     * @param string $springNotes
     */
    public function setSpringNotes($springNotes)
    {
        $this->_springNotes = $springNotes;
    }

    /**
     * @return string
     */
    public function getSummer()
    {
        return $this->_summer;
    }

    /**
     * @param string $summer
     */
    public function setSummer($summer)
    {
        $this->_summer = $summer;
    }

    /**
     * @return string
     */
    public function getSummerNotes()
    {
        return $this->_summerNotes;
    }

    /**
     * @param string $summerNotes
     */
    public function setSummerNotes($summerNotes)
    {
        $this->_summerNotes = $summerNotes;
    }







}