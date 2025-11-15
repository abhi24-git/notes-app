<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Next-Level DevOps CI/CD Notes App</title>
    <style>/* keep your CSS from final version (omitted here for brevity) */</style>
</head>
<body>
<div class="container">
  <h1>Next-Level DevOps CI/CD Notes App</h1>
  <form action="save.php" method="post">
    <textarea name="note" placeholder="Write your DevOps / CI/CD notes here..."></textarea><br>
    <button type="submit">💾 Save Note</button>
  </form>

  <h2>Saved Notes:</h2>
  <div class="notes-box">
    <pre><?php
$notesFile = __DIR__ . '/data/notes.txt';
if (file_exists($notesFile)) {
    echo htmlspecialchars(file_get_contents($notesFile));
} else {
    echo "No notes yet. Start writing your first DevOps / CI/CD note!";
}
?></pre>
  </div>

  <div class="footer">Developed & Automated by <span>Abhishek Jadhav</span></div>
</div>
</body>
</html>

    </div>
</body>
</html>
