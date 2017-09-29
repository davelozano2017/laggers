<?php 
include 'cn.php';
if($_POST['action'] == 'search specialization') {
    $specialization = $_POST['specialization'];
    ?>
     <div class="col-md-6">
        <div class="form-group">
            <label for="specialization">Search by Name</label>
            <select class="form-control name" id="search_name" style="width:100%">
                <option value="" selected></option>
                <?php $query = $db->query("SELECT * FROM doctor WHERE SPECIALIZATION = '$specialization'");
                foreach ($query as $row) : ?>
                    <option value="<?php echo $row['FN']. ' '.$row['MN']. ' ' .$row['LN']?>"><?php echo $row['FN']. ' '.$row['MN']. ' ' .$row['LN']?></option>
                <?php endforeach;?>
            </select>
        </div>
    </div>
<script>
$(".name").select2({
        placeholder: "Select Doctor's Name",
        allowClear: true
    });
</script>
    <?php 
    
}

elseif($_POST['action'] == 'search') {
    $search_specialization = $_POST['search_specialization'];
    $search_name = $_POST['search_name'];
    $query = $db->query("SELECT * FROM availability INNER JOIN doctor 
    ON doctor.email = availability.email WHERE doctor.SPECIALIZATION = '$search_specialization' AND 
    CONCAT( doctor.FN, ' ', doctor.MN, ' ', doctor.LN, ' ', doctor.SN ) = '$search_name'");
    $check = $query->num_rows;
    if($check > 0) {
        foreach($query as $row) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        return false;
    }
}

elseif($_POST['action'] == 'show all') {
    ?>
    <select class="form-control name" id="search_name" style="width:100%">
        <option value="" selected></option>
        <?php $query = $db->query("SELECT * FROM doctor");
        foreach ($query as $row) : ?>
            <option value="<?php echo $row['FN']. ' '.$row['MN']. ' ' .$row['LN']?>"><?php echo $row['FN']. ' '.$row['MN']. ' ' .$row['LN']?></option>
        <?php endforeach;?>
    </select>
    <?php 
}

elseif($_POST['action'] == 'Downloads') {
    $reference_code = $_POST['reference_code'];
    $query = $db->query("SELECT * FROM doctor_upload WHERE reference_code = '$reference_code'");
    foreach($query as $row) {
        $list[] = $row['filename'];
    }
    echo json_encode(array('success'=>true,'files'=>implode(',',$list)));
     
}

elseif($_POST['action'] = 'download files'){
    echo json_encode(array('files'=>$_POST['files'])); 
}