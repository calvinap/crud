<?php

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

require 'function.php';
$mobil = query("SELECT * FROM mobil");

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>daftar mobil</title>
  <link rel="stylesheet" href="css/print.css">
</head>
<body>
  <h1>DAFTAR MOBIL</h1>
  <table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Gambar</th>
		<th>nama</th>
		<th>merek</th>
		<th>mesin</th>
		<th>harga</th>
	</tr>';

  $i = 1;
  foreach($mobil as $row){
    $html .='<tr> 
      <td>'.$i++.'</td>
      <td><img src="img/'. $row["gambar"] .'" width="300"></td>
      <td>'. $row["nama"] .'</td>
      <td>'. $row["merek"] .'</td>
      <td>'. $row["mesin"] .'</td>
      <td>'. $row["harga"] .'</td>
    </tr>';
  }
 

  $html.='</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-mobil.pdf','I');
?>
