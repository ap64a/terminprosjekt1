<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <style>
        /* Centered content */
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust as needed */
        }

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            background-color: #f0f0f0;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="content">
    <!-- Main content area for images, text, and videos -->
    <div class="main-content">
        <!-- Your feed content goes here -->
        <!-- Example: -->
        <h2>Welcome to the Feed</h2>
        <!-- Add images, text, videos, etc. -->
    </div>
</div>

<!-- Sidebar with the "Post" button -->
<div class="sidebar">
    <button onclick="location.href='upload.php'">Post</button>
</div>

</body>
</html>
