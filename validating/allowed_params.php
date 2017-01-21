<?php

function filtered_params($source, $allowed = [])
{
    $allowed_array = [];
    foreach ($allowed as $param) {
        if (isset($source[$param])) {
            $allowed_array[$param] = $_GET[$param];
        } else {
            $allowed_array[$param] = NULL;
        }
    }
    return $allowed_array;
}

function allowed_get_params($allowed_params = [])
{
    filtered_params($_GET, $allowed_params);
}

function allowed_post_params($allowed_params = [])
{
    filtered_params($_POST, $allowed_params);
}

$get_params = allowed_get_params(['username', 'password', 'status']);

echo '<pre>';
print_r($get_params);
echo '</pre>';

// http://localhost:8000/validating/allowed_params.php?username=anggaari&password=secret&logged_in=1
