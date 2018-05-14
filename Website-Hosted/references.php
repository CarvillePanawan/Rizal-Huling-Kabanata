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
				<div class="container ref">
									<p>Apache.(n.d.). Class HttpServlet. Retrieved from https://tomcat.apache.org/tomcat-5.5-doc/servletapi/javax/servlet/http/HttpServlet.html</p>
				<p>Apache.(n.d.). Interface ServletRequest. Retrieved from https://tomcat.apache.org/tomcat-5.5-doc/servletapi/javax/servlet/ServletRequest.html</p>
				<p>Apache.(n.d.). Interface ServletResponse. Retrieved from https://tomcat.apache.org/tomcat-5.5-doc/servletapi/javax/servlet/ServletResponse.html</p>
				<p>Holzner,S.(2013, February 21). Getting Started with JSP. Retrieved from http://www.informit.com/articles/article.aspx?p=31072&amp;seqNum=7</p>
				<p>Java2s.(n.d.).JSP Tutorial - JSP Syntax. Retrieved from http://www.java2s.com/Tutorials/Java/JSP/0020__JSP_Syntax.htm</p>
				<p>Martz, E.(n.d.). What is Javascript?. Retrieved from https://www.umass.edu/microbio/chime/chimehow/whatisjs.htm</p>
				<p>Mills, C.(2016, June 23). What is JavaScript?. Retrieved from https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/What_is_JavaScript</p>
				<p>Nodejs.(n.d).Node.js v10.1.0 Documentation. Retrieved from https://nodejs.org/api/</p>
				<p>Oracle. (n.d.). JavaServer Pages Technology. Retrieved from http://www.oracle.com/technetwork/java/javaee/jsp/index.html</p>
				<p>Oracle.(2011, February 10). Interface HttpServletRequest. Retrieved from https://docs.oracle.com/javaee/6/api/javax/servlet/http/HttpServletRequest.html</p>
				<p>Oracle.(2011, February 10). Interface HttpServletResponse. Retrieved from https://docs.oracle.com/javaee/6/api/javax/servlet/http/HttpServletResponse.html</p>
				<p>Oracle.(2013, January). The Java EE 6 Tutorial. Retrieved from https://docs.oracle.com/javaee/6/tutorial/doc/docinfo.html</p>
				<p>OWASP. (2018, March 27). Top 10-2017 Top 10. Retrieved from https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project#Translation_Efforts_2</p>
				<p>Pankaj.(2018,April 4). Session Management in Java HttpServlet, Cookies, URL Rewriting. Retrieved from https://www.journaldev.com/1907/java-session-management-servlet-httpsession-url-rewriting</p>
				<p>Program Creek.(n.d).What is Servlet Container? Retrieved from https://www.programcreek.com/2013/04/what-is-servlet-container/</p>
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