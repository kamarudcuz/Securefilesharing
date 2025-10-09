<!DOCTYPE html>
<html>
<head>
    <title>Secure File Transfer Dashboard</title>
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
        <a href="files.php">Uploaded Files</a>
    </div>
    <div class="main">
        <h2>Upload and Share File</h2>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label>Select File Format:</label>
            <select name="format">
                <option value="pdf">PDF</option>
                <option value="docx">DOCX</option>
                <option value="jpg">JPG</option>
                <option value="png">PNG</option>
            </select>
            <label>Choose File:</label>
            <input type="file" name="file" required>
            <label>Recipient Email:</label>
            <input type="email" name="email" required>
            <button type="submit">Upload & Share</button>
        </form>
    </div>
</body>
</html>