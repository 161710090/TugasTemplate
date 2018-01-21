@extends('layouts.master6')
@extends('layouts.app')
@section('free')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Top Global Ranked :<span class="text-muted">Jes No Limit</span></h2>
          <p class="lead">Jes No Limit Merukapan Player Dari Indonesia Yang Menjadi TOP Global RANKED Mode Jes Merupakan Salah Satu Anggota squad Evos Yang Sangat Kuat jess Pun Sering Menjuarai Beberapa Kontes Mobile Legend Di Indonesia Dan Antar Negara</p>
        </div>
        <div class="col-md-5">
          <?php
$image=glob("gambar/j.jpg");
for($i=0;$i<count($image);$i++)	
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">TOP GLOBAL KAGURA : <span class="text-muted">RRQ-LEMON</span></h2>
          <p class="lead">RRQ LEMON Atawa Ikshan Ramdhan Adalah Player Kagura Dari Indonesia Yang Menjadi TOP Global Kagura Karena Kelincahan Dan Kehebatan Nya Dalam Menggunakan Kagura  </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
           <?php
$gg=glob("gambar/r.jpg");
for($i=0;$i<count($gg);$i++)	
{
	$double = $gg[$i];
?>
	<img src="<?php echo $double;?>" width="360" heigth="260"/?>
	<?php
}
	?>        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">TOP GLOBAL MOSKOV :<span class="text-muted">Warpath</span></h2>
          <p class="lead">Warpath Salah Satu Player Maksman Paling Menakutkan Karena Kelincahan Dan Filling Nya Warpath Menjadi Top Global Moskov Dia Sangat Lincah Saat Menggunakanya Dan Saat Menggunakan Ultimate Skill Nya Ia selalu Tepat sasaran</p>
        </div>
        <div class="col-md-5">
            <?php
$ww=glob("gambar/W.jpg");
for($i=0;$i<count($ww);$i++)	
{
	$ampun = $ww[$i];
?>
	<img src="<?php echo $ampun;?>" width="360" heigth="260"/?>
	<?php
}
	?>
        </div>
      </div>

      <hr class="featurette-divider">

</body>
</html>
@endsection