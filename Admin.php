<html>
<body>
<!-- Admin panel to display data recorded -->
<?php
	$dbc = mysqli_connect('localhost','root','');
		mysqli_select_db($dbc,'formbooking');
		
		$query = 'SELECT * FROM booking ORDER BY name1 DESC';
	if($r=mysqli_query($dbc,$query)){
		while($row=mysqli_fetch_array($r)){
			print "<p><h3>Name:{$row['name1']}</h3>breakfast:{$row['breakfast']}<br/>adult for train:{$row['adulttrain']}<br/>children for train:{$row['childrentrain']}<br/>Owl Museum:{$row['owlmuseum']}<br/>Room for adult:{$row['roomadult']}<br/>Room for childrent:{$row['roomchildren']}<br/>Email address:{$row['email']}<br/>Phone number:{$row['phonenumber']}<br/>
			</p><hr/>\n";
		}
	}
	else{
		print '<p style="color: red;">Could not retrieve the data because:<br />' .mysqli_error($dbc).
		'.</p><p?The query being run was:' . $query. '</p>';
	}
	mysqli_close($dbc);

?>
</body>
</html>