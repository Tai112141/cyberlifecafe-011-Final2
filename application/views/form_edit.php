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
	<h1 align="center">แก้ไขเมนู</h1>

	<div id="body" align="center">
	<?php 
	foreach($result->result() as $row){
	?>
	<form action="http://localhost/cyberlifecafe-011/index.php/Manage_menu/update" method="post">
	<table style="width:50%" border="0">
	
	<tr>
		<td>รหัสเมนู </td>
		<td>
			<input type="text" name="menu_id" placeholder="รหัสเมนู " value="<?php echo $row->menu_id ?>">
		</td>
	</tr>
	<tr>
		<td>ชื่อเมนู</td>
		<td>
			<input type="text" name="menu_name" placeholder="ชื่อเมนู"  value="<?php echo $row->menu_name ?>">
		</td>
	</tr>
	
	<tr>
		<td>ประเภทเมนู</td>
		<td>
		<select name="mcategory_id">
		<option value="<?php echo $row->mcategory_id ?>" selected><?php echo $row->mcategory_id ?></option>
			<option value="เครื่องดื่ม">เครื่องดื่ม</option>
			<option value="อาหาร">อาหาร</option>
			<option value="ของหวาน">ของหวาน</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>เลือกร้านค้า</td>
		<td>
		<select name="mshop_id" >
		<option value="<?php echo $row->mshop_id ?>" selected><?php echo $row->mshop_id ?></option>
			<option value="m&m">m&m</option>
			<option value="starbug">starbug</option>
			<option value="amazon">amazon</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>ราคา</td>
		<td>
			<input type="text" name="price" placeholder="ราคา" value="<?php echo $row->price ?>">
		</td>
	</tr>
	
	</table><br/>
	<center><input type="submit" value="เเก้ไข"></center>
	</form>
	<?php
}
?>
</div>
<br/><br/><br/><br/>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>