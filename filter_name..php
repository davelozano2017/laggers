<?php 
include 'cn.php';
<select class="form-control specialization" id="search_name" style="width:100%">
<option value="" selected></option>
<?php $query = $db->query("SELECT * FROM specialization");
foreach ($query as $row) : ?>
    <option value="<?php echo $row['specialization']?>"><?php echo $row['specialization']?></option>
<?php endforeach;?>
</select>