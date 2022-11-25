<?php
session_start();
?>
<html>
    <body>
        <?php
        $_SESSION["Name"]="Shreya";
        $_SESSION["Surname"]="Barad";
        //echo "Session Created Successfully!<br>";
        //Printing The Variable
        //print_r($_SESSION);
        //echo "My Name is: ".$_SESSION["Name"];
        //echo "<br>";
        //echo "My Surname is: ".$_SESSION["Surname"];
        //echo "<br>"
        //To Change a Session Variable, just Overwrite it!
        $_SESSION["Name"]="Gouri";
        echo "My Name is: ".$_SESSION["Name"];
        echo "<br>";
        echo "My Surname is: ".$_SESSION["Surname"];
        echo "<br>"
    ?>
    </body>
</html>