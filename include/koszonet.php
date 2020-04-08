<!DOCTYPE html>
<html>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $telephone = $_POST['telephone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "info@magyarorszagfelfedezoi.hu";
  $headers = "From:" . $mailFrom;
  $txt = "Feladó:" . $name . ".\n\n" . "Telefonszám:" . $telephone . ".\n\n" . "Üzenet:" . $message;

  mail($mailTo, $subject, $txt, $headers);
}

?>

<?php
include_once 'head.php';
?>

<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Main -->
    <div id="main">
      <div class="inner">
        <?php
        include_once 'header.php';
        ?><br><br>
        <h3 class="cim2">Levelét továbbítottuk az info@magyarorszagfelfedezoi.hu e-mailcímünkre. <br>A válaszadásig kis türelmét kérjük!</h3><br><br>
        <div>
          <ul><a href="../../index" class="button primary">Vissza a főoldalra</a></ul>
        </div>

      </div>
    </div>

    <?php

    include_once 'sidebar.php';
    ?>

    <?php
    include_once 'script.php';
    ?>

  </div>

</body>

</html>