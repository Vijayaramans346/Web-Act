<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];
  $phone = $_POST['phone'];

  echo "<h2 style='text-align:center;color:#007bff;'>Registration Successful!</h2>";
  echo "<div style='margin: 0 auto; width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 10px;'>";
  echo "<p><strong>Name:</strong> $name</p>";
  echo "<p><strong>Email:</strong> $email</p>";
  echo "<p><strong>Course:</strong> $course</p>";
  echo "<p><strong>Phone:</strong> $phone</p>";
  echo "</div>";
}
?>
