<?php
require_once __DIR__ . '/../src/TrainingLog.php';
$logPath = __DIR__ . '/../data/log.json';
$log = new TrainingLog($logPath);
$entries = $log->getAll();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Riwayat - PokéCare</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<h1>Riwayat Latihan</h1>
<?php if (empty($entries)): ?>
<p>Belum ada riwayat latihan.</p>
<?php else: ?>
<table>
<thead>
<tr>
<th>Waktu</th>
<th>Jenis</th>
<th>Intensitas</th>
<th>Level sebelum</th>
<th>Level sesudah</th>
<th>HP sebelum</th>
<th>HP sesudah</th>
</tr>
</thead>
<tbody>
<?php foreach ($entries as $e): ?>
<tr>
<td><?php echo $e['time']; ?></td>