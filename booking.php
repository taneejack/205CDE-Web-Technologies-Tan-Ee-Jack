<?php
	require('header.php');
?>
<style>
	.parallax { 
    background-image: url("image/garden.jpg");
    height: 50%; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<!-- Javascript to count the total price or expenses they are going to spend -->
<script type="text/javascript">
	function count(){
		var total;
		
		var breakfast;
		var adulttrain;
		var childrentrain;
		var owlmuseum;
		var roomadult;
		var roomchildren;
		
		breakfast = parseInt(document.form1.breakfast.value)*40
		adulttrain = parseInt(document.form1.adulttrain.value)*10
		childrentrain = parseInt(document.form1.childrentrain.value)*3
		owlmuseum = parseInt(document.form1.owlmuseum.value)*12
		roomadult = parseInt(document.form1.roomadult.value)*420
		roomchildren = parseInt(document.form1.roomchildren.value)*210
		
		document.form1.total.value = breakfast + adulttrain + childrentrain + owlmuseum + roomadult + roomchildren;
		
				
	}

</script>
<!-- Connect to database and also set the variables -->
<?php
	if(isset($_POST['submitted'])){
		$dbc=mysqli_connect('localhost','root','');
		mysqli_select_db($dbc,'formbooking');
		$problem=FALSE;
	
	if(!empty($_POST['breakfast'])&&!empty($_POST['adulttrain'])&&!empty($_POST['childrentrain'])&&!empty($_POST['owlmuseum'])&&!empty($_POST['roomadult'])&&!empty($_POST['roomchildren'])&&!empty($_POST['name1'])&&!empty($_POST['email'])&&!empty($_POST['phonenumber'])){
		$breakfast=trim($_POST['breakfast']);
		$adulttrain=trim($_POST['adulttrain']);
		$childrentrain=trim($_POST['childrentrain']);
		$owlmuseum=trim($_POST['owlmuseum']);
		$roomadult=trim($_POST['roomadult']);
		$roomchildren=trim($_POST['roomchildren']);
		$name1=trim($_POST['name1']);
		$email=trim($_POST['email']);
		$phonenumber=trim($_POST['phonenumber']);
		
		
	}
	
	else{
		print '<p style="color=:red;">Please FILL  UP THE FORM.</p>';
		$problem=TRUE;
	}
	
	if(!$problem){
			
			$query = "INSERT INTO booking(breakfast,adulttrain,childrentrain,owlmuseum,roomadult,roomchildren,name1,email,phonenumber) VALUES ('$breakfast','$adulttrain','$childrentrain','$owlmuseum','$roomadult','$roomchildren','$name1','$email','$phonenumber')";
			
			if(mysqli_query($dbc,$query)){
				print '<p>The blog entry has been added!</p>';
			}	
			
			else{
				print '<p style="color;red;">Could not add the entry because:<br />' .mysqli_error($dbc).'. </p><p>
				The query was: ' .$query.'</p>';
			}
		}
		
		mysqli_close($dbc);
		
		}
?>

<div class="parallax"></div>
<!-- Forms for user to key in input -->
<div class="containerforbookings" style="text-align:center;">
	<h2 style="text-align:center;">Calculate your cost</h2>
	<select name="packages">
		<option value="3d2n">3D2N Penang Half Day Tour Package Custom Made</option>
	</select>
	
<!-- Require user to key in input for calculation -->	
	<h4 style="text-align:center;">Please enter the amount of people for the package and enter 0 if none:</h4>
	<div class="forform" style="margin-left:22.5%; max-width:42%;">
		<form action="booking.php" name="form1" method="post" style="text-align:left; padding-left:30%; padding-bottom:5%;">
		<p>Breakfast For 2 days:  <input type="text" name="breakfast" style="float:right" /></p>
		<p>Penang Hill Train For Adults: <input type="text" name="adulttrain" style="float:right" /></p>
		<p>Penang Hill Train For Children: <input type="text" name="childrentrain" style="float:right"/> </p>
		<p>The owl museum For Adults: <input type="text" name="owlmuseum" style="float:right"/> </p>
		<p>Rooms For Adults: <input type="text" name="roomadult" style="float:right"/> </p>
		<p>Rooms For Childrens: <input type="text" name="roomchildren" style="float:right"/> </p>
		<br />
		<div style="text-align:center;">
		<button type="button" value="Plus" onclick="count()">Calculate</button>
		<input type="text" name="total">
		<br /><br/>
		</div>
		<p>Name: 
		<select name="title">
			<option value="Mr.">Mr.</option>
			<option value="Mrs.">Mrs.</option>
			<option value="Ms.">Ms.</option>
		</select>
		<input type="text" name="name1" size="20" style="float:right"/></p>
		<p>Email address: <input type="text" name="email" style="float:right"/></p>
		<p>Phone number: <input type="text" name="phonenumber"  style="float:right"/></p>
		<p>State:
		<select name="state">
			<option value="penang">Penang</option>
			<option value="perlis">Perlis</option>
			<option value="kualalumpur">Kuala Lumpur</option>
			<option value="johor">Johor</option>
			<option value="selangor">Selangor</option>
			<option value="perak">Perak</option>
			<option value="kedah">Kedah</option>
			<option value="kelantan">Kelantan</option>
			<option value="terengganu">Terengganu</option>
			<option value="sabah">Sabah</option>
			<option value="sarawak">Sarawak</option>
		</select>
		</p>
		<br />
		<div style="text-align:center;">
		<input type="submit" name="submit" value="Post This Entry"/>
		<input type="hidden" name="submitted" value="true"/>
		</div>
	</form>
	
	</div>
	
<?php
	require('footer.php');
?>
