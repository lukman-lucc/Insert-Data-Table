<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Array Database</title>
    <style >
        .red
         {
            background-color : Yellow;
         }
         .green{
            background-color : purple;
         }
         .head
         {
            background-color : orange;
         }
    </style>
</head>
<body>
    <?php 
        $mhs = array(
            array('Product'=>'1969 Harley Davidson Ultimate Chopper', 'Customer'=>'Atelier graphique', 'Employee'=>'Diane Murphy', 'choose'=>'2'),
            array('Product'=>'1952 Alpine Renault 1300', 'Customer'=>'Signal Gift Stores', 'Employee'=>'Mary Petterson', 'choose'=>'1'),
            array('Product'=>'1996 Moto Guzzi 1100i', 'Customer'=>'Australian Collectors, Co.', 'Employee'=>'Diane Murphy', 'choose'=>'2'),
            array('Product'=>'2003 Harley-Davidson Eagle Drag Bike', 'Customer'=>'La Rochelle', 'Employee'=>'Mary Petterson', 'choose'=>'1'),
            array('Product'=>'1972 Alfa Romeo GTA', 'Customer'=>'Baane Mini Imports', 'Employee'=>'mary Petterson', 'choose'=>'1'),
        );
    
?>
    <table border="2" cellpadding="10">
    <thead class="head">
    <tr>
    <th>Product</th>
    <th>Customer</th>
    <th>Employee</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($mhs as $data) : ?>
    <tr class="<?php echo $data['choose'] <= 1.0 ? 'red' : 'green'?>">
        <td><?php echo $data ['Product'] ?> </td>
        <td><?php echo $data ['Customer'] ?> </td>
        <td><?php echo $data ['Employee'] ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>

