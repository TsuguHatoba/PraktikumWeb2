<?php
$list = ['SGS22'=>'Samsung Galaxy S22', 'SGS22+'=>'Samsung Galaxy S22+', 'SGA03'=>'Samsung Galaxy A03', 'SGXC5'=>'Samsung Galaxy Xcover 5'];
?>

<html>
    <body>
        <table border = "1">
            <tr>
                <td class = "header">Daftar Smartphone Samsung</td>
            </tr>
            <tr>
                <td><?php echo $list['SGS22']; ?></td>
            </tr>
            <tr>
                <td><?php echo $list['SGS22+']; ?></td>
            </tr>
            <tr>
                <td><?php echo $list['SGA03']; ?></td>
            </tr>
            <tr>
                <td><?php echo $list['SGXC5']; ?></td>
            </tr>
        </table>
    </body>     
</html>

<style>
.header {
    font-weight: bold;
    background-color: red;
    font-size: x-large;
    padding-top: 20;
    padding-bottom: 20;
}
</style>
