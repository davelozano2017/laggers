<?php 
include 'cn.php';



if($_POST['action'] == 'search'): ?>
<?php $specialization = $_POST['specialization'];?>

<table style="width:100%" id="datatable-buttons" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Years of Experience</th>
        <th style="width:1%"></th>
    </tr>
    </thead>
    <?php $query = $db->query("SELECT * FROM doctor WHERE SPECIALIZATION = '$specialization'");
    $i = 0;
    foreach($query as $row):   $id = $row['id']; ?>
    
        <tr>
            <td style="width:1%"><?php echo ++$i?></td>
            <td><?php echo 'Dr. '.$row['FN']. ' ' . $row['MN'] . ' ' . $row['LN'] . ' ' .$row['SN']?></td>
            <td><?php echo $row['YEARS']?></td>
            <td style="width:1%"><a class="btn btn-primary" href='doctor_information.php?id=<?php echo $id?>'>More</a>  </td>
    <?php endforeach ?>
</table>
<?php endif; ?>

<script>

$(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();


        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
</script>