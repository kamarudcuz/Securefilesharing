<!DOCTYPE html>
<html>
<head>
    <title>Uploaded Files</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff;
    margin: 0;
    padding: 0;
}

.sidebar {
    width: 200px;
    background-color: #87ceeb;
    height: 100vh;
    position: fixed;
    padding-top: 20px;
}

.sidebar a {
    display: block;
    color: white;
    padding: 15px;
    text-decoration: none;
}

.sidebar a:hover {
    background-color: #00bfff;
}

.main {
    margin-left: 220px;
    padding: 20px;
}

input, select, button {
    margin: 10px 0;
    padding: 10px;
    width: 100%;
}

    </style>
</head>
<body>
    <div class="sidebar">
        <a href="dashboard.php">Back to Dashboard</a>
    </div>
    <div class="main">
        <h2>Uploaded Files</h2>
        <ul>
            <?php
            $files = scandir("uploads/");
            foreach ($files as $file) {
                if ($file !== "." && $file !== "..") {
                    echo "<li>$file 
                        <form action='send_email.php' method='POST' style='display:inline;'>
                            <input type='hidden' name='filename' value='$file'>
                            <input type='email' name='email' placeholder='Recipient Email' required>
                            <button type='submit'>Share</button>
                        </form>
                    </li>";
                }
            }
            ?>
        </ul>
    </div>
</body>
</html>