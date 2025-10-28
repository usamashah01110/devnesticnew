<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Britto Charette - About Us</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&family=Playfair+Display:wght@400&display=swap"
        rel="stylesheet" />

    <link href="{{ asset('landingpage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landingpage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('landingpage/assets/css/main.css') }}" rel="stylesheet">

    <style>
        :root {
            --color: #F4A31D;
        }

        body {
            font-family: "Playfair Display", serif;
            margin: 0;
            color: #333;
            line-height: 1.6;
        }

        h1,
        h2 {
            font-family: "Outfit", sans-serif;
            font-weight: 700;
            color: #000;
        }


        /* About Us Hero Section */
        .about-us-hero {
            display: flex;
            padding: 80px 5%;
            gap: 50px;
            align-items: flex-start;
        }

        .about-us-text {
            flex: 1;
            max-width: 400px;
        }

        .about-us-text h1 {
            font-size: 80px;
            margin-bottom: 20px;
            line-height: 1;
        }

        .about-us-text .subtitle {
            font-family: "Outfit", sans-serif;
            font-weight: 400;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .about-us-text p {
            font-size: 16px;
            color: #555;
        }

        .about-us-images {
            flex: 2;
            display: flex;
            justify-content: flex-end;
            /* Pushes content to the right */
        }

        .image-gallery {
            display: grid;
            grid-template-columns: 2fr 1.5fr;
            /* Main image takes more space */
            gap: 20px;
            width: 100%;
            max-width: 900px;
            /* Adjust as needed */
        }

        .main-interior-img {
            width: 100%;
            height: 450px;
            /* Fixed height for consistency */
            object-fit: cover;
            border-radius: 10px;
        }

        .side-image-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .side-interior-img {
            width: 100%;
            height: 200px;
            /* Smaller fixed height for side image */
            object-fit: cover;
            border-radius: 10px;
        }

        .our-philosophy {
            padding: 25px;
            border-radius: 10px;
            height: 100%;
            /* Ensures it fills available space */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .our-philosophy h2 {
            font-size: 24px;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .our-philosophy p {
            font-size: 15px;
            color: #555;
        }

        /* General Body Styles */

        h1,
        h2 {
            font-family: "Outfit", sans-serif;
            /* For prominent titles */
            font-weight: 700;
            color: #000;
        }

        h3 {
            font-family: "Outfit", sans-serif;
            /* For principal names */
            font-weight: 700;
            font-size: 20px;
            margin-top: 20px;
            margin-bottom: 5px;
            color: #000;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .navbar-left .nav-item {
            margin-right: 20px;
            text-decoration: none;
            color: #333;
            font-family: "Outfit", sans-serif;
            font-weight: 400;
            font-size: 16px;
        }

        .navbar-center .logo {
            font-family: "Outfit", sans-serif;
            font-weight: 700;
            font-size: 22px;
            color: #000;
        }

        .navbar-right .contact-button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Outfit", sans-serif;
            font-weight: 400;
            font-size: 16px;
        }

        /* About Us Hero Section */
        .about-us-hero {
            display: flex;
            padding: 80px 5%;
            gap: 50px;
            align-items: flex-start;
        }

        .about-us-text {
            flex: 1;
            max-width: 400px;
        }

        .about-us-text h1 {
            font-size: 80px;
            /* Large "ABOUT US" */
            margin-bottom: 20px;
            line-height: 1;
            color:white;
        }

        .about-us-text .subtitle {
            font-family: "Outfit", sans-serif;
            font-weight: 400;
            font-size: 18px;
            margin-bottom: 20px;
            color:white;

        }

        .about-us-text p {
            font-size: 16px;
            color: #fff;
        }

        .about-us-images {
            flex: 2;
            display: flex;
            justify-content: flex-end;
            /* Pushes content to the right */
        }

        .image-gallery {
            display: grid;
            grid-template-columns: 2fr 1.5fr;
            /* Main image takes more space */
            gap: 20px;
            width: 100%;
            max-width: 900px;
            /* Adjust as needed */
        }

        .main-interior-img {
            width: 100%;
            height: 450px;
            /* Fixed height for consistency */
            object-fit: cover;
            border-radius: 10px;
        }

        .side-image-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .side-interior-img {
            width: 100%;
            height: 200px;
            /* Smaller fixed height for side image */
            object-fit: cover;
            border-radius: 10px;
        }

        .our-philosophy {
            /* Background color for the philosophy box */
            padding: 25px;
            border-radius: 10px;
            height: 100%;
            /* Ensures it fills available space */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .our-philosophy h2 {
            font-size: 24px;
            margin-bottom: 15px;
            line-height: 1.2;
            color:white;
        }

        .our-philosophy p {
            font-size: 15px;
            color: #fff;
        }

        /* Principals Section */
        .principals-section {
            display: flex;
            flex-direction: row;
            /* Stacks children vertically */
            padding: 80px 5%;
            background-color: #ebebeb;
            /* Lighter grey background for this section */
            margin-top: 50px;
            border-radius: 10px;
            margin-left: 5%;
            margin-right: 5%;
            gap: 40px;
            /* Space between top content and bios */
            align-items: center;
            /* Center content horizontally */
            text-align: center;
            /* Center text within child elements */
            justify-content: center;
        }

        .principals-top-content {
            max-width: 700px;
            /* Controls the width of the central text/image block */
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .principals-top-content h2 {
            font-size: 60px;
            margin-bottom: 30px;
            line-height: 1;
        }

        .principals-top-content .furniture-img {
            width: 100%;
            max-width: 600px;
            /* Adjust as needed */
            height: 150px;
            /* Adjust as needed */
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .principals-top-content .principals-description {
            font-size: 16px;
            color: #555;
            max-width: 600px;
            /* Constrain width of description */
            margin: 0 auto;
            /* Center the paragraph */
        }

        .principals-bios {
            display: flex;
            gap: 50px;
            /* Increased gap between the two principal bios */
            justify-content: center;
            /* Center the bios horizontally */
            width: 100%;
            max-width: 900px;
            /* Allow bios to spread out more */
            align-items: center;
        }

        .principal-bio {
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center photo, name, and title */
            text-align: center;
        }

        .principal-photo {
            width: 300px;
            /* Fixed width for principal photos */
            height: 400px;
            /* Fixed height for principal photos */
            object-fit: cover;
            border-radius: 10px;
        }

        .principal-bio h3 {
            margin-top: 20px;
            margin-bottom: 5px;
            font-size: 20px;
            color: #000;
        }

        .principal-bio p {
            font-family: "Outfit", sans-serif;
            font-weight: 400;
            font-size: 14px;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
    </style>
</head>

<body>
    @include('includes.navbar')
    <main>
        <section class="about-us-hero">
            <div class="about-us-text">
                <h1>ABOUT US</h1>
                <p class="subtitle">Luxurious Interior and Industrial Design</p>
                <p>
                    Modern Elegance: Designs featuring clean lines, neutral palettes,
                    and high-quality materials.
                </p>
            </div>
            <div class="about-us-images">
                <div class="image-gallery">
                    <img
                        src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                        alt="Modern interior design"
                        class="main-interior-img" />
                    <div class="side-image-container">
                        <img
                            src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                            alt="Bedroom interior design"
                            class="side-interior-img" />
                        <div class="our-philosophy">
                            <h2>Our Philosophy</h2>
                            <p>
                                At Britto Charette, we believe in creating luxurious,
                                personalized environments that reflect our clients' tastes and
                                lifestyles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="principals-section">
            <div class="principals-bios">
                <div class="principal-bio">
                    <img
                        src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                        alt="Jay Britto"
                        class="principal-photo" />
                    <h3>JAY BRITTO</h3>
                    <p>FOUNDER AND PRINCIPAL</p>
                </div>
                <div class="principals-top-content">
                    <h2>MEET THE PRINCIPALS</h2>
                    <img
                        src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                        alt="Furniture design"
                        class="furniture-img" />
                    <p class="principals-description">
                        As principal and licensed designer, the founder oversees the
                        day-to-day operations of Britto Charette and the design and
                        manufacture of our firm's custom furniture and award-winning
                        accessories.
                    </p>
                </div>
                <div class="principal-bio">
                    <img
                        src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                        alt="David Charette"
                        class="principal-photo" />
                    <h3>DAVID CHARETTE</h3>
                    <p>FOUNDER AND PRINCIPAL</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>