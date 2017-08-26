<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Moviereviews - Free CSS template by ChocoTemplates.com</title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/colorbox.css" type="text/css" media="all" />
	
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/jquery.colorbox-min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wrapper -->
	<div id="wrapper">
		<div class="light-bg">
			<!-- shell -->
			<div class="shell">
				<!-- header -->
				<div class="header">
					<!-- socials -->
					<div class="socials">
						
					</div>
					<!-- end of socials -->
					<h1 id="logo"><a href="index.php">Moviereviews</a></h1>
					<!-- navigation -->
					<nav id="navigation">
						<ul>
              <li><a href="index.php">MOVIE REVIEWS</a></li>
              <li><a href="update.php">MOST COMMENTED REVIEW LIST</a></li>
              <li><a href="delete.php">DELETE MOVIE <span>20</span></a></li>
                       </ul>
					</nav>
					<!-- end of navigation -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of header -->
				<!-- main -->
				<div class="main">
					<!-- content -->
					<section class="content">
						<!-- post -->
						<div class="post">
							<!-- post-inner -->
							<div class="post-inner">
								<header>
									<h2><a href="#">User Updated Recommendations</a></h2>
									<div class="cl">&nbsp;</div>
								</header>
								
								
								
								<!-- end of meta -->
								<!-- post-cnt -->
								<div class="post-cnt">
								
								
<?php
require 'connection.php';
$conn    = Connect();
$sql = "SELECT * FROM aip ORDER BY id ";

$rs_result = $conn->query($sql); 

?>
								
									<table border="1" cellpadding="4" width="600">
<tr>
    <td bgcolor="#CCCCCC"><strong>Title</strong></td>
    <td bgcolor="#CCCCCC"><strong>Duration</strong></td>
	<td bgcolor="#CCCCCC"><strong>Release</strong></td>
	<td bgcolor="#CCCCCC"><strong>Genre</strong></td>
	<td bgcolor="#CCCCCC"><strong>Synopsis</strong></td></tr>

<?php 
 while($row = $rs_result->fetch_assoc()) {
	 //print_r($row);
echo "<tr>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['release_date'] . "</td>";
echo "<td>" . $row['duration'] . "</td>";

echo "<td>" . $row['genre'] . "</td>";
echo "<td>" . $row['synopsis'] . "</td>";

echo "</tr>";

}; 
?> 
</table>

							</div>
								<!-- end of post-cnt -->
							</div>
							<!-- post-inner -->
						</div>
						<!-- end of post -->
						<!-- post -->
							<!-- post-inner -->
						
						<!-- end of post -->
						<!-- post -->
						
						<!-- end of post -->
						
					</section>
					<!-- end of content -->
					<!-- sidebar -->
					<aside class="sidebar">
						

						<div class="widget">
							<h3 class="widgettitle">Opening This Week</h3>
							<ul>
								<li><a href="#">The Hunter Games <strong>$98 Mil</strong></a></li>
								<li><a href="#">American Reunion <strong>$50 Mil</strong></a></li>
								<li><a href="#">Titanic <strong>$23 Mil</strong></a></li>
								<li><a href="#">Wrath of the Titans <strong>$50 Mil</strong></a></li>
								<li><a href="#">Mirror Mirro  <strong>$7 Mil</strong></a></li>
							</ul>
						</div>

						
					</aside>
					<!-- end of sidebar -->
					<div class="cl">&nbsp;</div>
				</div>
				<!-- end of main -->
				<br>
				<br>				<br>
				<br>

				<div class="footer">
					<!--<nav class="footer-nav">
						<ul>
							<li><a href="#">Show All</a></li>
							<li><a href="#">Latest Movies</a></li>
							<li><a href="#">Top Rated</a></li>
							<li><a href="#">Most Commented</a></li>
						</ul>
					</nav>-->
					<p class="copy">Student @ UTS <span>|</span> 2017 </p>
				</div>
			</div>
			<!-- end of shell -->
		</div>	
	</div>
	<!-- end of wrapper -->
</body>
</html>