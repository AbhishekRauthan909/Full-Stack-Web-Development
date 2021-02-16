<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<script type="text/javascript">
function chkcontrol(j) {
var total=0;
for(var i=0; i < document.form1.ineterst.length; i++){
if(document.form1.ineterst[i].checked){
total =total +1;}
if(total > 5){
alert("Please Select only five") 
document.form1.ineterst[j].checked = false ;
return false;
}
}
} </script>
</head>
<body>
<table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>City</th>
            <th>Course</th>
            <th>Interests</th>
</tr>
          <tr>
              <td> <?php echo $_POST["username"]; ?></td>
              <td> <?php echo $_POST["email"]; ?></td>
               <td>
			   <?php echo $_POST["contact"]; ?></td>
               <td> <?php echo $_POST["city_selected"]; ?></td>
               <td> 
			   <?php echo $_POST["course_select"]; ?></td>
			   <td><?php  echo $_POST["ineterst"]; ?></td>
           </tr>
    </table>
	<form name="form1" method="post" action="index.php">
		<br>
		<div>
			<label for="user">NAME</label>
			<input type="text" id="user" name="username" placeholder="Enter the username" required>
		</div>
		<br>
		<div>
			<label for="mail">EMAIL</label>
			<input type="email" name="email" id="mail" placeholder="Enter your email" required>
		</div>
		<br>
		<div>
			<label for="no">Contact</label>
			<input type="number" id="no" name="contact"  placeholder="Enter your contact no.">
		</div>
		<br>
		<div>
			Select city
			<select name="city_selected">
			<option>Dehradun</option>
			<option>Rishikesh</option>
			<option>Pauri</option>
			<option>Narendra Nagar</option>
			</select>
		</div>
		<br>
		<div>
			Course
			<select name="course_select">
				<option>Btech</option>
				<option>IT</option>
				<option>BSC Hons</option>
				<option>Bcom</option>
				<option>Biotech</option>
			</select>
		</div>
		<br>
		<div>
			Interests &nbsp
			<input type="checkbox" name="ineterst" value="Programming" onclick='chkcontrol(0)'>Programming,
			<input type="checkbox" name="ineterst" value="Sports" onclick='chkcontrol(1)'>Sports,
			<input type="checkbox" name="ineterst" value="Reading" onclick='chkcontrol(2)'>Reading,
			<input type="checkbox" name="ineterst" value="Games" onclick='chkcontrol(3)'>Games
			<input type="checkbox" name="ineterst" value="Sleep" onclick='chkcontrol(4)'>Sleep
			<input type="checkbox" name="ineterst" value="Dance" onclick='chkcontrol(5)'>Dance
			<input type="checkbox" name="ineterst" value="Ludo" onclick='chkcontrol(6)'>Ludo
		</div>
		<div>
			<input type="submit" value="Click here to submit your data">
		</div>
	</form>
</body>
</html>