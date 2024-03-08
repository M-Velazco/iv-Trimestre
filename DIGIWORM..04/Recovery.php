<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, #77d1e7, #000000);
        }

        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

*{
	margin: 0;
	padding: 0;
	font-family: 'Poppings',sans-serif;

}
 
 body{
 	overflow: hidden;
 }
 section{
 	display: flex;
 	justify-content: center;
 	align-items: center;
 	min-height: 100vh;
 	background: linear-gradient(to bottom,#77d1e7,#000000);

 }

 section .color{
 	position: absolute;
 	filter: blur(150px);
 }

 section .color:nth-child(1){
top: -350px;
width: 600px;
height: 600px;
background: #7deb73;

 }

 section .color:nth-child(2){
 	top: 150px;
    left: -125px;
    width: 120px;
    height: 120px;
    z-index: 2;
 }

 section .color:nth-child(3){
 	bottom: 50px;
 	right: 100px;
 	width: 300px;
 	height: 300px;
 	background: #00d2ff;
 }

 .box{
 	position: relative;
 }

 .box .square{
 	position: absolute;
 	backdrop-filter:blur(5px);
 	box-shadow: 0 25px 45px rgba(0,0,0,0.1);
 	border: 1px solid rgba(141, 125, 185, 0.5);
 	border-right: 1px solid rgba(255,255,255,0.2);
 	border-bottom: 1px solid rgba(255,255,255,0.2);
 	background: rgba(255,255,255,0.1);
 	border-radius: 10px; 
 	animation:animate 10s linear infinite;
 	animation-delay:calc(-1s * var(--i));
 }

@keyframes animate
{
	0%,100%
	{
		transform: translateY(-40px);
	}
	50%
	{
		transform: translateY(40px);
	}
}

.box .square:nth-child(1){
	top: -50px;
	right: -95px;
	width: 100px;
	height: 100px;
}

.box .square:nth-child(2){
	top: 150px;
	left: -115px;
	width: 120px;
	height: 120px;
	z-index: 2;
}

.box .square:nth-child(3){
	bottom: 50px;
	right: -78px;
	width: 80px;
	height: 80px;
	z-index: 2;
}


.box .square:nth-child(4){
	bottom: -80px;
	left: 100px;
	width: 50px;
	height: 50px;
}

.box .square:nth-child(5){
	top: -80px;
	left: 100px;
	width: 60px;
	height: 60px;
}



 .container{
 	position: relative;
 	width: 460px;
 	min-height: 400px;
 	background: rgba(255,255,255,0.1);
 	border-radius: 10px;
 	display: flex;
 	justify-content: center;
 	align-items: center;
 	backdrop-filter:blur(5px);
 	box-shadow: 0 25px 45px rgba(0,0,0,0.1);
 	border: 1px solid rgba(255,255,255,0.5);
 	border-right: 1px solid rgba(255,255,255,0.2);
 	border-bottom: 1px solid rgba(255,255,255,0.2);
 }

.form{
	position: relative;
	width: 100%;
	height: 100%;
	padding: 40px;
}

.form h2{
	position: relative;
	color: #fff;
	font-size: 24px;
	font-weight: 600;
	letter-spacing: 1px;
	margin-bottom: 40px;
}

.form h2::before{
	content: '';
	position: absolute;
	left: 0;
	bottom: -10px;
	width: 80px;
	height: 4px;
	background: #fff;
}

.form .inputBox
{
	width: 100%;
	text-align: center;
	margin-top: 20px;
}

.form .inputBox input
{
	width: 86%;
	background: rgba(192, 218, 130, 0.2);
	border: none;
	outline: none;
	padding: 10px 20px;
	border-radius: 35px;
	border: 1px solid rgba(255,255,255,0.5);
 	border-right: 1px solid rgba(255,255,255,0.2);
 	border-bottom: 1px solid rgba(255,255,255,0.2);
 	font-size: 16px;
 	letter-spacing: 1px;
 	color: #fff;
 	box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}


.form .inputBox input::placeholder{
	color: #fff;
}

.form .inputBox input[type="submit"]{
	background: #65e73c;
	color: #666;
	max-width: 200px;
	cursor: pointer;
	margin-bottom: 20px;
	font-weight: 600px;

}

.form .inputBox input[type="submit"]:hover{
	background: #80abeb;
	color: #fff;

}

.forget{
	margin-top: 5px;
	color: #fff;
}
.forget a{
color: #fff;
font-weight: 600;
}
    </style>
</head>
<body>
    <section>
        <!-- Puedes mantener el formulario aquí -->
        <h2>Restablecer Contraseña</h2>
        <form action="validacion/reset_password.php" method="post" class="form">
            <div class="inputBox">
                <label for="password">Nueva Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="inputBox">
                <label for="confirm_password">Confirmar Nueva Contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
           
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token'] ?? ''); ?>">
            <div class="inputBox">
              <h1><input type="submit" value="Restablecer Contraseña"></h1>  
            </div>
        </form>
    </section>
</body>
</html>
