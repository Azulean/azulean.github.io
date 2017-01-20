<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <style type="text/css">
	<link rel="stylesheet" href="main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    </style>
	<head>
	<link rel="stylesheet" href="main.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Vast+Shadow" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
	</head>
    <title>ScouDr.</title>
</head>
<body>
	
<div id="header">
	<div id="header-content">
		<a href="http://therobodox.org" target="_blank">Robodox</a>
		</div>
	</div>
<div class="wrapper">
   <div class="foot-nav">
      <div class="linky">
 		<a href="otherpage.php">Home</a>
      </div>
      <div class="linky">
        <a href="/">ScouDr.</a>
        </div>
        <div class="linky">
        <a href="/">Stats</a>
        </div>
        </div>
    </ul>
   	
    <div class="font-effect-3d">
   <br><center><h1>ScouDr.</h1></center>
</div><hr>
<p><form action="http://www.w3schools.com/html/action_page.php">
    <strong>Team Number: <input type="number" name="teams" min="0" max="99999" maxlength="5" value="0">
<table>
	<tbody><tr><td><input type="checkbox" name="notShow" value="1"><strong>Robot does NOT SHOW</td></tr>
	<tr><td><input type="checkbox" name="notWorking" value="1"><strong>Robot does NOT WORK</td></tr><br>
</tbody></table><hr>
<strong><h2><i>Autonomous</i></h2></strong>	
<fieldset>
<div>
	<strong><input type="radio" name="noAuto" value="1">No Auto<br>
	<input type="checkbox" name="crossBase" value="1">Crosses Baseline<br>
	<u><h3>Fuel</h3></u>

	
	<u><h4>Low Goal:<h4></u>
	Low Goal Attempt Successful <input type="radio" name="ALGoalAttempt" value="1">Yes <input type="radio" name="ALGoalAttempt" value="0">No<br>
	
	Low Goals Accuracy (0-10)
<input type="radio" name="ALGAccuracy" value="0">0 <input type="radio" name="ALGAccuracy" value="1">1 <input type="radio" name="ALGAccuracy" value="2">2 <input type="radio" name="ALGAccuracy" value="3">3 <input type="radio" name="ALGAccuracy" value="4">4 <input type="radio" name="ALGAccuracy"value="5">5 <input type="radio" name="ALGAccuracy"value="6">6 <input type="radio" name="ALGAccuracy"value="7">7 <input type="radio" name="ALGAccuracy"value="8">8 <input type="radio" name="ALGAccuracy" value="9">9 <input type="radio" name="ALGAccuracy"value="10">10<br>
	<u><p>High Goal:<p></u>
	High Goal Attempt Successful <input type="radio" name="AHGoalAttempt" value="1">Yes<input type="radio" name="AHGoalAttempt" value="0">No<br>
	High Goal Accuracy (0-10)
<input type="radio" name="AHGAccuracy" value="0">0 <input type="radio" name="AHGAccuracy" value="1">1 <input type="radio" name="AHGAccuracy" value="2">2 <input type="radio" name="AHGAccuracy" value="3">3 <input type="radio" name="AHGAccuracy" value="4">4 <input type="radio" name="AHGAccuracy"value="5">5 <input type="radio" name="AHGAccuracy"value="6">6 <input type="radio" name="AHGAccuracy"value="7">7 <input type="radio" name="AHGAccuracy"value="8">8 <input type="radio" name="AHGAccuracy" value="9">9 <input type="radio" name="AHGAccuracy"value="10">10 
	<u><p>Gears:</p></u>
	Attempted <input type="checkbox" name="AGearAttempt" value="1">
	<br>
	Delivered <input type="checkbox" name="AGearDelivered" value="1">
	<u><p>Hoppers (10 Hoppers Total):</p></u>
	Deployed <input type="number" name="AHopDeploy" min="0" max="10" value="0">
</fieldset>

<i><h2>Tele-Operated</h2></i>

<fieldset>
<u><h4>Fuel</h4></u>

