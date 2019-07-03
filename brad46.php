<?php
if (!isset($_FILES['upload'])) exit(0);
$upload = $_FILES['upload'];
if ($upload['error'] == 0){
  if (copy($upload['tmp_name'],"upload/{$upload['name']}")){
      echo "upload success";
  }else{
      echo 'error';
  }
}