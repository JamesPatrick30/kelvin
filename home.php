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
  </style>
</head>
<body>

  <div class="container">
    <h2>Project Details</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $category = $_POST['category'];
        $members = $_POST['members'] ?: "No members listed";
        $deadline = $_POST['deadline'];
        $description = $_POST['description'];

        echo "<p><span class='highlight'>Project Title:</span> $title</p>";
        echo "<p><span class='highlight'>Category:</span> $category</p>";
        echo "<p><span class='highlight'>Team Members:</span> $members</p>";
        echo "<p><span class='highlight'>Deadline:</span> $deadline</p>";
        echo "<p><span class='highlight'>Description:</span> $description</p>";
    } else {
        echo "<p>No project data submitted.</p>";
    }
    ?>
  </div>

</body>
</html>
