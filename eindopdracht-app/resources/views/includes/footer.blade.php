<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/8cf3685a91.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-ETPwiIcfkFm2GGP5otE93f5RjD0eVKf8UMIeGkS/+G7no3CblzR7ep3zF+6Z7MZgFpKfFu/BcANMkWs8sJLxOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
        }

        .main-content {
            flex: 1; 
            overflow-y: auto; 
            padding: 20px; 
        }

        .footer {
            background-color: #333; 
            padding: 10px 0; 
            width: 100%; 
            display: flex;
            justify-content: space-around; 
            align-items: center;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1); 
            position: fixed; 
            bottom: 0; 
            left: 0; 
        }

        .footer-button {
            background-color: transparent;
            border: none;
            color: white;
            font-size: 1em;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 5px; 
            text-decoration: none; 
        }

        .footer-button i {
            margin-right: 5px; 
        }

        .footer-button:hover {
            color: #FF2400; 
        }

        .footer-button:focus {
            outline: none;
        }

        .footer-button a {
            color: white; 
            text-decoration: none; 
        }
    </style>
</head>
<body>
    <div class="main-content">
    </div>
    <div class="footer">
        <button class="footer-button">
            <a href="/movies">
                <i class="fas fa-camera-movie"></i>
                All Movies
            </a>
        </button>
        <button class="footer-button">
            <a href="/favorite">
                <i class="fas fa-star"></i>
                Favorite
            </a>
        </button>
        <button class="footer-button">
            <a href="/search">
                <i class="fas fa-search"></i>
                Search
            </a>
        </button>
        <button class="footer-button">
            <a href="/user">
                <i class="fas fa-user"></i>
                User
            </a>
        </button>
    </div>
</body>
</html>
