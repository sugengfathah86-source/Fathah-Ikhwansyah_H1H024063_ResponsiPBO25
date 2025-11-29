<?php
abstract class Pokemon {
protected string $name;
protected array $types; // e.g. ['Poison','Flying']
protected int $level;
protected int $hp;


public function __construct(string $name, array $types, int $level, int $hp) {
$this->name = $name;
$this->types = $types;
$this->level = $level;
$this->hp = $hp;
}


// Encapsulation: akses lewat getter/setter
public function getName(): string { return $this->name; }
public function getTypes(): array { return $this->types; }
public function getLevel(): int { return $this->level; }
public function getHp(): int { return $this->hp; }


public function setLevel(int $level): void { $this->level = $level; }
public function setHp(int $hp): void { $this->hp = $hp; }


// Abstraction: setiap Pokemon wajib memiliki specialMove
abstract public function specialMove(): string;


// Polymorphism: train behavior may differ by subclass
public function train(string $type, int $intensity): array {
// Default training effect: small boost
$levelGain = (int) floor($intensity / 20);
$hpGain = (int) floor($intensity / 5);
$this->level += $levelGain;
$this->hp += $hpGain;
return ['levelGain'=>$levelGain,'hpGain'=>$hpGain];
}
}