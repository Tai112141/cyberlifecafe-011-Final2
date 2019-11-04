<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Shop Registeration</title>

</head>
<body>

<div id="container">
	<h1 align="center">ลงทะเบียนร้านค้า</h1>

	<div id="body" align="center">
	<form action="./reg_shop" method="post">
	<table style="width:50%" border="0">
	<tr>
		<th colspan="2"><img src="<?php echo base_url(); ?>/img/cyberlifecafelogo.jpg" width="200" height="200"></th>
		<th></th>
	</tr>
	<tr>
		<td>ชื่อร้าน </td>
		<td>
			<input type="text" name="sh_name_th" placeholder="ชื่อร้านค้าภาษาไทย">
		</td>
	</tr>
	<tr>
		<td>ชื่อร้าน (ภาษาอังกฤษ)</td>
		<td>
			<input type="text" name="sh_name_en" placeholder="ชื่อร้านค้าภาษาอังกฤษ">
		</td>
	</tr>
	<tr>
		<td>ที่อยู่</td>
		<td>
		<textarea name="sh_addr"  rows="4" cols="50"></textarea>		
		</td>
	</tr>
	<tr>
		<td>จังหวัด</td>
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
		<td>ขนาดร้าน</td>
		<td>
		<select name="sh_size">
			<option value="S">เล็ก</option>
			<option value="M">กลาง</option>
			<option value="L">ใหญ่</option>
			<option value="XL">ใหญ่มาก</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>จำนวนที่นั่ง </td>
		<td>
			<input type="number" size="5" name="sh_chairs">
		</td>
	</tr>	
	<tr>
		<td>จำนวนที่โต๊ะ </td>
		<td>
			<input type="number" size="5" name="sh_tables">
		</td>
	</tr>	
	<tr>
		<td> 
			
		</td>
		<td>
		  <input type="submit" value="ลงทะเบียนร้าน"><input type="reset" name="เคลียร์ข้อมูล">
		</td>
	</tr>	

	</table>
	</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>