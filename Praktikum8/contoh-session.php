<?php 
session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Implementasi Session</h1>
  <p>Anda telah mengunjungi halaman ini <?php echo $_SESSION['count']; ?> kali.</p>

  <!-- delete session -->
  <form method="post">
    <button type="submit" name="reset">Reset Session</button>
  </form>

  <?php
  if (isset($_POST['reset'])) {
      unset($_SESSION['count']);
      header("Location: " . $_SERVER['PHP_SELF']);
      exit;
  }
  ?>
</body>
</html>
