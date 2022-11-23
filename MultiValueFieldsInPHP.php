<html>
    <head>
        <title>Data Dealing with Multi-Value Fields</title>
    </head>
    <body>
        <h1><u>Data Dealing with Multi-Value Fields</u></h1>
        <h2><u>Registration Form</u></h2>
        <form action="Multi_Value_Fields_In_PHP.php" method="get">
<!--Personal Data--> 
            <fieldset style="width:200px">
            <legend>Personal Data</legend>
            <label for="name">Name</label>
            <input type="text" name="name"/>
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <label for="FatherName">Father Name</label>
            <input type="text" name="FatherName"/>
            <label for="MotherName">Mother Name</label>
            <input type="text" name="MotherName"/>
            <label for="RollNumber">Roll Number</label>
            <input type="number" name="RollNumber"/>
            </fieldset>
<!--Platform Interested--> 
            <fieldset style="width:200px">
            <legend>Platform Interested</legend>
            <input type="checkbox" name="platform_interested[]" value="PHP"/>
            <label for="PHP">PHP Programming</label><br>
            <input type="checkbox" name="platform_interested[]" value="IoT"/>
            <label for="IoT">Internet of Things</label><br>
            <input type="checkbox" name="platform_interested[]" value="Ethics and Cyber Law"/>
            <label for="Ethics and Cyber Law">Ethics and Cyber Law</label><br>
            <input type="checkbox" name="platform_interested[]" value="Android"/>
            <label for="Android">Android Programming</label><br>
            <input type="checkbox" name="platform_interested[]" value="GitHub"/>
            <label for="GitHub">GitHub</label><br>
            </fieldset>
<!--City Interested-->
            <fieldset style="width:200px">
            <legend>City Interested</legend>
            <select name="select_the_city[]" size="4" multiple="multiple">
            <option value="Aurangabad">Aurangabad</option><br>
            <option value="Hyderabad">Hyderabad</option><br>
            <option value="Bengaluru">Bengaluru</option><br>
            <option value="Kolkata">Kolkata</option><br>
            </select>
            </fieldset>
<!--Submit Button-->
            <input type="Submit" name="submit_button" value="save"/>
        </form>
    </body>
</html>