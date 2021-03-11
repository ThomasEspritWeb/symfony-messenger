<?php


namespace App\Message;


class LogMessage
{
    private $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage(){
        return $this->message;
    }

}