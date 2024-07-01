<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .user-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .email-section {
            margin-bottom: 20px;
        }
        
        button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
            background-color: #555;
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

    <script>
        // Function to fetch and display logged-in user's email
        async function displayUserEmail() {
            try {
                const response = await fetch('/api/userinfo', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + sessionStorage.getItem('accessToken') // Example: Bearer token
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to fetch user information');
                }

                const userData = await response.json();
                document.getElementById('email').textContent = userData.email;
            } catch (error) {
                console.error('Error fetching user information:', error);
                // Handle error (e.g., show error message to user)
            }
        }
        
        // Call function to display email on page load
        displayUserEmail();
        
        // Function to simulate changing email (example only)
        function changeEmail() {
            let newEmail = prompt("Enter your new email address:");
            if (newEmail) {
                // Replace with actual code to update user's email on the server
                // Example: make a POST request to update the email
                alert("Feature not implemented in this example.");
            }
        }
        
        // Event listener for Change Email button
        document.getElementById('changeEmailBtn').addEventListener('click', changeEmail);
        
        // Event listener for Settings button
        document.getElementById('settingsBtn').addEventListener('click', function() {
            // Replace with actual navigation logic to settings page
            alert("Navigate to settings page");
            // Example: window.location.href = 'settings.html';
        });
    </script>
</body>
</html>

@php
    $hideSidebar = true;
@endphp