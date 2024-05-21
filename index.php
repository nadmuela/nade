<!DOCTYPE html>
<html>
<body>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("form").submit(function(){
			var height = document.getElementById("height").value;
            var weight = document.getElementById("weight").value;
            var bmi = Math.round(weight/(height*height)*10)/10;
            document.getElementById("bmiScore").innerHTML = bmi;
            if (bmi < 18.5) {
	            document.getElementById("bmiInfo").innerHTML = "EAT MORE!";
            } else if ((bmi > 24.9)) {
            	document.getElementById("bmiInfo").innerHTML = "Slim Down.";
            } else {
            	document.getElementById("bmiInfo").innerHTML = "Just right!";
			}
        });
    });
</script>
 
<?php
	function calc() {
      	$txt = "kg/m2";
    	echo "BMI = $txt!";
	}
?>
 
<h2><?php echo calc(); ?></h3>
 
<form id="form" onsubmit="event.preventDefault();">
<label for="fname">Height (m):</label>
<input type="text" id="height" name="height"><br><br>
<label for="lname">Weight (kg):</label>
<input type="text" id="weight" name="weight"><br><br>
<input type="submit" value="Submit">
</form>
 
<h2 id="bmiScore" name="bmiScore"></h2>
<h3 id="bmiInfo"></h3>
 
</body>
</html>