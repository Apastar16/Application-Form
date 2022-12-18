<DOCTYPE html>
    <html>
        <head>
            <title>Application form for school ID</title>
            <style>
            .border-decor {
  border-style: solid;
  border-width: medium;
}
            a:link, a:visited {
  background-color: skyblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: hotpink;
}
                .error {color: white;}
                .button {
                    
                   border: none;
                   color: black;
                   padding: 5px;
                   text-align: center;
                   text-decoration: none;
                   display: inline-block;
                   font-size: 20px;
                   margin: 4px 2px;
                   cursor: pointer;
                   opacity:0.7;
                   
                     }
                     .button1{
                     border-radius:11px;}
                     .button1:hover{
                     box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                     }
                </style>
        </head>
        <?php

$fnameErr =$lnameErr = $languageErr ="";
        $lname = $fname = $language = $elective1 = $elective2 = "";
        $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["language"])) {
    $languageErr = "Computer language is required";
  } else {
    $language = test_input($_POST["language"]);
  }
 if($_POST["city"]){
            $city = test_input($_POST["city"]);
 }
 if(empty($_POST["elective1"])){
            $elective1= "";}
            else{
  $elective=test_input($_POST["elective1"]);
 }
 if(empty($_POST["elective2"])){
  $elective2= "";}
  else{
$elective=test_input($_POST["elective2"]);
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfTJPZlY0qplBUj7NtZWV9K9qCqDNweN_zWIOH7dg&s" alt="nsut logo"></center>
        <body style=background-color:MediumSeaGreen;>
            <center><h1>Application form for ID Card</h1></center>
            <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

                <fieldset>
                    <legend>Personal Details</legend>
                    <p><span class="error">* required field</span></p>
                <label for="fname">First name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $fname;?>"  style="border-radius:11px;"class="border-decor">
  <span class="error">* <?php echo $fnameErr;?></span><br><br>
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname"value="<?php echo $lname;?>" style="border-radius:11px;" class="border-decor">
  <span class="error">* <?php echo $lnameErr;?></span>
                <p>Choose your computer language:</p>
                <input type="radio" id="c++" name="language"<?php if (isset($language) && $language=="C++") echo "checked";?> value="C++">
                <label for= "c++">C++</label><br>
                <input type="radio" id="python" name="language" <?php if (isset($language) && $language=="PYTHON") echo "checked";?> value="PYTHON">
                <label for ="python">PYTHON</label>
                <span class="error">* <?php echo $languageErr;?></span>
                <br><br>
                <label>Select City</label>
                <select style="border-radius:11px; font-style: italic;
" class="border-decor" name="city">
                     <option value="none">--None--</option>
                    <option value="JAIPUR">Jaipur</option>
                    <option value="DELHI">Delhi</option>
                    <option value="MEERUT">Meerut</option>
                    <option value="VARANASI">Varanasi</option>
                    
                </select> 
                <p>Choose your elective</p>
                <input type="checkbox" id="Elective1" name="elective1"value="Soft_skills">
                <label for="Elective1">Soft Skills and personality development</label><br>
                <input type="checkbox" id="Elective2" name="elective2" value="Innovation">
                <label for="Elective2">Innovation,Business Models and Entrepreurship</label><br><br>
                <p>For further information visit our website:</p>
               
                
                <a href="http://www.nsut.ac.in">Click here</a>
                <center><input type="Submit" class="button button1" style="background-color:skyblue; color:black;"></center>

</fieldset>
            </form>
            <?php
echo "<h2>Your Input:</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $language;
echo "<br>";
echo $city;


?>
        </body>
    </html>
</DOCTYPE>