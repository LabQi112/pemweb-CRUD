<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        body, html{
            height:100%;
        }
        .bg{
            background-image: url("https://images.unsplash.com/photo-1552687009-b6062feef29f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
    </style>
</head>

<body>
    <div class="bg">
    <div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color:rgba(255,255,255,0.3); margin-top:150px;">
        <h1 style="text-align:center">Login Akun</h1>
        <form class="form-horizontal" method="POST" action="validasi.php" name="form">

            <div class="form-group">
                  <label class="control-label" for="pwd">username :</label>
                  <input type="text" class="form-control" id="nama" placeholder="Username Anda" name="nama">
              <span id="error_username"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">password:</label>
              <input type="password" class="form-control" id="pass" placeholder="Masukkan Password" name="pass">
              <span id="error_password"></span>
            </div>
            <center><input type="button" onclick="kirim()" value="Login" style="margin-bottom:10px"></center>
                
        </form>
    

        <?php
		if(isset($_POST["nama"]) && $_POST["pass"]) {
			echo "<br>username : ".$_POST["nama"];
			echo "<br>password : ".$_POST["pass"];
		}
	    ?>
        </div>
        <div class="col -sm-4"></div>
    </div>

    <script>
        function kirim(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var pass = document.getElementById("pass").value;
            
            if(nama !="" && pass !=""){
                form[0].submit();
            }
            else{
                if (nama==""){
                    document.getElementById("error_username").innerHTML = "username salah";
                }
                if (pass==""){
                    document.getElementById("error_password").innerHTML = "password salah";
                }
            }
        }
    </script>
    </div>
</body>
</html>