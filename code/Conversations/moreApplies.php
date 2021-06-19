<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class moreApplies extends Conversation
{

    


    public function run()
    {
        $this->say('Depinde de facultate. La unele facultăți o înscriere se face pentru grupuri de opțiuni reprezentând programele de studii, iar la altele o înscriere se face pentru un singur program de studii.');
    }
}
