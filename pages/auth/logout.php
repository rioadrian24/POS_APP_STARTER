<?php

unset($_SESSION['user']);

set_message('success', 'You have been logged out');
header('Location: index.php?page=login');
