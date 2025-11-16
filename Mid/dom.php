<!DOCTYPE html>
<html>
<head>
  <title>Dom</title>
</head>
<body>
  <h1 id="PageTitle">Light Mode</h1>
  <button id="Switchmotion" onclick="toggle()">Switch</button>

  <script>
    function toggle() {
      var body = document.body;
      var title = document.getElementById("PageTitle");
      var button = document.getElementById("Switchmotion");

      if (body.style.backgroundColor === "black") {
        body.style.backgroundColor = "white";
        title.style.color = "black";
        title.innerHTML = "Light Mode";
        button.innerHTML = "Switch To Dark Mode";
      } else {
        body.style.backgroundColor = "black";
        title.style.color = "white";
        title.innerHTML = "Dark Mode";
        button.innerHTML = "Switch To Light Mode";
      }
    }
  </script>
</body>
</html>
