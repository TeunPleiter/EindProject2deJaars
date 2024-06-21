<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Apply styles to the body to achieve full-screen layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh; /* Full viewport height */
            width: 100%;
            overflow: hidden; /* Hide scrollbars */
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Adjust vertical alignment */
            position: relative; /* Ensure relative positioning for footer */
        }

        /* Main content styling */
        .main-content {
            flex: 1; /* Take remaining vertical space */
            overflow-y: auto; /* Enable scrolling for main content */
            padding: 20px; /* Add padding as needed */
        }

        /* Footer styling */
        .footer {
            background-color: #f0f0f0; /* Grey background color */
            padding: 10px; /* Adjust padding as needed */
            position: absolute; /* Position at the bottom */
            bottom: 0;
            left: 0;
            width: 100%; /* Full width */
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
    </style>
</head>
<body>
   

    <!-- Footer -->
    <div class="footer">
        <div id="Copyright">© Copyright 2024 EPJ</div>
    </div>
</body>
</html>
