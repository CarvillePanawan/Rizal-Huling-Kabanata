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
					<img class="nav-img" src="images/java-servlet-logo.png">
				</div>
			</div>
			
			<div class="nav-custom">
				<ul class="nav-a">
					<li class="dropdown">
						<a class="dropdown-toggle cus-dropdown" data-toggle="dropdown" href="#">Topics</a>
						<ul class="dropdown-menu cus-dropdown-menu">
							<li><a class="tablinks" onclick="openTab(event, 't1')">Java Servlet</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't2')">Servlet Life Cycle</a></li>
							<li><a class="tablinks" onclick="openTab(event, 't3')">HTTPServlet Class</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't4')">HTTPServletRequest</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't5')">HTTPServletResponse</a></li>
                            <li><a class="tablinks" onclick="openTab(event, 't6')">HTTPSessionHandling</a></li>
						</ul>
				  </li>
				</ul>
				<ul class="nav-a">
					<li><a href="quizzes/java-quizlet.php" class="custom-a">Take Quiz</a></li>
				</ul>
			</div>
			
			<div class="container container-1">
				<div class="t-container">
					
					<div id="t1" class="tabcontent">	
                        <h3>Servlet</h3>
						<p>  - A servelet is a Java class that is utilized to extend the capabilities of     request-response programming model servers that host 
                        applications. Servlets can interact or respond to any type of request, Servlets are maily used for extending applications hosted 
                        by web servers.
                        </p>&nbsp;
                        <h3>Java Servlets</h3>
                        <p>- Handles client requests by generating a response message
                        </p>
                        <p>- Java Servlets is hosted in a "servlet container" which is part of a web server that communicates with the servlet so that it will
                        let Java to dynamically generate a web page from the server side. Servlet container also controls the servlet lifecycle.
                        </p>
                        <p>- Pavni Diwanji created the Servlet1 while working at Sun Microsystems, with version 1.0 finalized in June 1997.
                        </p>
						&nbsp;
                        <table class="table table-striped">
						<caption>As of now, Servlet has 10 versions, from Servlet 1.0 to Servlet 4.0.</caption>
						<thead>
							<tr>
								<th>Version</th>
								<th>Date Released</th>
								<th>Java Version</th>
                        	</tr>
						</thead>
						<tbody>
                        <tr>
                            <td>Servlet 4.0</td>
                            <td>Sep 2017</td>
                            <td>Java EE 8</td>
                        </tr>
                        <tr>
                            <td>Servlet 4.0</td>
                            <td>Sep 2017</td>
                            <td>Java EE 8</td>
                        </tr>
                        <tr>
                            <td>Servlet 3.1</td>
                            <td>May 2013</td>
                            <td>Java EE 7</td>
                        </tr>
                        <tr>
                            <td>Servlet 3.0</td>
                            <td>December 2009</td>
                            <td>Java EE 6, Java SE 6</td>
                        </tr>
                        <tr>
                            <td>Servlet 2.5</td>
                            <td>September 2005</td>
                            <td>Java EE 5, Java SE 5</td>
                        </tr>
                        <tr>
                            <td>Servlet 2.4</td>
                            <td>November 2003</td>
                            <td>J2EE 1.4, J2SE 1.3</td>
                        </tr>
                        <tr>
                            <td>Servlet 2.3</td>
                            <td>August 2001</td>
                            <td>J2EE 1.3, J2SE 1.2</td>
                        </tr>
                        <tr>
                            <td>Servlet 2.2</td>
                            <td>August 1999</td>
                            <td>J2EE 1.2, J2SE 1.2</td>
                        </tr>
                        <tr>
                            <td>Servlet 2.1</td>
                            <td>November 1998</td>
                            <td>Unspecified</td>
                        </tr>
                        <tr>
                            <td>Servlet 2.0</td>
                            <td>&nbsp;</td>
                            <td>JDK 1.1</td>
                        </tr>
                        <tr>
                            <td>Servlet 1.0</td>
                            <td>June 1997</td>
                            <td>&nbsp;</td>
                        </tr>	
						</tbody>
                    </table>
					</div>
					
					<div id="t2" class="tabcontent">
						<h3>Servlet Lifecycle</h3>
                        <h5><b>Initialization</b></h5>
                        <p>The init() method will be called upon the creation of servlet and it is only called once.</p>
						&nbsp;
                        <h5><b>Request Handling</b></h5>
                        <p>Request handling is handled by the method service() which is basically the main method that handles the tasks of each request it uses multi-threading to do the tasks.</p>
						&nbsp;
                        <h5><b>Destruction</b></h5>
                        <p>The destruction is handled by the method destroy() which is invoked the website? is done using the object method.</p>
					</div>
					
					<div id="t3" class="tabcontent">
						<h3>HTTPServlet Class</h3>
                        <p>Used to handle HTTP requests and generate HTTP responses</p>&nbsp;
                        <p>The service() method call is connected to a doXXX call (e.g. doGet(), doPost(), doPut(), doDelete())</p>&nbsp;
                        <p>The doXXX() methods passes 2 arguments which are HTTPServletRequest and HTTPServletResponse</p>&nbsp;
					</div>
					
                    <div id="t4" class="tabcontent">
