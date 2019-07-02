
<?php
    require_once 'connect.php';
?>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php

// initialize variables CPPT 2016

$NTPYEAR = '';
$NTPCREG = '';

// AANTAL STEMMEN %

$NTPSTAJ = ''; //ABVV
$NTPSTCJ = ''; //ACV
$NTPSTLJ = ''; //ACLVB

$NTPSTAA = ''; //ABVV
$NTPSTCA = ''; //ACV
$NTPSTLA = ''; //ACLVB

$NTPSTAB = ''; //ABVV
$NTPSTCB = ''; //ACV
$NTPSTLB = ''; //ACLVB


// ABVV J-A-B
$NTPST11 = '';
$NTPST12 = '';
$NTPST13 = '';

// ACV J-A-B
$NTPST21 = '';
$NTPST22 = '';
$NTPST23 = '';

//ACLVB J-A-B
$NTPST31 = '';
$NTPST32 = '';
$NTPST33 = '';


// GET DATA FROM TABLE_CPPT

if (isset($_POST['search'])) {
    $start = $_POST['start'];
    $sth = $handler->prepare('SELECT * FROM TABLE_CPPT WHERE (TPCREG like :start AND TPYEAR = 2016) ');
    $sth->execute(array(':start' => $start));
    
    // $sth->execute();

    $rows = $sth->fetchAll();

    // $rows = [];

    // while( $row = $sth->fetch(PDO::FETCH_ASSOC) ){

    foreach ($rows as $row) {

    // array_push($rows, $row);

    $NTPYEAR = $row['TPYEAR'];
    $NTPCREG = $row['TPCREG'];

    // berekening % Jongeren easypiecharts

    $NTPSTAJ = (($row['TPST11'] * 100) / ($row['TPST11'] + $row['TPST21'] + $row['TPST31']));
    $NTPSTAJ= number_format($NTPSTAJ,2, ',', '.');

    $NTPSTCJ = (($row['TPST21'] * 100) / ($row['TPST11'] + $row['TPST21'] + $row['TPST31']));
    $NTPSTCJ= number_format($NTPSTCJ,2, ',', '.');

    $NTPSTLJ = (($row['TPST31'] * 100) / ($row['TPST11'] + $row['TPST21'] + $row['TPST31']));
    $NTPSTLJ= number_format($NTPSTLJ,2, ',', '.');

    // var_dump($......);
    // die;

    // berekening % Arbeiders
    
    $NTPSTAA = (($row['TPST12'] * 100) / ($row['TPST12'] + $row['TPST22'] + $row['TPST32']));
    $NTPSTAA= number_format($NTPSTAA, 2, ',', '.');

    $NTPSTCA = (($row['TPST22'] * 100) / ($row['TPST12'] + $row['TPST22'] + $row['TPST32']));
    $NTPSTCA= number_format($NTPSTCA, 2, ',', '.');

    $NTPSTLA = (($row['TPST32'] * 100) / ($row['TPST12'] + $row['TPST22'] + $row['TPST32']));
    $NTPSTLA= number_format($NTPSTLA, 2, ',', '.');


    // berekening % Bedienden

    $NTPSTAB = (($row['TPST13'] * 100) / ($row['TPST13'] + $row['TPST23'] + $row['TPST33']));
    $NTPSTAB= number_format($NTPSTAB, 2, ',', '.');

    $NTPSTCB = (($row['TPST23'] * 100) / ($row['TPST13'] + $row['TPST23'] + $row['TPST33']));
    $NTPSTCB= number_format($NTPSTCB, 2, ',', '.');

    $NTPSTLB = (($row['TPST33'] * 100) / ($row['TPST13'] + $row['TPST23'] + $row['TPST33']));
    $NTPSTLB= number_format($NTPSTLB, 2, ',', '.');

}
}


?>



<?php

// initialize variables CPPT 2012

