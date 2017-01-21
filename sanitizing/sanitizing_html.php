<?php
// HTML/JavaScript sanitization
// toggle true and false to check what different
$sanitize = true;

$html_string = "<div style=\"color: red; font-size: 30px;\">" .
    "This <strong>string</strong> contains text & " .
    "<span style=\"color: green;\">HTML</span>." .
    "</div>" .
    "<br />";

$javascript_string = "<script>alert('Gotcha!');</script>";

if ($sanitize) {
    // html special chars like ampersand, double and single quotes, less than, and greater than
    echo htmlspecialchars($html_string);
    // htmlentities substitute more characters including non standard UTF-8
    // echo htmlentities($html_string);
    // echo strip_tags($html_string);

    echo htmlspecialchars($javascript_string);
    // echo htmlentities($javascript_string);
    // echo strip_tags($javascript_string);

} else {
    echo $html_string;
    echo $javascript_string;
}