<h3>HTTPServletRequest Object</h3>
<p>Used to access information from the request message</p>
&nbsp;

<h4>Methods Summary</h4>
<table class="table table-striped">
	<tr>
		<th>Method Name</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>getAuthType()</td>
		<td>
			<ul>
				<li>Gets the authentication scheme</li>
				<li>Returns: one of static members (BASIC_AUTH, FORM_AUTH, CLIENT_CERT_AUTH, DIGEST_AUTH)</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getCookies()</td>
		<td>
			<ul>
				<li>Gets the array of cookies</li>
				<li>Returns : 
					<ul>
						<li>array - cookies whithin this request. Null if there is no cookies</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getDateHeader(String headerName)</td>
		<td>
			<ul>
				<li>Gets the date value of the specified request header</li>
				<li>Parameters: 
					<ul>
						<li>headerName - name of the header</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>long - value of date in the header</li>
					</ul>
				</li>
				<li>Throws:
					<ul>
						<li>IllegalArgumentException - if the value of the header can not be converted to date value</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getHeader(String headerName)</td>
		<td>
			<ul>
				<li>Gets the string value of the specified header name</li>
				<li>Parameters:
					<ul>
						<li>headerName - name of the header</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>String - value of the header request. </li>
						<li>null - if the request does not contain the header name</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getHeaders(String headerName)</td>
		<td>
			<ul>
				<li>Gets all the value of the specified header name</li>
				<li>Parameters:
					<ul>
						<li>headerName - name of the header</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>Enumeration - value of the header request. </li>
						<li>empty enumeration - if the request does not contain the header name.</li>
						<li>null - if the header information can not be allowed to access by the container</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getIntHeader(String headerName)</td>
		<td>
			<ul>
				<li>gets the integer value of the specified header name</li>
				<li>Parameters:
					<ul>
						<li>headerName - name of the header</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>integer - value that represents the request header value.</li>
						<li>-1 - if the if the request does not contain the header name</li>
					</ul>
				</li>
				<li>Throws:
					<ul>
						<li>NumberFormatException - if the value of the header can not be converted to integer</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getMethod()</td>
		<td>
			<ul>
				<li>Gets the http method name of this request</li>
				<li>Returns:
					<ul>
						<li>String - the method name of the request made</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>PathInfo()</td>
		<td>
			<ul>
				<li>Gets the extra path information contained in the URL</li>
				<li>Returns:
					<ul>
						<li>String - the extra path information decoded by the web container after the servlet path and before the request url of the query string</li>
						<li>null - if there is no extra path information</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getPathTranslated()</td>
		<td>
			<ul>
				<li>Gets the real path contained in the URL</li>
				<li>Returns:
					<ul>
						<li>String - the real path</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getContextPath()</td>
		<td>
			<ul>
				<li>Gets portion of the URL that is requested that specifies the request context</li>
				<li>Returns:
					<ul>
						<li>String - portion of the URL that is requested that specifies the request context</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getQueryString</td>
		<td>
			<ul>
				<li>Gets the query string contained in the URL</li>
				<li>Returns:
					<ul>
						<li>String - the query string</li>
						<li>null - if the url does not have a query string</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getRemoteUser()</td>
		<td>
			<ul>
				<li>Gets the user login that is producing this request</li>
				<li>Returns:
					<ul>
						<li>String - the user login that is producing this request</li>
						<li>null - if the login of the user is unknown</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>isUserInRole(String role)</td>
		<td>
			<ul>
				<li>Returns a boolean value if the user producing this request has bee authenticated</li>
				<li>Parameters:
					<ul>
						<li>role - role name</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>true - when the user that is producing this request has been authenticated</li>
						<li>false - when the user that is producing this request is unauthenticated</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getUserPrincipal()</td>
		<td>
			<ul>
				<li>Gets the Principal object containing the user's name</li>
				<li>Returns:
					<ul>
						<li>Principal - user name that is producing this request</li>
						<li>null - if the user name is unauthenticated</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getRequestedSessionId()</td>
		<td>
			<ul>
				<li>Gets the requested session id</li>
				<li>Returns:
					<ul>
						<li>String - session ID</li>
						<li>null - if the session is not specified in the request</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getRequestURI()</td>
		<td>
			<ul>
				<li>Gets the part of the url from the protocol name</li>
				<li>Returns:
					<ul>
						<li>Stirng - part of the url from the protocol name</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getRequestURL()</td>
		<td>
			<ul>
				<li>Reconstructs the url made by the client to make the request</li>
				<li>Returns:
					<ul>
						<li>StringBuffer - reconstructed url</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getServletPath()</td>
		<td>
			<ul>
				<li>Gets the part of the url that is used to call a servlet</li>
				<li>Returns:
					<ul>
						<li>String - decoded servlet name or servlet path that is being called that is specified in the request URL </li>
						<li>null - if patern "/*" is used when the servlet processed the request</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getSession(boolean create)</td>
		<td>
			<li>Gets the current http session related to this request</li>
			<li>Returns:
				<ul>
					<li>HttpSession related with this request </li>
				</ul>
			</li>
		</td>
	</tr>
	<tr>
		<td>getSession(boolean create)</td>
		<td>
			<ul>
				<li>Gets the http session related to the request</li>
				<li>Parameters:
					<ul>
						<li>create(true) - to make a new session for this request</li>
						<li>create(false) - no current session</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>HttpSession related with this request </li>
						<li>null - no valid session in the request and create is false</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>isRequestedSessionIdValid()</td>
		<td>
			<ul>
				<li>Examine if the session id is still valid</li>
				<li>Returns:
					<ul>
						<li>true - the id is valid for the current session context</li>
						<li>false - the id is not valid for the current session context</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>isRequestedSessionIdFromCookie()</td>
		<td>
			<ul>
				<li>Examine if the session id arrived as a cookie</li>
				<li>Returns:
					<ul>
						<li>true - the id of the session arrived as a cookie</li>
						<li>false - the id of the session didnt arrived as a cookie</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>isRequestedSessionIdFromURL()</td>
		<td>
			<ul>
				<li>Examine if the session id arrived as a part of the url</li>
				<li>Returns:
					<ul>
						<li>true - if the id of the session arrived as a part of a url</li>
						<li>false - if the id of the session didnt arrived as a part of a url</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>authenticate(HttpServletResponse response)</td>
		<td>
			<ul>
				<li>Used to authenticate the user that made this request</li>
				<li>Parameters:
					<ul>
						<li>response -the HttpServletResponse related with this HttpServletResponse </li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>true - if the the values needed has been established</li>
						<li>false - if the values needed is incomplete</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>login(String username, String password)</td>
		<td>
			<ul>
				<li>Checks the username and password</li>
				<li>Parameters:
					<ul>
						<li>username - identifier of the user when logged in</li>
						<li>password - the password of the user when logged in</li>
					</ul>
				</li>
				<li>Throws
					<ul>
						<li>ServletException - if the login function does no support username and password authentication or if the username and password provided fails</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>logout()</td>
		<td>
			<ul>
				<li>the getUserPrincipal, getRemoteUser, and getAuthType called on the request is set to null.</li>
				<li>Throws:
					<ul>
						<li>ServletException - if the logout fails</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getParts()</td>
		<td>
			<ul>
				<li>Gets all the part components of the request made</li>
				<li>Returns:
					<ul>
						<li>Collection - part components of the request made</li>
					</ul>
				</li>
				<li>Throws:
					<ul>
						<li>IOException  - if exceptions for input or output occurs</li>
						<li>ServletException - if the request is not the same type as multipart/form-data</li>
						<li>llegalStateException  - if the body of the request is larger than maxRequestSize</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>getPart(String partName)</td>
		<td>
			<ul>
				<li>Gets the name of the Part requested</li>
				<li>Parameter:
					<ul>
						<li>partName- name of the Part requested</li>
					</ul>
				</li>
				<li>Returns:
					<ul>
						<li>Part with given name</li>
						<li>null - if the request made is not type multipart/form-data but the requested Part is not contained</li>
					</ul>
				</li>
				<li>Throws:
					<ul>
						<li>IOException  - if exceptions for input or output occurs </li>
						<li>ServletException - if the request is not the same type as multipart/form-data</li>
						<li>llegalStateException  - if the body of the request is larger than maxRequestSize</li>
					</ul>
				</li>
			</ul>
		</td>
	</tr>
