<?php
$password1='123456';
echo "$password1.<br>";
$hash1=password_hash($password1,PASSWORD_DEFAULT);
echo "{$hash1}.<br>";
$hash2=password_hash($password1,PASSWORD_DEFAULT);
echo "{$hash2}.<br>";
if (password_verify($password1,$hash1)){
    echo 'ok';
}else {
    echo'XX';
}