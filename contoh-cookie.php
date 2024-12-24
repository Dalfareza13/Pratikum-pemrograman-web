<?php 
$value = "Ini cookie pertama";
if (!isset($_COOKIE['first_cookie'])) {
    setcookie("first_cookie", $value, time() + 3600 * 24 * 30); // Expires in 30 days
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
  <h1>Implementasi Cookie</h1>
  <?php if (isset($_COOKIE['first_cookie'])): ?>
    <p><?php echo $_COOKIE['first_cookie']; ?></p>
  <?php else: ?>
    <p>Cookie belum di-set</p>
  <?php endif; ?>
  
  <!-- Menghapus cookie -->
  <?php 
  if (isset($_COOKIE['first_cookie'])) {
      setcookie('first_cookie', '', time() - 3600); // Set expiration time to the past
  }
  ?>
</body>
</html>
