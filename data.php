
<?php

$connection=mysqli_connect("localhost","root","","blog_management_system")

?>

<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<h1> OUR PROJECTS </h1>

<?php

$query="SELECT * FROM posts";
$result=mysqli_query($connection,$query);

if ($result->num_rows>0) {

while ($row=mysqli_fetch_assoc($result)) {
	
?>
<div class="container-fluid" >
	
<div class="row" >
	<div class="col-12" >
		
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-12">
      <img src="images/2.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php  echo $row['post_title'];      ?></h5>
        <p class="card-text"><?php  echo $row['post_description'];      ?></p>
        <p class="card-text"><small class="text-body-secondary"><?php date_default_timezone_set("asia/karachi"); echo date("Y");  ?></small></p>
      </div>
    </div>
  </div>
</div>


	</div>

</div>

</div>



<?php


}

}

?>	
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>