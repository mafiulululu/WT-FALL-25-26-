<!DOCTYPE html>
<html>
<head>
  <title>Form Handler</title> 
  <style>
  
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f8f1eeff;
    }

    h2 {
      text-align: center;
      color: #003366;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto 30px auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    input, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      background-color: #3a0160ff;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #0aaf36ff;
    }

    #output, #courseOutput {
      text-align: center;
      margin-top: 15px;
      color: #003366;
      font-size: 16px;
    }

    #error, #courseError {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>


  </style>
<body>

  <h2>Student Registration</h2>

  <form onsubmit="return handleRegister()">
    <label>Full Name:</label>
    <input type="text" id="name">

    <label>email:</label>
    <input type="email" id="email">

    <label>Password:</label>
    <input type="password" id="password">

    <label>Confirm Password:</label>
    <input type="password" id="confirmPassword">

    <button type="submit">Register</button>

    <div id="error"></div>
    <div id="output"></div>
  </form>

  <h2>Course Registration</h2>

  <form onsubmit="return addCourse()">
    <label>Course Name:</label>
    <input type="text" id="courseName">

    <button type="submit">Add Course</button>
    

    <div id="courseError"></div>
    <div id="courseOutput"></div>
    <button>Delete Course</button>
  </form>

<script>
  function handleRegister() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirmPassword = document.getElementById("confirmPassword").value.trim();

    let errorDiv = document.getElementById("error");
    let outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    if (name === "" || email === "" || password === "" || confirmPassword === "") {
      errorDiv.innerHTML = "Please fill up all the fields.";
      return false;
    }

    if (password !== confirmPassword) {
      errorDiv.innerHTML = "Passwords do not match.";
      return false;
    }

    outputDiv.innerHTML = `
      <strong>Registration Successful!</strong><br><br>
      Name: ${name}<br>
      Email: ${email}<br>
    `;
    return false;
  }

  function addCourse() {
    let course = document.getElementById("courseName").value.trim();
    let courseError = document.getElementById("courseError");
    let courseOutput = document.getElementById("courseOutput");
    let deleteBtn = document.getElementById("deleteBtn");


    courseError.innerHTML = "";
    courseOutput.innerHTML = "";

    if (course === "") {
      courseError.innerHTML = "Please enter a course name.";
      return false;
    }

    courseOutput.innerHTML = `
      <strong>Course Added:</strong> ${course}
    `;
    return false;
    
    
  }
</script>

</body>
</html>

        
        
        
        
        
        
        
        
        
</script>
</body>
</html>
    
