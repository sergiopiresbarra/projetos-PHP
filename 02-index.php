<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8"/>
        <title>Title</title>
    </head>

    <body>
        <div>	
            <form method="get" action="02-tabuada.php">
                <select name="num">
                    <?php 
                    for($i=1; $i<=10;$i++){
                        echo "<option>$i</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="tabuada"/>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor">
            </form>
        </div>
    </body>
</html>