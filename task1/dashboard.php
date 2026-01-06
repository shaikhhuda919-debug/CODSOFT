<?php 
include 'config.php';

if (!isset($_SESSION['user'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Quiz Master</title>
    <?php include 'header.php'; ?>

    <style>
        .dashboard-title{
            font-weight:800;
            text-align:center;
            margin-bottom:8px;
        }

        .dashboard-sub{
            text-align:center;
            opacity:.85;
            margin-bottom:30px;
        }

        .action-btn{
            display:block;
            width:100%;
            padding:16px;
            font-size:18px;
            font-weight:600;
            border-radius:30px;
            margin-bottom:15px;
            transition:all .3s ease;
        }

        .action-btn:hover{
            transform:translateY(-4px);
        }

        .fade-up{
            animation:fadeUp 1s ease;
        }

        @keyframes fadeUp{
            from{opacity:0;transform:translateY(30px)}
            to{opacity:1;transform:translateY(0)}
        }
    </style>
</head>

<body>
<div class="container py-5 fade-up">
    <div class="card p-5 text-center">

        <h1 class="dashboard-title">
            Welcome, <?= htmlspecialchars($_SESSION['user']['name']) ?> 👋
        </h1>

        <p class="dashboard-sub">
            Ready to test your knowledge and earn a certificate?
        </p>

        <!-- ONLY PLAY QUIZ BUTTON -->
        <a href="quiz_list.php" class="btn btn-primary action-btn">
            ▶ Play Quiz
        </a>

    </div>
</div>
</body>
</html>
