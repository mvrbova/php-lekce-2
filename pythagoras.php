<!-- první a durhá část úkolu:
<?php
$a = 4;
$b = 7;
$obdelnikobsah = $a * $b;
echo 'Obsah obdélníku o stranách a ', $a, 'cm a b ', $b, 'cm je ', $obdelnikobsah, ' cm².';

$strana = 6;
$uhel = 60;
$vyska = $strana * sin (deg2rad (60));
$trojuhelnikobsah = round($strana / 2 * $vyska);
echo 'Rovnostranný trojúhelník o straně délky ', $strana, ' cm a ', $uhel, '° je ', $trojuhelnikobsah, ' cm².';
?> -->

<?php
$a = 4;
$b = 7;
$obdelnikobvod = ($a + $b) * 2;
$obdelnikobsah = $a * $b;
$titulek1 = 'Obdélník';
$obdelnik = ['a' => $a, 'b' => $b, 'obvodobdelniku' => $obdelnikobvod, 'obsahobdelniku' => $obdelnikobsah];

$titulek2 = 'Rovnostranný trojúhelník';
$strana = 6;
$uhel = 60;
$vyska = $strana * sin (deg2rad (60));
$trojuhelnikobvod = 3 * $strana;
$trojuhelnikobsah = round($strana / 2 * $vyska);
$trojuhelnik = ['strana' => $strana, 'uhel' => $uhel, 'vyska' => $vyska, 'obvodtrojuhelniku' => $trojuhelnikobvod, 'obsahtrojuhelniku' => $trojuhelnikobsah];

$titulek3 = 'Vzpomínka na Pythagora';
$text = 'Pythagoras ze Samu byl řecký filosof, matematik, astronom i kněz. Většina lidí jej zná z hodin matematiky a jeho slavné Pythagorovy věty "c² = a² + b²", která se však týká pouze pravoúhlých trojúhelníků. <strong> Spojovat ho z výše uvedenými výpočty je tedy přinejmněším zavádějící.</strong>';

$paticka = '© Braincraft fandí starověkým matematikům';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starověká matematika</title>

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Bootstrap stylesheet -->
    <link href="css/bootstrap.pythagoras1.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Starověká matematika</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        ů<span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Archimedes</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Pythagoras<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Euklides</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Eratosthenes</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Vlož hledané spojení" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledej</button>
        </form>
    </div>
</nav>

<main role="main" class="container">

    <div class="kontejner">
        <div class="col-6">
     <!--   <div class="table"> -->
        <h1>
            <?php echo $titulek1?>
        </h1>
        <p class="lead">
        <table class="table">
            <tbody>
            <tr>
                <th>Délka strany A:</th>
                <td><?php echo $obdelnik ['a']?></td>
                <td><?php echo 'cm'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Délka strany B:</th>
                <td><?php echo $obdelnik ['b']?></td>
                <td><?php echo 'cm'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Obvod obdélníku:</th>
                <td><?php echo $obdelnik ['obvodobdelniku']?></td>
                <td><?php echo 'cm'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Obsah obdélníku:</th>
                <td><?php echo $obdelnik ['obsahobdelniku']?></td>
                <td><?php echo 'cm²'?></td>
            </tr>
            </tbody>
        </table>
    <!--    </div> -->
        </div>

        <br>

        <div class="col-6">
        <h1>
            <?php echo $titulek2?>
        </h1>
        <p class="lead">
        <table class="table">
            <tbody>
            <tr>
                <th>Délka strany:</th>
                <td><?php echo $trojuhelnik['strana']?></td>
                <td><?php echo 'cm'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Úhel:</th>
                <td><?php echo $trojuhelnik ['uhel']?></td>
                <td><?php echo 'stupňů'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Obvod trojúhelníku:</th>
                <td><?php echo $trojuhelnik ['obvodtrojuhelniku']?></td>
                <td><?php echo 'cm'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Výška trojúhelníku:</th>
                <td><?php echo $trojuhelnik ['vyska']?></td>
                <td><?php echo 'cm'?></td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <th>Obsah trojúhelníku:</th>
                <td><?php echo $trojuhelnik ['obsahtrojuhelniku']?></td>
                <td><?php echo 'cm²'?></td>
            </tr>
            </tbody>
        </table>
        </div>

    </div>

    <div class="vzpominka">
     <div class="col-4">
        <h1>
            <?php echo $titulek3?>
        </h1>
        <p><?php echo $text?></p>
     </div>
     <div class="col-8">
        <img src="Pythagoras.jpg" alt="foto" class="foto">
    </div>
    </div>


    <div>
        <p class="paticka">
        <?php echo $paticka ?>
        </p>
    </div>

</main><!-- /.container -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