</table>
</div>
					
                    <div id="t5" class="tabcontent">
						<h3>HTTPServletResponse Object</h3>
                        <p>Used to access information from the response message</p>
						&nbsp;
                        <h4>Methods Summary </h4>
                        <table class="table table-striped">
                            <tr>
                                <th>Method Name</th>
                                <th>Description</th>
                            </tr>
<tr>
	<td>addCookie (Cookie cookie)</td>
	<td>
		<ul>
			<li>Attach the cookie to the response </li>
			<li>Parameters:
				<ul>
					<li>cookie - the cookie that will be returned to the client</li>
				</ul>
			</li>
		</ul>
	</td>
</tr>
<tr>
	<td>containsHeader(String headerName)</td>
	<td>
		<ul>
			<li>Returns a boolean wether the name of the header has already been set </li>
			<li>Parameters:
				<ul>
					<li>headerName - name of the header</li>
				</ul>
			</li>Returns:
			<li>
				<ul>
					<li>true - if the headerName has been set else false</li>
				</ul>
			</li>
		</ul>
	</td>
</tr>
<tr>
	<td>encodeURL(String url)</td>
	<td>
		<ul>
			<li>encodes the url with the session id</li>
			<li>Parameters:
				<ul>
					<li>url - the url that needs to be encoded</li>
				</ul>
			</li>
			<li>Returns:
				<ul>
					<li>encoded url - the url that needs to be encoded else the unchanged url</li>
				</ul>
			</li>
		</ul>
	</td>
