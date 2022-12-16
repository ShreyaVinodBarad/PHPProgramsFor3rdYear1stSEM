<html>
    <head>
        <title>Generating File Uploading Form</title>
    </head>
    <body>
        <form action="Generating_A_File_Uploading_Form.php" method="post" enctype="multipart/form-data">
            <h1><b>Generating File Uploading Form</b></h1>
            <label for="name">Name</label>
            <input type="name" name="name"/>
            <label for="email">Email</label>
            <input type="email" name="email"/>
            <label for="password">Password</label>
            <input type="password" name="password"/>
            <label for="uploading_file">Uploading File</label>
            <input type="file" name="file">
            <input type="Submit" name="Upload" value="Submit"/>
        </form>
    </body>
</html>