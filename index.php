<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            color: white;
            line-height: 1.6;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url("images/body-bg.jpeg");
        }

        .container {
            max-width: 800px;
            padding: 20px;
            background-color: rgba(35, 132, 160, 0.5); 
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        .part {
            padding: 20px;
        }

        .part-title {
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
        }

        .content {
            font-size: 18px;
            color: white;
            line-height: 1.5;
        }

        footer {
            margin-top: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
        }

        footer h3 {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
        }

        ul {
            list-style: none;
        }

        ul li {
            font-size: 18px;
            margin-bottom: 10px;
        }

        ul li a {
            color: #0073e6;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
    function createSection($title, $content) {
        echo '<div class="part">
                <h1 class="part-title">' . $title . '</h1>
                <p class="content">' . $content . '</p>
              </div>';
    }
    ?>

    <section class="container">
        <?php
        createSection("About Us", "We began this adventure as inexperienced entrepreneurs with a love for hospitality that transcended ordinary business. We chose to enter into the arena of Enchanted Haven Hotel as novices in the first chapter of our careers not only for our passion for the craft but also for its potential profitability, versatility, and the essential management lessons it gives. It is our honor to provide our customers with unique, meticulously produced items that are the result of our uninhibited creativity. Our unrelenting dedication pulls us forward on this path, relentlessly seeking our mutual goals.");
        ?>

        <footer>
            <h3>Meet Our Team</h3>
            <ul>
                <li><a href="neryResume.php">John Carl Nery - Leader</a></li>
                <li><a href="#">Francheska Mae D Blay - Frontend Developer</a></li>
                <li><a href="#">Leonilet Comia - UI Design</a></li>
                <li><a href="#">Andrea Cunanan - UX Design</a></li>
                <li><a href="#">Art Philip Obice - Backend Developer</a></li>
                <li><a href="#">Danielle Agravante - Back Ops Engineer</a></li>
            </ul>
        </footer>
    </section>
</body>
</html>