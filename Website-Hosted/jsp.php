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
				<a href="index.php">
				<img id="header-img" src="images/header.png" alt="website header">
				</a>
			</div>
			<ul class="nav-a">
                <?php
                    include('php/login.php');
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
				<div class="jumbotron banner">
					<img class="nav-img" src="images/jsp-logo.png">
				</div>
			</div>
			
			<div class="nav-custom">
				<ul class="nav-a">
					<li class="dropdown">
						<a class="dropdown-toggle cus-dropdown" data-toggle="dropdown" href="#">Topics</a>
						<ul class="dropdown-menu cus-dropdown-menu">
							<li><a class="tablinks" onclick="openTab(event, 't1')">JSP</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't2')">Scriptet</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't3')">Declarations</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't4')">Expressions</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't5')">Comments</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't6')">Directives</a></li>
						</ul>
				  </li>
				</ul>
				<ul class="nav-a">
					<li><a href="quizzes/jsp-quizlet.php" class="custom-a">Take Quiz</a></li>
				</ul>
			</div>
			
			<div class="container container-1">
				<div class="t-container">
					
					<div id="t1" class="tabcontent">
                        <h2>JSP</h2>
                        <p>JSP provides quick and easy development for web developers and web designers in a dynamic web page that has an advantage for business systems. Java Server Pages is platform independent meaning, it could be on any operating system without requiring the Java Virtual Machine(JVM). JSP separates the User Interface(UI) from the content and enables web designers to change the layout of the web page without changing the primary dynamic content.</p>
					</div>
					
					<div id="t2" class="tabcontent">
						<h2>Scriptet</h2>
                        <p>Where java language statements, variable or method declarations, or expressions used for page scripting are contained</p>
                        <p>Syntax</p>
                        <p> &lt;% //code// %&gt;</p>
                        <p>Example</p>
                        <p> &lt;html
							&lt;head&gt;&lt;title&gt;Hello World&lt;/title&gt;&lt;/head&gt;
							&lt;body&gt;
							&lt;%
							out.println("Scriptet");
							%>
							&lt;/body&gt;
							&lt;/html&gt;</p>
					</div>
					
					<div id="t3" class="tabcontent">
						<h2>Declarations</h2>
                        <p>Declaration of one or more variables and methods </p>
                        <p>Syntax</p>
                        <p> &lt;% //declaration// %&gt;</p>
                        <p>Example</p>
                        <p> &lt;%! int o, i, l; %&gt; 
							&lt;%! String m; %&gt;
						</p>
					</div>

                    <div id="t4" class="tabcontent">
						<h2>Expressions</h2>
                        <p>Code that can be evaluated one way or another to procure a desired result is an expression.</p>
                        <p>Syntax</p>
                        <p> &lt;% //expression // %&gt;</p>
                        <p>Example</p>
                        <p> &lt;%! int age = 21; %&gt;
							&lt;%= age %&gt;
						</p>
					</div>
                    <div id="t5" class="tabcontent">
						<h2>Comments</h2>
                        <p>Comments can be seen as notes to the program written.</p>
                        <p>Syntax</p>
                        <p> &lt;%-- //comment// --%&gt;</p>
                        <p>Example</p>
                        <p> &lt;%-- This is come nice code--%&gt;
						</p>
					</div>
                    <div id="t6" class="tabcontent">
						<h2>Directives</h2>
                        <p>Assigns the overall structure of the servlet class.</p>
                        <p>Syntax</p>
                        <p> &lt;%@ attribute="number" %&gt;</p>
                        <p>Three Types:</p>
                        <p> &lt;%@ page ... %&gt;  - Defines page-dependent attributes.</p>
                        <p> &lt;%@ include  ... %&gt;  - Includes a file to be used.</p>
                        <p> &lt;%@ taglib  ... %&gt;  - Declares a tag library, containing custom actionss.</p>
					</div>
				</div>
			</div>
			
			<div class="breaker"></div>
		</div>
		
		<div class="footer">Saint Louis University &copy; 2018</div>
	</div>
</body>
	
</html>
