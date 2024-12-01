<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.psc.org.pk/wp-content/uploads/2024/09/cropped-PSC-logo-Fav.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

    <title>Pakistan Safety Council - PSC®</title>
    <style>
        body{
            background-color: #FFFFFF ;
            margin: 0;
            overflow-x: hidden !important; /
            
        }
        .list-icon {
            display: none; /* Hide the list icon by default */
        }

        .custom-navbar {
            background-color: #f8f9fa; /* Light gray background */
            padding: 0 1rem;
            
        }

        /* Navbar links */
        .custom-navbar .nav-link {
            color: #004225; /* Dark green text color */
            font-weight: 500;
            text-transform: capitalize;
            transition: color 0.3s, background-color 0.3s;
        }

        /* Hover effect on nav links */
        .custom-navbar .nav-link:hover {
            background-color: #004225; /* Dark green background */
            color: #ffffff; /* White text */
            border-radius: 5px;
        }

        /* Active link styling */
        .custom-navbar .nav-link.active {
            background-color: #004225; /* Dark green background */
            color: #ffffff; /* White text */
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        /* Dropdown menu styling */
        .custom-navbar .dropdown-menu {
            border-color: #004225; /* Dark green border */
        }

        /* Button styling */
        .custom-navbar .btn-member {
            background-color: #004225; /* Dark green background */
            color: #ffffff; /* White text */
            font-weight: bold;
            text-transform: uppercase;
            border: none;
            border-radius: 5px;
        }

        .custom-navbar .btn-member:hover {
            background-color: #006837; /* Slightly lighter green */
        }

        /* Make dropdown appear on hover */


.nav-item.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    transition: opacity 0.3s ease-in-out;
}

/* General Hover Effect for All Dropdown Items */
.dropdown-item:hover {
    background-color: #ddd; /* Slightly darker background on hover */
    color: #000; /* Black text on hover */
}

/* Specific Hover Effect for Safety Training Dropdown Items (Only Change Text Color) */
#navbarDropdown2 + .dropdown-menu .dropdown-item:hover {
    background-color: transparent; /* Keep the background unchanged */
    color: #004225; /* Dark green text color */
    transition: color 0.3s ease; /* Smooth text color transition */
}
#navbarDropdown3 + .dropdown-menu .dropdown-item:hover {
    background-color: transparent; /* Keep the background unchanged */
    color: #004225; /* Dark green text color */
    transition: color 0.3s ease; /* Smooth text color transition */
}
#navbarDropdown4 + .dropdown-menu .dropdown-item:hover {
    background-color: transparent; /* Keep the background unchanged */
    color: #004225; /* Dark green text color */
    transition: color 0.3s ease; /* Smooth text color transition */
}
#navbarDropdown5 + .dropdown-menu .dropdown-item:hover {
    background-color: transparent; /* Keep the background unchanged */
    color: #004225; /* Dark green text color */
    transition: color 0.3s ease; /* Smooth text color transition */
}


/* Remove the border and rounded corners for the dropdown */
.dropdown-menu {
    display: none;
    opacity: 0;
    border: none; /* Removes the border */
    border-radius: 0; /* Removes rounded corners */
    background-color: #EEEEEE; /* Sets the background color */
}

/* Additional styling for dropdown items */
.dropdown-item {
    color: #333; /* Adjust text color */
    padding: 10px 15px; /* Add padding for better spacing */
}

/* Optionally, add hover effect for the dropdown items */
.dropdown-item:hover {
    background-color: #ddd; /* Slightly darker background on hover */
    color: #000; /* Change text color on hover */
}

