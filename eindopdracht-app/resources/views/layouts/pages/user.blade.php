@extends('layouts.default')
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
            z-index: 1;
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
        // Set the access token in localStorage
        localStorage.setItem('accessToken', 'MEV0bCVmNk9IeyGHvBTaefhaYA0fytpaswszHKhJ');

        // Function to fetch and display logged-in user's email
        async function displayUserEmail() {
            try {
                const token = localStorage.getItem('accessToken');
                if (!token) {
                    throw new Error('No access token found');
                }

                const response = await fetch('/profileController/getUserInfo', {
                    method: 'GET',
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'application/json'
                    }
                });

                const contentType = response.headers.get('content-type');

                if (!response.ok) {
                    if (contentType && contentType.includes('application/json')) {
                        const errorDetails = await response.json();
                        throw new Error(`Failed to fetch user information: ${response.statusText} - ${errorDetails.message}`);
                    } else {
                        const errorText = await response.text();
                        throw new Error(`Failed to fetch user information: ${response.statusText} - ${errorText}`);
                    }
                }

                if (contentType && contentType.includes('application/json')) {
                    const userData = await response.json();
                    document.getElementById('email').textContent = userData.email;
                } else {
                    throw new Error('Unexpected response format');
                }
            } catch (error) {
                console.error('Error fetching user information:', error);
                alert(`Failed to fetch user information: ${error.message}`);
            }
        }

        // Function to change the user's email
        async function changeEmail() {
            let newEmail = prompt("Enter your new email address:");
            if (newEmail) {
                try {
                    const token = localStorage.getItem('accessToken');
                    if (!token) {
                        throw new Error('No access token found');
                    }

                    const response = await fetch('/profileController/changeEmail', {
                        method: 'POST',
                        headers: {
                            'Authorization': 'Bearer ' + token,
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ email: newEmail })
                    });

                    const contentType = response.headers.get('content-type');

                    if (!response.ok) {
                        if (contentType && contentType.includes('application/json')) {
                            const errorDetails = await response.json();
                            throw new Error(`Failed to update email: ${response.statusText} - ${errorDetails.message}`);
                        } else {
                            const errorText = await response.text();
                            throw new Error(`Failed to update email: ${response.statusText} - ${errorText}`);
                        }
                    }

                    if (contentType && contentType.includes('application/json')) {
                        const userData = await response.json();
                        document.getElementById('email').textContent = userData.email;
                        alert("Email updated successfully.");
                    } else {
                        throw new Error('Unexpected response format');
                    }
                } catch (error) {
                    console.error('Error updating email:', error);
                    alert(`Failed to update email: ${error.message}`);
                }
            }
        }

        // Event listener for Change Email button
        document.getElementById('changeEmailBtn').addEventListener('click', changeEmail);

        // Event listener for Settings button
        document.getElementById('settingsBtn').addEventListener('click', function() {
            alert("Navigate to settings page");
            // Example: window.location.href = 'settings.html';
        });

        // Call function to display email on page load
        displayUserEmail();
    </script>
</body>
</html>


@php
    $hideSidebar = true;
@endphp