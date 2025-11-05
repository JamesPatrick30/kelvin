<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Submission Form</title>
  <style>
    * {
      font-family: 'Poppins', sans-serif;
      box-sizing: border-box;
    }
    body {
      background: linear-gradient(135deg, #74b9ff, #0984e3);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    form {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      width: 400px;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
    h2 {
      text-align: center;
      color: #2d3436;
    }
    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
      color: #2d3436;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 8px;
      border: 1px solid #ccc;
      outline: none;
    }
    textarea {
      resize: none;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #0984e3;
      color: white;
      border: none;
      border-radius: 8px;
      margin-top: 15px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background: #74b9ff;
    }
  </style>
</head>
<body>

  <form action="home.php" method="POST">
    <h2>Project Information Form</h2>

    <label for="title">Project Title:</label>
    <input type="text" name="title" id="title" required>

    <label for="category">Category:</label>
    <select name="category" id="category" required>
      <option value="">-- Select Category --</option>
      <option value="Web Development">Web Development</option>
      <option value="Mobile App">Mobile App</option>
      <option value="Database System">Database System</option>
      <option value="AI / Machine Learning">AI / Machine Learning</option>
      <option value="Networking Project">Networking Project</option>
    </select>

    <label for="members">Team Members (comma separated):</label>
    <input type="text" name="members" id="members" placeholder="e.g. John, Maria, Alex">

    <label for="deadline">Project Deadline:</label>
    <input type="date" name="deadline" id="deadline" required>

    <label for="description">Project Description:</label>
    <textarea name="description" id="description" rows="4" placeholder="Briefly describe your project..." required></textarea>

    <button type="submit">Submit Project</button>
  </form>

</body>
</html>
