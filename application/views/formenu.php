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
	<h1 align="center">เพิ่มเมนู</h1>

	<div id="body" align="center">
	<form action="./insert_menu" method="post">
	<table style="width:50%" border="0">
	
	<tr>
		<td>รหัสเมนู </td>
		<td>
			<input type="text" name="menu_id" placeholder="รหัสเมนู ">
		</td>
	</tr>
	<tr>
		<td>ชื่อเมนู</td>
		<td>
			<input type="text" name="menu_name" placeholder="ชื่อเมนู">
		</td>
	</tr>
	
	<tr>
		<td>ประเภทเมนู</td>
		<td>
		<select name="mcategory_id">
			<option value="1">เครื่องดื่ม</option>
			<option value="2">อาหาร</option>
			<option value="3">ของหวาน</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>เลือกร้านค้า</td>
		<td>
		<select name="mshop_id">
			<option value="m&m">m&m</option>
			<option value="starbug">starbug</option>
			<option value="amazon">amazon</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>ราคา</td>
		<td>
			<input type="text" name="price" placeholder="ราคา">
		</td>
	</tr>
	
	</table><br/>
	<center><input type="submit" value="เพิ่ม"><input type="reset" name="เคลียร์ข้อมูล"></center>
	</form>
</div>
<br/><br/><br/><br/>
<a href="http://localhost/cyberlifecafe-011/index.php/manage_menu/view" >แสดงรายการ</a>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>