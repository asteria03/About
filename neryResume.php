<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Nery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("https://cdn.pixabay.com/photo/2017/06/10/16/22/coffee-2390136_1280.jpg");
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .resume-container {
            background-color: rgba(255, 255, 255, 0.4); 
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        h1, p, .section-title, li {
            font-size: 16px;
            margin-bottom: 10px;
            color: black; 
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section-title {
            font-size: 20px;
            margin-top: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }
    </style>
</head>
<body>
<?php
$name = "John Carl S. Nery - Team Leader";

$objective = "To join a team where I will have the opportunity to grow professionally while also contributing my knowledge and understanding in the work industry.";

$qualifications = [
    "Working independently as well as in a collaborative environment to fulfill deadlines is a source of enthusiasm and energy. Very much willing to learn and be trained.",
    "Enjoys challenges and creative problem solving, and quick to pick up new tasks and responsibilities.",
    "Good Communication Skills",
    "Oriented in Microsoft Office applications and Adobe Photoshop.",
    "As a Project leader I’m responsible for guiding the team towards project goals, coordinating tasks, managing resources, and ensuring effective communication."
];
?>
    <div class="resume-container">
        <h1><?php echo $name; ?></h1>

        <div class="section-title">Career Objective</div>
        <p><?php echo $objective; ?></p>

        <div class="section-title">Key Qualifications</div>
        <ul>
            <?php foreach ($qualifications as $qualification) {
                echo "<li>$qualification</li>";
            } ?>
        </ul>
    </div>
</body>
</html>
