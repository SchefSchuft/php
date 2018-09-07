<!DOCTYPE html>
<html lang="de">
	<!-- PHP Script from Elizabeth Castro -->
	<head>
		<meta charset="utf-8"> 
		<title>Processing Form Data</title>
        <style type="text/css">	<!-- direkte Einbettung von CSS -->
            code {color:#F00C4D; font-weight:bold; font-size:1.2em}
            i {color: #6D0CF0}
            th, td {padding:.1em; border:1px solid blue; text-align:left}
            p {font-size:.9em; font-style:italic}
        </style>
	</head>
	<body>
		<p>This is a very simple PHP script that outputs the name of each bit of information (
            that corresponds to the <code>name</code> attribute for that field) along with the
            value that was sent with it right in the browser window.
        </p>
        <p>In a more useful script, you might store this information in a MySQL database, or send
            it to your email address.
        </p>
        
        <form action="" method="post">
			<input type="text" size="17" name="firstName">
			<input type="text" size="17" name="lastName">
			<input type="submit" value="OK">
		</form>
       
        <table>
			<tr>
				<th>Vorname</th>
				<th>Nachname</th>
            </tr>
            
			<?php
				if(isset($_POST['firstName']) and isset($_POST['lastName'])){
					echo '<tr>';
					echo '<th>', $_POST['firstName'], '</th>';
					echo '<th>', $_POST['lastName'], '</th>';
					echo '</tr>';
				}
			?>   <!-- End PHP-Script -->
			
		</table>
	</body>
</html>