$NNTPYEAR = '';
$NNTPCREG = '';

// AANTAL STEMMEN %

$NNTPSTAJ = ''; //ABVV
$NNTPSTCJ = ''; //ACV
$NNTPSTLJ = ''; //ACLVB

$NNTPSTAA = ''; //ABVV
$NNTPSTCA = ''; //ACV
$NNTPSTLA = ''; //ACLVB

$NNTPSTAB = ''; //ABVV
$NNTPSTCB = ''; //ACV
$NNTPSTLB = ''; //ACLVB


// ABVV J-A-B
$NNTPST11 = '';
$NNTPST12 = '';
$NNTPST13 = '';

// ACV J-A-B
$NNTPST21 = '';
$NNTPST22 = '';
$NNTPST23 = '';

//ACLVB J-A-B
$NNTPST31 = '';
$NNTPST32 = '';
$NNTPST33 = '';


// GET DATA FROM TABLE_CPPT

if (isset($_POST['search'])) {
$start = $_POST['start'];

$sth2 = $handler->prepare('SELECT * FROM TABLE_CPPT WHERE (TPCREG like :start AND TPYEAR = 2012) ');
$sth2->execute(array(':start' => $start));
// $sth2->execute();
$rows = $sth2->fetchAll();

// $rows = [];

// while( $row = $sth2->fetch(PDO::FETCH_ASSOC) ){

    foreach ($rows as $row) {
    // array_push($rows, $row);

    $TPYEAR = $row['TPYEAR'];
    $TPCREG = $row['TPCREG'];

    // berekening % Jongeren easypiecharts

    $NNTPSTAJ = (($row['TPST11'] * 100) / ($row['TPST11'] + $row['TPST21'] + $row['TPST31']));
    $NNTPSTAJ= number_format($NNTPSTAJ,2, ',', '.');

    $NNTPSTCJ = (($row['TPST21'] * 100) / ($row['TPST11'] + $row['TPST21'] + $row['TPST31']));
    $NNTPSTCJ= number_format($NNTPSTCJ,2, ',', '.');

    $NNTPSTLJ = (($row['TPST31'] * 100) / ($row['TPST11'] + $row['TPST21'] + $row['TPST31']));
    $NNTPSTLJ= number_format($NNTPSTLJ,2, ',', '.');

    // var_dump($......);
    // die;

    // berekening % Arbeiders
    
    $NNTPSTAA = (($row['TPST12'] * 100) / ($row['TPST12'] + $row['TPST22'] + $row['TPST32']));
    $NNTPSTAA= number_format($NNTPSTAA, 2, ',', '.');

    $NNTPSTCA = (($row['TPST22'] * 100) / ($row['TPST12'] + $row['TPST22'] + $row['TPST32']));
    $NNTPSTCA= number_format($NNTPSTCA, 2, ',', '.');

    $NNTPSTLA = (($row['TPST32'] * 100) / ($row['TPST12'] + $row['TPST22'] + $row['TPST32']));
    $NNTPSTLA= number_format($NNTPSTLA, 2, ',', '.');


    // berekening % Bedienden

    $NNTPSTAB = (($row['TPST13'] * 100) / ($row['TPST13'] + $row['TPST23'] + $row['TPST33']));
    $NNTPSTAB= number_format($NNTPSTAB, 2, ',', '.');

    $NNTPSTCB = (($row['TPST23'] * 100) / ($row['TPST13'] + $row['TPST23'] + $row['TPST33']));
    $NNTPSTCB= number_format($NNTPSTCB, 2, ',', '.');

    $NNTPSTLB = (($row['TPST33'] * 100) / ($row['TPST13'] + $row['TPST23'] + $row['TPST33']));
    $NNTPSTLB= number_format($NNTPSTLB, 2, ',', '.');

}
}

?>


<?php

// initialize variables CE 2016 !!

$N2TPYEAR = '';
$N2TPCREG = '';

