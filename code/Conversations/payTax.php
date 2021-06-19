<?php

use BotMan\BotMan\Messages\Conversations\Conversation;

class payTax extends Conversation
{
    public function run()
    {
        $this->say('Taxa de înscriere se achită:<br>
        - online, prin intermediul aplicației de înscriere;<br>
        - prin ordin de plată sau transfer bancar sau mandat poștal, din orice bancă, în contul Universității Transilvania din Brașov, fiind obligatorie completarea următoarelor date de identificare:');
       $this->say('Beneficiar: Universitatea Transilvania din Brașov<br>
        Cod fiscal: 4317754<br>
        Cod IBAN: RO08TREZ13120F330500XXXX<br>
        Cod SWIFT: BIC/SWIFT TREZROBU (acest cod este obligatoriu în cazul achitării taxelor din străinătate)<br>
        Banca : TREZORERIA MUNICIPIULUI BRAŞOV');
        $this->say('În câmpul privind Detaliile transferului / plății este obligatoriu să menționați informațiile de mai jos:');
        $this->say('Tipul taxei: taxă admitere<br>
        Numele și prenumele candidatului pentru care se face plata (exact ca în fișa de înscriere)<br>
        Inițiala tatălui<br>
        Facultatea aleasă pentru înscriere<br>
        Forma de învățământ (IF, ID, FR)');
        $this->say('Recomandăm folosirea conturilor deschise la băncile românești.<br>

        <b>Atenție:</b>  Momentan Universitatea sau Trezoreria Brașov nu operează tranzacții cu cardul REVOLUT.');
    }
}
