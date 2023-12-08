<!-- upload.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Upload Files</title>
</head>
<body>

<h2>Upload Files</h2>

<?php
session_start(); 


if (!isset($_SESSION['user_id'])) {
    header("Location: userlogin.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $file_type = $_POST['file_type']; 
    $file_url = ""; 

    header("Location: main_page.php");
    exit();
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="file_type">File Type:</label>
    <select id="file_type" name="file_type">
        <option value="image">Image</option>
        <option value="video">Video</option>
    </select><br><br>

    <input type="submit" value="Upload">
</form>

<p><a href="main_page.php">Back to Main Page</a></p>

</body>
</html>
