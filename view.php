<?php 

$db = new PDO('sqlite:notes.db');
$posts = $db->query("SELECT * FROM catatan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notes</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="desktop.css">
</head>

<body>

  <div class="container">
    <div class="left">
      <form action="proses.php" method="post">
        <span class="judulTag">
          <input class="judul" name="judul" type="text" placeholder="Judul ...">
          <input class="tag" name="tag" type="text" placeholder="Tag ...">
        </span>
        <textarea class="isi" style="resize:none" name="isi" placeholder="Tulis catatan ..."></textarea><br>
        <button class="kirim" name="submit" value="yes">Simpan</button>
      </form>
      <div class="copyright">
        <p>&copy;Nori Nofandi 2022</p>
      </div>
      <pre>
          Copyright 2022 Nori Nofandi

          Licensed under the Apache License, Version 2.0 (the "License");
          you may not use this file except in compliance with the License.
          You may obtain a copy of the License at

              http://www.apache.org/licenses/LICENSE-2.0

          Unless required by applicable law or agreed to in writing, software
          distributed under the License is distributed on an "AS IS" BASIS,
          WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
          See the License for the specific language governing permissions and
          limitations under the License.
          </pre>
    </div>
    <div class="right">
      <?php 
      
      foreach($posts as $post): ?>
      <div class="note">
        <div class="header">
          <h1><?= base64_decode($post['judul']); ?></h1>
          <p><?= base64_decode($post['tag']); ?></p>
        </div>
        <hr>
        <span><?= base64_decode($post['isi']); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>