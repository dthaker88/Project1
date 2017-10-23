<?php

/*
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);


class myManage {
    public static function autoload($class) {
      //you can put any file name or directory here
      include $class . '/upload1.php';
    }
}

spl_autoload_register(array('myManage', 'autoload'));




//instantiate the program object
$obj = new fileUpload();

class fileUpload
{

    public function test2 () {*/


    if(isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));


        $expensions = array( "csv", "xlsx");

        if (in_array($file_ext, $expensions) === false) {
            $errors[] = "Please choose a CSV, or Excel file.";
        }



        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "Success";
        } else {
            print_r($errors);
        }


        header('location: https://web.njit.edu/~dt36/test_project1/table_working.php');


    /*}

    }*/


}
?>

<html >
<body >

<form action = "" method = "POST" enctype = "multipart/form-data" >
    <input type = "file" name = "image" />
    <input type = "submit" />
</form >

</body >
</html >







