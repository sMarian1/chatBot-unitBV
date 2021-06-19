<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class gradesLastYear extends Conversation
{


    public function run()
    {
        $this->say('Pentru a vedea mediile cu care s-a intrat anul trecut accesează pagina Licență pentru mediile de admitere la licență - sesiunea iulie 2019  sau Masterat pentru mediile de admitere la masterat - sesiunea iulie 2019. ');
    }
}
