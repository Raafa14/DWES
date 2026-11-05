

<?php 
if (isset($_REQUEST['personas'])) {
    $personas=unserialize(base64_decode($_REQUEST['personas']));
} else {
    $personas = [];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
         border-collapse: collapse;
        }
        td, th {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    
    <table>
    <tr>
        <?php foreach (array_keys($personas[0]) as $j): ?>
            <th><?= $j ?></th>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($personas as $i => $valor): ?>
        <tr>
            <?php foreach ($valor as $texto): ?>
                <td><?= $texto ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </table>

</body>
</html>