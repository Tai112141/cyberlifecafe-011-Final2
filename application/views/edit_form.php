

<?php 
         
         echo form_open('manage_menu/save_edit_customer');
         
         echo form_hidden('menu_id',$result[0]->menu_id); 
             
         echo form_label('ชื่อเมนู'); 
         echo form_input(array('class'=>'form-control','name'=>'menu_name','value'=>$result[0]->menu_name)); 
         echo "<br/>"; 
         
         echo form_label('ประเภทเมนู'); 
         echo form_input(array('class'=>'form-control','name'=>'mcategory_id','value'=>$result[0]->mcategory_id)); 
         echo "<br/>"; 
         
         echo form_label('เลือกร้านค้า'); 
         echo form_input(array('class'=>'form-control','name'=>'mshop_id','value'=>$result[0]->mshop_id)); 
         echo "<br/>"; 

         echo form_label('ราคา'); 
         echo form_input(array('class'=>'form-control','name'=>'price','value'=>$result[0]->price)); 
         echo "<br/>"; 

         echo form_submit(array('menu_id'=>'submit','value'=>'Save Edit','class'=>'btn btn-warning')); 
         echo anchor(base_url().'index.php/manage_menu', 'Back',array('class'=>'btn btn-default'));
         echo form_close(); 
      ?>