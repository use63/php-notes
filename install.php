<?php 

/*

require_once "index.php";

$query = "CREATE TABLE catatan (
  id int auto_increment,
  code varchar(255),
  judul varchar(255),
  tag varchar(255),
  isi text,
  PRIMARY KEY (id)
)";

$sa = dbQuery($query);

if($sa) {
  echo "berhasil";
}else{
  echo "gagal";
}

?>