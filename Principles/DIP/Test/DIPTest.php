<?php

namespace SOLID\DIP\Test;

use PHPUnit\Framework\TestCase;
use SOLID\DIP\index;
use SOLID\DIP\Services\Gmail;
use SOLID\DIP\Services\Hotmail;
use SOLID\DIP\Services\Yahoo;

class DIPTest extends TestCase
{
    public function testSendUsingDifferentServicesWithoutChange()
    {
        /**
         * Hotmail
         */
        $hotmail = new Hotmail();
        $hotmailReply = (new index($hotmail))->sendMail();

        $this->assertSame('Send From Hotmail', $hotmailReply);

        /**
         * Gmail
         */
        $gmail = new Gmail();
        $gmailReply = (new index($gmail))->sendMail();

        $this->assertSame('Send From Gmail', $gmailReply);

        /**
         * Yahoo
         */
        $yahoo = new Yahoo();
        $yahooReply = (new index($yahoo))->sendMail();

        $this->assertSame('Send From Yahoo', $yahooReply);
    }
}
