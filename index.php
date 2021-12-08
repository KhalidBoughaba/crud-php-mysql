<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login.css">

</head>

<body>

    <div class="container">
        <div class="login-content">
            <form id="loginForm" method="POST" action="api/login.php">
                <img src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortCurly&accessoriesType=Sunglasses&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=Heather&eyeType=Hearts&eyebrowType=DefaultNatural&mouthType=Smile&skinColor=Light'
/>
                <h2 class="title">Bonjour</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Nom d'utilisateur</h5>
                        <input id="username" type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Mot de passe</h5>
                        <input id="password" type="password" name="password" id="password" class="input">
                    </div>

                </div>


                <!-- An element to toggle between password visibility -->
                <label>
                    <input type="checkbox" id="show_pass" onclick="myFunction()">
                    Show Password</label>

                <input type="submit" class="btn" value="Connexion">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
    <script>
        const inputs = document.querySelectorAll(".input");


function addcl() {
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl() {
	let parent = this.parentNode.parentNode;
	if (this.value == "") {
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});
function myFunction() {
	var x = document.getElementById("password");
	if (x.type === "password") {
	  x.type = "text";
	} else {
	  x.type = "password";
	}
  }
    </script>
</body>

</html>