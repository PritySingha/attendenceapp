<?php include "db.php";
if (!isset($_SESSION['faculty_id'])) {
    header("Location: faculty_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Faculty Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
  <h3>Welcome, <?= $_SESSION['faculty_name'] ?></h3>
  <a href="mark_attendance.php" class="btn btn-success mb-2">Mark Attendance</a>
  <a href="view_attendance.php" class="btn btn-info mb-2">View Attendance</a>
  <a href="logout.php" class="btn btn-danger">Logout</a>
</body>
</html>