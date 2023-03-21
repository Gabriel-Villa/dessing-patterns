<?php

namespace App\Access;

use Illuminate\Support\Facades\Log;

class SendSmsDecorator extends Decorator
{

    public function operation()
    {
        parent::operation();
        Log::error("Login to send sms ");
    }

}