</tr>
<tr>
	<td>encodeRedirectURL(String url)</td>
<td>
		<ul>
			<li>encodes the url with the session id</li>
			<li>Parameters:
				<ul>
					<li>url - the url that needs to be encoded</li>
				</ul>
			</li>
			<li>Returns:
				<ul>
					<li>encoded url - the url that needs to be encoded else the unchanged url</li>
				</ul>
			</li>
		</ul>
	</td>
</tr>
<tr>
	<td>sendError(int statusCode,String message)</td>
	<td>
		<ul>
			<li>Sends a response to an error determined by the specified status</li>
			<li>Parameters:
				<ul>
					<li>statusCode - status code of the error</li>
					<li>message - the message that will be passed along with the statusCode</li>
				</ul>
			</li>
			<li>Throws:
				<ul>
					<li>IOException - if exceptions for input or output occurs </li>
					<li>IllegalStateException - if the response has been committed</li>
				</ul>
			</li>
		</ul>
	</td>
</tr>
<tr>
	<td>sendError(int statusCode)</td>
	<td>
		<li>Sends a response to an error determined by the specified status and clearing the buffer</li>
		<li>Parameters:
			<ul>
				<li>statusCode - status code of the error</li>
			</ul>
		</li>
		<li>Throws: 
			<ul>
				<li>IOException - if exceptions for input or output occurs </li>
				<li>IllegalStateException - if before calling this method, the response has been committed</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>sendRedirect(String location)</td>
	<td>
		<li>Sends a redirect response to the client with the specified redirection URL location</li>
		<li>Parameters:
			<ul>
				<li>location - the url that will be used for redirection</li>
			</ul>
		</li>
		<li>
			<ul>
				<li>IOException - if exceptions for input or output occurs </li>
				<li>IllegalStateException - if the given url is cannot be transformed into a valid url or the response has been committed</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>setDateHeader(headerName,date)</td>
	<td>
		<li>sets a response header with the given name and date</li>
		<li>Parameters:
			<ul>
				<li>headerName - the header name to be set</li>
				<li>date - the date value to be assigned</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>addDateHeader(String headerName,long date)</td>
	<td>
		<li>adds response header containing the given name and date</li>
		<li>Parameters:
			<ul>
				<li>headerName - the header name to be set</li>
				<li>date - the date value to be added</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>setHeader(String headerName,String value)</td>
	<td>
		<li>sets a response header with the given name and value</li>
		<li>Parameters:
			<ul>
				<li>headerName - the header name</li>
				<li>value - the value of the header, it should be encoded if it contains octed string</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>addHeader(String headerName,String value)</td>
	<td>
		<li>adds response header containing the given name and value</li>
		<li>Parameters:
			<ul>
				<li>headerName - the header name </li>
				<li>value - the value of the header to be added, it should be encoded if it contains octed string</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>setIntHeader(String headerName,int value)</td>
	<td>
		<li>sets a response header with the given name and the integer value</li>
		<li>Parameters:
			<ul>
				<li>headerName - the header name </li>
				<li>value - the integer value to be assigned</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>addIntHeader(String headerName,int value)</td>
	<td>
		<li>adds a response header with the given name and the integer value</li>
		<li>Parameters:
			<ul>
				<li>headerName - the header name </li>
				<li>value - the integer value to be assigned</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>setStatus(int statusCode)</td>
	<td>
		<li>sets a specified status code for the response</li>
		<li>Parameters:
			<ul>
				<li>statusCode - status code with ranges of 2XX,3XX,4XX,and 5XX</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>setStatus(int statusCode,String message)</td>
	<td>
		<li>sets a specified status code and message for the response</li>
		<li>Parameters
			<ul>
				<li>statusCode - status code </li>
				<li>message - message passed with the statusCode</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>getStatus()</td>
	<td>
		<li>gets the response current status code</li>
		<li>Returns:
			<ul>
				<li>the current status code</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>getHeader(String headerName)</td>
	<td>
		<li>gets the value of the given response header name</li>
		<li>Parameters:
			<ul>
				<li>headerName - the response header name that will return its values</li>
			</ul>
		</li>
		<li>Returns
			<ul>
				<li>the value of the response header name else null if there is no header name ,on the response, that has been set</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>getHeaders(String headerName)</td>
	<td>
		<li>gets the values of the given response header name</li>
		<li>Parameters:
			<ul>
				<li>headerName - the response header name that will return its values</li>
			</ul>
		</li>
		<li>Returns:
			<ul>
				<li>collection of values of the resonse header. it can be null or empty collection
