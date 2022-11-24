<?php
#copy(source,destination);
if(copy("CreatingOpeningAndClosingAFile.txt","CreatingATextFileThroughFormSubmitButton.txt"))
{
    echo "File Copied";
}
else{
    echo "File NOT Copied!";
}
?>