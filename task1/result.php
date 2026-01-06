<?php

include 'config.php';

if (!isset($_POST['quiz_id']) || !isset($_POST['ans'])) {
    die("Invalid access");
}

$score = 0;
$quiz  = intval($_POST['quiz_id']);

foreach($_POST['ans'] as $qid => $a){
    $qid = intval($qid);
    $a   = mysqli_real_escape_string($conn,$a);

    $res = mysqli_query($conn,"SELECT correct FROM questions WHERE id=$qid");

    if ($res && mysqli_num_rows($res) > 0) {
        $r = mysqli_fetch_assoc($res);
        if (strtoupper($r['correct']) === strtoupper($a)) {
            $score++;
        }
    }
}

$uid = $_SESSION['user']['id'];
mysqli_query($conn,"INSERT INTO results(user_id,quiz_id,score) VALUES($uid,$quiz,$score)");

$pass = $score >= 5;
?>
<!DOCTYPE html>
<html>
<head>
<title>Result | Quiz Master</title>
<?php include 'header.php'; ?>

<style>
body{
    background:linear-gradient(135deg,#667eea,#764ba2);
}
.result-card{
    max-width:500px;
    margin:auto;
    animation: fadeUp 1s ease;
}
.score-circle{
    width:140px;
    height:140px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:38px;
    font-weight:800;
    margin:20px auto;
    color:white;
    background:<?= $pass ? '#198754' : '#dc3545' ?>;
}
@keyframes fadeUp{
    from{opacity:0;transform:translateY(30px)}
    to{opacity:1;transform:translateY(0)}
}
</style>
</head>

<body>
<div class="container py-5">
<div class="card p-5 text-center result-card shadow">

<h2 class="fw-bold mb-3">Quiz Result</h2>

<div class="score-circle">
    <?=$score?>
</div>

<p class="fw-semibold">
<?= $pass ? "🎉 Congratulations! You passed the quiz." : "❌ Keep practicing, you’ll do better next time." ?>
</p>

<div class="d-grid gap-3 mt-4">

<?php if($pass): ?>
<a href="cert/certificate.php?score=<?=$score?>" class="btn btn-primary btn-lg">
⬇ Download Certificate
</a>
<?php endif; ?>

<a href="dashboard.php" class="btn btn-dark btn-lg">
⬅ Back to Dashboard
</a>

</div>
</div>
</div>
</body>
</html>
