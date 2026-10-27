<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Prova di form per raccolta dati</title>
        <meta charset="utf-8">
        <!-- parte richiesta dal framework Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <?php
            if(isset($_GET['scelta'])){
                switch($_GET['scelta']){
                    case "calcola":{
                        $r = $_GET['Raggio'];
                      
                        $circonfereza = 2 * 3.14 * $r;
                        $are = 3.14 * $r * $r;  // $r*$r -> pow($r, 2);

                        echo('Circonfereza: '.$circonfereza.'<br />');
                        echo('Area: '.$area.'<br />');

                        echo('<a href="e04.php">Torna al form...</a>');
                        break;
                    }
                }
            }
            else{
                echo('<div class="container-fluid">
                    <h1>Form Inserisci il raggio</h1>
                    <form action="e04.php" method="get">
                        <div class="mb-3">
                            <label for="inputRaggo" class="form-label">Inserisci il raggio:</label>
                            <input class="form-control form-control-lg" type="text" name="inputRaggio" id="inputRaggio" placeholder="Valore del raggio" aria-label="default input example">
                        </div>
                        <input type="hidden" name="scelta" id="scelta" value="calcola">
                        <button class="btn btn-success" type="submit">Calcola area e circonferenza</button>
                    </form>            
                </div>');
            }
        ?>
        <!-- sezione script richiesta dal framework Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>