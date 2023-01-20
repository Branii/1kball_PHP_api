<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/vendor/config.php";
require __DIR__ . "/HomeController.php";

app()->set404(function () {
    response()->markup("404: Page not found");
});

#get all draws

app()->get("/api/v1/users", "HomeController@fetchAll");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->get("/api/v1/draws", "HomeController@fetchDraw");

app()->run();
