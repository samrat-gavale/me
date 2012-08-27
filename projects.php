<?php
	$subpage = 'Projects';
	include('includes/header.php');
?>
				<div id="content">
					<div class="post">
						<h2 class="title">My Projects</h2>
						<div class="entry">
							<ul>
								<li><b>Completed</b>
							<ol>
								<li>
									<a onClick="toggleDivById(1)">Online Application Form for Faculty Recruitment at IIT Mandi</a>
									<div class="slidingDiv" id="1">
										Designed an online form usng PHP, HTML and CSS. Used MySQL for data
										storage purpose and JavaScript for additional functionalities such as
										form input validation. Till date, about two thousand applications
										have been received and processed. The project is deployed <a href="http://www.iitmandi.ac.in/oaf/">www.iitmandi.ac.in/oaf/</a>. 
									</div>
								</li>
								<li>
									<a onClick="toggleDivById(2)">Chomp (Android App)</a>
									<div class="slidingDiv" id="2">
										Developed the Chomp game as an android application using JAVA.
										Implemented artificial intelligence through an iterative algorithm
										that calculates the "goodness" value of all valid moves and chooses
										the best move. Provided various difficulty levels in single player
										game. Integrated sound and animation effects in the user interface.										 
									</div>
								</li>
								<li>
									<a onClick="toggleDivById(3)">Solving Traffic Jam Problem through Artificial Intelligence</a>
									<div class="slidingDiv" id="3">
										Developed an algorithm to make way for a car to get out of a closed parking lot with 
										cars spread around in haphazard manner. Used iterative algorithm to find possible movement
										of cars, developed heuristic finctions to find best move and sied this information in various
										search algorithms like A Star, BFS and DFS.
									</div>
								</li>
								<li>
									<a onClick="toggleDivById(4)">Customizing FreeSMS for IIT Mandi</a>
									<div class="slidingDiv" id="4">
										Customized the FreeSMS software for collecting course feedback at IIT Mandi.
										Added the role of Dean of Academics, added
										fucntionalities like derolling from a course, requesting teacher's consent prior enrolling to a course,
										generating feedback reports in PDF format, preventing multiple feedback submissions , etc.
										The project is deployed at <a href="http://students.iitmandi.ac.in/feedback/">students.iitmandi.ac.in/feedback/</a>
									</div>								
								</li>
								<li>
									<a onClick="toggleDivById(5)">Developing Library Mangement System for Book Nook</a>
									<div class="slidingDiv" id="5">
										 Developed a Lbrary management system for Book Nook, the recreational library of IIT Mandi.
										 Created LMS as a web application including features like browsing through list of books according to
										 title, author, genre, checking their availability, etc. Processed the cover page images of books using
										 ImageMagick and stored them in MySQL as BLOBs.
									</div>
								</li>
								<li>
									<a onClick="toggleDivById(6)">Extending OpenNMS to recieve traps from Facebook</a>
									<div class="slidingDiv" id="6">
										 <a href="http://apps.facebook.com/myfacebookfeeds/" >http://apps.facebook.com/myfacebookfeeds/</a>
									</div>
								</li>
								<li>
									<a onClick="toggleDivById(7)">Implementing MIMD Congestion Control Algorithm in UDT Protocol</a>
									<div class="slidingDiv" id="7">
										Designed a MIMD algorithm,
										implemented it in UDT protocol through C++ and tested this modified UDT protocol for its
										performance.
									</div>
								</li>
								<li>
									<a onClick="toggleDivById(8)">Animated movie using C and OpenGL Library</a>
									<div class="slidingDiv" id="8">You can watch this movie on <a href="http://www.youtube.com/watch?v=R6WQfUH-tJc">Youtube</a>
									</div>
								</li>
							</ol>
								</li>
								<li><b>In Progress</b>
									<ol>
										<li>
											<a onClick="toggleDivById(9)">Online Application for MS/PhD admissions at IIT Mandi</a>
											<div class="slidingDiv" id="9">
											</div>
										</li>
										<li>
											<a onClick="toggleDivById(10)">Developing a Judge for Artificial Intelligence Competitions</a>
											<div class="slidingDiv" id="10s">
											</div>
										</li>
									</ol>
								</li>
							</ul>
							
						</div>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
				<!-- end #content -->
<?php
	include('includes/sidebar.php');
	include('includes/footer.php');
?>
