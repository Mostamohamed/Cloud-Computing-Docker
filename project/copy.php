
<html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
<style>
body, html {
  height: 80%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.bg-image {
  background-image: url("https://ci.tanta.edu.eg/images/cs.jpg");
  filter: blur(5px);
  -webkit-filter: blur(5px);
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.bg-text {
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4);
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 40%;
  padding: 10px;
  text-align: center;
}
</style>
</head>
</html>
<html>
<body>
<div class="bg-image"></div>
<div class="bg-text">
  <h1 style="font-size:50px">Students Data</h1>
  <p>FCDS</p>
</div>
</body>
</html>
<html>
<body>
<head>
<title>Result Form</title>
<style>
body{ 
background-color:grey;
}

.btn{
width:20%;
height:7%;
font-size:15px;
padding:0px;
}
table {
  width:600px;
  top: 400%;
  left: 1000%;
}
table, th, td {
  border: 3px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
.footer {
   position: fixed;
   font-size:25px;
   left: 0;
   bottom:0;
   width: 191%;
   color: black;
   text-align: center;
}
</style>
</head>
</body>
</html>
<html>

<body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Form</title>
</head>

<body> 
    <form action="" method="post">
	<div class="container"></div>
	<div id="ctl00_MainContent_PageContent" style="width:60%;float:right;padding-right:3%">
        <br>
        <span id="ctl00_MainContent_Label1" class="Font"  style="font-style: oblique;" style="font-weight:900;">to access your data please enter your ID</span>
        <br/>
        <input type="text" placeholder="Search" name="search"class="btn" style="font-style: oblique;" placeholder="Enter your ID">
        <button type="submit"	style="font-style: oblique;"	class="btn"	 name="submit">Show Your Data </button>
    </form>
</body>
</div>
</body>
</html>
</html>

<?php
if (isset($_POST['submit'])) {
    $searchValue = $_POST['search'];
    $mysqli = new mysqli("127.0.0.1", "root", "", "students");
    if ($mysqli->connect_error) {
        echo "connection Failed: " . $mysqli->connect_error;
    } else {
        $sql = "SELECT * FROM student WHERE	id LIKE '%$searchValue%'";

        $result = $mysqli->query($sql);
						echo "<table  border=1 style='position: absolute; top: 73%; left:36%; float: left;'>
						<tr>
						<th>ID</th>
						<th>Name</th>
						<th>GPA</th>
						<th>Picture</th>
						</tr>";
        while ($row = $result->fetch_assoc()) {
			echo "<tr>";
             echo "<td>" . $id= $row['id'] . "</td>";
			 echo "<td>" . $name = $row['name'] . "</td>";
			 echo "<td>" . $GPA= $row['GPA'] . "</td>";
			 echo "<td>" .  '<img src="data:image/jpg;base64,'.base64_encode($pic =$row['picture']).'"/>' . "</td>";
			 echo "</tr>";
        }
				echo "</table>";
      
    }   
}
?>
<html>
<footer>
<div class="footer">
<p>© 2021 ع الله حكايتنا</p>
</footer>
</html>