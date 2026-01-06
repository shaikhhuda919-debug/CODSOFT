<?php 
include 'config.php';

if(isset($_POST['login'])){
    $e = $_POST['email'];
    $p = md5($_POST['password']);

    $q = mysqli_query($conn,"SELECT * FROM users WHERE email='$e' AND password='$p'");
    if(mysqli_num_rows($q) == 1){
        $_SESSION['user'] = mysqli_fetch_assoc($q);
        header("location:dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | Quiz Master</title>
    <?php include 'header.php'; ?>

    <style>
        .login-title{
            font-weight:800;
            text-align:center;
            margin-bottom:25px;
        }

        .login-box{
            max-width:420px;
            margin:auto;
            animation:fadeUp 1s ease;
        }

        .login-box input{
            padding:14px;
            font-size:15px;
        }

        @keyframes fadeUp{
            from{opacity:0;transform:translateY(30px)}
            to{opacity:1;transform:translateY(0)}
        }
    </style>
</head>

<body>
<div class="container py-5">
    <div class="card p-5 login-box">

        <h2 class="login-title">Welcome Back</h2>

        <form method="post">
            <input name="email" class="form-control mb-3" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-4" placeholder="Password" required>

            <button name="login" class="btn btn-primary w-100 py-2">
                Login
            </button>
        </form>

        <div class="text-center mt-4">
            <small>Don’t have an account?</small><br>
            <a href="register.php" class="btn btn-link">Create Account</a>
        </div>

    </div>
</div>
</body>
</html>
