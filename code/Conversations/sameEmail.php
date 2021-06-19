<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class sameEmail extends Conversation
{


    public function run()
    {
        $this->say('Da. Înscrierea la mai multe facultăți se face din același cont deschis pe o adresă de email.  După completarea datelor personale și încarcarea documentelor se pot genera oricâte înscrieri din același cont.');
    }
}
