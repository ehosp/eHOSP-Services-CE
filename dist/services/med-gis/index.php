<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical GIS</title>
	<?php
		include '../../includes/html/head.html';
	?>
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/php/header.php';
		?>

		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>Medical Geographic Information System</h1>
	        <p>

			</p>
			<ul id="buttons">
				<li>
					<button type="button" class="services" onclick="location.href='services/med-gis/maps.php';">
						Maps
					</button>
				</li>
			</ul>
      	</div>

      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>

	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>