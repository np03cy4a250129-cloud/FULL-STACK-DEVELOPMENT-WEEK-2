
<?php

function formatDuration($weeks) {
    return $weeks === 1 ? "1 week" : $weeks . " weeks";
}

function getCoursesByLevel($courses, $level) {
    return array_filter(
        $courses,
        fn($course) => $course["category"]["Level"] === $level
    );
}

function getCourseSummaries($courses) {
    return array_map(
        fn($course) => $course["title"] . " (" . $course["category"]["Length"] . ")",
        $courses
    );
}

function getTotalWeeks($courses) {
    return array_reduce(
        $courses,
        fn($total, $course) => $total + (int) $course["category"]["Length"],
        0
    );
}
