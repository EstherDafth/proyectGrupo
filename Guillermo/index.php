<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corazón Rojo</title>
    <style>
        .heart {
            position: relative;
            width: 100px;
            height: 100px;
            background: #FF0000;
            transform: rotate(-45deg);
            margin: 50px auto;
        }
        .heart:before,
        .heart:after {
            content: '';
            position: absolute;
            width: 100px;
            height: 100px;
            background: #FF0000;
            border-radius: 50%;
        }
        .heart:before {
            top: -50px;
            left: 0;
        }
        .heart:after {
            top: 0;
            left: 50px;
        }
    </style>
</head>
<body>
<div class='heart'></div>
</body>
</html>
