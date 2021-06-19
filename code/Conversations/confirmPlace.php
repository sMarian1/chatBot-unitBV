<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class confirmPlace extends Conversation
{

    public function run()
    {
        $this->say('În cazul în care ai fost admis pe LOCURI FINANȚATE DE LA BUGETUL DE STAT trebuie să confirmi locul prin depunerea actelor de studii în original conform informațiilor prevăzute în contractul de înscriere.');
        $this->say('În cazul în care ai fost admis pe LOCURI CU TAXĂ trebuie să confirmi locul ocupat prin achitarea primei tranșe a taxei de școlarizare. Aceasta poate fi plătită online (cu cardul), din platforma de admitere, variantă pe care ți-o recomandăm. Dacă nu dispui de card, poți face plata cu ordin de plată sau mandat poștal în contul de Trezorerie, caz în care trebuie să încarci OBLIGATORIU pe platforma de admitere dovada de plată, în perioada de confirmare, conform datelor prevăzute în contractul de înscriere.');
        $this->say('Informații detaliate despre modalitățile de plată și condițiile care trebuie respectate se regăsesc la secțiunea TAXE de la adresa https://admitere.unitbv.ro/licenta.html');
    }
}
