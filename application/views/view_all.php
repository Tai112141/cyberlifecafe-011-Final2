<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>


<table>
  <tr>
    <th>รหัส</th>
    <th>ชื่อเมนู</th>
    <th>ประเภทเมนู</th>
    <th>ร้านค้า</th>
    <th>ราคา</th>
    <th></th>
    <th></th>
  </tr>

  <?php 
    foreach($data->result() as $row){
   
    echo "<tr>";
     echo "<td>".$row->menu_id."</td>";
     echo "<td>".$row->menu_name."</td>";
     echo "<td>".$row->mcategory_id."</td>";
     echo "<td>".$row->price."</td>";
     echo "<td>".$row->mshop_id."</td>";
     echo "<td><a href='".base_url()."index.php/manage_menu/edit_form/".$row->menu_id."' class='btn btn-warning'>Edit</a></td>";
     echo "<td><a href='".base_url()."index.php/manage_menu/delete_menu/".$row->menu_id."' onclick='return confirm(\"Confirm Delete Item\")' class='btn btn-danger'>Delete</a></td>";
     echo "</tr>";
    }
    ?>
  <a href="http://localhost/cyberlifecafe-011/index.php/manage_menu/" >ย้อนกลับ</a>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