// AANTAL STEMMEN % JONGEREN-ARBEIDERS-BEDIENDEN-KADERS !!

$N2TPSTAJ = ''; //ABVV
$N2TPSTCJ = ''; //ACV
$N2TPSTLJ = ''; //ACLVB

$N2TPSTAA = ''; //ABVV
$N2TPSTCA = ''; //ACV
$N2TPSTLA = ''; //ACLVB

$N2TPSTAB = ''; //ABVV
$N2TPSTCB = ''; //ACV
$N2TPSTLB = ''; //ACLVB

$N2TPSTAK = ''; //ABVV
$N2TPSTCK = ''; //ACV
$N2TPSTLK = ''; //ACLVB
$N2TPSTNK = ''; //NCK  !!
$N2TPSTZK = ''; //ANDERE  !!

// ABVV J-A-B-K
$N2TPST15 = '';
$N2TPST16 = '';
$N2TPST17 = '';
$N2TPST18 = '';

// ACV J-A-B-K
$N2TPST25 = '';
$N2TPST26 = '';
$N2TPST27 = '';
$N2TPST28 = '';

// ACLVB J-A-B-K !! 
$N2TPST35 = '';
$N2TPST36 = '';
$N2TPST37 = '';
$N2TPST38 = '';

// OPGELET KADERS = NCK en ANDERE !!
$N2TPST48 = '';
$N2TPST58 = '';


// GET DATA FROM TABLE_CE !!

