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
        $objective = "To join a team where I will have the opportunity to grow professionally while also contributing my knowledge and understanding in the work industry.";
        $qualifications = [
            "Working independently as well as in a collaborative environment to fulfill deadlines is a source of enthusiasm and energy. Very much willing to learn and be trained.",
            "Enjoys challenges and creative problem-solving, and quick to pick up new tasks and responsibilities.",
            "Good Communication Skills",
            "Oriented in Microsoft Office applications and Adobe Photoshop.",
            "As a Project leader I’m responsible for guiding the team towards project goals, coordinating tasks, managing resources, and ensuring effective communication."
        ];
        ?>
        <div class="resume-container">
            <h1><?php echo $name; ?></h1>
            <div class="section-title">Career Objective</div>
            <p><?php echo $objective; ?></p>
            <div class="section-title">About Me</div>
            <ul>
                <?php foreach ($qualifications as $qualification) {
                    echo "<li>$qualification</li>";
                } ?>
            </ul>
        </div>

        <div class="back-button">
            <a href="../index.php">Back to Index</a>
        </div>
    </div>
</body>
</html>
