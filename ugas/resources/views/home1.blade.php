@extends('layouts.master')
@extends('layouts.app')
@section('home1')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<center><h1><font color="black">Wellcome To Mobile Legend</font></h1></center>
<body background="gambar/9.jpg">
<center>

<?php
$image=glob("gambar/mo.jpg");
for($i=0;$i<count($image);$i++)
{
	$single_image = $image[$i];
?>
	<img src="<?php echo $single_image;?>" width="360" heigth="260"/?>
<?php
}
	?>
	</center>


</body>
</html>
@endsection