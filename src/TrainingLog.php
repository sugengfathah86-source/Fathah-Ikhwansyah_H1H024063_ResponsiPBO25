<?php
class TrainingLog {
private string $filePath;


public function __construct(string $filePath) {
$this->filePath = $filePath;
if (!file_exists($this->filePath)) {
file_put_contents($this->filePath, json_encode([]));
}
}


public function getAll(): array {
$raw = file_get_contents($this->filePath);
$data = json_decode($raw, true);
return is_array($data) ? $data : [];
}


public function addEntry(array $entry): void {
$data = $this->getAll();
array_unshift($data, $entry); // newest first
file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
}
}