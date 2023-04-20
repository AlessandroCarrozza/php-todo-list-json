<?php

$todoList = [
    "HTML",
    "CSS",
    "Responsive design",
    "JavaScript",
    "PHP"
];


header("Content-Type: application/json");
echo json_encode($todoList);

?>