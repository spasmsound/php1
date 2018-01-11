<?php

class GuestBookRecord
{
    protected $message;
    protected $date;

    public function __construct($date, $message)
    {
        $this->message = $message;
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getMessage()
    {
        return $this->message;
    }
}