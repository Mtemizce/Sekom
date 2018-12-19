<!DOCTYPE html>
<html lang="tr">
<head>
	<?php 
  include "include/head.php";
  include "include/include_style.php";
  ?>
</head>
<body class="menubar-left menubar-unfold menubar-light theme-primary">
<!--============= start main area -->
<?php
// ###### Üst Navbar Menü
  include "include/navbar.php";
// ###### Sol Dikey Menü
  include "include/aside.php";
// ###### Ana içerik gövdesi
  include "include/content.php"; 
// ###### Tema Değiştirici
  include "include/customizer.php"; 
// ###### Arkadaş Paneli
  include "include/friends.php"; 
// ###### Script Dosyaları
  include "include/include_script.php";
?>
</body>
</html>