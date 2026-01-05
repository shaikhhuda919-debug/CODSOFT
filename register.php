<?php 
include 'config.php';

if(isset($_POST['reg'])){

    $n = mysqli_real_escape_string($conn, $_POST['name']);
    $e = mysqli_real_escape_string($conn, $_POST['email']);
    $p = md5($_POST['password']);

    // check duplicate email
    $check = mysqli_query($conn,"SELECT id FROM users WHERE email='$e'");

    if(mysqli_num_rows($check) > 0){
        $error = "Email already registered!";
    } else {
        mysqli_query($conn,
            "INSERT INTO users(name,email,password)
             VALUES('$n','$e','$p')"
        );
        header("location:login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Register | Quiz Master</title>
<?php include 'header.php'; ?>

<style>
.auth-card{
    max-width:450px;
    margin:auto;
    animation: fadeUp 1s ease;
}

.auth-title{
    font-weight:800;
    margin-bottom:5px;
}

.auth-sub{
    opacity:.8;
    margin-bottom:25px;
}

.form-control{
    padding:12px;
    border-radius:12px;
}

.form-control:focus{
    box-shadow:none;
    border-color:#198754;
}

.auth-btn{
    padding:12px;
    font-weight:600;
    border-radius:30px;
    font-size:17px;
}

.link-text{
    margin-top:15px;
    text-align:center;
}

@keyframes fadeUp{
    from{opacity:0;transform:translateY(30px)}
    to{opacity:1;transform:translateY(0)}
}
</style>
</head>

<body>
<div class="container py-5">
<div class="card p-5 auth-card">

<h2 class="auth-title text-center">Create Account</h2>
<p class="auth-sub text-center">Join Quiz Master & start learning</p>

<form method="post">
    <input name="name" class="form-control mb-3" placeholder="Full Name" required>

    <input name="email" type="email" class="form-control mb-3" placeholder="Email Address" required>

    <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>

    <button name="reg" class="btn btn-success w-100 auth-btn">
        🚀 Register
    </button>
</form>

<div class="link-text">
    Already have an account?
    <a href="login.php" class="fw-semibold text-success">Login</a>
</div>

</div>
</div>
</body>
</html>
