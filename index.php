<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>RRSECCO - Listar</title>
</head>
<body>
    <?php
        require './Conn.php';
        require './BillsPays.php';

        $list = new BillsPays();
        $result = $list->list();

    foreach ($result as $row){
        extract($row);
        // PHP <=7
        //
        echo "ID: " . $row['id']. "<br>";
        echo "Nome: " . $row['name']. "<br>";
        echo "Valor a pagar: " . $row['value']. "<br>";
        echo "Prestação: " . $row['installments']. "<br>";
        echo "Observação: " . $row['obs']. "<br>";
        echo "Data e Hora: " . $row['created']. "<br>";  
        echo "<hr>";
        // PHP 8
        //echo "ID: $id <br>";


    }
    ?>
</body>

</html>