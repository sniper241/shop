<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>my card</title>
    <style>
        .thead{
            box-shadow: 4px 4px 15px silver;
            background-color: red   ;
        }

        .tbody{
            box-shadow: 1px 1px 10px silver;
        }
        
        
    </style>
</head>
<body>
            <?php 
            include "config.php";
            $q = "SELECT * FROM card1";
            $r=mysqli_query($con, $q);
            while($row = mysqli_fetch_assoc($r)){
                echo "
            <center>
            <table>
            <thead class='thead'>
                <tr >
                    <th>id</th>
                    <th>name</th>
                    <th>price</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody class='tbody'>
                <tr>
                    <td >$row[id]</td>
                    <td>$row[name]</td>
                    <td >$row[price]</td>
                    <td ><a href='delete_card.php?id=$row[id]' class='btn btn-danger'>delete</a></td>   
                </tr>
            </tbody>
            </table>
            </center>
               ";}?>
</body>
</html>