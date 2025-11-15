<?php
// save.php
$notesDir = __DIR__ . '/data';
$notesFile = $notesDir . '/notes.txt';

if (!is_dir($notesDir)) {
    mkdir($notesDir, 0755, true);
    chown($notesDir, posix_getuid()); // optional if ownership needed
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['note'])) {
    $note = trim($_POST['note']) . PHP_EOL . '---' . PHP_EOL;
    file_put_contents($notesFile, $note, FILE_APPEND | LOCK_EX);
}

header('Location: /');
exit;

