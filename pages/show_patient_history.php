<?php 
session_start();
$email = $_SESSION['session_email'];
include '../cn.php';
?>
 <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>Patient Name</th>
        <th>Patient Email</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    
    $query = $db->query("SELECT * FROM appointment WHERE email = '$email' AND status != 0");
    if($query->num_rows == 0) {
        echo '<tr><td colspan=4 style="text-align:center">No record found.</td></tr>';
    } 
    foreach($query as $row) :
    $id = $row['id'];
    $myDate = new DateTime($row['date']);
    $date = $myDate->format('D, M d, Y');
    $patient_name = $row['patient_name'];
    $patient_email = $row['patient_email'];
    $appointment = $date. ' '.date('g:i A', strtotime($row['chosentime']));
    $status = $row['status'] == 1 ? '<label class="label label-primary">Approved</label>' : '<label class="label label-danger">Declined</label>';

    $button = $row['status'] == 1 ? '<button id="sendpayment'.$id.'" onclick="sendpayment('.$id.')" class="btn btn-primary">Send Payment</button>' : '<button id="notify'.$id.'" onclick="notify('.$id.')" class="btn btn-danger">Notify Patient</button>';
    
    
?>

        <tr>
            <td><?php echo $patient_name . count($query)?></td>
            <td><?php echo $patient_email?></td>
            <td><?php echo $status?></td>
            <td><?php echo $button?></td>
        </tr>
    


    <?php  endforeach;  ?>
    </tbody>
</table>

