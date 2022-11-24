<html>
    <head>
        <title>Multiple File Uploading in PHP</title>
    </head>
    <body>
        <form action="Multiple_File_Uploading_In_PHP.php" method="post" enctype="multipart/form-data" >
            <label for="UploadFile">UploadFile</label>
            <input type="file" name="UploadFile[]" multiple/>
            <input type="Submit" name="Upload" value="SubmitTheFile"/>
        </form>
    </body>
</html>