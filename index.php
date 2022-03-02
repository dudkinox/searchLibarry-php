<?php require('http/client.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/Head.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <?php
    include 'components/Loading.php';
    include 'components/NavBar.php';
    include 'components/Menu.php';
    ?>
    <div class="content-wrapper">
      <?php
      include 'components/Header.php';
      include 'pages/SearchDataPage.php';
      ?>
    </div>
    <?php
    include 'components/Footer.php';
    ?>
  </div>

  <?php include 'components/Script.php'; ?>
</body>

</html>