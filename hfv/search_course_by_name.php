<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search_course'])) {
    $course_name = $_POST['course_name'];
    $sql = "SELECT students.name AS student_name
            FROM students
            JOIN student_courses ON students.id = student_courses.student_id
            JOIN courses ON student_courses.course_id = courses.id
            WHERE courses.name LIKE :course_name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['course_name' => "%$course_name%"]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<form method="POST">
    <label for="course_name">Курс:</label>
    <input type="text" id="course_name" name="course_name" required>
    <button type="submit" name="search_course">Поиск</button>
</form>
<?php if (!empty($data)): ?>
<table>
    <tr>
        <th>Имя Студента</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['student_name'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>
