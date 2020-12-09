<!DOCTYPE html>
<html>
<head>
	<title>Creamy Creations</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-md bg-primary navbar-dark">
  <a style="font-size: 3vw;" class="navbar-brand" href="index.html">Hello <?php echo $_COOKIE["email"] ?>!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsible-Navbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div id="collapsible-Navbar" class="collapse navbar-collapse" >
    <ul class="navbar-nav">
      <li class="nav-item" >
        <a style="text-align: center;" class="nav-link" href="afterlogin.php">Home</a>
      </li>
      <li class="nav-item">
        <a style="text-align: center;" class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
       <a style="text-align: center;" class="nav-link" href="contact.html">Contact Us</a>
      </li>
      <li class="nav-item">
       <a style="text-align: center;" class="nav-link" href="about.html">About Us</a>
      </li> 
      <li class="nav-item">
       <a style="text-align: center;" class="nav-link" href="logout.php">Logout</a>
      </li>      
    </ul>
  </div>
</nav><br>
<div id="success-message" class="alert alert-success">
  
</div>
<img src="98765/1.jpeg" alt="1" class="crosalimage"><br>
<h2 class="text-center" ><u>Choclate Flower Cake</u></h2><br>
<h4 class="text-center">Price: 200rs.</h4><br>
<h4 class="text-center">Weight: 1 Pound</h4><br>
<div class="container">
<button id="add" class="btn btn-primary btn-block">Add to Cart</button>

</div><br><br>

</body>
<script type="text/javascript">
  $(document).ready(function () {
   $("#add").on("click",function(e){
    e.preventDefault();
    var item = "Choclate Flower Cake";
    var total = 200;
    var weight = 1;
if(item == "" || total == "" || weight == ""){
      alert("Please Select at LEAST one Item!");
    }else{
      $.ajax({
        url: "cart.php",
        type: "POST",
        data: {item1: item, total1: total, weight1: weight},
        success: function(data){
          if(data == 1){
  $("#success-message").html("Success! Item added to Cart successfully.").fadeIn("slow");
  $("#add").html("Place Order").fadeIn("slow");

          }else{
    alert("Please Retry!");
   
          }
        }

      });

    }
   });
  });
</script>
</html>