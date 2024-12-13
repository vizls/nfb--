<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_student'])) {
    $student_id = $_POST['student_id'];
    $sql = "DELETE FROM students WHERE id = :student_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['student_id' => $student_id]);
    echo "Студент успешно удалён!";
}
?>
<form method="POST">
    <label for="student_id">Студент ID:</label>
    <input type="number" id="student_id" name="student_id" required>
    <button type="submit" name="delete_student">Delete Student</button>
</form>
