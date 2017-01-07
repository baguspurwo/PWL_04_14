<?php
session_start();
require 'config.php';

if ( isset($_POST['username']) && isset($_POST['password']) ) {

    $sql_check = "SELECT nama,
                         status,
                         id_user
                  FROM user
                  WHERE
                       username=?
                       AND
                       password=?
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);

    $username = $_POST['username'];
    $password = md5( $_POST['password'] );

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nama, $status, $id_user);

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $status;
            $_SESSION['sess_id']    = $id_user;
            $_SESSION['nama']       = $nama;

        }

        $check_log->close();

        header('location:./admin/index.php');
        exit();

    } else {
        header('location: index.php?error='.base64_encode('Username dan Password Invalid !!!'));
        exit();
    }


} else {
    header('location:index.php');
    exit();
}
