<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class othersApply extends Conversation
{

  
    public function run()
    {
        $this->say("În sesiunea de admitere 2020, înscrierile sunt exclusiv online (candidații admiși vor prezenta documentele în original conform contractului privind procedura de înscriere și vor încărca în aplicație contractul de școlarizare semnat și scanat, doar dacă sunt declarați admiși pe locuri bugetate).");
    }
}
