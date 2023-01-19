<?php

$student_info_keys = [
    'name',
    'age',
    'dob'


];

$students = [
    ['logan',20, '2002-02-09'],
    ['gagandeep',26,'1997-2-1']
];

$aa_students = [
    [
        "name" => "Logan Dobson",
        "age" => 20,
        "dob" => "2002-02-09"
    ],
    [
        "name" => "shaun",
        "age" => 44,
        "dob" => "2123-32-54"
    ]
    ];

    foreach($aa_students as $student){
        echo $student["age"];
    }