if (isset($_POST['search'])) {
$start = $_POST['start'];

$sth3 = $handler->prepare('SELECT * FROM TABLE_CE WHERE (TPCREG like :start AND TPYEAR = 2016) ');
$sth3->execute(array(':start' => $start));
// $sth3->execute();
$rows = $sth3->fetchAll();

// $rows = [];

// while( $row = $sth3->fetch(PDO::FETCH_ASSOC) ){

    foreach ($rows as $row) {

    // array_push($rows, $row);

    $N2TPYEAR = $row['TPYEAR'];
    $N2TPCREG = $row['TPCREG'];


    // berekening % Jongeren easypiecharts

    $N2TPSTAJ = (($row['TPST15'] * 100) / ($row['TPST15'] + $row['TPST25'] + $row['TPST35']));
    $N2TPSTAJ= number_format($N2TPSTAJ,2, ',', '.');

    $N2TPSTCJ = (($row['TPST25'] * 100) / ($row['TPST15'] + $row['TPST25'] + $row['TPST35']));
    $N2TPSTCJ= number_format($N2TPSTCJ,2, ',', '.');

    $N2TPSTLJ = (($row['TPST35'] * 100) / ($row['TPST15'] + $row['TPST25'] + $row['TPST35']));
    $N2TPSTLJ= number_format($N2TPSTLJ,2, ',', '.');

    // var_dump($......);
    // die;

    // berekening % Arbeiders
    
    $N2TPSTAA = (($row['TPST16'] * 100) / ($row['TPST16'] + $row['TPST26'] + $row['TPST36']));
    $N2TPSTAA= number_format($N2TPSTAA, 2, ',', '.');

    $N2TPSTCA = (($row['TPST26'] * 100) / ($row['TPST16'] + $row['TPST26'] + $row['TPST36']));
    $N2TPSTCA= number_format($N2TPSTCA, 2, ',', '.');

    $N2TPSTLA = (($row['TPST36'] * 100) / ($row['TPST16'] + $row['TPST26'] + $row['TPST36']));
    $N2TPSTLA= number_format($N2TPSTLA, 2, ',', '.');


    // berekening % Bedienden

    $N2TPSTAB = (($row['TPST17'] * 100) / ($row['TPST17'] + $row['TPST27'] + $row['TPST37']));
    $N2TPSTAB= number_format($N2TPSTAB, 2, ',', '.');

    $N2TPSTCB = (($row['TPST27'] * 100) / ($row['TPST17'] + $row['TPST27'] + $row['TPST37']));
    $N2TPSTCB= number_format($N2TPSTCB, 2, ',', '.');

    $N2TPSTLB = (($row['TPST37'] * 100) / ($row['TPST17'] + $row['TPST27'] + $row['TPST37']));
    $N2TPSTLB= number_format($N2TPSTLB, 2, ',', '.');


    // berekening % Kaders !!

    $N2TPSTAK = (($row['TPST18'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $N2TPSTAK= number_format($N2TPSTAK, 2, ',', '.');

    $N2TPSTCK = (($row['TPST28'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $N2TPSTCK= number_format($N2TPSTCK, 2, ',', '.');

    $N2TPSTLK = (($row['TPST38'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $N2TPSTLK= number_format($N2TPSTLK, 2, ',', '.');

    $N2TPSTNK = (($row['TPST48'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $N2TPSTNK= number_format($N2TPSTNK, 2, ',', '.');

    $N2TPSTZK = (($row['TPST58'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $N2TPSTZK= number_format($N2TPSTZK, 2, ',', '.');
}
}

?>



<?php

// initialize variables CE 2012

$NN2TPYEAR = '';
$NN2TPCREG = '';

// AANTAL STEMMEN %

$NN2TPSTAJ = ''; //ABVV
$NN2TPSTCJ = ''; //ACV
$NN2TPSTLJ = ''; //ACLVB

$NN2TPSTAA = ''; //ABVV
$NN2TPSTCA = ''; //ACV
$NN2TPSTLA = ''; //ACLVB

$NN2TPSTAB = ''; //ABVV
$NN2TPSTCB = ''; //ACV
$NN2TPSTLB = ''; //ACLVB

$NN2TPSTAK = ''; //ABVV
$NN2TPSTCK = ''; //ACV
$NN2TPSTLK = ''; //ACLVB
$NN2TPSTNK = ''; //NCK  !!
$NN2TPSTZK = ''; //ANDERE  !!


// ABVV J-A-B-K
$NN2TPST15 = '';
$NN2TPST16 = '';
$NN2TPST17 = '';
$NN2TPST18 = '';

// ACV J-A-B-K
$NN2TPST25 = '';
$NN2TPST26 = '';
$NN2TPST27 = '';
$NN2TPST28 = '';

// ACLVB J-A-B-K
$NN2TPST35 = '';
$NN2TPST36 = '';
$NN2TPST37 = '';
$NN2TPST38 = '';

//  OPGELET KADERS = NCK en ANDERE !!
$NN2TPST48 = '';
$NN2TPST58 = '';


// GET DATA FROM TABLE_CE

if (isset($_POST['search'])) {
$start = $_POST['start'];

$sth4 = $handler->prepare('SELECT * FROM TABLE_CE WHERE (TPCREG like :start AND TPYEAR = 2012) ');
$sth4->execute(array(':start' => $start));
// $sth4->execute();
$rows = $sth4->fetchAll();

// $rows = [];

// while( $row = $sth4->fetch(PDO::FETCH_ASSOC) ){

    foreach ($rows as $row) {

    // array_push($rows, $row);

    $TPYEAR = $row['TPYEAR'];
    $TPCREG = $row['TPCREG'];


    // berekening % Jongeren easypiecharts

    $NN2TPSTAJ = (($row['TPST15'] * 100) / ($row['TPST15'] + $row['TPST25'] + $row['TPST35']));
    $NN2TPSTAJ= number_format($NN2TPSTAJ,2, ',', '.');

    $NN2TPSTCJ = (($row['TPST25'] * 100) / ($row['TPST15'] + $row['TPST25'] + $row['TPST35']));
    $NN2TPSTCJ= number_format($NN2TPSTCJ,2, ',', '.');

    $NN2TPSTLJ = (($row['TPST35'] * 100) / ($row['TPST15'] + $row['TPST25'] + $row['TPST35']));
    $NN2TPSTLJ= number_format($NN2TPSTLJ,2, ',', '.');

    // var_dump($......);
    // die;

    // berekening % Arbeiders
    
    $NN2TPSTAA = (($row['TPST16'] * 100) / ($row['TPST16'] + $row['TPST26'] + $row['TPST36']));
    $NN2TPSTAA= number_format($NN2TPSTAA, 2, ',', '.');

    $NN2TPSTCA = (($row['TPST26'] * 100) / ($row['TPST16'] + $row['TPST26'] + $row['TPST36']));
    $NN2TPSTCA= number_format($NN2TPSTCA, 2, ',', '.');

    $NN2TPSTLA = (($row['TPST36'] * 100) / ($row['TPST16'] + $row['TPST26'] + $row['TPST36']));
    $NN2TPSTLA= number_format($NN2TPSTLA, 2, ',', '.');


    // berekening % Bedienden

    $NN2TPSTAB = (($row['TPST17'] * 100) / ($row['TPST17'] + $row['TPST27'] + $row['TPST37']));
    $NN2TPSTAB= number_format($NN2TPSTAB, 2, ',', '.');

    $NN2TPSTCB = (($row['TPST27'] * 100) / ($row['TPST17'] + $row['TPST27'] + $row['TPST37']));
    $NN2TPSTCB= number_format($NN2TPSTCB, 2, ',', '.');

    $NN2TPSTLB = (($row['TPST37'] * 100) / ($row['TPST17'] + $row['TPST27'] + $row['TPST37']));
    $NN2TPSTLB= number_format($NN2TPSTLB, 2, ',', '.');


    // berekening % Kaders !!

    $NN2TPSTAK = (($row['TPST18'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $NN2TPSTAK= number_format($NN2TPSTAK, 2, ',', '.');

    $NN2TPSTCK = (($row['TPST28'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $NN2TPSTCK= number_format($NN2TPSTCK, 2, ',', '.');

    $NN2TPSTLK = (($row['TPST38'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $NN2TPSTLK= number_format($NN2TPSTLK, 2, ',', '.');

    $NN2TPSTNK = (($row['TPST48'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $NN2TPSTNK= number_format($NN2TPSTNK, 2, ',', '.');

    $NN2TPSTZK = (($row['TPST58'] * 100) / ($row['TPST18'] + $row['TPST28'] + $row['TPST38'] + $row['TPST48'] + $row['TPST58']));
    $NN2TPSTZK= number_format($NN2TPSTZK, 2, ',', '.');
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >


    <link rel="stylesheet" href="cv2020.css"/>

    <title>SV2020</title>

</head>
<body class="bg-secondary">

<header>

<div  class="nav-bar">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand text-danger font-weight-bolder ml-3" href="index.html">SV<span class="text-white">2020</span></a>

    <div class="collapse navbar-collapse "  id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto ml-5 md-0 ">

            <li class="nav-item  ">
                <a class="nav-link text-white font-weight-bolder" href="index.html">Home<span class="sr-only border-white border-bottom"></span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-danger font-weight-bolder"  href="index.php">Resultaten</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white font-weight-bolder"  href="index2.php">Stemmen-CPBW</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white font-weight-bolder" href="index3.php">Stemmen-OR</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white font-weight-bolder" href="about.html">About</a>
            </li>

        </ul>
    </div>

</nav>
</div>

    </header>

    <br>


    <div class="wrapper d-flex justify-content-center">
        <form class="mt-3 w-55" action="index.php" method="POST">
            <select class="btn btn-info" name="start">
                <option value="choose region" >first choose region</option>
                <option value="1">1</option>
                <option value="7">7</option>
                <option value="A">A</option>
            </select>
            <input class="btn-sm text-bolder btn-success" type="submit" name="search" value="then CLICK">
        </form>
    </div>
        <br>
    <h4 class="d-flex mt-3 text-white bg-danger justify-content-center">RESULTATEN SOCIALE VERKIEZINGEN % - CPPT </h4>


    <div class="container-fluid">

        <div class="row d-flex justify-content-around col-12">
            <div>
            <h4 class="text-warning font-weight-bold col-6 d-flex ml-5">2016</h4>   
            </div>

            <div>
            <h4 class="text-warning font-weight-bold col-6 d-flex ml-5">2012</h4>  
            </div>
        </div>
            <br>
    </div>


    <div  class="row d-flex justify-content-around col-12">

        <!-- eerste EasyPie charts JONGEREN 2016-->

        <div class="card d-flex flex-row align-items-between col-6">
            <div class="bg-secondary d-flex flex-column justify-content-between col-4">
            <h5 class="text-white" >ABVV_J</h5>
            <div class="chartEPC" data-percent="<?php echo $NTPSTAJ; ?>"><span class="percent"><?php echo $NTPSTAJ; ?>%</span>
            </div>
            </div>
                <br>
            <div class="bg-secondary d-flex flex-column justify-content-between col-4">
            <h5 class="text-white" >ACV_J</h5>
            <div class="chartEPC" data-percent="<?php echo $NTPSTCJ;?>"><span class="percent"><?php echo $NTPSTCJ;?>%</span>
            </div>
            </div>
                <br>
            <div class="bg-secondary d-flex flex-column justify-content-between col-4">
            <h5 class="text-white" >ACLVB_J</h5>
            <div class="chartEPC" data-percent="<?php echo $NTPSTLJ;?>"><span class="percent"><?php echo $NTPSTLJ;?>%</span>
            </div>
            </div>
                <br>
        </div>


        <!-- ************ 2012 *********** -->


        <div class="bg-scondary d-flex flex-row align-items-between col-6">

            <div class="d-flex flex-column justify-content-between col-4">
            <h5 class="text-white" >ABVV_J</h5>
            <div class="chartEPC" data-percent="<?php echo $NNTPSTAJ; ?>"><span class="percent"><?php echo $NNTPSTAJ; ?>%</span>
            </div>
            </div>
                <br>

            <div class="d-flex flex-column justify-content-between col-4">
            <h5 class="text-white" >ACV_J</h5>
            <div class="chartEPC" data-percent="<?php echo $NNTPSTCJ;?>"><span class="percent"><?php echo $NNTPSTCJ;?>%</span>
            </div>
            </div>
                <br>

            <div class="d-flex flex-column justify-content-between col-4">
            <h5 class="text-white" >ACLVB_J</h5>
            <div class="chartEPC" data-percent="<?php echo $NNTPSTLJ;?>"><span class="percent"><?php echo $NNTPSTLJ;?>%</span>
            </div>
            </div>
                <br>
        </div>

    </div>

    <hr>

<div  class="row d-flex justify-content-around col-12">

    <!-- tweede EasyPie charts ARBEIDERS 2016 -->

    <div class="card d-flex flex-row align-items-between col-6">

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NTPSTAA;?>"><span class="percent"><?php echo $NTPSTAA;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NTPSTCA;?>"><span class="percent"><?php echo $NTPSTCA;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NTPSTLA;?>"><span class="percent"><?php echo $NTPSTLA;?>%</span>
        </div>
        </div>
            <br>
    </div>


    <!-- ********** 2012 ******** -->

    <div class="bg-scondary d-flex flex-row align-items-between col-6">

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NNTPSTAA;?>"><span class="percent"><?php echo $NNTPSTAA;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NNTPSTCA;?>"><span class="percent"><?php echo $NNTPSTCA;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NNTPSTLA;?>"><span class="percent"><?php echo $NNTPSTLA;?>%</span>
        </div>
        </div>
            <br>
    </div>

</div>

<hr>

<div  class="row d-flex justify-content-around col-12">

    <!-- derde EasyPie charts BEDIENDEN 2016 -->

    <div class="card d-flex flex-row align-items-between col-6">

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NTPSTAB;?>"><span class="percent"><?php echo $NTPSTAB;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NTPSTCB;?>"><span class="percent"><?php echo $NTPSTCB;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NTPSTLB;?>"><span class="percent"><?php echo $NTPSTLB;?>%</span>
        </div>
        </div>
            <br>
    </div>


    <!-- ***************** 2012 -->

    <div class="bg-scondary d-flex flex-row align-items-between col-6">

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NNTPSTAB;?>"><span class="percent"><?php echo $NNTPSTAB;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NNTPSTCB;?>"><span class="percent"><?php echo $NNTPSTCB;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NNTPSTLB;?>"><span class="percent"><?php echo $NNTPSTLB;?>%</span>
        </div>
        </div>
            <br>
    </div>

</div>

<br>
<br>

<!-- ******** CE ********** -->


<h4 class="d-flex mt-3 text-white bg-danger justify-content-center">RESULTATEN SOCIALE VERKIEZINGEN % - CE </h4>
<br>

<div class="container-fluid">

    <div class="row d-flex justify-content-around col-12">
        <div>
        <h4 class="text-warning font-weight-bold col-6 d-flex ml-5">2016</h4>   
        </div>

        <div>
        <h4 class="text-warning font-weight-bold col-6 d-flex ml-5">2012</h4>  
        </div>
    </div>
        <br>
</div>


<div class="container-fluid">

<div  class="row d-flex justify-content-around col-12">

<!-- eerste EasyPie charts JONGEREN -->

    <div class="card d-flex flex-row align-items-between col-6">   

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_J</h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTAJ; ?>"><span class="percent"><?php echo $N2TPSTAJ; ?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_J</h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTCJ;?>"><span class="percent"><?php echo $N2TPSTCJ;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4"">
        <h5 class="text-white" >ACLVB_J</h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTLJ;?>"><span class="percent"><?php echo $N2TPSTLJ;?>%</span>
        </div>
        </div>
            <br>
    </div>

    <!-- ******* 2012 ******** -->

    <div class="bg-scondary d-flex flex-row align-items-between col-6">

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_J</h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTAJ; ?>"><span class="percent"><?php echo $NN2TPSTAJ; ?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_J</h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTCJ;?>"><span class="percent"><?php echo $NN2TPSTCJ;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_J</h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTLJ;?>"><span class="percent"><?php echo $NN2TPSTLJ;?>%</span>
        </div>
        </div>
            <br>
    </div>

</div>

<hr>

<div  class="row d-flex justify-content-around col-12">

    <!-- tweede EasyPie charts ARBEIDERS 2016 -->

    <div class="card d-flex flex-row align-items-between col-6">

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTAA;?>"><span class="percent"><?php echo $N2TPSTAA;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTCA;?>"><span class="percent"><?php echo $N2TPSTCA;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_A</h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTLA;?>"><span class="percent"><?php echo $N2TPSTLA;?>%</span>
        </div>
        </div>
            <br>
    </div>


    <!-- ******** 2012 ********** -->

    <div class="bg-scondary d-flex flex-row align-items-between col-6">

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTAA;?>"><span class="percent"><?php echo $NN2TPSTAA;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTCA;?>"><span class="percent"><?php echo $NN2TPSTCA;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_A</h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTLA;?>"><span class="percent"><?php echo $NN2TPSTLA;?>%</span>
        </div>
        </div>
            <br>
    </div>

</div>

<hr>

<div  class="row d-flex justify-content-around col-12">

<!-- derde EasyPie charts BEDIENDEN -->

    <div class="card d-flex flex-row align-items-between col-6">

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTAB;?>"><span class="percent"><?php echo $N2TPSTAB;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTCB;?>"><span class="percent"><?php echo $N2TPSTCB;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_B </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTLB;?>"><span class="percent"><?php echo $N2TPSTLB;?>%</span>
        </div>
        </div>
            <br>
    </div>


    <!-- ******** 2012 ********* -->

    <div class="bg-scondary d-flex flex-row align-items-between col-6">

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ABVV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTAB;?>"><span class="percent"><?php echo $NN2TPSTAB;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACV_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTCB;?>"><span class="percent"><?php echo $NN2TPSTCB;?>%</span>
        </div>
        </div>
            <br>

        <div class="d-flex flex-column justify-content-between col-4">
        <h5 class="text-white" >ACLVB_B </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTLB;?>"><span class="percent"><?php echo $NN2TPSTLB;?>%</span>
        </div>
        </div>
            <br>
    </div>

</div>

<hr>

<div  class="row d-flex justify-content-around col-12">

    <!-- vierde EasyPie charts KADERS -->

    <div class="card d-flex flex-row align-items-between col-6">

        <div class="bg-secondary d-flex flex-column justify-content-between col-2">
        <h5 class="text-white" >ABVV_K </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTAK;?>"><span class="percent"><?php echo $N2TPSTAK;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-2">
        <h5 class="text-white" >ACV_K </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTCK;?>"><span class="percent"><?php echo $N2TPSTCK;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-3">
        <h5 class="text-white" >ACLVB_K </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTLK;?>"><span class="percent"><?php echo $N2TPSTLK;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-2">
        <h5 class="text-wite" >NCK_K </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTNK;?>"><span class="percent"><?php echo $N2TPSTNK;?>%</span>
        </div>
        </div>
            <br>

        <div class="bg-secondary d-flex flex-column justify-content-between col-3">
        <h5 class="text-white" >ANDERE_K </h5>
        <div class="chartEPC" data-percent="<?php echo $N2TPSTZK;?>"><span class="percent"><?php echo $N2TPSTZK;?>%</span>
        </div>
        </div>
            <br>
    </div>


    <!-- ******** 2012 ********* -->

    <div class="bg-scondary d-flex flex-row align-items-between col-6">

        <div  class="d-flex flex-column justify-content-between col-2">
        <h5 class="text-white" >ABVV_K </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTAK;?>"><span class="percent"><?php echo $NN2TPSTAK;?>%</span>
        </div>
        </div>
            <br>

        <div  class="d-flex flex-column justify-content-between col-2">
        <h5 class="text-white" >ACV_K </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTCK;?>"><span class="percent"><?php echo $NN2TPSTCK;?>%</span>
        </div>
        </div>
            <br>

        <div  class="d-flex flex-column justify-content-between col-3">
        <h5 class="text-white" >ACLVB_K </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTLK;?>"><span class="percent"><?php echo $NN2TPSTLK;?>%</span>
        </div>
        </div>
            <br>

        <div  class="d-flex flex-column justify-content-between col-2">
        <h5 class="text-white" >NCK_K </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTNK;?>"><span class="percent"><?php echo $NN2TPSTNK;?>%</span>
        </div>
        </div>
            <br>

        <div  class="d-flex flex-column justify-content-between col-2">
        <h5 class="text-white" >ANDERE_K </h5>
        <div class="chartEPC" data-percent="<?php echo $NN2TPSTZK;?>"><span class="percent"><?php echo $NN2TPSTZK;?>%</span>
        </div>
        </div>
            <br>
    </div>

</div>

<hr>


    <!-- script easypiecharts -->

    <script>

        $(function(){
            $('.chartEPC').easyPieChart({ 
            });
        });

    </script>



    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>


<div class="scroll-btn font-weight-bolder">
    <div class="scroll-bar mb-3">
        <a href=""><span>|</span></a>
        <br>
    </div>
    <div>
        <p></p>
    </div>
</div>

</body>
</html>
