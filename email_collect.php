<?php
  if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $res = write_to_the_file($email, $name);
    print $res;
    print "done";
  }




function write_to_the_file($email, $name){
    $filename = "interest.txt";
    if(is_writable($filename)) {
      if (!$handle = fopen($filename, 'a')) {
           echo "Cannot open file ($filename)";
           exit;
      }
      if (fwrite($handle, "$name is intersted - $email\n") === FALSE) {
          echo "Cannot write to file ($filename)";
          exit;
      }
      fclose($handle);
    }
    return "Write Success";
}
?>
