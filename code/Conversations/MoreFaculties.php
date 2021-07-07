<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class MoreFaculties extends Conversation
{

    public function run()
    {
        $this->say('Da. Există posibilitatea să te înscrii la mai multe facultăți completând aplicația de înscriere online pentru facultățile vizate, urmând pașii obligatorii și încărcând documentele scanate solicitate. Este important să verifici dacă la facultățile vizate sunt prevăzute probe eliminatorii și să urmezi pașii pentru a le susține, dacă este cazul.');
    }
}