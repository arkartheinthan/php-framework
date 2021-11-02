<?php

require "function.php";
$config = require "config.php";
require "db.php";
require "queryBuilder.php";

$pdo = DBConnect::make($config["database"]);
$query = new QueryBulider($pdo);
$user = $query->all();