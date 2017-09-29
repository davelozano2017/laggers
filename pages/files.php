<?php
ob_start();
include '../cn.php';
$reference_code = $_GET['reference_code'];
$query = $db->query("SELECT * FROM doctor_upload WHERE reference_code = '$reference_code'");
while($row = $query->fetch_assoc()){
   $file = urldecode($row['filename']); // Decode URL-encoded string
   $filepath = "../uploads/" . $file;
   // Process download
       header('Content-Description: File Transfer');
       header('Content-Type: application/octet-stream');
       header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
       header('Expires: 0');
       header('Cache-Control: must-revalidate');
       header('Pragma: public');
       header('Content-Length: ' . filesize($filepath));
       flush(); // Flush system output buffer
       readfile($filepath);
       exit;
}



// $filepath='../uploads/'; // include the last slash because we will be adding the image name.
// $temp_downloadlist= implode(',',$list);
// $downloadListActual=explode(",",$temp_downloadlist); 

// $max=count($downloadListActual);
// echo $max;

// for ($i=0; $i<$max; $i++)
// {
//    $path =''; // clear out the path from the previous cycle.
//    $path = $filepath . $downloadListActual[$i];

// // check that it exists and is readable
//   if (file_exists($path) && is_readable($path)) 
//   {
//     // get the file's size and send the appropriate headers
//     $size = filesize($path);
//     header('Content-Type: application/octet-stream');
//     header('Content-Length: '. $size);  
//     header('Content-Disposition: attachment; filename=' . $downloadListActual[$i]);
//     header('Content-Transfer-Encoding: binary');
//     // open the file in read-only mode
//     // suppress error messages if the file can't be opened
//     $file = @ fopen($path, 'r');
//     if ($file) 
//     { fpassthru($file); 
//       exit;
//     }
//   }
// }