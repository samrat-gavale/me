<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Samrat Gavale | <?php echo $subpage; ?></title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src="includes/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){


    $(".slidingDiv").hide();
	$(".show_hide").show();
	
	$('.show_hide').click(function(id){
	$(".slidingDiv#1").slideToggle();
	});

});

function toggleDivById(id){
	$('.slidingDiv#'+id).slideToggle();
}
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Samrat Gavale </a></h1>
			<p>some text</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="menu">
					<ul>
						<li class="current_page_item"><a href="index.php">Home</a></li>
						<li><a href="projects.php">Projects</a></li>
						<li><a href="resume.php">Resume</a></li>
						<li><a href="bolgs.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<!-- end #menu -->
