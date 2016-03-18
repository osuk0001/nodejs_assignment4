<?php 
include("handle-calendar.php"); 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Calendar</title>
    </head>
    
    <body>
        <form method="get" action="<?php $_SERVER["PHP_SELF"] ?>">
            <fieldset>
                <legend>Calendar</legend>
                <?php printCalendar(); ?>
                <input type="submit" name="send" id="send" value="Send">
            </fieldset>
        </form>
        <?php evaluateCalendar(); ?>
    </body>
</html>















