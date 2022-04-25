<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculette</h1><hr>
    <form action="" method="post">
        <input type="number" name="nb1" placeholder="Entrez un nombre :">
        <select name="op">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select>
        <input type="number" name="nb2" placeholder="Entrez un nombre :">
        <input type="submit" value="Calculer" name="bouton">
    </form>
    <hr>

    <?php
        if(isset($_POST["bouton"]))
        {
            $nb1 = $_POST["nb1"];
            $op = $_POST["op"];
            $nb2 = $_POST["nb2"];

            switch($op){
                case "+" : $res = $nb1 + $nb2;
                break;
                case "-" : $res = $nb1 - $nb2;
                break;
                case "*" : $res = $nb1 * $nb2;
                break;
                case "/" : if($nb2 == 0){
                            $res = "Division par 0, Impossible!!!";
                        }else{
                            $res = $nb1 / $nb2;
                break;
                       }
        }
            echo "<h3>$nb1 $op $nb2 = $res</h3><hr>";
        }
    ?>

</body>
</html>