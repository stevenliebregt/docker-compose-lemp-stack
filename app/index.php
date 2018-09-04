<?php

$magicNumbers = [
    rand(0, 100),
    rand(100, 200),
    rand(0, 1000),
];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Steven Liebregt" />
        <title>Hello, world!</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>Hello, world!</h1>
        <p>Your magic numbers are:</p>
        <table>
            <tr>
                <th>#</th>
                <th>Number</th>
            <tr>
            <?php foreach ($magicNumbers as $index => $number): ?>
                <tr>
                    <td><?php echo $index; ?></td>
                    <td><?php echo $number; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p>If you can see this properly, then it means PHP is working fine.</p>
    </body>
</html>
