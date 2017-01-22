<?php
// Secure cookie example

// setcookie(name, value, expire, path, domain, secure, httponly)
//
// Pass in NULL for params to use default values
// Defaults:
//   expire = 0 (expires when browser closes)
//   path = (current directory)
//   domain = (current domain)
//   secure = false
//   httponly = false (note: not respected by all browsers)

$name = 'username';
$value = 'anggadarkprince';
$expire = time() + 60 * 60 * 24 * 7; // 1 week from now
$path = '/';
$domain = 'www.angga-ari.com'; // set angga-ari.com could access blog.angga-ari.com, account.angga-ari.com
$secure = isset($_SERVER['HTTPS']);
$httponly = true; // JavaScript can't access cookie

setcookie($name, $value, $expire, $path, $domain, $secure, $httponly);
