<?php 
// error_reporting(0);

$judul = base64_encode($_POST['judul']);
$tag =  base64_encode($_POST['tag']);
$isi =  base64_encode($_POST['isi']);
$submit =  base64_encode($_POST['submit']);

if(isset($submit) && $judul == TRUE && $tag == TRUE && $isi == TRUE) {
  $code = base64_encode(date('l, d-m-Y  h:i:s a'));
  $db = new PDO('sqlite:notes.db');
  $result = $db->query("INSERT INTO catatan (code,judul,isi,tag) VALUES ('$code','$judul','$isi','$tag')");
  if($result = TRUE) {
    $notif = TRUE;
  }else{
    $notif = FALSE;
  }
  header('location:index.php');
}else{
  header('location:index.php');
}