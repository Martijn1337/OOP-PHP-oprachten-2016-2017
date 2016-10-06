<?php

class Huis {
    public $verdiepingen;

    public function setVerdiepingen ($amount) {
        $this->verdiepingen = $amount;
    }

    public function getVerdiepingen() {
        return $this->verdiepingen;
    }
}

$huis = new Huis();
$huis->setVerdiepingen('4');

echo $huis->getVerdiepingen();



?>