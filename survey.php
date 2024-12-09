<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];

    $submission_time = date("Y-m-d_H-i-s");
    $file_name = "survey/response_" . $submission_time . ".txt";
    $data = "Ім'я: $name\nEmail: $email\nОцінка сайту: $q1\nПокращення: $q2\nРекомендація: $q3\nДата: $submission_time";
    file_put_contents($file_name, $data);

    echo "Анкету успішно надіслано!";
} else {
    echo "Помилка: неправильний метод запиту.";
}
?>
