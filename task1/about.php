<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us | Quiz Master</title>
    <?php include 'header.php'; ?>

    <style>
        .about-title{
            font-weight:800;
            text-align:center;
            margin-bottom:10px;
        }

        .about-sub{
            text-align:center;
            opacity:.85;
            margin-bottom:30px;
        }

        .about-box{
            font-size:16px;
            line-height:1.8;
            text-align:center;
        }

        .highlight{
            font-weight:600;
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
    <div class="card p-5">

        <h1 class="about-title">About Quiz Master</h1>
        <p class="about-sub">Learn • Practice • Achieve</p>

        <div class="about-box">
            <p>
                <span class="highlight">Quiz Master</span> is a modern and interactive
                online quiz platform designed to test your knowledge, improve your skills,
                and reward your effort with a professional certificate.
            </p>

            <p>
                Each quiz is time-bound to enhance focus and challenge your speed.
                Our platform supports multiple quiz topics, real-time scoring,
                and instant result generation.
            </p>

            <p>
                Whether you are a student or a learner, Quiz Master helps you
                grow through practice and performance.
            </p>
        </div>

        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary px-5">⬅ Back to Home</a>
        </div>

    </div>
</div>
</body>
</html>
