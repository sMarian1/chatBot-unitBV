<?php

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Drivers\DriverManager;
class sendImage extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {   
        $this->say('Hello', [
            'attachments' =>  new Image('../media/bot-logo.png')
         ]);

    }


    public function run()
    {
        $this->askFirstname();
    }
}
