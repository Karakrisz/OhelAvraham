<?php

function homeController()
{
    $connection = getConnection();
  //  $getUsers = users($connection);

    return [
        "home",
        [
            "title" => "Kezdőlap"
        ]
    ];
}

function applicationFormController()
{


    return [
        "szombati-jelentkezes",
        [
            "title" => "Szombati jelentkezés"
        ]
    ];
}

function AddSaturdayPeopleSubmitController()
{
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $connection = getConnection();
    AddSaturdayPeople($connection, $user_name, $user_email);
    return [
        "redirect:/szombati-jelentkezes", [],
    ];
}

function dataProcessingController()
{


    return [
        "adatvedelmi-tajekoztato",
        [
            "title" => "Adatvédelmi tájékoztató"
        ]
    ];
}


function notFoundController()
{
    return [
        "404", [
            "title" => "A keresett oldal nem található."
        ]
    ];
}