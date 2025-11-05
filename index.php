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
      position: fixed;
      z-index: -1;
      width: 100%;
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
    .submit-btn {
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
    .submit-btn:hover {
      background: #74b9ff;
    }
    main{
      width: 100%;
      background: #74b9ff;
      overflow: auto;

      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;


      position:absolute;
      
      z-index: 10;
      padding-top:100px;
    }
  </style>
</head>
<body>
  <main>
    <form action="home.php" method="POST">
      <header>
        <h2>Project Submission Form</h2>
      </header>
      <label>First Name:</label>
      <input type="text" name="fname" required>

      <label>Middle Name:</label>
      <input type="text" name="mname">

      <label>Last Name:</label>
      <input type="text" name="lname" required>

      <label>Age:</label>
      <select name="age" required>
        <option value="">-- Select --</option>
        <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
                ?>
      </select>

      
      <div>
        <label>Sex:</label>
        <input type="radio" name="sex" value="Male" required> Male
        <input type="radio" name="sex" value="Female" required> Female
        <input type="radio" name="sex" value="Other" required> Other
      </div>
      

      <label>Hobbies:</label>
      <input type="checkbox" name="hobbies[]" value="Reading"> Reading
      <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking
      <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
      <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
      <input type="checkbox" name="hobbies[]" value="Sports"> Sports

      <label>Bio:</label>
      <textarea name="bio" placeholder="Tell us something about yourself..."></textarea>

      <input type="submit" class="submit-btn" value="Submit">
    </form>
  </main>


</body>
</html>
