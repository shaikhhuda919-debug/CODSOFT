<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz Master</title>
    <?php include 'header.php'; ?>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'Poppins',sans-serif;
            margin:0;
            overflow:hidden;
        }

        /* TOP NAV */
        .top-nav{
            position:absolute;
            top:25px;
            right:40px;
            display:flex;
            gap:12px;
            z-index:10;
        }

        .top-nav a{
            padding:8px 18px;
            font-size:14px;
            border-radius:20px;
            text-decoration:none;
            color:#fff;
            background:rgba(255,255,255,0.15);
            backdrop-filter:blur(6px);
            transition:all .3s ease;
        }

        .top-nav a:hover{
            background:#fff;
            color:#333;
        }

        /* BRAND TOP CENTER */
        .brand-top{
            position:absolute;
            top:25px;
            left:50%;
            transform:translateX(-50%);
            text-align:center;
            color:#fff;
        }

        .brand-top h1{
            font-size:28px;
            font-weight:800;
            margin:0;
            letter-spacing:1px;
        }

        .brand-top span{
            font-size:12px;
            opacity:0.8;
        }

        /* HERO CENTER */
        .hero{
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            color:#fff;
        }

        .hero h2{
            font-size:72px;
            font-weight:800;
            letter-spacing:2px;
            animation:slideUp 1s ease;
        }

        .hero p{
            margin-top:12px;
            font-size:18px;
            opacity:.85;
            animation:slideUp 1.3s ease;
        }

        .play-btn{
            margin-top:40px;
            display:inline-block;
            padding:22px 70px;
            font-size:24px;
            font-weight:700;
            color:#fff;
            text-decoration:none;
            border-radius:45px;
            background:linear-gradient(135deg,#ff512f,#dd2476);
            box-shadow:0 20px 45px rgba(0,0,0,.45);
            animation:pulse 2s infinite;
            transition:.35s;
        }

        .play-btn:hover{
            transform:scale(1.08);
            box-shadow:0 30px 70px rgba(0,0,0,.6);
            color:#fff;
        }

        /* ANIMATIONS */
        @keyframes slideUp{
            from{transform:translateY(40px);opacity:0}
            to{transform:translateY(0);opacity:1}
        }

        @keyframes pulse{
            0%{transform:scale(1)}
            50%{transform:scale(1.05)}
            100%{transform:scale(1)}
        }

        /* MOBILE */
        @media(max-width:768px){
            .hero h2{font-size:42px}
            .play-btn{font-size:18px;padding:16px 40px}
            .top-nav{right:20px}
        }
    </style>
</head>

<body>

<!-- TOP CENTER BRAND -->
<div class="brand-top">
    <h1>Quiz Master</h1>
    <span>by Huda Shaikh</span>
</div>

<!-- TOP RIGHT NAV -->
<div class="top-nav">
    <a href="index.php">Home</a>
    <?php if(isset($_SESSION['user'])){ ?>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    <?php } else { ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    <?php } ?>
</div>

<!-- HERO CONTENT -->
<div class="hero">
    <div>
        <h2>Quiz Master</h2>
        <p>Test your skills • Beat the timer • Earn certificate</p>

        <a href="<?php echo isset($_SESSION['user']) ? 'quiz_list.php' : 'login.php'; ?>"
           class="play-btn">
            ▶ PLAY QUIZ
        </a>
    </div>
</div>

</body>
</html>
