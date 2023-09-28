<?php

$aMenuLinks = array(
    array(
        "Каталог курсов",
        "index.php",
        array(),
        array(),
        "",
    ),

    array(
        "Мои курсы",
        "mycourses.php",
        array(),
        array(),
        "\$GLOBALS['USER']->IsAuthorized()"
    ),


    array(
        "Журнал обучения",
        "gradebook.php",
        array(),
        array(),
        "\$GLOBALS['USER']->IsAuthorized()"
    ),

    array(
        "Анкета специалиста",
        "profile.php",
        array(),
        array(),
        "\$GLOBALS['USER']->IsAuthorized()"
    ),

);
