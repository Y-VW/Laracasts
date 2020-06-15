<?php

$app = [];

$app["config"] = require "config/config.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "core/router.php";
require "core/Request.php";

$app["database"] = new QueryBuilder(
    Connection::make($app["config"]["database"])
);
