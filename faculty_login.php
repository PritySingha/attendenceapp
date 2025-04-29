<?php include "db.php";
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $res = $conn->query("SELECT * FROM faculty WHERE username='$username'");
    if ($res->num_rows > 0) {
        $fac = $res->fetch_assoc();
        if (password_verify($password, $fac['password'])) {
            $_SESSION['faculty_id'] = $fac['id'];
            $_SESSION['faculty_name'] = $fac['name'];
            header("Location: faculty_dashboard.php");
        } else $error = "Wrong password.";
    } else $error = "User not found.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Faculty Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h3>Faculty Login</h3>
  <?php if($error): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>
  <form method="POST">
    <input class="form-control mb-2" name="username" placeholder="Username" required>
    <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
    <button class="btn btn-success">Login</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
  </form>
</body>
</html>