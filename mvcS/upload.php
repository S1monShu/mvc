<?php
function uploadImage($imageArray){
$name = $imageArray['name'];
$tmp_name = $imageArray['tmp_name'];
move_uploaded_file($tmp_name, "uploads/" . $name);
return $name;
}

