<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
	<link rel="stylesheet" href="style/about.css">
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
                <li><a href="Nery/aboutNery.php">John Carl Nery - Leader</a></li>
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