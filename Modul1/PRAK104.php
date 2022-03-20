<?php
$list = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
?>

<html>
    <body>
        <table border = "1">
            <tr>
                <td class = "header">Daftar Smartphone Samsung</td>
            </tr>
            <tr>
                <td><?php echo $list[0]; ?></td>
            </tr>
            <tr>
                <td><?php echo $list[1]; ?></td>
            </tr>
            <tr>
                <td><?php echo $list[2]; ?></td>
            </tr>
            <tr>
                <td><?php echo $list[3]; ?></td>
            </tr>
        </table>
    </body>     
</html>

<style>
.header {
    font-weight: bold;
}
</style>
