<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filter_group'])) {
    $group_id = $_POST['group_id'];
    $sql = "SELECT * FROM students WHERE group_id = :group_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['group_id' => $group_id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<form method="POST">
    <label for="group_id">Группа ID:</label>
    <input type="number" id="
