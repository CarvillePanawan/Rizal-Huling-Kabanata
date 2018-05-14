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
				<a href="index.php"><img id="header-img" src="images/header.png" alt="website header"></a>
				<input id="search-bar" type="text" placeholder="Search">
				<button id="search-btn"></button>
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
					<img class="nav-img" src="images/nodejs-logo.png">
				</div>
			</div>
			
			<div class="nav-custom">
				<ul class="nav-a">
					<li class="dropdown">
						<a class="dropdown-toggle cus-dropdown" data-toggle="dropdown" href="#">Topics</a>
						<ul class="dropdown-menu cus-dropdown-menu">
							<li><a class="tablinks" onclick="openTab(event, 't1')">NodeJS</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't2')">NodeJS Modules</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't3')">HTTP Modules</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't4')">NodeJS MySQL</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't5')">Code demo</a></li>
						</ul>
				  </li>
				</ul>
				<ul class="nav-a">
					<li><a href="quizzes/nodejs-quizlet.php" class="custom-a">Take Quiz</a></li>
				</ul>
			</div>
			
			<div class="container container-1">
				<div class="t-container">
					
					<div id="t1" class="tabcontent">
                        <h2>NodeJS</h2>
                        <p>- NodeJS is an open-source server framework and a cross-platform JavaScript run-time environment which was created on top of Google Chrome V8 Javascript Engine and was written in ECMAScript.</p>
                        <p>- NodeJS hase Has similar syntax to JavaScript, which includes objects, functions, and methods with an extension name of .js</p><br>
                        <h2>Why choose NodeJS</h2>
                        <p>- Node.js uses asynchronous programming
                            - asynchronous programming is a method of parallel programming, which enables a unit to run separately from the main application.</p>
                        <p>- Node.js handles a file request by:</p>
                        <ul>
                            <li>sending the task to the server’s file system.</li>
                            <li>prepares the next request</li>
                            <li>if the file system has opened and reads the file contents , the server gives back the file contents  to the client</li>
                        </ul>
                        <p>- Node.js is memory efficient</p><br>
                        <h2>NodeJS Functions</h2>
                        <p>- Page contents are produced dynamically</p>
                        <p>- Manipulation of files on the server</p>
                        <p>- Data collections</p>
                        <p>- Data manipulation on the database</p>
					</div>
					
					<div id="t2" class="tabcontent">
						<h2>NodeJS Functions</h2>
                        <table class="table table-striped">
                            <tr>
                                <th>Module</th>
                                <th>Function</th>
                            </tr>
                            <tr>
                                <td>assert</td>
                                <td>Issues a set of assertion tests</td>
                            </tr>
                            <tr>
                                <td>buffer</td>
                                <td>Handles binary data</td>
                            </tr>
                            <tr>
                                <td>child_process</td>
                                <td>Runs a child process</td>
                            </tr>
                            <tr>
                                <td>cluster</td>
                                <td>Splits a node process into multiple processes</td>
                            </tr>
                            <tr>
                                <td>crypto</td>
                                <td>Handles OpenSSL functions</td>
                            </tr>
                            <tr>
                                <td>dgram</td>
                                <td>Issues implementation of UDP datagram sockets</td>
                            </tr>
                            <tr>
                                <td>dns</td>
                                <td>Searching of DNS lookups and name resolution functions </td>
                            </tr>
                            <tr>
                                <td>domain</td>
                                <td>Deprecated. Handles unhandled errors</td>
                            </tr>
                            <tr>
                                <td>events</td>
                                <td>Handles events</td>
                            </tr>
                            <tr>
                                <td>fs</td>
                                <td>Handles file systems</td>
                            </tr>
                            <tr>
                                <td>http</td>
                                <td>Makes Node.js function as an HTTP servers</td>
                            </tr>
                            <tr>
                                <td>https</td>
                                <td>Makes Node.js function as an HTTPS servers</td>
                            </tr>
                            <tr>
                                <td>net</td>
                                <td>Creates servers and clients</td>
                            </tr>
                            <tr>
                                <td>os</td>
                                <td>Issues information about the OS</td>
                            </tr>
                            <tr>
                                <td>path</td>
                                <td>Handles file paths</td>
                            </tr>
                            <tr>
                                <td>punycode</td>
                                <td>Deprecated. A character encoding scheme</td>
                            </tr>
                            <tr>
                                <td>querystring</td>
                                <td>Handles URL query strings</td>
                            </tr>
                            <tr>
                                <td>readline</td>
                                <td>Handles readable streams</td>
                            </tr>
                            <tr>
                                <td>stream</td>
                                <td>Handles streaming data</td>
                            </tr>
                            <tr>
                                <td>string_decoder</td>
                                <td>Decodes buffer objects into strings</td>
                            </tr>
                            <tr>
                                <td>timers</td>
                                <td>Executes a function under a given milliseconds</td>
                            </tr>
                            <tr>
                                <td>tls</td>
                                <td>Implements TLS and SSL protocols</td>
                            </tr>
                            <tr>
                                <td>tty</td>
                                <td>Issues classes used by a text terminal</td>
                            </tr>
                            <tr>
                                <td>url</td>
                                <td>Parsing URL strings</td>
                            </tr>
                            <tr>
                                <td>util</td>
                                <td>Accesses utility functions</td>
                            </tr>
                            <tr>
                                <td>v8</td>
                                <td>exposes APIs that are V8 built into the Node.js binary</td>
                            </tr>
                            <tr>
                                <td>vm</td>
                                <td>Compilation of JavaScript code in virtual machine</td>
                            </tr>
                            <tr>
                                <td>zlib</td>
                                <td>Compresses or decompresses files</td>
                            </tr>
                        </table>
					</div>
					
					<div id="t3" class="tabcontent">
						<h2>HTTP Module</h2>
                        <p>- HTTP module enables Node.js to transfer data through HTTP</p>
                        <p>- HTTP module can be added by using the using the require( ) method</p>
                        <p>var http = require('http');</p>
                        <h2>Node.js as a Web Server</h2>
                        <p>- To create HTTP server add the createServer( ) method</p>
                        <pre>var http = require('http');

