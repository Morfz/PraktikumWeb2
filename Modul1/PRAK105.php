<!DOCTYPE html>
<html>
    <head>
        <style>
            table, th, td {
            border: 1px solid black;
            }
        </style>
        <title>PRAK105</title>
    </head>
    <body>
        <table>
            <tr bgcolor="red" height="70px">
                <th><h2>Daftar Smartphone Samsung</h2></th>
            </tr>
            <?php
                $samsung=array("samsung1"=>"Samsung Galaxy S22", "samsung2"=>"Samsung Galaxy S22+", "samsung3"=>"Samsung A03", "samsung4"=>"Samsung Galaxy Xcover 5");
                foreach($samsung as $urutan => $model):
            ?>
            <tr>
                <td><?php echo $model;?></td>
            </tr>
            <?php endforeach?>
            </table>
        </body>
</html> 