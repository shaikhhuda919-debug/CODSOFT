<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Select Quiz</title>
    <?php include 'header.php'; ?>
    <style>
        .quiz-btn{
            display:block;
            width:100%;
            padding:18px;
            margin-bottom:15px;
            font-size:18px;
            font-weight:600;
            color:#fff;
            background:linear-gradient(135deg,#667eea,#764ba2);
            border:none;
            border-radius:14px;
            text-align:center;
            text-decoration:none;
            transition:all 0.3s ease;
            box-shadow:0 10px 25px rgba(0,0,0,0.25);
        }
        .quiz-btn:hover{
            transform:translateY(-5px) scale(1.02);
            box-shadow:0 20px 40px rgba(0,0,0,0.35);
            background:linear-gradient(135deg,#764ba2,#667eea);
            color:#fff;
        }
        .page-title{
            font-weight:700;
            text-align:center;
            margin-bottom:25px;
        }
    </style>
</head>

<body>
<div class="container py-5">
    <div class="card p-4">
        <h2 class="page-title">🎯 Select Your Quiz</h2>

        <?php
        $q = mysqli_query($conn,"SELECT * FROM quizzes");
        while($r = mysqli_fetch_assoc($q)){
        ?>
            <a class="quiz-btn" href="quiz_play.php?id=<?=$r['id']?>">
                <?=$r['title']?> Quiz
            </a>
        <?php } ?>

        <a href="dashboard.php" class="btn btn-dark w-100 mt-3">⬅ Back to Dashboard</a>
    </div>
</div>
</body>
</html>
