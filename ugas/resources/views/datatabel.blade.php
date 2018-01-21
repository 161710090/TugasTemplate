@extends('layouts.master3')
@extends('layouts.app')
@section('datatabel')
<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">

<body background="">

      <div class="page-header">
        <center><h1>Data Table</h1></center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-bordered">
            <thead>
<tr>
              <tr>
              <center>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat lahir</th>
                <th>Tanggal lahir</th>
                <th>Alamat</th>
                <th>cita-cita</th>
                <th>Hobi</th>
                <th>Photo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>346547</td>
                <td>Ali</td>
                <td>Bandung</td>
                <td>1999-31-01</td>
                <td>Bandung</td>
                <td>Polisi</td>
                <td>Futsal</td>
                <td><?php
$image=glob("gambar/ali.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>
	</td>
              </tr>
              <tr>
                <td>24345</td>
                <td>Ndut</td>
                <td>Bandung</td>
                <td>1999-07-18</td>
                <td>Bandung</td>
                <td>Abri</td>
                <td>Mancing</td>
                <td><?php
$image=glob("gambar/yun.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="100" heigth="100"/?>
<?php
}
	?>



  
	</center>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      </div>
      </div>
</div>
</div>
</body>
</html>
@endsection