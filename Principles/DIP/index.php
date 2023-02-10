<?php

namespace SOLID\DIP;

class index
{
    private IMessage $mail;

    public function __construct(IMessage $service)
    {
        $this->mail = $service;
    }

    public function sendMail()
    {
        return  $this->mail->send();
    }
}
