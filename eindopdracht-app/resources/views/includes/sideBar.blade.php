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
    
</div>

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
    height: calc(100vh - 250px); /* Full viewport height minus navbar height */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    padding-top: 120px; /* Ensure content starts below the navbar */
    box-sizing: border-box;
}

.sidebar {
    width: 250px; /* Fixed width for sidebar */
    background-color: rgba(255, 255, 255, 0.0); /* Semi-transparent background */
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px; /* Rounded corners */
    position: fixed; /* Fixed positioning */
    top: 20vh; /* Adjust vertical position */
    left: 0;
    z-index: 100; /* Ensure it is above other elements */
}

.sidebar.expanded {
    width: 300px; /* Expanded width when dropdown is shown */
}

.main-content {
    margin-left: 270px; /* Adjust margin to create space for sidebar */
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
    transition: border-color 0.3s ease; /* Smooth border color transition */
    margin-top: 20px; /* Space above the search bar */
}

.search-input:focus {
    border-color: #333; /* Darker border on focus */
    outline: none; /* Remove default outline */
}

</style>

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
