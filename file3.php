
<?php
echo "<pre>";

print_r($_FILES);
echo "</pre>";
if(isset($_FILES['my_file'])){

    echo "<h3> File Information</h3>";
    echo "<p> File Name: ". $_FILES['my_file']['name'] ."</p>";
    echo "<p> File Type: ". $_FILES['my_file']['type'] ."</p>";
    echo "<p> File Temp: ". $_FILES['my_file']['tmp_name'] ."</p>";
    echo "<p> File Size: ". $_FILES['my_file']['size'] .'kb'."</p>";
}
if ($_FILES['my_file']['type']== 'image/png'){
    echo "Thank you for uploading right file";

}else{
    echo " you are uploaded wrong file";
}
echo "<br>";

$target = $_FILES['my_file']['tmp_name'];
$destination = "uploads/".$_FILES['my_file']['name'];
$is_file_moved = move_uploaded_file($target, $destination);
if($is_file_moved){
    echo "File Moved successfully.";

}else {
    echo "You have uploaded worng file.";
}
echo "<br>";
$hello = <<<OK
<img src ="$destination" alt ="" width="500px">;

OK;
echo $hello;

