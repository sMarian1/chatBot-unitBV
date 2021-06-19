<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class firstPay extends Conversation
{

    public function run()
    {   
        $this->say('În cazul în care ai fost admis pe locuri cu taxă trebuie să  achiți prima tranșă a taxei de școlarizare conform datelor prevăzute în contractul de înscriere, în vederea confirmării locului.');
    
        $this->say('Candidații care plătesc prin OP (ordin de plată) trebuie să încarce până la data stabilită (conform contractului de inscriere) OP-ul semnat, pe care se completează olograf numele și prenumele candidatului, numărul legitimației de concurs și numele facultății). În cazul nerespectării acestei condiții, CANDIDATUL va fi declarat RESPINS.');
    }
}
