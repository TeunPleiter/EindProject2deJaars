@extends('layouts.default')


@section('content')
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

    async function changeEmail() {
        let newEmail = prompt("Enter your new email address:");
        if (newEmail) {
            try {
                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                const response = await fetch('/profile/updateEmail', {
                    method: 'POST',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('accessToken'),
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Include the CSRF token here
                    },
                    body: JSON.stringify({ email: newEmail })
                });

                if (!response.ok) {
                    throw new Error('Failed to update email: ' + response.status + ' - ' + response.statusText);
                }

                const result = await response.json();
                alert('Email updated successfully');
                // Optionally, you can refresh the displayed email
                
            } catch (error) {
                console.error('Error updating email:', error);
                alert('Error updating email: ' + error.message);
            }
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        displayUserEmail();

        document.getElementById('changeEmailBtn').addEventListener('click', function() {
            changeEmail();
        });

        document.getElementById('settingsBtn').addEventListener('click', function() {
            alert("Navigate to settings page");
            // Example: window.location.href = 'settings.html';
        });
    });
    </script>



@php
    $hideSidebar = true;
@endphp
@include('includes.testUser')