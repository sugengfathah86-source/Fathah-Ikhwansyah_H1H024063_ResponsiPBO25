<?php
require_once __DIR__ . '/Golbat.php';
require_once __DIR__ . '/TrainingLog.php';


class Training {
private Golbat $pokemon;
private TrainingLog $log;


public function __construct(Golbat $pokemon, TrainingLog $log) {
$this->pokemon = $pokemon;
$this->log = $log;
}


public function doTraining(string $type, int $intensity): array {
$before = ['level' => $this->pokemon->getLevel(), 'hp' => $this->pokemon->getHp()];
$effect = $this->pokemon->train($type, $intensity);
$special = $this->pokemon->specialMove();
$after = ['level' => $this->pokemon->getLevel(), 'hp' => $this->pokemon->getHp()];


$entry = [
'pokemon' => $this->pokemon->getName(),
'type' => $type,
'intensity' => $intensity,
'before' => $before,
'after' => $after,
'effect' => $effect,
'special' => $special,
'time' => date('Y-m-d H:i:s')
];


$this->log->addEntry($entry);
return $entry;
}
}