<!DOCTYPE html>
<html>
    <head>
            <style>
                table, th, td {
                border: 1px solid black;
                }
            </style>
        <title>PRAK104</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
                $samsung=array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung A03", "Samsung Galaxy Xcover 5");
                foreach($samsung as $model):
            ?>
            <tr>
                <td><?php echo $model;?></td>
            </tr>
            <?php endforeach?>
            </table>
        </body>
</html> 