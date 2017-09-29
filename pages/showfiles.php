<?php
session_start();
include '../cn.php';
?>
<div class="row">
    <div class="col-sm-12">
        <div class="row">
           
            <?php
            $email = $_SESSION['session_email'];
            $id = $_SESSION['patient_id'];
            $q = $db->query("SELECT * FROM appointment WHERE id = $id");
            $row = $q->fetch_object();
            $patient_email = $row->patient_email;
            $reference_code = $row->reference_code;
            $query = $db->query("SELECT * FROM doctor_upload WHERE email = '$email' AND reference_code = '$reference_code'");
            foreach($query as $row) : ?>
                <?php $file = $row['filename'];?>
                <?php if(empty($file)) {

                } else {?>
                <div class="col-md-4">
                    <div class="well">
                    <h4 class="text-info"><a href="download.php?file=<?php echo urlencode($row['filename'])?>">Download Now</a></h4>
                    </div>
                </div>
            <?php }endforeach; ?>
  
     
        </div><!--/row-->    
    </div><!--/col-12-->
</div><!--/row-->