.three-column-dropdown {
  column-count: 3; /* Display in 2 columns */
  column-gap: 15px; /* Adjust space between columns */
}
.two-column-dropdown {
  column-count: 2; /* Display in 2 columns */
  column-gap: 15px; /* Adjust space between columns */
}
        .main-page-image-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 500px; /* Adjust the height to match the website */
        }

        .main-page-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Make sure the images cover the container area */
            display: none; /* Hide all images initially */
        }

        .main-page-image-container img.active {
            display: block; /* Only display the active image */
        }

        .arrow-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            z-index: 10;
        }

        .arrow-button.left {
            left: 10px;
        }

        .arrow-button.right {
            right: 10px;
        }

        .submenu a {
    padding: 5px 0;
    text-decoration: none;
}


        .sidebar-menu {
    position: fixed;
    top: 0;
    right: -100%; /* Start off-screen */
    width: 250px;
    height: 100vh;
    background-color: white;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
    transition: right 0.3s ease-in-out;
    padding: 1rem;
    z-index: 1000;
}

.sidebar-menu .close-icon {
    text-align: right;
}

.sidebar-menu ul {
    padding: 0;
    margin: 0;
}

.sidebar-menu ul li a {
    display: block;
    padding: 10px 0;
    text-decoration: none;
    color: #004225; /* Dark green */
    font-weight: 500;
}
.sidebar-menu ul li a:hover {
    color: white;
    background-color: #004225; /* Dark green */
    border-radius: 5px;
}

/* Show sidebar when active */
.sidebar-menu.show {
    right: 0;
}


.submenu {
    display: none; /* Hidden by default */
    padding-left: 15px; /* Optional for indentation */
}

/* Remove green background from sidebar items when clicked */
.sidebar-menu ul li a.active {
    background-color: #FFFFFF; /* White background */
    color: #004225; /* Dark green text color */
}

/* Update the hover effect for sidebar items */
.sidebar-menu ul li a:hover {
    background-color: #FFFFFF; /* White background on hover */
    color: #004225; /* Dark green text color */
    border-radius: 5px; /* Optional: Add rounded corners */
}

/* Ensure the background color of submenu links is white when clicked */
.sidebar-menu .submenu a.active {
    background-color: #FFFFFF;
    color: #004225; /* Dark green text color */
}


.submenu a {
    padding: 5px 0;
    color: #555; /* Submenu text color */
}

.toggle-submenu i {
    float: right; /* Position arrow icon */
    transition: transform 0.3s ease; /* Smooth rotation effect */
}

.toggle-submenu.open i {
    transform: rotate(180deg); /* Rotate arrow */
}

.custom-navbar {
    position: relative; /* Default position */
    top: 0;
    width: 100%;
    z-index: 1000;
    transition: top 0.3s; /* Smooth transition when becoming sticky */
}

.custom-navbar.sticky {
    position: fixed; /* Fixed at the top of the viewport */
    top: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional shadow for better visibility */
}


.card {
    display: flex;
    flex-direction: column; /* Stack image and card-info vertically */
     background-color: #f8f9fa;
    height: 100%; /* Let the card control the overall size */
    border: none;
    border-radius: 25px;
    overflow: hidden; /* Ensure clean corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Optional shadow for better appearance */

}

.card img {
    flex: 1; /* Make the image take half the card */
    object-fit: cover; /* Ensure the image is cropped properly */
    height: 50%; /* Optional for equal division */
    width: 100%; /* Full width */
}

.card-info {
    flex: 1; /* Take the same height as the image */
     /* Optional background color */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center; /* Center text */
    padding: 1rem; /* Add some spacing */
}


.card:hover {
    background-color: #004225 !important; /* Dark green background */
    color: #ffffff !important; /* White text color */
    transition: background-color 0.3s ease, color 0.3s ease;
    
}



/* Ensure the text inside the card also changes color */
.card:hover .card-info h4, 
.card:hover .card-info p {
    color: #ffffff !important; /* White text color for the heading and paragraph */
}

/* Add border around images */
.partner img {
    border: 3px solid #C8C8C8;
    padding: 5px; /* Optional: Adds space between the border and the image */
    display: block; /* Optional: Ensures images behave properly in their container */
    width: 100%; /* Optional: Ensures images fill their columns properly */
}

.footer {
    background-color: #1A3A2E;
    color: white;
    padding: 40px 0;
}

