<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class Has extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {   
        $this->say('its working');

    }


    public function run()
    {
        $this->askFirstname();
    }
}
