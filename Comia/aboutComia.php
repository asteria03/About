<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset some default styles */
        body, h1, h2, h3, p {
            margin: 0;
            padding: 0;
        }

        /* Improved styles for the whole page */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        /* Header styles */
        header {
            background: url("https://i.imgur.com/sWZ1vOx.jpg");
            color: #fff;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        /* Home section styles */
        #home {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.imgur.com/sF6fFLS.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
            position: relative;
        }

        #home h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        #home p {
            font-size: 1.5em;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* Profile section styles */
        #profile {
            padding: 50px 0;
            text-align: center;
        }

        #profile img {
            width: 200px; /* Adjust the width as needed */
            border-radius: 50%;
            overflow: hidden;
            transition: transform 0.5s ease;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        #profile img:hover {
            transform: scale(1.1);
        }

        #profile h2 {
            margin-top: 20px;
            font-size: 1.5em;
            color: #333;
        }

        /* About Me section styles */
        #about {
            background: url("https://i.imgur.com/sWZ1vOx.jpg");
            color: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        #about h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #fff;
        }

        #about p {
            font-size: 1.2em;
            line-height: 1.6;
        }

        /* Portfolio section styles */
        #portfolio {
            text-align: center;
        }

        .portfolio-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .portfolio-item {
            width: 30%; /* Adjust the width as needed */
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .portfolio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .portfolio-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        /* Horizontal About Container styles */
        #about-horizontal-container {
            text-align: center;
            padding: 50px 20px;
            background-color: #f4f4f4;
        }

       .horizontal-about-container {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .horizontal-about-item-container {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .horizontal-about-item {
        width: 300px;
        margin: 20px;
        padding: 20px;
        background-color: #D3D3D3;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        border-radius: 5px;
        box-sizing: border-box;
		color: #000000;
    }

    .horizontal-about-item.active {
        transform: scale(1.1);
    }

    .horizontal-about-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

        button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            outline: none;
        }

        /* Arrow button animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        button {
            animation: fadeIn 0.5s forwards;
        }

        /* Arrow button hover effect */
        button:hover {
            transform: scale(1.2);
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 0.8em;
            opacity: 0;
            animation: fadeIn 1s forwards, bounce 2s infinite;
        }

        /* Added some styles for a more attractive footer */
        footer p {
            margin-bottom: 5px;
        }

        footer a {
            color: #000000;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #fff;
        }

        /* Keyframes for the fadeIn animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        }
		.horizontal-about-container {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

 
		
	/* Center the contact section */
.contact-section {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: #333; /* Dark gray background color */
    color: #fff; /* White text color */
    padding: 50px 0; /* Add padding for better spacing */
}

/* Center the contact form */
.contact-container {
    width: 100%;
    max-width: 600px; /* Adjust the max-width as needed */
    box-sizing: border-box;
}

/* Style the form to not widen too much */
#contact form {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    background-color: #555; /* Slightly lighter gray background for the form */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

/* Style form inputs and button */
#contact input,
#contact textarea,
#contact button {
    margin-bottom: 15px;
    width: calc(100% - 30px);
    padding: 10px;
    border: none;
    border-radius: 3px;
}

#contact button {
    background-color: #ffd700; /* Yellow button color */
    color: #333; /* Dark text color for the button */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#contact button:hover {
    background-color: #fff; /* Change button color on hover */
}


    </style>
    <title>UI Designer Portfolio</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="home">
        <h1>Welcome to My Portfolio</h1>
        <p>I'm a passionate UI designer dedicated to creating visually captivating and user-friendly interfaces.</p>
    </section>
    <section id="profile">
        <img src="https://i.imgur.com/JEdEcCH.jpg" alt="Your Picture">
        <h2>LEONILET D. COMIA</h2>
        <p>UI Designer</p>
        <!-- Add your personal information or bio here if needed -->
    </section>
    <section id="about">
        <h2>About Me</h2>
        <p>As an UI designer, Leonilet D. Comia is dedicated to mastering the art of creating visually stunning and user-friendly interfaces. She is excited by the potential of design to improve people's relationships with technology, and she is dedicated to make a good effect via her creations. </p>
    </section>
    <!-- ... (previous HTML) ... -->