.footer h5 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer ul {
    list-style: none;
    padding: 0;
}

.footer ul li {
    margin-bottom: 10px;
}

.footer ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.footer ul li a:hover {
    text-decoration: underline;
}

.footer .footer-bottom {
    text-align: center;
    margin-top: 20px;
    font-size: 14px;
}

.footer i {
    margin-right: 10px;
}

.footer .fa-phone, .footer .fa-whatsapp, .footer .fa-envelope, .footer .fa-map-marker {
    font-size: 20px;
}

@media (max-width: 768px) {
    .footer .row {
        text-align: center;
    }
    .footer .col-md-3 {
        margin-bottom: 30px;
    }
}


        /* Media Query for Smaller Screens */
        @media (max-width: 940px) {
            .list-icon {
                display: block;
            }
             .main-img{
                width: 200px !important;
                 
            }

            .main-page-image-container {
                height: 300px;
            }

            .custom-navbar{
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div style="background-color: white;" class="d-flex justify-content-between align-items-center p-2">
        
            <img class="main-img" width="100%" src="https://www.psc.org.pk/wp-content/uploads/2024/09/PSC1-2024-2.png" alt="">
      
        <div class="list-icon">
            <i class="bi bi-list fs-4"></i>
        </div>
    </div>




    <?php  include './sidebar-menu.php'?>
    <?php include './navbar.php' ?>

    <div class="main-page-image-container">
        <img class="active" src="https://www.psc.org.pk/wp-content/uploads/2022/05/PSC-Header-Banner.jpeg" alt="Image 1">
        <img src="https://www.psc.org.pk/wp-content/uploads/2024/09/40220ffb-c6bd-4423-b393-cfa189d66e60.jpg" alt="Image 2">
        <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/slider-4.jpg" alt="Image 3">
        <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/slider-1.jpg" alt="Image 4">
        <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/slider-3.jpg" alt="Image 5">
        <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/slider-5.png" alt="Image 6">

        <!-- Left and Right Arrow Buttons -->
        <button class="arrow-button left"><i class="bi bi-arrow-left"></i></button>
        <button class="arrow-button right"><i class="bi bi-arrow-right"></i></button>
    </div>
    <h1 class="my-4 text-secondary text-center">Welcome to <span style="color:#104531;">Pakistan Safety Council - PSC®</span></h1>
    <div class="row my-2 p-4">
    <div class="col-lg-4 my-2">
        <div class="card">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/road-saferty.png" alt="">
            <div class="card-info rounded-1 h-50">
                <h4 class="text-center text-secondary">Road Safety</h4>
                <p class="text-secondary text-center">Traffic crashes lead to 1.2 million deaths every year and 20-50 million injuries worldwide.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 my-2">
        <div class="card">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/work-safety.png" alt="">
            <div class="card-info rounded-1 h-50">
                <h4 class="text-center text-secondary">Work Safety</h4>
                <p class="text-secondary text-center">Workplace safety culture begins with a well-trained workforce. Employees trained in PSC safety programs make their workplaces safer for everyone.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 my-2">
        <div class="card">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/home-safety.png" alt="">
            <div class="card-info rounded-1 h-50">
                <h4 class="text-center text-secondary">Home Safety</h4>
                <p class="text-secondary text-center">Home safety is a daily responsibility. Home safety refers to the awareness and education of risks and potential dangers in and around a home.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 my-2">
        <div class="card">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/Safety-training.png" alt="">
            <div class="card-info rounded-1 h-50">
                <h4 class="text-center text-secondary">Safety Training</h4>
                <p class="text-secondary text-center">PSC conducts various training programs and courses related to Health and Safety.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 my-2">
        <div class="card">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/consulting.png" alt="">
            <div class="card-info rounded-1 h-50">
                <h4 class="text-center text-secondary">Consultancy</h4>
                <p class="text-secondary text-center">PSC provides health and safety related consulting and auditing services for their clients.
</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 my-2">
        <div class="card">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/03/recruitment.png" alt="">
            <div class="card-info rounded-1 h-50">
                <h4 class="text-center text-secondary">Recruitment</h4>
                <p class="text-secondary text-center">PSC provides its services of recruitment of individuals, students and professionals.</p>
            </div>
        </div>
    </div>
    </div>
    <div class="row my-4 p-4">
        <div class="col-lg-4">
            <img width="100%" src="https://www.psc.org.pk/wp-content/uploads/2022/03/safety-ambassador-962x1024.jpg" alt="">
        </div>
        <div class="col-lg-8">
            <h2 style="color: #104531;">The PSC® Safety Ambassador Program</h2>
            <p class="my-4 text-secondary">Too many people are dying from preventable injuries. Today, unintentional injuries have risen to become the third leading cause of death around the World, but each of us can take action to reverse this trend.</p>
            <div class="p my-4 text-secondary">Though safety improvements can be made in many ways, you can take steps right now to protect your loved ones, and you can Join PSC Safety Ambassador program. The more of us who join, the safer our communities will be.</div>
            <button style="background-color: #004225;" class="btn text-white">Become an Safety Ambassador</button>
        </div>
    </div>
    <h1 style="color: #004225;" class="my-2 text-center">Official Partners</h1>
    <div class="row partner p-4 align-items-center">
        <div class="col-lg-3 my-2">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/07/intersec.jpg" alt="">
        </div>
        <div class="col-lg-3 my-2">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/07/the-big.jpg" alt="">
        </div>
        <div class="col-lg-3 my-2">
            <img src="https://www.psc.org.pk/wp-content/uploads/2022/07/safety-and-health.jpg" alt="">
        </div>
        <div class="col-lg-3 my-2">
            <img src="https://www.psc.org.pk/wp-content/uploads/2023/02/LOGO-300x100.jpg" alt="">
        </div>
    </div>
<?php include'./footer.php'?>
    

  







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
    <script>

        const listIcon = document.querySelector('.list-icon');
const sidebarMenu = document.querySelector('.sidebar-menu');
const closeIcon = document.querySelector('.close-icon');

// Open the sidebar
listIcon.addEventListener('click', () => {
    sidebarMenu.classList.add('show');
});

// Close the sidebar
closeIcon.addEventListener('click', () => {
    sidebarMenu.classList.remove('show');
});

// Optional: Close sidebar when clicking outside of it
document.addEventListener('click', (e) => {
    if (!sidebarMenu.contains(e.target) && !listIcon.contains(e.target)) {
        sidebarMenu.classList.remove('show');
    }
});


        // Get the image container and all images inside it
        const images = document.querySelectorAll('.main-page-image-container img');
        let currentIndex = 0;

        // Function to show the next image
        function showImage(index) {
            // Hide all images
            images.forEach(img => img.classList.remove('active'));

            // Show the selected image
            images[index].classList.add('active');
        }

        // Show the next image when the right arrow is clicked
        document.querySelector('.arrow-button.right').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length; // Cycle through images
            showImage(currentIndex);
        });

        // Show the previous image when the left arrow is clicked
        document.querySelector('.arrow-button.left').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length; // Cycle backwards
            showImage(currentIndex);
        });


        // Select all toggle buttons for submenus
const toggleSubmenuButtons = document.querySelectorAll('.toggle-submenu');

toggleSubmenuButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default link behavior

        const submenu = button.nextElementSibling; // Select the submenu
        if (submenu) {
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block'; // Toggle visibility
            button.classList.toggle('open'); // Toggle arrow rotation
        }
    });
});

// Select all sub-menu links
const submenuLinks = document.querySelectorAll('.submenu a');

// Apply the text-secondary class to all sub-menu links
submenuLinks.forEach(link => {
    link.classList.add('text-secondary');
});


document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".custom-navbar");
    const navbarOffset = navbar.offsetTop; // Get the navbar's initial position

    window.addEventListener("scroll", () => {
        if (window.scrollY >= navbarOffset) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    });
});






    </script>
</body>
</html>
