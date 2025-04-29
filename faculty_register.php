<?php include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO faculty (name, username, password) VALUES ('$name', '$username', '$password')");
    header("Location: faculty_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Faculty Register</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h3>Register Faculty</h3>
  <form method="POST">
    <input class="form-control mb-2" name="name" placeholder="Name" required>
    <input class="form-control mb-2" name="username" placeholder="Username" required>
    <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
    <button class="btn btn-primary">Register</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
  </form>
</body>
</html>