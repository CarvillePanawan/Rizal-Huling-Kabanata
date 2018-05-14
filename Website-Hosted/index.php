<!Doctype>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Webtech Finals</title>
	<link rel="stylesheet" type="text/css" href="css/topics.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/skeleton.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/selection.js" async></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-a">
		<div class="header">
			<div class="header-left">
				<a href="index.html">
				<img id="header-img" src="images/header.png" alt="website header">
				</a>
				<input id="search-bar" type="text" placeholder="Search">
				<button id="search-btn"></button>
			</div>
			<ul class="nav-a">
                <?php
                    include('/php/login.php');
                    if(!isset($_SESSION['login_user'])){
                        echo "<li><button type='button' class='top-btn' data-toggle='modal' data-target='#login-modal'>Log In</button></li>
                        <li><button type='button' class='top-btn' data-toggle='modal' data-target='#signup-modal'>Sign Up</button></li>";
                    } else {
                        $username = $_SESSION['login_user'];
                       echo '
							<li class="dropdown">
								<span class="dropdown-toggle" data-toggle="dropdown" href="#">'.$username.'&nbsp;<span class="caret"></span></span>
								<ul class="dropdown-menu dropdown-menu-right">
									<div class="dropdown-divider"></div>
									<li class="logout"><a href="php/logout.php">Logout</a></li>
								</ul>
							</li>
							';
                    }
				?>
			</ul>
		</div>
			
		<div id="login-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Log In</h4>
					</div>
					<div class="modal-body">
						<div class="board">
                            <form method="post" action="php/login.php">
								<label>Username</label>
								<input class="login-field" type="text" name="username" required>
								<label>Password</label>
								<input class="login-field" type=password name="password" required>
								<input type="submit" value="Login" id="submit-form" style="display: none;"/>
                            </form>
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-success" for="submit-form" tabindex="0" class="q-btn" id="submit">Login</label>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		<div id="signup-modal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Sign Up</h4>
					</div>
					<div class="modal-body">
						<div class="board">
                            <form method="post" action = "php/register.php">
                                <label>Name</label>
                                <input class="login-field" type="text" name="name" required>
                                <label>Username</label><br>
                                <input class="login-field" type="text" name="username" required>
                                <label>Password</label><br>
                                <input class="login-field" type=password name="password" required>
								<input type="submit" value="register" id="submit-form-a" style="display: none;"/>
                            </form>			
						</div>
					</div>
					<div class="modal-footer">
						<label class="btn btn-success" for="submit-form-a" tabindex="0" class="q-btn" id="submit">Register</label>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="body">
			<div class="container">
  					<div id="carousel-1" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  	<li data-target="#carousel-1" data-slide-to="0" class="active"></li>
					  	<li data-target="#carousel-1" data-slide-to="1"></li>
					  	<li data-target="#carousel-1" data-slide-to="2"></li>
						<li data-target="#carousel-1" data-slide-to="3"></li>
						<li data-target="#carousel-1" data-slide-to="4"></li>
					</ol>

    				<div class="carousel-inner">
					<div class="item active">
						<img src="images/banner2.png" alt="Nodejs" class="carousel-image">
						<div class="carousel-caption">
							<h3>Node.js</h3>
							<p>Open-source server framework and a cross-platform JavaScript run-time environment which was created on top of Google Chrome V8 Javascript Engine and was written in ECMAScript.</p>
						</div>
					</div>
					<div class="item">
						<img src="images/banner3.png" alt="PHP" class="carousel-image">
						<div class="carousel-caption">
							<h3>PHP</h3>
							<p>PHP is a server-side programming language that runs on a web server. PHP is mainly used for dynamic contents in the back-end side of web development.</p>
						</div>
					</div>
					<div class="item">
						<img src="images/banner2.png" alt="PHP" class="carousel-image">
						<div class="carousel-caption">
							<h3>Web Security</h3>
							<p>Web security refers to maintaining a web application's data and service secure from those who might utilize it for malicious purposes.</p>
						</div>
					</div>

					<div class="item">
						<img src="images/banner3.png" alt="Java" class="carousel-image">
						<div class="carousel-caption">
							<h3>Java</h3>
							<p>Java is general-purpose programming language that is class-based, object-oriented, and is used to create computer applications.</p>
						</div>
					</div>
						
					<div class="item">
						<img src="images/banner2.png" alt="JSP" class="carousel-image">
						<div class="carousel-caption">
							<h3>JSP</h3>
							<p>Provides quick and easy development for web developers and web designers in a dynamic web page that has an advantage for business systems. </p>
						</div>
					</div>
    				</div>

					<a class="left carousel-control" href="#carousel-1" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-1" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
			<div class="nav-custom">
				<ul class="nav-a">
				</ul>
			</div>
			
			<div class="container container-1">
			<div class="row equal">
				<div class="col-md-4 custom-col nav-img-con" id="col-1row1">
					<a href="java.php"><img class="nav-img" src="images/java-servlet-logo.png"></a>
				</div>
				<div class="col-md-4 custom-col nav-img-con nav-dis" id="col-2row1"></div> 
				<div class="col-md-4 custom-col nav-img-con" id="col-2row1">
					<a href="php.php"><img class="nav-img" src="images/php-logo.png"></a>
				</div>       
			</div>
			<div class="row equal">
				<div class="col-md-3 custom-col nav-img-con nav-dis" id="col-1row2"></div>
				<div class="col-md-6 custom-col nav-img-con" id="col-2row2">
					<a href="websecurity.php"><img class="nav-img" src="images/web-security-logo.png"></a>
				</div>    
				<div class="col-md-3 custom-col nav-img-con nav-dis" id="col-3row2"></div>  
			</div>
			<div class="row equal">
				<div class="col-md-4 custom-col nav-img-con" id="col-1row3">
					<a href="nodejs.php"><img class="nav-img" src="images/nodejs-logo.png"></a>
				</div>
				<div class="col-md-4 custom-col nav-img-con nav-dis" id="col-1row3"></div>
				<div class="col-md-4 custom-col nav-img-con" id="col-2row3">
					<a href="jsp.php"><img class="nav-img" src="images/jsp-logo.png"></a>
				</div>  
			</div>
			</div>
			
			<div class="breaker"></div>
		</div>
		
		<div class="footer">Saint Louis University &copy; 2018</div>	
		<!--<script src="js/topics.js"></script>-->
		<script src="quizlet-script.js" async></script>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
	</div>
</body>
	
</html>