<?php include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $conn->query("INSERT INTO students (name, roll_no) VALUES ('$name', '$roll')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h3>Add New Student</h3>
  <form method="POST">
    <div class="mb-3">
      <input type="text" name="name" class="form-control" placeholder="Student Name" required>
    </div>
    <div class="mb-3">
      <input type="text" name="roll" class="form-control" placeholder="Roll No" required>
    </div>
    <button type="submit" class="btn btn-success">Add</button>
    <a href="index.php" class="btn btn-secondary">Back</a>
  </form>
</body>
</html>