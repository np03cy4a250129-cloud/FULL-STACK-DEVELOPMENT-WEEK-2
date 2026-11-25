
<?php
require_once 'functions.php';

$featuredCourses = [
    [
        "title" => "Computer Science",
        "description" => "Learn computer basics and programming skills.",
        "image" => "images/computer.jpg",
        "alt" => "Computer and programming",
        "category" => [
            "Level" => "Beginner",
            "Length" => "6 weeks"
        ]
    ],
    [
        "title" => "English Learning",
        "description" => "Improve your grammar, writing and communication.",
        "image" => "images/library.jpg",
        "alt" => "Books in a library",
        "category" => [
            "Level" => "Beginner",
            "Length" => "5 weeks"
        ]
    ],
    [
        "title" => "Study Skills",
        "description" => "Develop better study habits and time management.",
        "image" => "images/study.jpg",
        "alt" => "Students learning",
        "category" => [
            "Level" => "Intermediate",
            "Length" => "8 weeks"
        ]
    ]
];

$beginnerCourses = getCoursesByLevel($featuredCourses, "Beginner");
$courseSummaries = getCourseSummaries($featuredCourses);
$totalWeeks = getTotalWeeks($featuredCourses);

require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudySpace | Student Learning Platform</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER -->
    <header>
        <h1>StudySpace</h1>
        <p>Your Gateway to Knowledge and Learning</p>
    </header>

    <!-- NAVIGATION -->
    <nav>
        <a href="#home">Home</a>
        <a href="#courses">Courses</a>
        <a href="#resources">Resources</a>
        <a href="#media">Media</a>
        <a href="#about">About</a>
    </nav>

    <!-- MAIN LAYOUT -->
    <div class="container">

        <main id="home">

            <!-- WELCOME SECTION -->
            <section class="welcome">
                <h2>Welcome to StudySpace</h2>
                <p>
                    StudySpace is an online learning platform where
                    students can explore educational resources,
                    improve their skills and discover new knowledge.
                </p>

                <figure>
                    <img src="images/study.jpg"
                         alt="Students studying together">
                    <figcaption>
                        Learn, Explore and Grow Together.
                    </figcaption>
                </figure>
            </section>

            <!-- COURSES SECTION -->
            <section id="courses">
                <h2>Popular Courses</h2>

                <div class="course-grid">

                    <?php foreach ($featuredCourses as $course): ?>

                        <article class="course-card">

                            <img src="<?= $course["image"] ?>"
                                 alt="<?= $course["alt"] ?>">

                            <h3><?= $course["title"] ?></h3>

                            <p><?= $course["description"] ?></p>

                            <p>Category: <?= $course["category"]["Level"] ?></p>

                            <p>Duration: <?= formatDuration((int) $course["category"]["Length"]) ?></p>

                            <a href="#resources">Explore Course</a>

                        </article>

                    <?php endforeach; ?>

                </div>
            </section>

            <!-- BEGINNER COURSES -->
            <section>
                <h2>Beginner Courses</h2>

                <div class="course-grid">

                    <?php foreach ($beginnerCourses as $course): ?>

                        <article class="course-card">

                            <img src="<?= $course["image"] ?>"
                                 alt="<?= $course["alt"] ?>">

                            <h3><?= $course["title"] ?></h3>

                            <p><?= $course["description"] ?></p>

                            <p>Category: <?= $course["category"]["Level"] ?></p>

                            <p>Duration: <?= formatDuration((int) $course["category"]["Length"]) ?></p>

                            <a href="#resources">Explore Course</a>

                        </article>

                    <?php endforeach; ?>

                </div>
            </section>

            <!-- COURSE AT A GLANCE -->
            <section>
                <h2>Course at a Glance</h2>

                <ul>
                    <?php foreach ($courseSummaries as $summary): ?>

                        <li><?= $summary ?></li>

                    <?php endforeach; ?>
                </ul>

                <p>Total study time: <?= $totalWeeks ?> weeks</p>

            </section>

            <!-- RESOURCES SECTION -->
            <section id="resources">
                <h2>Learning Resources</h2>

                <article>
                    <h3>Study Materials</h3>
                    <p>Access useful notes, books and learning materials.</p>

                    <ul>
                        <li>Class Notes</li>
                        <li>PDF Study Guides</li>
                        <li>Practice Questions</li>
                        <li>Online Tutorials</li>
                    </ul>
                </article>

                <article>
                    <h3>Useful Learning Websites</h3>

                    <ul>
                        <li>
                            <a href="https://www.w3schools.com/"
                               target="_blank">W3Schools</a>
                        </li>

                        <li>
                            <a href="https://www.khanacademy.org/"
                               target="_blank">Khan Academy</a>
                        </li>

                        <li>
                            <a href="https://www.coursera.org/"
                               target="_blank">Coursera</a>
                        </li>
                    </ul>
                </article>
            </section>

            <!-- MULTIMEDIA SECTION -->
            <section id="media">
                <h2>Multimedia Learning</h2>

                <article>
                    <h3>Video Lesson</h3>
                    <p>Watch an educational lesson below.</p>

                    <video controls width="100%">
                        <source src="media/lesson.mp4"
                                type="video/mp4">

                        Your browser does not support video.
                    </video>
                </article>

                <article>
                    <h3>Audio Learning</h3>
                    <p>Listen to an educational audio lesson.</p>

                    <audio controls>
                        <source src="media/audio.mp3"
                                type="audio/mpeg">

                        Your browser does not support audio.
                    </audio>
                </article>
            </section>

            <!-- ABOUT SECTION -->
            <section id="about">
                <h2>About StudySpace</h2>

                <p>
                    Our goal is to make learning simple, accessible
                    and enjoyable for every student. We provide
                    educational resources to support academic growth.
                </p>
            </section>

        </main>

        <!-- SIDEBAR -->
        <aside>
            <h2>Quick Information</h2>

            <h3>Study Tips</h3>

            <ul>
                <li>Make a daily study plan.</li>
                <li>Take regular breaks.</li>
                <li>Practice what you learn.</li>
                <li>Stay organized.</li>
            </ul>

            <h3>Announcements</h3>
            <p>Welcome to our Student Learning Resource Platform!</p>

            <h3>Daily Motivation</h3>
            <p>"Learning never exhausts the mind."</p>

            <figure>
                <img src="images/library.jpg"
                     alt="A peaceful library">

                <figcaption>Make time for learning.</figcaption>
            </figure>
        </aside>

    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2026 StudySpace. All Rights Reserved.</p>
        <p>Student Learning Resource Platform</p>
    </footer>

</body>
</html>
