<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    form {
        max-width: 400px;
        margin: 0 auto;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    input[type="submit"], input[type="reset"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover, input[type="reset"]:hover {
        background-color: #45a049;
    }
</style>
<body>
    <?php
    // Creating form (user & password)
    echo "<form method='post'>";
    // Input & Label of User
    echo "<label for='user'>User:</label>";
    echo "<input type='text' id='user' name='user' required><br><br>";
    // Input & Label of Password
    echo "<label for='password'>Password:</label>";
    echo "<input type='password' id='password' name='password' required><br><br>";
    // Input & Label of textarea
    echo "<label for='textarea'>Textarea:</label>";
    echo "<textarea id='textarea' name='textarea' rows='6' cols='30'></textarea><br><br>";
    // Radio Button of Gender
    echo "<label for='gender'>Gender:</label>";
    echo "<input type='radio' id='male' name='gender' value='male'> Male";
    echo "<input type='radio' id='female' name='gender' value='female'> Female<br><br>";
    // Input & Label of Reset & Submit
    echo "<input type='reset' value='Reset'>";
    echo "<input type='submit' value='Register'>";
    echo "</form>";

    // Printing the data Filled in the form
    echo "The username is: " . $_POST['user'] . "<br>";
    echo "The password is: " . $_POST['password'] . "<br>";
    echo "The textarea content is: " . $_POST['textarea'] . "<br>";
    if(!Empty ($_POST))
    echo "The gender is: " . $_POST['gender'] . "<br>";

    ?>
    
</body>
</html>