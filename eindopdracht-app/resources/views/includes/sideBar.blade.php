<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Example</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            display: flex;
            height: 100vh;
            padding-top: 120px; /* Adjusted to ensure content starts below navbar */
            box-sizing: border-box;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
            
        }

        .sidebar {
        width: 250px;
        padding: 20px;
        box-sizing: border-box;
        position: fixed;
        top: 50%; /* Position vertically in the middle */
        transform: translateY(-50%); /* Adjust for vertical centering */
        left: 0;
        background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent background */
        border-right: 1px solid #ccc;
        transition: width 0.3s ease; /* Smooth transition for sidebar width */
        z-index: 1000; /* Ensure sidebar is above other content */
    }

        .sidebar.expanded {
            width: 300px; /* Expanded width when dropdown is shown */
        }

        .main-content {
            margin-left: 250px; /* Adjust margin to create space for sidebar */
            padding: 20px;
            box-sizing: border-box;
            text-align: center; /* Center text for main content */
        }

        .filter-btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }

        .filter-btn:hover {
            background-color: #555; /* Darker background on hover */
        }

        .dropdown-menu {
            display: none; /* Initially hidden */
            position: absolute; /* Position dropdown absolutely */
            top: calc(100% + 10px); /* Position dropdown below filter button */
            left: 0;
            width: 100%;
            max-height: 200px; /* Set maximum height for dropdown menu */
            overflow-y: auto; /* Add scrollbar if content exceeds max-height */
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a slight shadow */
            border-radius: 5px; /* Rounded corners */
            z-index: 1000; /* Ensure it is above other elements */
        }

        .dropdown-item {
            padding: 10px;
            background: none;
            border: none;
            text-align: left;
            width: 100%;
            cursor: pointer;
            font-size: 1em;
            color: #333;
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }

        .dropdown-item:hover {
            background-color: #eee; /* Slightly darker background on hover */
        }

        .search-input {
            width: calc(100% - 40px); /* Adjust input width */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
            margin-top: 20px; /* Space above the search bar */
        }

        .search-input:focus {
            border-color: #333; /* Darker border on focus */
            outline: none; /* Remove default outline */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar" id="sidebar">
            <input type="text" class="search-input" placeholder="Search...">
            <br>
            <button class="filter-btn" onclick="toggleDropdown()">Filter</button>
            <div class="dropdown-menu" id="filterDropdown">
                <button class="dropdown-item">high-low rated</button>
                <button class="dropdown-item">low-high rated</button>
                <button class="dropdown-item">a-z</button>
                <button class="dropdown-item">recently added</button>
            </div>
        </div>
        <div class="main-content">
            <h1>Main Content</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec urna sed leo aliquam elementum. Donec venenatis nisi id mauris ullamcorper, at venenatis eros fringilla. Nulla facilisi. Vestibulum eu felis et ligula bibendum cursus.</p>
            <p>Phasellus blandit, ipsum in interdum feugiat, erat augue tincidunt mi, sed varius sem diam in ex. Nam vel erat ac leo venenatis tincidunt. Curabitur vitae interdum nulla. Nulla facilisi. Duis malesuada vel lorem eget condimentum.</p>
            <p>Quisque vestibulum bibendum metus, sit amet sollicitudin orci dapibus sed. Vestibulum vitae lacinia nisi. Aliquam aliquam pharetra tellus, nec ullamcorper sapien scelerisque ac.</p>
        </div>
    </div>

    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('filterDropdown');
            var sidebar = document.getElementById('sidebar');

            if (dropdown.style.display === 'none' || dropdown.style.display === '') {
                dropdown.style.display = 'block';
                sidebar.classList.add('expanded');
            } else {
                dropdown.style.display = 'none';
                sidebar.classList.remove('expanded');
            }
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.filter-btn') && !event.target.closest('.dropdown-menu')) {
                var dropdown = document.getElementById('filterDropdown');
                var sidebar = document.getElementById('sidebar');

                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                    sidebar.classList.remove('expanded');
                }
            }
        }
    </script>
</body>
</html>
