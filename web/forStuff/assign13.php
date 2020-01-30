<?php
$firstname = sanitize('first_name');
$lastname = sanitize('last_name');
$studentID = sanitize('student_id');
$firstname2 = sanitize('first_name_2');
$lastname2 = sanitize('last_name_2');
$studentID2 = sanitize('student_id_2');
$type = sanitize('concert_type');
$skill = sanitize('skill');
$instrument = sanitize('instrument');
$location = sanitize('location');
$room = sanitize('room');
$time = sanitize('time_slot');

$data = array (
    "firstname" => $firstname,
    "lastname" => $lastname,
    "studentid" => $studentID,
    "firstname2" => $firstname2,
    "lastname2" => $lastname2,
    "studentid2" => $studentID2,
    "type" => $type,
    "skill" => $skill,
    "instrument" => $instrument,
    "location" => $location,
    "room" => $room,
    "time" => $time
);

$filename = "data.txt";

$content = [];
if (file_exists($filename)) {
    $content = file_get_contents($filename);
    $content = json_decode($content);
}
$content[] = $data;
$jstring = json_encode($content);

// if ($firstname == '' || $lastname == '' || $studentID == '') {
//     echo "no data";
// } else {
//     file_put_contents($filename, $jstring);
//     echo $jstring;
// }

    file_put_contents($filename, $jstring);
    echo $jstring;


function sanitize($input) {
    if (isset($_POST[$input])) {
        $value = $_POST[$input];
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }
    else {
        return '';
    }
}