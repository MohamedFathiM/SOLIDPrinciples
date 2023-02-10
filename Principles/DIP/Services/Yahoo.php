<?php

namespace SOLID\DIP\Services;

use SOLID\DIP\IMessage;

class Yahoo implements IMessage
{
    public function send(): string
    {
        return "Send From Yahoo";
    }
}
