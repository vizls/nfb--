<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_course'])) {
    $course_name = $_POST['course_name'];
    $sql = "INSERT INTO courses (name) VALUES (:course_name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['course_name' => $course_name]);
    echo "Курс добавлен успешно!";
}
?>
<form method="POST">
    <label for="course_name">Курс:</label>
    <input type="text" id="course_name" name="course_name" required>
    <button type="submit" name="add_course">Add Course</button>
</form>
