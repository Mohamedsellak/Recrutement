<?php

// login methodes
function Login($login, $pass)
{
    include '../Connection/connection.php';

    $stmt = $conn->prepare("SELECT * FROM users WHERE login = '$login' AND pass= '$pass' ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return count($result) > 0 ? $result[0] : -1;
}

// getAll info
function getAll($tableName)
{
    include '../Connection/connection.php';

    $stmt = $conn->prepare("SELECT * FROM $tableName");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return count($result) > 0 ? $result : -1;
}
// print_r(getAll("users"));


////////////////////////
///// get info ///////
/////////////////////
function getEntrInfo($id_entreprise)
{
    include '../Connection/connection.php';

    $stmt = $conn->prepare("SELECT * FROM entreprise WHERE id_entreprise= $id_entreprise ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return count($result) > 0 ? $result[0] : -1;
}

function getOffreInfo($id_offre)
{
    include '../Connection/connection.php';

    $stmt = $conn->prepare("SELECT * FROM offre WHERE id_offre= $id_offre ");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    return count($result) > 0 ? $result[0] : -1;
}
