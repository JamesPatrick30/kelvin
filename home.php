<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Info Output</title>
  <style>
    body {
      background: linear-gradient(135deg, #81ecec, #00cec9);
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      width: 500px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      color: #2d3436;
    }
    p {
      font-size: 16px;
      margin: 10px 0;
    }
    .highlight {
      font-weight: bold;
      color: #0984e3;
    }
    .btn {
      display: inline-block;
      margin-top: 20px;
      background-color: #6c5ce7;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }
    .btn:hover {
      background-color: #a29bfe;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Project Details</h2>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $sex = $_POST['sex'];
        $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
        $bio = trim($_POST['bio']);

        echo "<p><strong>Your name is:</strong> $fname " . (!empty($mname) ? "$mname " : "") . "$lname</p>";
        echo "<p><strong>Your age is:</strong> $age</p>";
        echo "<p><strong>Your sex is:</strong> $sex</p>";

        if (empty($hobbies)) {
          echo "<p style='color:red;'>You have not chosen your hobby.</p>";
        } else {
          echo "<p><strong>Your hobbies are:</strong> " . implode(", ", $hobbies) . "</p>";
        }

        if (empty($bio)) {
          echo "<p style='color:red;'>You have not set your bio.</p>";
        } else {
          echo "<p><strong>Your bio:</strong> $bio</p>";
        }
      } else {
        echo "<p>No data submitted.</p>";
      }
    ?>
    <a href="index.php" class="btn">Submit Another Response</a>

  </div>

</body>
</html>
