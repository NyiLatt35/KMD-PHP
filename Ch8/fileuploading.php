<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Uploading</title>
    <style>
        form{
            width: 300px;
            border: 1px solid #000;
            padding: 10px;
        }
        input{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php
if(isset($_POST['btnUpload'])){
    $path=$_FILES['photo']['tmp_name'];
    $name=$_FILES['photo']['name'];
    $type=$_FILES['photo']['type'];
    $error=$_FILES['photo']['error'];
    $size=$_FILES['photo']['size'];

    echo "File path is ".$path;
    echo "<br/>File name is ".$name;
    echo "<br/>File type is ".$type;
    echo "<br/>File error is ".$error;
    echo "<br/>File size is ".$size;

    $target_dir="./img/";
    $new_path=$target_dir.$name;

    echo "<br/>New File Path Name is ".$new_path;

    $check_img=getimagesize($path);
    echo "<br/><b>Check Image: ";
    print_r($check_img);
    echo "</b><br/>";

    if($check_img==true){
        echo "<br/>This Upload File is image File<br/>";
        if(file_exists($new_path)){
            echo "<br/>Sorry,File already exits.";
        }else{
            if(move_uploaded_file($path,$new_path)){
                echo "<h3>Upload File Successfully</h3>";
            }else{
                echo "<font color='red'>This file is not upload</font>";
            }
        }
    }else{
        echo "<br/>This upload file is not image file.";
    }


}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>
                <input type="file" name="photo" id="">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="btnUpload" id="" value="Upload">
            </td>
        </tr>
    </table>
</form>
</body>
</html>