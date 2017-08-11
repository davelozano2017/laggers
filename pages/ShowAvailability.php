<?php 
session_start();
include '../cn.php';?>

 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Day</th>
        <th>From</th>
        <th>To</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php 
    $query = $db->query("SELECT * FROM availability WHERE email = '".$_SESSION['session_email']."'");
    foreach($query as $row) :?>
        <tbody>
        <tr>
            <td><?php echo $row['day']?> </td>
            <td><?php echo $row['time_from']?></td>
            <td><?php echo $row['time_to']?></td>
            <td><button class="btn btn-primary" onclick="DeleteAvailability('<?php echo$row['id']?>')">Delete</button></td>
        </tr>
        </tbody>
    <?php endforeach; ?>
      
</table>