//create a server object:
http.createServer(function (req, res) { 
    res.write('Node.js!'); // write a response to the client
    res.end(); //end the response
}) .listen(8080); //the server object listens on port 8080</pre>
                        <h2>HTTP Header	</h2>
                        <p>- To create HTTP Header add the res.writeHead( ) method</p>
                        <pre>var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'}); // an HTTP Header
    res.write('Node.js!');
	res.end(); 
}) .listen(8080);</pre>
                        <h2>Reading Query String</h2>
                        <p>- The http.createServer( ) has a req argument which represents the request from the clients.</p>
                        <pre>var http = require('http');

http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'}); 
	res.write('Node.js!');
	res.end(); 
}) .listen(8080);</pre>
					</div>
                    <div id="t4" class="tabcontent">
                        <h2>Creating Connection</h2>
                        <pre>var mysql = require('mysql');

var con = mysql.createConnection({
    host: "localhost",
	user: "yourusername",
	password: "yourpassword"
});

con.connect(function(err) {
    if (err) throw err;
	console.log("Connected!");
});
                        </pre>
                    </div>
                                        <div id="t5" class="tabcontent">
                        <h3>Code demo</h3>
                        <p>Demonstration of registration with NodeJS and MySQL as its database </p>
                        &nbsp;
                        <h4>dabase.sql</h4>
<pre>
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
</pre>
                        <h4>index.html</h4>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
&lt;meta http-equiv="X-UA-Compatible" content="ie=edge"&gt;
	&lt;title> Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
   &lt;form method="post" action="'register'"&gt;
        &lt;p&gt;Name&lt;/p&gt;
        &lt;input type="text" name="name" required&gt;
        &lt;p&gt;Username&lt;/p&gt;
        &lt;input type="text" name="username" required&gt;
        &lt;p&gt;Password&lt;/p&gt;
        &lt;input type="text" name="password" required&gt;
        &lt;br&gt;
        &lt;button type="submit" name="register">Register&gt;/button&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
                        <h4>package.json</h4>
<pre>
{
  "name": "demo",
  "version": "1.0.0",
  "description": "nodejs demo",
  "main": "register.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" &amp;&amp; exit 1"
  },
  "author": "",
  "license": "ISC",
  "dependencies": {
    "express": "^4.16.3",
    "mysql": "^2.15.0",
    "sha1": "^1.1.1"
  }
}
</pre>
                        <h4>register.js</h4>
<pre>
var express = require('express'),
    bodyParser = require('body-parser'),
    mysql = require('mysql'),
    sha1 = require('sha1');
var app = express();
var urlencodedParser = bodyParser.urlencoded({ extended: true });

var connection = mysql.createConnection({
    host: 'localhost',
    port: 3306,
    user: 'root',
    password: '',
    database: 'database'
    
});
var server = app.listen(8082, function () {
    'use strict';
    var host = server.address().address,
        port = server.address().port;
    console.log("Example app listening at %s:%s Port", host, port);
});
app.post('/register', urlencodedParser, function (req, res) {
    'use strict';
    var name = "'" + req.body.name + "',",
        username = "'" + req.body.username + "',",
        password = "'" + sha1(req.body.password) + "'";
    
    connection.connect(function (err) {
        var sql = "INSERT INTO `webtech`.`accounts` (`name`, `username`, `password`) VALUES (" + name + username + password + ")";
        connection.query(sql, function (err, result) {
            if (err) {
                throw err;
            }
            console.log(username + name + password);
        });     
    });
});
</pre>
                    </div>
                </div>
			</div>
			
			<div class="breaker"></div>
		</div>
		
		<div class="footer">Saint Louis University &copy; 2018</div>
	</div>
</body>
	
</html>