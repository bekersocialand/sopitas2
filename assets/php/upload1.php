<?php
//echo "hola";
//$my_blob=$_POST['data'];
$img= $_POST['data'];
$picName= $_POST['timestamp'];

/*list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);

file_put_contents('/assets/image.png', $data);*/
//file_put_contents('img.png', base64_decode($base64string));
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
file_put_contents('uploads/'.$picName.'.png', $data);

?>