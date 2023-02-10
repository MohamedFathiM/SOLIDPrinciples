<?php

namespace SOLID\DIP\Services;

use SOLID\DIP\IMessage;

class Hotmail implements IMessage
{
    public function send(): string
    {
        return "Send From Hotmail";
    }
}
