<?php

namespace App\Access;
use App\Contracts\IComponent;

class SlackNotification implements IComponent
{

    public function operation()
    {
        \Log::error("Login to send slack notifications");
    }

}
