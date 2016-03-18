<?php
include('db-connection/db.conn.php');
function printCalendar(){
    
    $success = false;
    
	// check if all drop-downs are selected
    if(isset($_GET["month"]) && $_GET["month"] != "default" && 
       isset($_GET["day"]) && $_GET["day"] != "default" && 
       isset($_GET["year"]) && $_GET["year"] != "default"){
        $success = true;
    }
    
    $months = array( "January",
                     "February",
                     "March",
                     "April",
                     "May",
                     "June",
                     "July",
                     "August",
                     "September",
                     "October",
                     "November",
                     "December" );
    
	// print drop-down for months
    echo "<select name=\"month\">";
    echo "<option value=\"default\">Select month</option>";
    for($i=0; $i<sizeof($months); $i+=1){
        echo "<option " . ($_GET["month"] == $months[$i] && !$success ? 'selected=\"true\"' : "") . ">" . $months[$i] . "</option>";
    }
    echo "</select>";
    
    // print drop-down for days
    echo "<select name=\"day\">";
    echo "<option value=\"default\">Select day</option>";
    for($i=1; $i<=31; $i+=1){
        echo "<option " . ($_GET["day"] == $i && !$success ? 'selected=\"true\"' : "") . ">" . $i . "</option>";
    }
    echo "</select>";
    
    // print drop-down for years
    echo "<select name=\"year\">";
    echo "<option value=\"default\">Select year</option>";
    for($i=date("Y"); $i>=1900; $i-=1){
        echo "<option " . ($_GET["year"] == $i && !$success ? 'selected=\"true\"' : "") . ">" . $i . "</option>";
    }
    echo "</select>";
}



function evaluateCalendar(){
    
    $err = "";
    
    if(isset($_GET["send"])){
        
		// sanitize $_GET array
        foreach($_GET as $k=>$v){
            $_GET[$k] = trim(strip_tags($v));
        }
        
		
		// evaluate drop-downs
        if($_GET["month"] != "default"){
            $m = $_GET["month"];
        } else {
            $err = "<p>Month?</p>";
        }
        
        if($_GET["day"] != "default"){
            $d = $_GET["day"];
        } else {
            $err .= "<p>Day?</p>";
        }
        
        if($_GET["year"] != "default"){
            $y = $_GET["year"];
        } else {
            $err .= "<p>Year?</p>";
        }
        
        
        // create feedback
        if(!empty($m) && !empty($d) && !empty($y)){
            $feed = "<p>You selected:</p>";
            $feed .= "<p>" . $m . " " . $d . ", " . $y . "</p>";
            
        
            //Query for general content:
            
            // check year range
            if ($_GET["year"] <= 1945) {
                
                $query= "SELECT gen_content, gen_img FROM gen_table WHERE type = 'M'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>MATURES</h1>';
                    echo '<img src="images/' . $row['gen_img'] . '">';
                    echo '<p>' . $row['gen_content'] . '</p>';
                }
            }
            
            
            elseif ($_GET['year'] >= '1946' && $_GET['year'] <= '1966' ) {
                
                $query= "SELECT gen_content, gen_img FROM gen_table WHERE type = 'B'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Baby Boomers</h1>';
                    echo '<img src="images/' . $row['gen_img'] . '">';
                    echo '<p>' . $row['gen_content'] . '</p>';
                }
            }
            
          elseif ($_GET['year'] >= '1966' && $_GET['year'] <= '1980' ) {
                
                $query= "SELECT gen_content, gen_img FROM gen_table WHERE type = 'X'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Generation X</h1>';
                    echo '<img src="images/' . $row['gen_img'] . '">';
                    echo '<p>' . $row['gen_content'] . '</p>';
                }
            }  
           elseif ($_GET['year'] >= '1966' && $_GET['year'] <= '1980' ) {
                
                $query= "SELECT gen_content, gen_img FROM gen_table WHERE type = 'X'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Generation X</h1>';
                    echo '<img src="images/' . $row['gen_img'] . '">';
                    echo '<p>' . $row['gen_content'] . '</p>';
                }
            }  
           elseif ($_GET['year'] >= '1981' && $_GET['year'] <= '2000' ) {
                
                $query= "SELECT gen_content, gen_img FROM gen_table WHERE type = 'Y'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Generation Y</h1>';
                    echo '<img src="images/' . $row['gen_img'] . '">';
                    echo '<p>' . $row['gen_content'] . '</p>';
                }
            }    
        }
         //Query for specific content:
         if ($_GET["year"] <= 1945) {
                
                $query= "SELECT spec_content, spec_img FROM spec_table WHERE type = 'M'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>MATURES</h1>';
                    echo '<img src="images/' . $row['spec_img'] . '">';
                    echo '<p>' . $row['spec_content'] . '</p>';
                }
            }
          elseif ($_GET['year'] >= '1946' && $_GET['year'] <= '1966' ) {
                
                $query= "SELECT spec_content, spec_img FROM spec_table WHERE type = 'B'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Baby Boomers</h1>';
                    echo '<img src="images/' . $row['spec_img'] . '">';
                    echo '<p>' . $row['spec_content'] . '</p>';
                }
            }
            elseif ($_GET['year'] >= '1966' && $_GET['year'] <= '1980' ) {
                
                $query= "SELECT spec_content, spec_img FROM spec_table WHERE type = 'X'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Generation X</h1>';
                    echo '<img src="images/' . $row['spec_img'] . '">';
                    echo '<p>' . $row['spec_content'] . '</p>';
                }
            }  
         elseif ($_GET['year'] >= '1981' && $_GET['year'] <= '2000' ) {
                
                $query= "SELECT spec_content, spec_img FROM spec_table WHERE type = 'Y'";
                $result= mysqli_query($GLOBALS["conn"],$query);

                while ($row = mysqli_fetch_assoc($result) ) {
                    echo '<h1>Generation Y</h1>';
                    echo '<img src="images/' . $row['spec_img'] . '">';
                    echo '<p>' . $row['spec_content'] . '</p>';
                }
            }    
        // print feedback or errors
        if(isset($err)){
            echo $err;
        }
        
        if(isset($feed)){
            echo $feed;
        }
    }
}
?>