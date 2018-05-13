<!Doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Webtech Finals</title>
        <link rel="stylesheet" type="text/css" href="../css/topics.css">
        <link rel="stylesheet" type="text/css" href="../css/fonts.css">
        <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/quiz.css">
        <link rel="stylesheet" href="quizlet-style.css">
        <script src="quizlet-script.js" async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-a">
            <div class="header">
                <div class="header-left">
                    <a href="../index.html">
                    <img id="header-img" src="../../images/header.png" alt="website header">
                    </a>
                    <input id="search-bar" type="text" placeholder="Search">
                    <button id="search-btn"></button>
                </div>
                <ul class="nav-a">
                    <li class="dropdown">
                        <span class="dropdown-toggle" data-toggle="dropdown" href="#">User
                        <span class="caret"></span></span>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <h6 class="dropdown-header">Logged in as:</h6>
                            <div class="dropdown-divider"></div>
                            <li><a href="">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="container">
                    <div class="jumbotron banner">
                        <h3>Java</h3>
                        <p>Javascript is a client-side programming language that used to make web pages interactive within the browser. Javascript allows you to access and modify contents of a web page while being viewed.</p>
                    </div>
                </div>
                <div class="nav-custom">
                    <ul class="nav-a">
                        <li><button type="button" class="top-btn" data-toggle="modal" data-target="#lb-modal">Leaderboard</button></li>
                    </ul>
                </div>
                <div id="lb-modal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Leaderboard</h4>
                            </div>
                            <div class="modal-body">
                                <div class="board">
                                    <div class='row lb_row'>
                                        <div class='col-md-4 text-center'>Name</div>
                                        <div class='col-md-4 text-center'>Score</div>
                                        <div class='col-md-4 text-center'>Date</div>
                                    </div>
                                    <?php include "leaderboard.php"; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container container-1">
                    <div class="t-container">
                        <div class="quiz-container">
                            <div id="quiz">
                                <form action="jq-res.php" method="post">
                                    <div class="slide active-slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">1.Returns an Enumeration containing the names of the attributes available to this request.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer1" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer1" id="answer1" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">2. Returns an Enumeration of String objects containing the names of the parameters contained in this request.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer2" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer2" id="answer2" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">3. Returns a PrintWriter object that can send character text to the client.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer3" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer3" id="answer3" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">4. Clears the content of the underlying buffer in the response without clearing headers or status code.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer4" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer4" id="answer4" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">5. Returns a boolean indicating whether this request was made using a secure channel, such as HTTPS.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer5" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer5" id="answer5" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">6. Forces any content in the buffer to be written to the client.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer6" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer6" id="answer6" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">7. Returns the name of the scheme used to make this request, for example, http, https, or ftp.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer7" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer7" id="answer7" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">8. Sets the length of the content body in the response In HTTP servlets, this method sets the HTTP Content-Length header.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer8" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer8" id="answer8" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">9. Returns a boolean indicating if the response has been committed.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer9" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer9" id="answer9" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">10. Clears any data that exists in the buffer as well as the status code and headers.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer10" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer10" id="answer10" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">11. Who created the first version of java sevlet also know as Servlet1?</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer11" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer11" id="answer11" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">12. What is the latest version of Servlet?</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer12" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer12" id="answer12" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">13. State the 3 stages of a Servlet lifecycle.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer13" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer13" id="answer13" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">14. Servlet is a Java ___________</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer14" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer14" id="answer14" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">15. The programming model server suited for Servlets.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer15" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer15" id="answer15" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">16. A part of a web server that communicates with the servlet so that it will let Java to dynamically generate a web page from the server side.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer16" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer16" id="answer16" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">17. Can be called multiple times depending on the number of requests of the user.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer17" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer17" id="answer17" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">18. Called only once and is called upon creation.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer18" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer18" id="answer18" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">19. What are the methods used in each stages of the Servlet lifecycle?.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer19" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer19" id="answer19" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <span class="glyphicon glyphicon-question-sign"></span> &nbsp;
                                        <div class="question">20. State 3 methods related to doXXX() method.</div>
                                        <div class="answers">
                                            <div class="cus-answer-container">
                                                <label for="answer20" class="q-label">
                                                    &nbsp; 
                                                    <h5>Answer: </h5>
                                                    <input name="answer20" id="answer20" class="q-input" type="text">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="submit" id="submit-form" style="display: none;"/>
                                </form>
                            </div>
                        </div>
                        <div class="cus-btn-grp">
                            <button class="q-btn" id="previous" style="display: none;">Previous Question</button>
                            <button class="q-btn" id="next" style="display: inline-block;">Next Question</button>
                            <label for="submit-form" tabindex="0" class="q-btn" id="submit">Submit</label>
                        </div>
                    </div>
                </div>
                <div class="breaker"></div>
            </div>
            <div class="footer">Saint Louis University &copy; 2018</div>
            <script src="quiz-data.js"></script>
        </div>
    </body>
</html>