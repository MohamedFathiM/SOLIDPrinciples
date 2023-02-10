<?php

namespace SOLID\DIP\Services;

use SOLID\DIP\IMessage;

class Gmail implements IMessage
{
    public function send(): string
    {
        return "Send From Gmail";
    }
}
