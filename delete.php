<?php

require_once 'database/QueryBuilder.php';

$db = new QueryBuilder();
$db->delete($_GET['id'], "tasks");

    header("Location: index.php");