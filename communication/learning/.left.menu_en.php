<?php
$aMenuLinks = array(
    array(
        "Courses list",
        "/communication/learning/",
        array(),
        array(),
        ""
    ),

    array(
        "My Courses",
        "/communication/learning/mycourses.php",
        array(),
        array(),
        "\$GLOBALS['USER']->IsAuthorized()"
    ),


    array(
        "Grade Book",
        "/communication/learning/gradebook.php",
        array(),
        array(),
        "\$GLOBALS['USER']->IsAuthorized()"
    ),

    array(
        "Profile",
        "/communication/learning/profile.php",
        array(),
        array(),
        "\$GLOBALS['USER']->IsAuthorized()"
    ),


);