<style>
    .horizontal-about-item-container {
        display: none;
        justify-content: space-around;
        flex-wrap: wrap;
    }
</style>

<section id="about-horizontal-container">
    <h2>Skills, Education, Hobbies, and Goals</h2>
    <div class="horizontal-about-container">
        <button onclick="showPreviousAboutSection()">❮</button>
        <div class="horizontal-about-item-container" id="skills-education-container">
            <div class="horizontal-about-item active" id="skills-section">
                <h3>Skills</h3>
                <p>Proficient in creating visually appealing and engaging interfaces using UI/UX design tools like Figma, Sketch, and Adobe XD, with a strong eye for color, typography, and layout.</p>
               
            </div>
            <div class="horizontal-about-item" id="education-section">
                <h3>Education</h3>
                <p>Bachelor of Science in Information Techology</p>
                <p><br>Studied at Our Lady of Fatima University - QC</p>
            </div>
        </div>
        <div class="horizontal-about-item-container" id="hobbies-goals-container">
            <div class="horizontal-about-item" id="hobbies-section">
                <h3>Hobbies and Interests</h3>
                <p>My interests are more artistic in nature, such as composing, choreography, designing, video editing, and learning something new that allows me to think more creatively. Creativity is a crucial attribute for a UI designer. Creating visually appealing and user-friendly interfaces are the responsibility of a UI designer, which requires a creative approach to design.</p>
                <!-- Add specific hobbies and interests content as needed -->
            </div>
            <div class="horizontal-about-item" id="goals-section">
                <h3>Professional Goals</h3>
                <p>A UI designer's professional objective is to build engaging, user-friendly interfaces that successfully transmit the desired message while also providing an intuitive and enjoyable user experience.</p>
                <!-- Add specific professional goals content as needed -->
            </div>
        </div>
        <button onclick="showNextAboutSection()">❯</button>
    </div>
</section>

    <section id="portfolio">
        <h2>Portfolio</h2>
        <div class="portfolio-container">
            <div class="portfolio-item">
                <img src="https://i.imgur.com/lYenwrP.jpg" alt="Project 1">
                <h3>Fifth Tower (Project 1)</h3>
                <p>Fifth Tower Developer was founded in 2023. The firm was founded to provide convenience to the community, not only to those who enjoy shopping online, but also to those who do not have enough time.</p>
            </div>
            <div class="portfolio-item">
                <img src="https://i.imgur.com/45Bzqqd.png" alt="Project 2">
                <h3>Enchanted Haven Hotel (Project 2)</h3>
                <p>The Enchanted Haven Hotel Reservation website provides consumers with a simple online platform for booking stays at the Enchanted Haven Hotel.</p>
            </div>
            <!-- Add more portfolio items as needed -->
        </div>
    </section>
    <section id="contact" class="contact-section">
    <h2>Contact Me</h2>
    <p>If you're interested in working together or have any inquiries, feel free to reach out to me using the form below.</p>
    <div class="contact-container">
        <form>
            <div id="form-header">Get in Touch</div>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</section>


    <footer>
        <p>&copy; 2023 UI Designer Portfolio | <a href="https://www.yourdesignframework.com"</a></p>
    </footer>

  <script>
    var currentAboutSection = 0;

    function showNextAboutSection() {
        hideCurrentAboutSection();
        currentAboutSection = (currentAboutSection + 1) % 2;
        showCurrentAboutSection();
    }

    function showPreviousAboutSection() {
        hideCurrentAboutSection();
        currentAboutSection = (currentAboutSection - 1 + 2) % 2;
        showCurrentAboutSection();
    }

    function hideCurrentAboutSection() {
        document.getElementById(`skills-education-container`).style.display = 'none';
        document.getElementById(`hobbies-goals-container`).style.display = 'none';
    }

    function showCurrentAboutSection() {
        if (currentAboutSection === 0) {
            document.getElementById(`skills-education-container`).style.display = 'flex';
        } else {
            document.getElementById(`hobbies-goals-container`).style.display = 'flex';
        }
    }
</script>
</body>

</html>
