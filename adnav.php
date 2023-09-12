<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

  *
  {
    margin:0;
    padding: 0;
  }
body {
  font-family: Arial, Helvetica, sans-serif;
  background: linear-gradient(90deg, #C7C5F4, #776BCC);   

}

.navbar {
  background-color: #555;
  overflow: auto;
  padding: 20px 10px;
  border-bottom-right-radius:100px;
  border-bottom-left-radius:100px;
  background: #fa7e2b;
}

.navbar a {
 
  margin-left: 30px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  padding: 10px 30px;
}

.navbar a:hover {
  background-color: #000;
  padding: 20px 30px;
}


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>


<div class="navbar">
  <a class="active" href="profile.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="view.php"><i class="fa fa-fw fa-search"></i>View Students </a> 
  <a href="viewatt.php"><i class="fa fa-fw fa-envelope"></i> View Attendance</a> 
  <a href="home.php"><i class="fa fa-fw fa-user"></i> Logout</a>
</div>

</body>
</html> 
