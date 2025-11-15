<!DOCTYPE html>
<html>
<head>
    <title>DevOps CI/CD Next-Level Notes App</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #e2e8f0;
        }

        .container {
            max-width: 800px;
            width: 92%;
            background: rgba(255, 255, 255, 0.1);
            padding: 35px;
            border-radius: 20px;
            backdrop-filter: blur(12px);
            box-shadow: 0 8px 32px rgba(0,0,0,0.25);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);} 
            to {opacity: 1; transform: translateY(0);} 
        }

        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #38bdf8;
            letter-spacing: 1.3px;
            margin-bottom: 25px;
            text-transform: uppercase;
        }

        .cicd-badge {
            text-align: center;
            background: #38bdf8;
            display: inline-block;
            padding: 6px 14px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            color: #0f2027;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        textarea {
            padding: 16px;
            background: rgba(255,255,255,0.2);
            border: 2px solid #38bdf8;
            border-radius: 12px;
            font-size: 15px;
            resize: vertical;
            min-height: 140px;
            margin-bottom: 15px;
            color: white;
            transition: 0.3s;
        }

        textarea:focus {
            border-color: #0ea5e9;
            outline: none;
            box-shadow: 0 0 10px rgba(56,189,248,0.4);
        }

        button {
            width: fit-content;
            background: linear-gradient(135deg, #38bdf8, #0ea5e9);
            color: #0f2027;
            border: none;
            padding: 12px 26px;
            border-radius: 10px;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #0ea5e9, #38bdf8);
            transform: translateY(-2px);
        }

        h2 {
            color: #38bdf8;
            margin-bottom: 12px;
            border-left: 5px solid #0ea5e9;
            padding-left: 12px;
            font-size: 24px;
        }

        .notes-box {
            background: rgba(255,255,255,0.15);
            padding: 18px;
            border-radius: 14px;
            border: 1px solid rgba(255,255,255,0.25);
            max-height: 320px;
            overflow-y: auto;
        }

        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            color: #e2e8f0;
            font-size: 15px;
            line-height: 1.6;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            font-size: 15px;
            color: #cbd5e1;
        }

        .footer span {
            font-weight: bold;
            color: #38bdf8;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Next-Level DevOps CI/CD Notes App</h1>

        <div class="cicd-badge">⚙️ Fully Automated CI/CD Pipeline Enabled</div>

        <form action="save.php" method="post">
            <textarea name="note" placeholder="Write your DevOps / CI/CD notes here..."></textarea><br>
            <button type="submit">💾 Save Note</button>
        </form>

        <h2>Saved Notes:</h2>
        <div class="notes-box">
            <pre><?php
if (file_exists("/data/notes.txt")) {
    echo file_get_contents("/data/notes.txt");
} else {
    echo "No notes yet. Start writing your first DevOps CI/CD note!";
}
?></pre>
        </div>

        <div class="footer">
            Developed & Automated by <span>Abhishek Jadhav</span>
        </div>
    </div>
</body>
</html>
