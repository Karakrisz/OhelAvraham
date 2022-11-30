<?php


function logMessage($level, $message)
{
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}


function esc($string)
{
    echo htmlspecialchars($string);
}

function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}

function AddSaturdayPeople($connection, $user_name, $user_email)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO users (user_name, user_email) VALUES (?,?)')) {
        mysqli_stmt_bind_param($statement, 'ss', $user_name, $user_email);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

// function users($connection)
// {
//     if ($statement = mysqli_prepare($connection, 'SELECT COUNT(*) FROM `users`')) {
//         mysqli_stmt_execute($statement);
//         $result = mysqli_stmt_get_result($statement);
//         return mysqli_fetch_all($result, MYSQLI_ASSOC);
//     } else {
//         logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
//         errorPage();
//     }
// }