<?php
include(db_connect.php); ?>
<?php
//variable declaration
 $o_name="";
 $f_name="";
 $s_name="";
 $email="";
 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $o_name = $_POST['o_name'];
    $f_name = $_POST['f_name'];
    $s_name = $_POST['s_name'];
    $email = $_POST['email'];
    if (empty($name)) {
        echo "Name is empty";
    } else if(empty($f_name)) {
        echo "Name is empty"

    }
    else if(empty($s_name)) {
        echo "Name is empty"
}
else if(empty($o_name)) {
        echo "Name is empty"
         }


?>

