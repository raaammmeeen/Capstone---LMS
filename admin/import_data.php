
<?php
session_start();
include_once('dbcon.php'); 

$message = ''; 
$newFileName;
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload')
{
  if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK)
  {
    // get details of the uploaded file
    $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
    $fileName = $_FILES['uploadedFile']['name'];
    $fileSize = $_FILES['uploadedFile']['size'];
    $fileType = $_FILES['uploadedFile']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // sanitize file-name
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

    // check if file has one of the following extensions
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');

    if (in_array($fileExtension, $allowedfileExtensions))
    {
      // directory in which the uploaded file will be moved
      $uploadFileDir = './uploads/';
      $dest_path = $uploadFileDir . $newFileName;

      if(move_uploaded_file($fileTmpPath, $dest_path)) 
      {
        $message ='File is successfully uploaded.';
        
      }
      else 
      {
        $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
      }

      echo "asdasdasda";
    }
    else
    {
      $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
    }
  }
  else
  {
    $message = 'There is some error in the file upload. Please check the following error.<br>';
    $message .= 'Error:' . $_FILES['uploadedFile']['error'];
  }
}
$_SESSION['message'] = $message;


$myfile = fopen("https://capstone-lms.herokuapp.com/admin/uploads/".$newFileName, "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  //echo fgets($myfile) . "<br>";
  $line = explode(",", fgets($myfile));
  echo $line[0]."<br>";
  echo $line[1]."<br>";
  echo $line[2]."<br>";

  insert_data($line,$conn);

}
fclose($myfile);


function insert_data($arr, $conn){
  $first_name = $arr[0];
  $last_name = $arr[1];
  $dept_id = $arr[2];

  $sql = "insert into teacher (firstname,lastname,location,department_id) VALUES('$first_name','$last_name','uploads/NO-IMAGE-AVAILABLE.jpg','$dept_id');";
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
   


header("Location: teachers.php");
?>
