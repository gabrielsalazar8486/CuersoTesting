<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmail()
    {
        $email = 'i@admin.com';
        $result = Email::validate($email);

        $email2 = 'i@@admin.com';
        $result2 = Email::validate($email2);


        $this->assertTrue($result);
        $this->assertFalse($result2);
    }
}
