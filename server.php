<?php

$todoList = [
    "HTML",
    "CSS",
    "Responsive design",
    "JavaScript",
    "PHP"
];

if (isset($_POST['todoItem'])) {
    $todoList[] = $_POST['todoItem'];
}

header("Content-Type: application/json");
echo json_encode($todoList);

?>