<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shop</title>

</head>
<body>

<div id="container">
	<h1 align="center">เลือกร้านค้า</h1>

	<div id="body" align="center">
	<form action="./display_shop" method="post">
	<table style="width:50%" border="0">
	<tr>
		<th colspan="2"><img src="<?php echo base_url(); ?>/img/cyberlifecafelogo.jpg" width="200" height="200"></th>
		<th></th>
	</tr>

	<tr>
		<td>เลือกจังหวัด</td>
		<td>
		<select name="sh_province">
			<option value="1">กาญจนบุรี</option>
			<option value="2">นครปฐม</option>
			<option value="3">ราชบุรี</option>
			<option value="4">เพชรบุรี</option>
		</select>
		</td>
	</tr>
	<tr>
		<td> 
			
		</td>
		<td>
		  <input type="submit" value="แสดงร้านค้า">
		</td>
	</tr>	
	</table>
	</form>

<?php
		foreach($shopselect->result_array() as $row){
			echo $row['shop_id'];
			echo br();
			echo $row['shop_name_th'];
			echo br();
			echo $row['shop_name_en'];
			echo br();
		}

?>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>