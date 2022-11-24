<?php
//Here foreach is used because there are multiple files to be retrieved!
if(isset($_POST["Upload"])){
    $file=$_FILES["UploadFile"];
    echo "<pre>";
    print_r($file);
    foreach($_FILES["UploadFile"]["name"] as $key=>$val){
        $FileUploaded=move_uploaded_file($_FILES["UploadFile"]["tmp_name"][$key],"Store_File/".$val);
    }
    if($FileUploaded){
        echo "File Uploaded Successfully!";
    }
    else{
        echo "File Has Not Yet Been Uploaded!";
    }
}
?>