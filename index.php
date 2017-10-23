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


    if(isset($_FILES['myFile'])) {
        $errors = array();
        $name = $_FILES['myFile']['name'];
        $f_tmp = $_FILES['myFile']['tmp_name'];
        $fileExt = strtolower(end(explode('.', $_FILES['myFile']['name'])));



        if (empty($errors) == true) {
            move_uploaded_file($f_tmp, "uploads/" . $name);
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
    <input type = "file" name = "myFile" />
    <input type = "submit" />
</form >

</body >
</html >







