<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_group'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO groups (name) VALUES (:name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name]);
    echo "Группа добавлена успешно!";
}
?>
<form method="POST">
    <label for="group_name">Группа:</label>
    <input type="text" id="group_name" name="name" required>
    <button type="submit" name="add_group">Добавить группу</button>
</form>
