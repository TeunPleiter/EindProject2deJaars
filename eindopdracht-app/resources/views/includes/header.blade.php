<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimalistic Navbar</title>
    <style>
        body, ul {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: url("/foto's/EPJfoto.png") no-repeat center center fixed;
            background-size: cover;
            color: #333;
            padding-top: 60px; /* Adjust according to the height of the navbar */
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            padding: 10px 20px;
            position: fixed; /* Make the navbar fixed */
            width: 100%; /* Make the navbar span the full width of the page */
            top: 0; /* Position the navbar at the top */
            left: 0; /* Ensure the navbar starts from the left edge */
            z-index: 1000; /* Ensure the navbar is above other content */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Adds a subtle shadow for better separation */
        }

        .navbar-inner {
            display: flex;
            align-items: center; /* Align items vertically */
            justify-content: center;
        }

        #logo {
            font-size: 1.5em;
            color: white; 
            text-decoration: none;
            font-weight: bold;
            position: absolute;
            right: 20px; 
        }

        .nav {
            list-style: none;
            display: flex;
            gap: 30px; /* Adjusted space between buttons */
            align-items: center; /* Align items vertically within the ul */
        }

        .nav li {
            display: flex; /* Use flex to align content within li */
            align-items: center; /* Center items vertically */
            border-radius: 20px;
            padding: 5px 10px; /* Adjusted padding to make buttons smaller */
        }

        .nav a,
        .nav button {
            text-decoration: none;
            color: white;
            font-size: 0.9em; /* Adjusted font size */
            transition: color 0.3s;
            border: 1px solid white;
            background: none;
            border-radius: 20px;
            padding: 5px 10px; /* Adjusted padding to make buttons smaller */
            cursor: pointer;
            font: inherit; /* Ensures button text inherits font styling from parent */
        }

        .nav a:hover,
        .nav button:hover {
            color: #A9A9A9;
        }

        .logout-form {
            display: inline; /* Ensure form and button appear inline */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li><a href="/contact">Contact</a></li>
                <li>
                    <form class="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
