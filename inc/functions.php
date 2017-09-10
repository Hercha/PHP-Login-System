<?php

// Force user to be logged in, or redirect. Dashboard can not be reached without logged in
function ForceLogin() {
    if(isset($_SESSION['user_id'])) {
        // The user is allowed here
    } else {
        // The user is not allowed here
        header("Location: login.php"); exit;
    }
}

function ForceDashboard() {
    if(isset($_SESSION['user_id'])) {
        // The user is allowed here but redirect anyway
        header("Location: dashboard.php"); exit;
    } else {
        // The user is not allowed here
    }
}