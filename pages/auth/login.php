<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $conn->query("SELECT * FROM users
    WHERE username = '$username' AND password = '$password'");

    if ($user->num_rows > 0) {
        $_SESSION['user'] = $user->fetch_assoc();
        set_message("success", "Login berhasil!");
        header("Location: index.php?page=home");
    } else {
        set_message("danger", "Username / password salah");
        header("Location: index.php");
    }
}

?>

<div class="container">
    <div class="row justify-content-center align-items-center py-5" style="min-height: 100vh;">
        <div class="col-md-6 col-lg-4">
            <div class="text-center mb-4">
                <img src="assets/img/logo/logo.png" alt="Smart POS" width="50">
            </div>
            <h3 class="text-center mb-4 fw-thin">Sign in to Smart POS</h3>

            <?= show_message() ?>

            <div class="card bg-light mb-5">
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button class="btn btn-primary w-100 mt-3" name="login">Login</button>
                    </form>
                </div>
            </div>
            <p class="text-center">Made with ❤️ by <a href="https://instagram.com/rioadrian.dev" class="text-decoration-none">@rioadrian.dev</a></p>
        </div>
    </div>
</div>