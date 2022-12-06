<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pan Tadeusz</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body>
        <header class="text-center">
            <h1>Pan Tadeusz, czyli Ostatni zajazd na Litwie. Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem.</h1>
        </header>
        <div class="container">
            <div class="row">
                <h2>Spis treści</h2>
                <ul class="col-4">
                    <li><a href="./index.php">Strona Główna</a></li>
                    <?php
                        for ($k = 1; $k <= 12 ; $k++) {
                            print("<li><a href=\"./index.php?k=$k\">Księga $k</a></li>");
                        }
                    ?>
                    <!-- <li><a href="./k1.html">Księga 1</a></li>
                    <li><a href="./k2.html">Księga 2</a></li>
                    <li><a href="./k3.html">Księga 3</a></li>
                    <li><a href="./k4.html">Księga 4</a></li>
                    <li><a href="./k5.html">Księga 5</a></li>
                    <li><a href="./k6.html">Księga 6</a></li>
                    <li><a href="./k7.html">Księga 7</a></li>
                    <li><a href="./k8.html">Księga 8</a></li>
                    <li><a href="./k9.html">Księga 9</a></li>
                    <li><a href="./k10.html">Księga 10</a></li>
                    <li><a href="./k11.html">Księga 11</a></li>
                    <li><a href="./k12.html">Księga 12</a></li> -->
                </ul>
                <div class="col-8">
                    <?php
                        if(isset($_GET['k'])){
                            $k = $_GET['k'];
                            include_once("k$k.html");
                        } else{
                            print('<img src="./pan_tadeusz.jpg" alt="Pan Tadeusz">');
                        }
                    ?>
                    
                </div>
            </div>
        </div>
        <footer class="fixed-bottom text-center">&copy; Maciej Palenica</footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    </body>
</html>