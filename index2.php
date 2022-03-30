<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #foi {
      width: 300px;
      height: 300px;
      background: black;
    }
  </style>
</head>
<body>
  <div id="foi"></div>
  <button onclick="myFunction()">Manda</button>
  <script>
    function myFunction() {
      document.getElementById("foi").style.background = "red";
    }
  </script>
</body>
</html>