<?php
function getData() {
    $name = sanitiseName($_POST["name"]);
    $level5 = [
        sanitiseNum($_POST["L5-1"]),
        sanitiseNum($_POST["L5-2"]),
        sanitiseNum($_POST["L5-3"]),
        sanitiseNum($_POST["L5-4"]),
        sanitiseNum($_POST["L5-5"]),
        sanitiseNum($_POST["L5-6"])
    ];
    $level6 = [
        sanitiseNum($_POST["L6-1"]),
        sanitiseNum($_POST["L6-2"]),
        sanitiseNum($_POST["L6-3"]),
        sanitiseNum($_POST["L6-4"])
    ];
    $project = sanitiseNum($_POST["project"]);

    return array (
        "name"=>$name,
        "level5"=>$level5,
        "level6"=>$level6,
        "project"=>$project
    );
}