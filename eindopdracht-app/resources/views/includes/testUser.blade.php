<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Add this line -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            margin-top: 75px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            z-index: 1;
        }

        .user-info {
            text-align: center;
        }

        .user-info h1 {
            margin-bottom: 20px;
            color: #333333;
        }

        .email-section {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .email-section h2 {
            margin-bottom: 10px;
            color: #555555;
        }

        .email-section p {
            margin: 0;
            font-size: 1.2em;
            color: #333333;
        }

        .email-section button {
            padding: 10px 20px;
            background-color: #009879;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .email-section button:hover {
            background-color: #007a65;
        }

        .settings-section button {
            padding: 10px 20px;
            background-color: #444444;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .settings-section button:hover {
            background-color: #333333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="user-info">
            <h1>User Information</h1>
            <div class="email-section">
                <h2>Email Address</h2>
                <p id="email"></p> <!-- Placeholder for email -->
                <button id="changeEmailBtn">Change Email</button>
            </div>
            <div class="settings-section">
                <button id="settingsBtn">Go to Settings</button>
            </div>
        </div>
    </div>

    
</body>
</html>
