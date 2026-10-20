<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="POST" enctype="multipart/form-data">
        <label for="file">Select file:</label>
        <input type="file" name="stdImage" id="stdImage">
        <!-- Rename the original file name -->
        <label for="file_name">Rename file:</label>
        <input type="text" name="file_name" id="file_name">
        <br><br>
        <input type="submit" value="Upload">
        </form>
        
    <?php
    // Read all info from the file
    if(!empty($_FILES['stdImage']))
        {
            // File Name
            echo "File name is: " .$_FILES['stdImage']['name']."<hr>";
            // File Type
            echo "File Type is: " .$_FILES['stdImage']['type']."<hr>";
            // File size
            echo "File Size is: " .$_FILES['stdImage']['size']."<hr>";
            // Where saved the destination of temporary
            echo "File Name Temp name is: " .$_FILES['stdImage']['tmp_name']."<hr>";
            // Rename the file name
            $ext= explode(".", $_FILES['stdImage']['name']);
            $ext= end($ext);
            //loop through multiple files
            for($i=0;$i<count($_FILES['stdImage']['name']); $i++){
                echo "File Name:".$_FILES['stdImage']['name'][$i];
                echo "<hr";
                 echo "File Size:".$_FILES['stdImage']['Size'][$i];
                 echo "<hr";
                 echo "Temporary Name:".$_FILES['stdimage']['temp_name'][$i];
                 echo "<hr";
                 echo"fiile type:".$_FILES['stdimage']['type'][$i];
                 echo "<hr"
            }
            // Move  file temp to Final destination
            $tempFile = $_FILES['stdImage']['tmp_name'];
            $finalDestination = "D:/University/php/" . $_POST['file_name'] . "." . $ext;
            // Check if file exist
            if(file_exists($finalDestination))
            {
                echo "File already exist.";
            }
            else
            {
                // Check file size
                if($_FILES['stdImage']['size'] > 10*1024)
                {
                    echo "File size is too large.";
                }
                else
                {
                    // Move file to final destination
                if(move_uploaded_file($tempFile, $finalDestination))
                {
                    echo "File uploaded successfully.";
                }
                else
                {
                    echo "Error uploading file.";
                }
            }
        } 
    }

    
    ?>
    
    
</body>
</html>