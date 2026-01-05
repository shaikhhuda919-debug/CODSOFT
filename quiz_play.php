<?php
include 'config.php';

if (!isset($_GET['id'])) {
    die("Quiz not found");
}

$quiz_id = intval($_GET['id']);
$qs = mysqli_query($conn, "SELECT * FROM questions WHERE quiz_id=$quiz_id");

if (mysqli_num_rows($qs) == 0) {
    die("No questions found");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>
<?php include 'header.php'; ?>

<script>
let time = 120;
let timer = setInterval(() => {
    if (time <= 0) {
        clearInterval(timer);
        document.getElementById('quizForm').submit();
    }
    document.getElementById('timer').innerText = time + " sec";
    time--;
}, 1000);
</script>

<style>
body{
    background: linear-gradient(135deg,#667eea,#764ba2);
}

.quiz-box{
    background:#ffffff;
    border-radius:16px;
    padding:30px;
}

.question{
    font-size:18px;
    font-weight:600;
    margin-bottom:15px;
}

.option{
    background:#f1f5ff;
    padding:14px 18px;
    border-radius:12px;
    margin-bottom:12px;
    display:flex;
    align-items:center;
    gap:12px;
    cursor:pointer;
}

.option:hover{
    background:#e0e7ff;
}

.option input{
    transform:scale(1.2);
}
</style>
</head>

<body>

<div class="container py-5">
<div class="quiz-box shadow">

<h5 class="mb-4">
⏱ Time Left: <span id="timer" class="text-danger fw-bold">120 sec</span>
</h5>

<form method="post" action="result.php" id="quizForm">
<input type="hidden" name="quiz_id" value="<?=$quiz_id?>">

<?php
$i = 1;
while ($q = mysqli_fetch_assoc($qs)) {

    $options = [];
    foreach (['a','b','c','d'] as $o) {
        if (!empty(trim($q[$o]))) {
            $options[$o] = $q[$o];
        }
    }
?>

<div class="mb-4">
    <div class="question">
        <?=$i?>. <?=$q['question']?>
    </div>

<?php
if (count($options) < 2) {
    echo "<p class='text-danger'>⚠ Question has insufficient options</p>";
} else {
    foreach ($options as $key => $val) {
?>
    <label class="option">
        <input type="radio"
               name="ans[<?=$q['id']?>]"
               value="<?=strtoupper($key)?>">
        <span><?=$val?></span>
    </label>
<?php
    }
}
?>

</div>

<?php $i++; } ?>

<button class="btn btn-success w-100 py-2 fs-5">
Submit Quiz
</button>

</form>

</div>
</div>

</body>
</html>
