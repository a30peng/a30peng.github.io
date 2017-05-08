<?
/* ------------------------- Document Structure Functions ---------------------------- */

// Print html header with bootstrap css and page title
function print_html_header2($title) {
	if ($title != "Login")
		$menu = make_menu_bs($title);

	echo '
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>'.$title.'</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			'.$menu.'
			<div class="content">
	';
}

// Print html footer with bootstrap js
function print_html_footer2() {
	echo '
			</div> <!-- /content -->			 
		</div> <!-- /container -->			 
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
	';
}

// Get main menu items
function get_menu_items($title) {
	$items['home.php'] = "Home";
	$items['trivia.php'] = "Play Trivia";
	$items['leader.php'] = "View Leader Board";
	$items['rank_question.php'] = "Rank Questions";
	$items['insert_question.php'] = "Insert Question";
	
	if ($_SESSION['usertype'] == "admin") {	
		$items['insert_user_admin.php'] = "Insert User";
		$items['delete_question.php'] = "Delete Question";
		$items['delete_user.php'] = "Delete Users";
		
	}		
	$items['logout.php'] = "Logout";
		
	foreach ($items as $key=>$value) {
		$active = '';
		if ($value==$title) $active = "active";
		$menu_items .= '
		  <li class="nav-item">
		    <a class="nav-link '.$active.'" href="'.$key.'">'.$value.'</a>
		  </li>
		';
	}
	return $menu_items;
}

// Make main menu with basic Bootstrap classes
function make_menu($title) {;	
	$menu = '<ul class="nav nav-pills">';
  $menu .= get_menu_items($title);
	$menu .= '</ul>';
	return $menu;
}

// Make main menu with responsive Bootstrap classes
function make_menu_bs($title) {
	$menu = '
	<nav class="navbar navbar-inverse bg-inverse navbar navbar-toggleable-md navbar-light bg-faded">
  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
  	        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="home.php">Trivia</a>
		<div class="collapse navbar-collapse" id="navbarNav">
    	<ul class="navbar-nav">';
	$menu .= get_menu_items($title);
	$menu .= '
			</ul>
		</div>
	</nav>
	</nav>';
	return $menu;
}



// Print html header with bootstrap css and page title
function print_html_header($title) {
	$items['home.php'] = "Home";
	$items['insert_question.php'] = "Insert Question";	
	$items['trivia.php'] = "Play Trivia";	
	$items['leader.php'] = "View Leader Board";	
	$items['showUserTable.php'] = "View Users";
	
	if($_SESSION['usertype'] == 'admin'){
		$items['delete_question.php'] = "Delete Question";	
	}
	$items['logout.php'] = "Logout";	
	if($title == "Login"){
		$menu = "";
	}
	else{
		$menu = '<ul class="nav nav-pills">';
		foreach ($items as $key=>$value) {
			$active = "";
			if ($value==$title) $active = "active";
			$menu .= '
			<li class="nav-item">
				<a class="nav-link '.$active.'" href="'.$key.'">'.$value.'</a>
			</li>';
			}
		
		}
		$menu .= '</ul>';
	
	
	echo '
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <title>'.$title.'</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			'.$menu.'
			<h2>'.$title.'</h2>
	';
}

// Print html footer with bootstrap js
function print_html_footer() {
	echo '
		</div> <!-- /container -->	
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>
	';
}
?>