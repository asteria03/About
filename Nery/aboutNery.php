<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Nery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="body-wrapper">
        <?php
        $name = "John Carl S. Nery - Team Leader";
        $objective = "As a Project leader, I’m responsible for guiding the team towards project goals, coordinating tasks, managing resources, and ensuring effective communication. 
                    I enjoy challenges and creative problem-solving, and quick to learn new tasks and responsibilities. 
                    I work independently as well as in a collaborative environment to fulfill deadlines is a source of enthusiasm and energy and very much willing to learn.";
        $about = [
            "I have knowledge in C, Java, HTML, CSS, PHP, and some JavaScript languages.",
            "I am proficient in Microsoft Office applications and Adobe Photoshop.",
            "I love having cats and dogs as pets because i have my own.",
            "I love sightseeing, whether it's in the city, by the ocean, or enjoying a view of the sky.",
            "I enjoy reading books occasionally, and I often watch movies or series when I'm bored."
        ];           
        ?>
        <div class="resume-container">
            <h1><?php echo $name; ?></h1>
            <div class="section-title">My Objective</div>
            <p><?php echo $objective; ?></p>
            <div class="section-title">About Me</div>
            <ul>
                <?php foreach ($about as $item) {
                    echo "<li>$item</li>";
                } ?>
            </ul>
        </div>

        <div class="back-button">
            <a href="../index.php">Back to Index</a>
        </div>
    </div>
</body>
</html>
