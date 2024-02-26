<?php

session_start();

date_default_timezone_set('Asia/Jakarta');

function set_message($type, $message)
{
    $_SESSION['message'] = [
        'type' => $type,
        'message' => $message
    ];
}

function show_message()
{
    if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-' . $_SESSION['message']['type'] . ' alert-dismissible fade show" role="alert">
                ' . $_SESSION['message']['message'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

        unset($_SESSION['message']);
    }
}

function check_login()
{
    if (!isset($_SESSION['user'])) {
        set_message('danger', 'You must login first');
        header('Location: index.php');
    }
}
