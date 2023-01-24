<?php


class Plan
{

    private $_token;
    private $_fallNotes;
    private $_winterNotes;
    private $_springNotes;
    private $_summerNotes;
    private $_date;


    /**
     * @param $_token
     * @param $_fallNotes
     * @param $_winterNotes
     * @param $_springNotes
     * @param $_summerNotes
     */
    public function __construct($_token=" ", $_fallNotes=" ", $_winterNotes=" ", $_springNotes = " ", $_summerNotes=" ",$_date=" ")
    {
        $this->_token = $_token;
        $this->_fallNotes = $_fallNotes;
        $this->_winterNotes = $_winterNotes;
        $this->_springNotes = $_springNotes;
        $this->_summerNotes = $_summerNotes;
        $this->_date = $_date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->_date = $date;
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