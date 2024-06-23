<?php
include '../database/db_connection.php';

$user_id = 1; 

$sql_user = "SELECT * FROM users WHERE userid = $user_id";
$result_user = $conn->query($sql_user);
$user = $result_user->fetch_assoc();

$sql_summary = "SELECT * FROM user_summary WHERE user_id = $user_id";
$result_summary = $conn->query($sql_summary);
$summary = $result_summary->fetch_assoc();


$sql_education = "SELECT * FROM education WHERE user_id = $user_id";
$result_education = $conn->query($sql_education);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="./css/resume.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><?php echo $user['name']; ?></h1>
            <h2>Software Engineer</h2>
        </div>
        <div class="contact-information">
            <h3>Contact Information</h3>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Phone: <?php echo $user['phone_number']; ?></p>
            <p>Address: <?php echo $user['address']; ?></p>
        </div>
        <div class="work-history">
            <h3>Work History</h3>
            <p><?php echo $summary['summary']; ?></p>
        </div>
        <div class="education">
            <h3>Education</h3>
            <?php while($education = $result_education->fetch_assoc()): ?>
                <p><?php echo $education['institution']; ?> - <?php echo $education['degree']; ?></p>
                <p><?php echo $education['start_date']; ?> to <?php echo $education['end_date']; ?></p>
                <p>GPA: <?php echo $education['gpa']; ?></p>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
