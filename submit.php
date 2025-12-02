<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Application Submitted Successfully 🎉</h1>
    <div class="card">
      <h2>Applicant Details</h2>
      <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
      <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['phone']); ?></p>
      <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></p>
      <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
      <p><strong>Course:</strong> <?php echo htmlspecialchars($_POST['course']); ?></p>
      <p><strong>Address:</strong> <?php echo nl2br(htmlspecialchars($_POST['address'])); ?></p>
    </div>
    <a href="index.html" class="btn">Back to Form</a>
  </div>
</body>
</html>
