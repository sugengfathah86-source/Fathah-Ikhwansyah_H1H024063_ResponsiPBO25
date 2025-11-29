<?php
require_once __DIR__ . '/../src/Golbat.php';
$golbat = new Golbat();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PokéCare - Golbat</title>
<link rel="stylesheet" href="styles.css">
<style>
#loader {
position: fixed;
top: 0; left: 0;
width: 100%; height: 100%;
background: rgba(255,255,255,0.9);
display: flex;
justify-content: center;
align-items: center;
z-index: 9999;
animation: fadeOut 1s ease forwards;
animation-delay: 1.3s;
}
.spinner {
width: 60px;
height: 60px;
border: 6px solid #ddd;
border-top-color: #7b4397;
border-radius: 50%;
animation: spin 1s linear infinite;
}
@keyframes spin { to { transform: rotate(360deg); } }
@keyframes fadeOut { to { opacity: 0; visibility: hidden;} }
</style>
</head>
<body>
<div id="loader"><div class="spinner"></div></div>


<div class="container card">
<img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/42.png" class="poke-img" alt="Golbat">
<h1>PokéCare</h1>
<h2><?php echo $golbat->getName(); ?></h2>


<p><strong>Tipe:</strong> <?php echo implode(' / ', $golbat->getTypes()); ?></p>
<p><strong>Level awal:</strong> <?php echo $golbat->getLevel(); ?></p>
<p><strong>HP awal:</strong> <?php echo $golbat->getHp(); ?></p>
<p><strong>Jurus Spesial:</strong> <?php echo $golbat->specialMove(); ?></p>


<div class="nav">
<a href="latihan.php">Mulai Latihan</a>
<a href="riwayat.php">Riwayat Latihan</a>
</div>
</div>
</body>
</html>
<?php
require_once __DIR__ . '/../src/Golbat.php';
$golbat = new Golbat();
?>
<!doctype html>
<html>
<head>
</html>
