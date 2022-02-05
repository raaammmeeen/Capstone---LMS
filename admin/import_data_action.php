<?php
$myfile = fopen("https://admin--lms.herokuapp.com/uploaded_files/eee70111117def59f050718efa05c845.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  //echo fgets($myfile) . "<br>";
  $line = explode(",", fgets($myfile));
  echo $line[0]."<br>";
  echo $line[1]."<br>";
  echo $line[2]."<br>";
  echo $line[3]."<br>";
  echo $line[4]."<br>";
  echo $line[5]."<br>";
  echo $line[6]."<br>";
  echo $line[7]."<br>";

}
fclose($myfile);
?>

</body>
</html>