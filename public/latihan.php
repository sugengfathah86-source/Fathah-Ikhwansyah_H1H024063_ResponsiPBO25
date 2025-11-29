<?php
require_once __DIR__ . '/../src/Golbat.php';
require_once __DIR__ . '/../src/TrainingLog.php';
require_once __DIR__ . '/../src/Training.php';


$logPath = __DIR__ . '/../data/log.json';
$log = new TrainingLog($logPath);
$golbat = new Golbat();
$training = new Training($golbat, $log);


$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$type = $_POST['type'] ?? 'general';
$intensity = (int) ($_POST['intensity'] ?? 10);
$result = $training->doTraining($type, $intensity);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan - PokéCare</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<h1>Latihan Golbat</h1>
<form method="post">
<label>Jenis Latihan:</label>
<select name="type">
<option value="attack">Attack</option>
<option value="defense">Defense</option>
<option value="speed">Speed</option>
</select>


<label>Intensitas (angka):</label>
<input type="number" name="intensity" value="30" min="1" max="1000">


<button type="submit">Latih</button>
</form>


<?php if ($result): ?>
<div class="result">
<h3>Hasil Latihan</h3>
<p>Jenis: <?php echo htmlspecialchars($result['type']); ?></p>
<p>Intensitas: <?php echo htmlspecialchars($result['intensity']); ?></p>
<p>Level sebelum: <?php echo $result['before']['level']; ?> &rarr; setelah: <?php echo $result['after']['level']; ?></p>
<p>HP sebelum: <?php echo $result['before']['hp']; ?> &rarr; setelah: <?php echo $result['after']['hp']; ?></p>
<p>Jurus Spesial: <?php echo htmlspecialchars($result['special']); ?></p>
</div>
<?php endif; ?>


<div class="nav">
<a href="index.php">Kembali ke Beranda</a>
<a href="riwayat.php">Riwayat Latihan</a>
</div>
</div>
</body>
</html>