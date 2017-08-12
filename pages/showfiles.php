
<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <?php
            session_start();
            include '../cn.php';
            $email = $_SESSION['session_email'];

            $query = $db->query("SELECT * FROM doctor_upload WHERE email = '$email'");
            foreach($query as $row) : ?>
                <div class="col-md-4">
                    <div class="well">
                    <h4 class="text-info"><a href="download.php?file=<?php echo urlencode($row['filename'])?>">Download Now</a></h4>
                    </div>
                </div>
            <?php endforeach; ?>
  
     
        </div><!--/row-->    
    </div><!--/col-12-->
</div><!--/row-->
