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
            background-color: #f4f4f4;
            color: #333;
        }

        
        .navbar {
            background-color: transparent;
            padding: 10px 20px;
            position: relative;
        }

        .navbar-inner {
            display: flex;
            align-items: center;
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
            gap: 70px;
        }

        .nav li {
            display: inline;
            border: 1px solid white;
            border-radius: 20px;
            padding: 10px 20px;
        }

        .nav a {
            text-decoration: none;
            color: white;
            font-size: 1em;
            transition: color 0.3s;
        }

        .nav a:hover {
            color: #FF2400;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li><a href="/home">Home</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
