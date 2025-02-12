<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corazón Diabólico Grande</title>
    <style>
        .heart {
            position: relative;
            width: 200px;
            height: 200px;
            background: #FF0000;
            transform: rotate(-45deg);
            margin: 100px auto;
        }
        .heart:before,
        .heart:after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: #FF0000;
            border-radius: 50%;
        }
        .heart:before {
            top: -100px;
            left: 0;
        }
        .heart:after {
            top: 0;
            left: 100px;
        }

        /* Ojos diabólicos */
        .eye {
            position: absolute;
            width: 50px;
            height: 50px;
            background: white;
            border-radius: 50%;
            top: 80px;
        }
        .eye.left {
            left: 50px;
        }
        .eye.right {
            left: 130px;
        }

        .pupil {
            position: absolute;
            width: 25px;
            height: 25px;
            background: black;
            border-radius: 50%;
            top: 12px;
            left: 12px;
        }

        /* Cejas diabólicas */
        .brow {
            position: absolute;
            width: 60px;
            height: 10px;
            background: black;
            top: 60px;
        }
        .brow.left {
            left: 45px;
            transform: rotate(-25deg);
        }
        .brow.right {
            left: 125px;
            transform: rotate(25deg);
        }
    </style>
</head>
<body>
<div class='heart'>
    <div class='eye left'><div class='pupil'></div></div>
    <div class='eye right'><div class='pupil'></div></div>
    <div class='brow left'></div>
    <div class='brow right'></div>
</div>
</body>
</html>
