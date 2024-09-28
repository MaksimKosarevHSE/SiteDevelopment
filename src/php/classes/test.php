<?php
include_once "Student.php";
include_once "User.php";
//int $userId, string $email, string $password, string $firstName, string $lastName, string $thirdName,
// string $avatarUrl, string $positionId, int $studentID, int $course, string $faculty, int $group
$maksim = new Student(1, "maksim@mail.com", "12345", "Maksim",
"Kosarev", null, "https://google.com", 1, 51, 1, "KNT", 9);
echo $maksim;