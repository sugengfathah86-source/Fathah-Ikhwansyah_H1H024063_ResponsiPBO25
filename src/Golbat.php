<?php
require_once __DIR__ . '/Pokemon.php';


class Golbat extends Pokemon {
private string $specialName;
private string $specialDesc;


public function __construct(int $level = 12, int $hp = 60) {
parent::__construct('Golbat', ['Poison','Flying'], $level, $hp);
$this->specialName = 'Toxic Wing';
$this->specialDesc = 'Golbat mengibaskan sayap beracun: memberi damage kecil dan efek racun (simulasi).';
}


public function specialMove(): string {
// contoh efek special yang juga memengaruhi statistik sementara
return "{$this->specialName}: {$this->specialDesc}";
}


// Override train untuk Golbat (polymorphism)
public function train(string $type, int $intensity): array {
$levelGain = 0;
$hpGain = 0;
switch (strtolower($type)) {
case 'attack':
$levelGain = (int) floor($intensity / 15);
$hpGain = (int) floor($intensity / 6);
break;
case 'defense':
$levelGain = (int) floor($intensity / 18);
$hpGain = (int) floor($intensity / 5);
break;
case 'speed':
$levelGain = (int) floor($intensity / 12);
$hpGain = (int) floor($intensity / 8);
break;
default:
$levelGain = (int) floor($intensity / 20);
$hpGain = (int) floor($intensity / 5);
break;
}
$this->level += $levelGain;
$this->hp += $hpGain;
return ['levelGain'=>$levelGain,'hpGain'=>$hpGain];
}
}