</li>
			</ul>
		</li>
	</td>
</tr>
<tr>
	<td>getHeaderNames()</td>
	<td>
		<li>gets all the response header name of the response</li>
		<li>Returns:
			<ul>
				<li>collection of values of the resonse header. it can be null or empty collection</li>
			</ul>
		</li>
	</td>
</tr>
                        </table>
					</div>
					
                    <div id="t6" class="tabcontent">
						<h3>HTTPSessionHandling</h3>
						<p>- HTTP protocol and Web Servers are stateless which is why a seesion is implemented for more persistent data, a session is refers to the time limited intercommunication betwen two systems, session are statrful allowing them at least ratain data or information.</p>
						<p>- Java is cookie-based, cookie refers to data sent by the web server to the user's web browser as way of remembering statefull information.</p>
						<p>- Non-Persistent Cookie are cookies stored in the devices memory and are destroyed once the web browser is closed.</p>
						<p>- HttpSession provides a way to identify and store information pertaining to a user.</p>
						&nbsp;
						<h4>Important Methods:</h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Method</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>getSession()</td>
									<td>Request for the specifies session obejct, if no session object is returned, it creates a session and returns it.</td>
								</tr>
								<tr>
									<td>getSession(boolean value)</td>
									<td>Returns session object otherwise returns null.</td>
								</tr>
								<tr>
									<td>getId()</td>
									<td> Returns a unique string identifier assigned to the session.</td>
								</tr>
								<tr>
									<td>getAttribute()</td>
									<td>Returns the object specified in this session else returns null if no object is found. </td>
								</tr>
								<tr>
									<td>getCreationTime()</td>
									<td>Returns the time of creation of the session.</td>
								</tr>
								<tr>
									<td>getServletContext()</td>
									<td>Returns ServletContext in which the session belongs.</td>
								</tr>
								<tr>
									<td>isNew()</td>
									<td>Returns true if the client hasn't interacted with the session.</td>
								</tr>
								<tr>
									<td>invalidate()</td>
									<td>Invalidates the session along with unbinding any objets connected to the session.</td>
								</tr>
							</tbody>
						</table>
						&nbsp;
						<h4>Notable libraries</h4>
						<p>javax.servlet.http.Cookie;</p>
						<p>javax.servlet.http.HttpServlet;</p>
						<p>javax.servlet.http.HttpServletRequest;</p>
						<p>javax.servlet.http.HttpServletResponse;</p>
					</div>
				</div>
			</div>
			
			<div class="breaker"></div>
		</div>
		
		<div class="footer">Saint Louis University &copy; 2018</div>
	</div>
</body>
	
</html>