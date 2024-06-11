<?php
function connectDatabase() {
    $host = 'localhost';
    $db = 'resume_builder';
    $user = 'root';
    $pass = '';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
}

function fetchUserInfo($pdo, $userid) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE userid = ?");
    $stmt->execute([$userid]);
    return $stmt->fetch();
}

function fetchUserSkills($pdo, $userid) {
    $stmt = $pdo->prepare("SELECT * FROM user_skills WHERE user_id = ?");
    $stmt->execute([$userid]);
    return $stmt->fetchAll();
}

function fetchWorkHistory($pdo, $userid) {
    $stmt = $pdo->prepare("SELECT * FROM work_history WHERE user_id = ?");
    $stmt->execute([$userid]);
    return $stmt->fetchAll();
}

function fetchEducation($pdo, $userid) {
    $stmt = $pdo->prepare("SELECT * FROM education WHERE user_id = ?");
    $stmt->execute([$userid]);
    return $stmt->fetchAll();
}

function fetchCertifications($pdo, $userid) {
    $stmt = $pdo->prepare("SELECT * FROM certifications WHERE user_id = ?");
    $stmt->execute([$userid]);
    return $stmt->fetchAll();
}

function fetchProjects($pdo, $userid) {
    $stmt = $pdo->prepare("SELECT * FROM projects WHERE user_id = ?");
    $stmt->execute([$userid]);
    return $stmt->fetchAll();
}

function generateResume($userid,$cssHref) {
    $pdo = connectDatabase();
    $userInfo = fetchUserInfo($pdo, $userid);
    $userSkills = fetchUserSkills($pdo, $userid);
    $userWorkHistory = fetchWorkHistory($pdo, $userid);
    $userEducation = fetchEducation($pdo, $userid);
    $userCertifications = fetchCertifications($pdo, $userid);
    $userProjects = fetchProjects($pdo, $userid);

    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resume</title>
        <link rel="stylesheet" href="<?php echo $cssHref; ?>">
    </head>
    <body>
        <div class="theme-resume">
            <header class="theme-header">
                <h1 class="theme-header-title"><?= htmlspecialchars($userInfo['name']) ?></h1>
                <p class="theme-header-subtitle">Software Engineer</p>
            </header>
            <section class="theme-section theme-contact-info">
                <h2 class="theme-section-title">Contact Information</h2>
                <p>Email: <?= htmlspecialchars($userInfo['email']) ?></p>
                <p>Phone: <?= htmlspecialchars($userInfo['phone_number']) ?></p>
                <p>Address: <?= htmlspecialchars($userInfo['address']) ?></p>
            </section>
            <section class="theme-section theme-experience">
                <h2 class="theme-section-title">Work History</h2>
                <?php foreach ($userWorkHistory as $job): ?>
                <div class="theme-job">
                    <h3 class="theme-job-title"><?= htmlspecialchars($job['position']) ?></h3>
                    <p><?= htmlspecialchars($job['company_name']) ?>, <?= htmlspecialchars($job['start_date']) ?> - <?= htmlspecialchars($job['end_date']) ?></p>
                    <ul>
                        <li><?= htmlspecialchars($job['responsibilities']) ?></li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </section>
            <div class="theme-grid-container">
                <section class="theme-section theme-education">
                    <h2 class="theme-section-title">Education</h2>
                    <?php foreach ($userEducation as $school): ?>
                    <div class="theme-school">
                        <h3 class="theme-school-title"><?= htmlspecialchars($school['institution']) ?></h3>
                        <p><?= htmlspecialchars($school['degree']) ?>, <?= htmlspecialchars($school['start_date']) ?> - <?= htmlspecialchars($school['end_date']) ?></p>
                        <p>GPA: <?= htmlspecialchars($school['gpa']) ?></p>
                    </div>
                    <?php endforeach; ?>
                </section>
                <section class="theme-section theme-certifications">
                    <h2 class="theme-section-title">Certifications</h2>
                    <ul class="theme-certifications-list">
                        <?php foreach ($userCertifications as $certification): ?>
                        <li class="theme-certification-item"><?= htmlspecialchars($certification['certification_name']) ?>, <?= htmlspecialchars($certification['issue_date']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <section class="theme-section theme-skills">
                    <h2 class="theme-section-title">Skills</h2>
                    <ul class="theme-skills-list">
                        <?php foreach ($userSkills as $skill): ?>
                        <li class="theme-skill-item"><?= htmlspecialchars($skill['skill']) ?> (<?= htmlspecialchars($skill['proficiency_level']) ?>, <?= htmlspecialchars($skill['experience_years']) ?> years)</li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
            <section class="theme-section theme-projects">
                <h2 class="theme-section-title">Projects</h2>
                <?php foreach ($userProjects as $project): ?>
                <div class="theme-project">
                    <h3 class="theme-project-title"><?= htmlspecialchars($project['project_name']) ?></h3>
                    <p><?= htmlspecialchars($project['description']) ?></p>
                    <p><?= htmlspecialchars($project['start_date']) ?> - <?= htmlspecialchars($project['end_date']) ?></p>
                </div>
                <?php endforeach; ?>
            </section>
        </div>
    </body>
    </html>
    <?php
    return ob_get_clean();
}
?>


