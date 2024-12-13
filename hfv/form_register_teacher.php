<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    try {
        $sql = "INSERT INTO teachers (name, email, subject) VALUES (:name, :email, :subject)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'subject' => $subject
        ]);
        echo "Teacher registered successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
