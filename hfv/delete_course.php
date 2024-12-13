<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_course'])) {
    $course_id = $_POST['course_id'];
    $sql = "DELETE FROM courses WHERE id = :course_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['course_id' => $course_id]);
    echo "Курс успешно удалён!";
}
?>
<form method="POST">
    <label for="course_id">Курс ID:</label>
    <input type="number" id="course_id" name="course_id" required>
    <button type="submit" name="delete_course">Delete Course</button>
</form>
