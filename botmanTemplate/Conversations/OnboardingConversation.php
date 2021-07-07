<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{

  
    public function run()
    {
        $this->say("Salut si bine ai venit!");
    }
}
