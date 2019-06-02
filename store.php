<?php

require_once 'database/QueryBuilder.php';

$db = new QueryBuilder();
$arr = $_POST;
$db->save($arr, "tasks");

    header("Location: index.php");
    exit;
