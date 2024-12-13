<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO students (name) VALUES (:name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name]);
    echo "Студент добавлен успешно!";
}
?>
<form method="POST">
    <label for="name">Имя Студента:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit" name="add_student">Добавить Студента</button>
</form>
