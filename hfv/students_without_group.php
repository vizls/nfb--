<?php
require_once '../database.php';
$sql = "SELECT * FROM students WHERE group_id IS NULL";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>ID</th>
        <th>Имя</th>
    </tr>
    <?php foreach ($data as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
