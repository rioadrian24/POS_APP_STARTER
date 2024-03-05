<?php

unset($_SESSION['user']);

set_message("success", "Logout berhasil!");
header("Location: index.php");
