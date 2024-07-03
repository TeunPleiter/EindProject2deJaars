@extends('layouts.default')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
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
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
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

    <script>
        async function displayUserEmail() {
            try {
                const response = await fetch('/profile/email', {
                    headers: {
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('accessToken')
                    }
                });

                if (!response.ok) {
                    throw new Error('Failed to fetch user information: ' + response.status + ' - ' + response.statusText);
                }

                const userData = await response.json();
                document.getElementById('email').textContent = userData.email;
            } catch (error) {
                console.error('Error fetching user information:', error);
                alert('Error fetching user information: ' + error.message);
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            displayUserEmail();

            document.getElementById('changeEmailBtn').addEventListener('click', function() {
                // Implement changeEmail functionality here
                let newEmail = prompt("Enter your new email address:");
                if (newEmail) {
                    // Example code to update email
                    // const response = await fetch('/profile/updateEmail', {
                    //     method: 'POST',
                    //     headers: {
                    //         'Authorization': 'Bearer ' + localStorage.getItem('accessToken'),
                    //         'Content-Type': 'application/json'
                    //     },
                    //     body: JSON.stringify({ email: newEmail })
                    // });
                    // Handle response and update UI
                }
            });

            document.getElementById('settingsBtn').addEventListener('click', function() {
                alert("Navigate to settings page");
                // Example: window.location.href = 'settings.html';
            });
        });
    </script>

</body>
</html>
@endsection



@php
    $hideSidebar = true;
@endphp