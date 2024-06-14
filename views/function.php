<?php
function connectDatabase() {
    $host = 'localhost';
    $db = 'resumenew';
    $user = 'root';
    $pass = '';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    
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

function generateResume($userid) {
    $pdo = connectDatabase();
    $userInfo = fetchUserInfo($pdo, $userid);
    $userSkills = fetchUserSkills($pdo, $userid);
    $userWorkHistory = fetchWorkHistory($pdo, $userid);
    $userEducation = fetchEducation($pdo, $userid);
    $userCertifications = fetchCertifications($pdo, $userid);
    $userProjects = fetchProjects($pdo, $userid);

    ob_start();
    ?>
    <head>
        <link rel="stylesheet" href="theme2.css">
    </head>
    <body>
        <div class="theme2-resume">
            <header class="theme2-header">
                <h1 class="theme2-header-title"><?= htmlspecialchars($userInfo['name']) ?></h1>
                <p class="theme2-header-subtitle">Software Engineer</p>
            </header>
            <section class="theme2-section theme2-section-small theme2-contact-info">
                <h2 class="theme2-section-title">Contact Information</h2>
                <p>Email: <?= htmlspecialchars($userInfo['email']) ?></p>
                <p>Phone: <?= htmlspecialchars($userInfo['phone_number']) ?></p>
                <p>Address: <?= htmlspecialchars($userInfo['address']) ?></p>
            </section>
            <section class="theme2-section theme2-section-small theme2-summary">
                <h2 class="theme2-section-title">Summary</h2>
                <p>Experienced software engineer with a strong background in developing award-winning strategies for a diverse clientele.</p>
            </section>
            <section class="theme2-section theme2-section-large theme2-experience">
                <h2 class="theme2-section-title">Work History</h2>
                <?php foreach ($userWorkHistory as $job): ?>
                <div class="theme2-job">
                    <h3 class="theme2-job-title"><?= htmlspecialchars($job['position']) ?></h3>
                    <p><?= htmlspecialchars($job['company_name']) ?>, <?= htmlspecialchars($job['start_date']) ?> - <?= htmlspecialchars($job['end_date']) ?></p>
                    <ul>
                        <li><?= htmlspecialchars($job['responsibilities']) ?></li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </section>
            <section class="theme2-section theme2-section-small theme2-education">
                <h2 class="theme2-section-title">Education</h2>
                <?php foreach ($userEducation as $school): ?>
                <div class="theme2-school">
                    <h3 class="theme2-school-title"><?= htmlspecialchars($school['institution']) ?></h3>
                    <p><?= htmlspecialchars($school['degree']) ?>, <?= htmlspecialchars($school['start_date']) ?> - <?= htmlspecialchars($school['end_date']) ?></p>
                    <p>GPA: <?= htmlspecialchars($school['gpa']) ?></p>
                </div>
                <?php endforeach; ?>
            </section>
            <div class="theme2-section theme2-skills-and-certs">
                <section class="theme2-section theme2-section-small theme2-skills">
                    <h2 class="theme2-section-title">Skills</h2>
                    <ul class="theme2-skills-list">
                        <?php foreach ($userSkills as $skill): ?>
                        <li class="theme2-skill-item"><?= htmlspecialchars($skill['skill']) ?> (<?= htmlspecialchars($skill['proficiency_level']) ?>, <?= htmlspecialchars($skill['experience_years']) ?> years)</li>
                        <?php endforeach; ?>
                    </ul>
                </section>
                <section class="theme2-section theme2-section-small theme2-certifications">
                    <h2 class="theme2-section-title">Certifications</h2>
                    <ul class="theme2-certifications-list">
                        <?php foreach ($userCertifications as $certification): ?>
                        <li class="theme2-certification-item"><?= htmlspecialchars($certification['certification_name']) ?>, <?= htmlspecialchars($certification['issue_date']) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            </div>
            <section class="theme2-section theme2-section-small theme2-projects">
                <h2 class="theme2-section-title">Projects</h2>
                <?php foreach ($userProjects as $project): ?>
                <div class="theme2-project">
                    <h3 class="theme2-project-title"><?= htmlspecialchars($project['project_name']) ?></h3>
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
?>