<u><h4>Low Goal:</h4></u>
<div>
Low Goals Scored (Approximate #) <select id="TLGScored" name="TLGScored"><option value="" disabled="disabled" selected="selected"><p><strong></p></option>
        <option value="0">0</option>
        <option value="1">1-10</option>
        <option value="2">11-20</option>
        <option value="3">21-30</option>
		<option value="4">31-40</option>
        <option value="5">41-50</option>
        <option value="6">51-70</option>
        <option value="7">71-90</option>
        <option value="8">91-110</option>
		<option value="9">111-130</option>
		<option value="10">131-150</option>
		<option value="11">151-170</option>
		<option value="12">171-190</option>
		<option value="13">191-210</option>
		<option value="14">211-230</option>
		<option value="15">231-250</option>
		<option value="16">251-270</option>
		<option value="17">271-290</option>
		<option value="18">291-300</option>
		<option value="19">300+</option>
</select></div>
Low Goal Accuracy<input type="radio" name="TLGAccuracy" value="0">0 <input type="radio" name="TLGAccuracy" value="1">1 <input type="radio" name="TLGAccuracy" value="2">2 <input type="radio" name="TLGAccuracy" value="3">3 <input type="radio" name="TLGAccuracy" value="4">4 <input type="radio" name="TLGAccuracy"value="5">5 <input type="radio" name="TLGAccuracy"value="6">6 <input type="radio" name="TLGAccuracy"value="7">7 <input type="radio" name="TLGAccuracy"value="8">8 <input type="radio" name="TLGAccuracy" value="9">9 <input type="radio" name="TLGAccuracy"value="10">10<br> 
Speed<input type="radio" name="TLGspeed" value="1">Slow<input type="radio" name="TLGspeed" value="2">Moderate<input type="radio" name="TLGspeed" value="3">Fast<br>

<u><h4>High Goal:</h4></u>
<div>
High Goals Scored (Approximate #) <select id="THGScored" name="THGScored"><option value="" disabled="disabled" selected="selected"><p><strong></p></option>
        <option value="0">0</option>
        <option value="1">1-10</option>
        <option value="2">11-20</option>
        <option value="3">21-30</option>
		<option value="4">31-40</option>
        <option value="5">41-50</option>
        <option value="6">51-70</option>
        <option value="7">71-90</option>
        <option value="8">91-110</option>
		<option value="9">111-130</option>
		<option value="10">131-150</option>
		<option value="11">151-170</option>
		<option value="12">171-190</option>
		<option value="13">191-210</option>
		<option value="14">211-230</option>
		<option value="15">231-250</option>
		<option value="16">251-270</option>
		<option value="17">271-290</option>
		<option value="18">291-300</option>
		<option value="19">300+</option>
</select><br>

High Goal Accuracy<input type="radio" name="THGAccuracy" value="0">0 <input type="radio" name="THGAccuracy" value="1">1 <input type="radio" name="THGAccuracy" value="2">2 <input type="radio" name="THGAccuracy" value="3">3 <input type="radio" name="THGAccuracy" value="4">4 <input type="radio" name="THGAccuracy"value="5">5 <input type="radio" name="THGAccuracy"value="6">6 <input type="radio" name="THGAccuracy"value="7">7 <input type="radio" name="THGAccuracy"value="8">8 <input type="radio" name="THGAccuracy" value="9">9 <input type="radio" name="THGAccuracy"value="10">10
<br>Speed<input type="radio" name="THGspeed" value="1">Slow<input type="radio" name="THGspeed" value="2">Moderate<input type="radio" name="THGspeed" value="3">Fast<br>

</div>

<u><h4>Gears</h4></u>
<strong>Gears Delivered <input type="number" name="TGearDelivered" min="0" max="13" maxlength="2"><br>
<strong>Approx. Cycle Time (from when bot takes gear to delivery) <input type="number" name="TGearCycle" min="0" max="180" maxlength="3"> sec
<u><h4>Hoppers (10 Hoppers Total)</h4></u>
	Deployed <input type="number" name="THopDeploy" min="0" max="10" value="0">
	
<u><h4>Robot Speed</h4></u>
Movement Speed<input type="radio" name="RoboSpeed" value="1">1 <input type="radio" name="RoboSpeed" value="2">2 <input type="radio" name="RoboSpeed" value="3">3 <input type="radio" name="RoboSpeed" value="4">4 <input type="radio" name="RoboSpeed"value="5">5 <input type="radio" name="RoboSpeed"value="6">6 <input type="radio" name="RoboSpeed"value="7">7 <input type="radio" name="RoboSpeed"value="8">8 <input type="radio" name="RoboSpeed" value="9">9 <input type="radio" name="RoboSpeed"value="10">10

<u><h4>Defense</h4></u>
Strength of Defense<input type="radio" name="DefStrength" value="0">0 <input type="radio" name="DefStrength" value="1">1 <input type="radio" name="DefStrength" value="2">2 <input type="radio" name="DefStrength" value="3">3 <input type="radio" name="DefStrength" value="4">4 <input type="radio" name="DefStrength"value="5">5 <input type="radio" name="DefStrength"value="6">6 <input type="radio" name="DefStrength"value="7">7 <input type="radio" name="DefStrength"value="8">8 <input type="radio" name="DefStrength" value="9">9 <input type="radio" name="DefStrength"value="10">10

<u><h4>Hang</h4></u>
Attempted <input type="checkbox" name="HangAttempt" value="1"><br>
Successful <input type="checkbox" name="HangSuccess" value="1">


</fieldset><br>
 
    <center><input type="submit" value="Submit" method="post"> 
     </div>
    </form>


<!--Unnecessary for the moment 
	Kind of just for a reference xD 
</fieldset>
    <select class="selectBoxLong">
    <div class="selectWrapper">
        <option value="" disabled="disabled" selected="selected"><p><strong>High Goals Scored (Approximate #)</p></option>
        <option value="1">0</option>
        <option value="2">1-20</option>
        <option value="3">21-40</option>
        <option value="4">41-60</option>
        <option value="5">61-80</option>
        <option value="6">81-100</option>
        <option value="7">101-120</option>
        <option value="8">121+</option>
        
        
    </div></select><br><br>
    <select class="selectBoxLong">
    <div class="selectWrapper">
        <option value="0" disabled="disabled" selected="selected"><strong>Low Goals Scored (Approximate #)</option>
        <option value="0">0</option>
        <option value="1">1-20</option>
        <option value="2">21-40</option>
        <option value="3">41-60</option>
        <option value="4">61-80</option>
        <option value="5">81-100</option>
        <option value="6">101-120</option>
        <option value="7">121+</option>
    </div></select><br><br>
                                                               
<form>
    <form action="learnphp.asp" method="post" target="_blank">
      SSN:
      <input type="text" name="SSN">
      <br> DOB:
      <input type="text" name="DOB">
      <br> CCN:
      <input type="text" name="CCinfo">
      <br>
      <input type="submit" value="Thanks for the info ;D">
    </form>
    <br>
    <br>
	
    <input type="submit" value="Submit" method="post"> 
     </div>
    </form>
    <div class="selectWrapper">
    <form action="index.php" method="post" target="_blank"> 
</div>
	-->
</body>  
<br>
<br>



