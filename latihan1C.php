<!DOCTYPE html>
<html>
<head>
    <style>
        .kotak {
            display: grid;
            grid-template-columns: 50px 50px 50px;
            grid-template-rows: 50px 50px 50px;
            gap: 5px;
            width: fit-content;
            margin: 20px;
        }
        .kotak div {
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            font-weight: bold;
        }
        .kosong {
            border: none;
        }
    </style>
</head>
<body>

<?php
$a = "A";
$b = "B";
$c = "C";
?>

<div class="kotak">
    <div><?php echo $a; ?></div>
    <div class="kosong"></div>
    <div class="kosong"></div>

    <div><?php echo $a; ?></div>
    <div><?php echo $b; ?></div>
    <div class="kosong"></div>

    <div><?php echo $a; ?></div>
    <div><?php echo $b; ?></div>
    <div><?php echo $c; ?></div>
</div>

</body>
</html>