<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Next-Level DevOps CI/CD Deployment Notes-App</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #1abc9c, #16a085);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            min-height: 100vh;
            align-items: center;
        }

        .container {
            max-width: 750px;
            width: 90%;
            background: #ffffff;
            margin: 20px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.18);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h1 {
            text-align: center;
            color: #0f766e;
            margin-bottom: 25px;
            font-size: 30px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        textarea {
            padding: 16px;
            border: 2px solid #0f766e;
            border-radius: 12px;
            font-size: 15px;
            resize: vertical;
            min-height: 130px;
            margin-bottom: 15px;
            transition: 0.3s;
        }

        textarea:focus {
            border-color: #0d9488;
            outline: none;
            box-shadow: 0 0 8px rgba(13,148,136,0.4);
        }

        button {
            align-self: flex-start;
            background: linear-gradient(135deg, #0d9488, #0f766e);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
        }

        button:hover {
            background: linear-gradient(135deg, #0f766e, #0d9488);
            transform: translateY(-2px);
        }

        h2 {
            color: #0f766e;
            margin-bottom: 12px;
            border-left: 5px solid #0d9488;
            padding-left: 12px;
            font-size: 22px;
        }

        .notes-box {
            background: #f1f5f9;
            padding: 18px;
            border-radius: 14px;
            border: 1px solid #d1d5db;
            max-height: 320px;
            overflow-y: auto;
        }

        pre {
            background: none;
            padding: 0;
            margin: 0;
            border: none;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 15px;
            line-height: 1.6;
            color: #1e293b;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 15px;
            color: #334155;
        }

        .footer span {
            font-weight: bold;
            color: #0f766e;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Next-Level DevOps CI/CD Deployment Notes-App</h1>

    <form action="save.php" method="post">
        <textarea name="note" placeholder="Write your DevOps CI/CD notes here..."></textarea><br>
        <button type="submit">💾 Save Note</button>
    </form>

    <h2>Saved Notes:</h2>
    <div class="notes-box">
        <pre>
<?php
$notesFile = __DIR__ . '/data/notes.txt';

if (file_exists($notesFile)) {
    echo htmlspecialchars(file_get_contents($notesFile));
} else {
    echo "No notes yet. Start writing your first DevOps CI/CD note!";
}
?>
        </pre>
    </div>

    <div class="footer">
        Developed & Automated by <span>Abhishek Jadhav</span>
    </div>
</div>
</body>
</html>

