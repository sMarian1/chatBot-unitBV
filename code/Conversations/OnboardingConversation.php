<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class OnboardingConversation extends Conversation
{

    protected $firstname;

    public function askFirstname()
    {   
        $this->ask('În sesiunea de admitere 2020, înscrierile sunt exclusiv online (candidații admiși vor prezenta documentele în original conform contractului privind procedura de înscriere și vor încărca în aplicație contractul de școlarizare semnat și scanat, doar dacă sunt declarați admiși pe locuri bugetate).', function($answer) {
            $firstName = $answer->getText();
            $this->say('Cu placere!');
        });
    }


    public function run()
    {
        $this->askFirstname();
    }
}
