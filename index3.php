
<?php
    require_once 'connect.php';
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php

// initialize variables CE !!

$NTPYEAR = '';
$NTPCREG = '';


// ABVV J-A-B-K
$NTPST15 = '';
$NTPST16 = '';
$NTPST17 = '';
$NTPST18 = '';

// ACV J-A-B-K
$NTPST25 = '';
$NTPST26 = '';
$NTPST27 = '';
$NTPST28 = '';

//ACLVB J-A-B-K
$NTPST35 = '';
$NTPST36 = '';
$NTPST37 = '';
$NTPST38 = '';

// NCK + Andere
$NTPST48 = '';
$NTPST58 = '';


// initialize variables CE - zetels !!

$NNTPYEAR = '';
$NNTPCREG = '';


// ABVV J-A-B-K
$NNTPST15 = '';
$NNTPST16 = '';
$NNTPST17 = '';
$NNTPST18 = '';

// ACV J-A-B-K
$NNTPST25 = '';
$NNTPST26 = '';
$NNTPST27 = '';
$NNTPST28 = '';

//ACLVB J-A-B-K
$NNTPST35 = '';
$NNTPST36 = '';
$NNTPST37 = '';
$NNTPST38 = '';

// NCK + Andere
$NNTPST48 = '';
$NNTPST58 = '';



// GET DATA FROM TABLE_CE

if (isset($_POST['search'])) {
    $start = $_POST['start'];
    $sth = $handler->prepare('SELECT * FROM TABLE_CE WHERE TPCREG like :start ORDER BY TPYEAR DESC');
    $sth->execute(array(':start' => $start));

    $rows = $sth->fetchAll();

    // $rows = [];

    // while( $row = $sth->fetch(PDO::FETCH_ASSOC) ){

    foreach ($rows as $row) {

    // array_push($rows, $row);

    $TPYEAR = $row['TPYEAR'];
    $TPCREG = $row['TPCREG'];


    // ABVV J-A-B-K
    $TPST15 = $row['TPST15'];
    $TPST16 = $row['TPST16'];
    $TPST17 = $row['TPST17'];
    $TPST18 = $row['TPST18'];

    // ABVV J-A-B zetels M+V
    $TPSTD15 = $row['TPSTD5'] + $row['TPSTE5'];
    $TPSTD16 = $row['TPSTD6'] + $row['TPSTE6'];
    $TPSTD17 = $row['TPSTD7'] + $row['TPSTE7'];
    $TPSTD18 = $row['TPSTH8'] + $row['TPSTI8'];

    // ACV J-A-B-K
    $TPST25 = $row['TPST25'];
    $TPST26 = $row['TPST26'];
    $TPST27 = $row['TPST27'];
    $TPST28 = $row['TPST28'];

    // ACV J-A-B zetels M+V
    $TPSTG25 = $row['TPSTG5'] + $row['TPSTH5'];    
    $TPSTG26 = $row['TPSTG6'] + $row['TPSTH6'];
    $TPSTG27 = $row['TPSTG7'] + $row['TPSTH7'];
    $TPSTG28 = $row['TPSTK8'] + $row['TPSTL8'];

    //ACLVB J-A-B-K
    $TPST35 = $row['TPST35'];
    $TPST36 = $row['TPST36'];
    $TPST37 = $row['TPST37'];
    $TPST38 = $row['TPST38'];

    //ACLVB J-A-B zetels M+V
    $TPSTJ35 = $row['TPSTJ5'] + $row['TPSTK5'];
    $TPSTJ36 = $row['TPSTJ6'] + $row['TPSTK6'];
    $TPSTJ37 = $row['TPSTJ7'] + $row['TPSTK7'];
    $TPSTJ38 = $row['TPSTN8'] + $row['TPSTO8'];


    // NCK + Andere
    $TPST48 = $row['TPST48'];
    $TPST58 = $row['TPST58'];

    // NCK + Andere zetels M+V
    $TPSTQ48 = $row['TPSTQ8'] + $row['TPSTR8'];
    $TPSTT58 = $row['TPSTT8'] + $row['TPSTU8'];


    // MEERDERE ROWS AFBEELDEN

    $NTPYEAR = $NTPYEAR.$TPYEAR.',';
    $NTPCREG = $NTPCREG.$TPCREG.',';

    $NTPST15 = $NTPST15.$TPST15.',';
    $NTPST16 = $NTPST16.$TPST16.',';
    $NTPST17 = $NTPST17.$TPST17.',';
    $NTPST18 = $NTPST18.$TPST18.',';

    $NTPST25 = $NTPST25.$TPST25.',';
    $NTPST26 = $NTPST26.$TPST26.',';
    $NTPST27 = $NTPST27.$TPST27.',';
    $NTPST28 = $NTPST28.$TPST28.',';

    $NTPST35 = $NTPST35.$TPST35.',';
    $NTPST36 = $NTPST36.$TPST36.',';
    $NTPST37 = $NTPST37.$TPST37.',';
    $NTPST38 = $NTPST38.$TPST38.',';

    $NTPST48 = $NTPST48.$TPST48.',';
    $NTPST58 = $NTPST58.$TPST58.',';


    // zetels

    $NNTPYEAR = $NNTPYEAR.$TPYEAR.',';
    $NNTPCREG = $NNTPCREG.$TPCREG.',';

    $NNTPST15 = $NNTPST15.$TPSTD15.',';
    $NNTPST16 = $NNTPST16.$TPSTD16.',';
    $NNTPST17 = $NNTPST17.$TPSTD17.',';
    $NNTPST18 = $NNTPST18.$TPSTD18.',';

    $NNTPST25 = $NNTPST25.$TPSTG25.',';
    $NNTPST26 = $NNTPST26.$TPSTG26.',';
    $NNTPST27 = $NNTPST27.$TPSTG27.',';
    $NNTPST28 = $NNTPST28.$TPSTG28.',';

    $NNTPST35 = $NNTPST35.$TPSTJ35.',';
    $NNTPST36 = $NNTPST36.$TPSTJ36.',';
    $NNTPST37 = $NNTPST37.$TPSTJ37.',';
    $NNTPST38 = $NNTPST38.$TPSTJ38.',';

    $NNTPST48 = $NNTPST48.$TPSTQ48.',';
    $NNTPST58 = $NNTPST58.$TPSTT58.',';
    

}

    $NTPYEAR = trim($NTPYEAR, ',');
    $NTPCREG = trim($NTPCREG, ',');

    $NTPST15 = trim($NTPST15, ',');
    $NTPST16 = trim($NTPST16, ',');
    $NTPST17 = trim($NTPST17, ',');
    $NTPST18 = trim($NTPST18, ',');

    $NTPST25 = trim($NTPST25, ',');
    $NTPST26 = trim($NTPST26, ',');
    $NTPST27 = trim($NTPST27, ',');
    $NTPST28 = trim($NTPST28, ',');

    $NTPST35 = trim($NTPST35, ',');
    $NTPST36 = trim($NTPST36, ',');
    $NTPST37 = trim($NTPST37, ',');
    $NTPST38 = trim($NTPST38, ',');

    $NTPST48 = trim($NTPST48, ',');
    $NTPST58 = trim($NTPST58, ',');


    // zetels

    $NTPYEAR = trim($NNTPYEAR, ',');
    $NNTPCREG = trim($NNTPCREG, ',');

    $NNTPST15 = trim($NNTPST15, ',');
    $NNTPST16 = trim($NNTPST16, ',');
    $NNTPST17 = trim($NNTPST17, ',');
    $NNTPST18 = trim($NNTPST18, ',');

    $NNTPST25 = trim($NNTPST25, ',');
    $NNTPST26 = trim($NNTPST26, ',');
    $NNTPST27 = trim($NNTPST27, ',');
    $NNTPST28 = trim($NNTPST28, ',');

    $NNTPST35 = trim($NNTPST35, ',');
    $NNTPST36 = trim($NNTPST36, ',');
    $NNTPST37 = trim($NNTPST37, ',');
    $NNTPST38 = trim($NNTPST38, ',');

    $NNTPST48 = trim($NNTPST48, ',');
    $NNTPST58 = trim($NNTPST58, ',');

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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand text-danger font-weight-bolder ml-3" href="index.html">SV<span class="text-white">2020</span></a>

    <div class="collapse navbar-collapse "  id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto ml-5 md-0 ">

            <li class="nav-item  ">
                <a class="nav-link text-white font-weight-bolder" href="index.html">Home<span class="sr-only border-white border-bottom"></span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link text-white font-weight-bolder"  href="index.php">Resultaten</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white font-weight-bolder"  href="index2.php">Stemmen-CPBW</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link text-danger font-weight-bolder" href="index3.php">Stemmen-OR</a>
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
        <form class="mt-3 w-45" action="index3.php" method="POST">
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

<h4 class="d-flex mt-3 text-white bg-danger font-weight-bold justify-content-center"> SOCIALE VERKIEZINGEN 2016 - CE</h4>
    
    <br>
    <br>

<!-- vertical bar charts -->

<div class="container-fluid">


<div  class="row d-flex  justify-content-around col-12">
        <br>
        <br>

        <!-- bar chart jongeren -->

        <div class="card bg-secondary d-flex flex-column align-items-center col-6">
            
            <br>

    <h4 class="text-warning font-weight-bold ">ZETELS JONGEREN</h4>

    <div id="chart1" class="mt-5" style="width:70%">
        <canvas id="myChart">
        </canvas>
    </div>

        <!-- script chart 1 jongeren -->

        <script>

        var ctx = document.getElementById('myChart').getContext('2d');
        var data ={
            datasets: [
                {
                data: [<?php echo $NTPST15; ?>],
                // backgroundColor: 'rgba(255,255,255,1)',
                backgroundColor: 'rgba(255,0,0,1)',
                borderColor: 'rgba(255,0,0,1)',
                borderWidth:5,
                label:'J_ABVV'
            },{
                data: [<?php echo $NTPST25; ?>],
                // backgroundColor: 'rgba(255,255,255,1)',
                backgroundColor: 'rgba(50,205,50,1)',
                borderColor: 'rgba(50,205,50,1)',
                borderWidth:5,
                label:'J_ACV'
            },{
                data: [<?php echo $NTPST35; ?>],
                // backgroundColor: 'rgba(255,255,255,1)',
                backgroundColor: 'rgba(0,0,255,1)',
                borderColor: 'rgba(0,0,255,1)',
                borderWidth:5,
                label:'J_ACLVB'
            }
            ],
                labels: [
                    <?php echo $NTPYEAR; ?>
                ]
        };

        var myChart = new Chart(ctx, {
            type: 'horizontalBar',
            data: data,
            options: {
                legend: {
                    position: 'right',
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                }
            }
        });
        </script>

            <br>
    </div>


        <!--  chart jongeren - zetels -->

        <div class="card bg-secondary d-flex flex-column align-items-center col-6">

            <br>

            <h4 class="text-warning font-weight-bold  justify-content-center">ZETELS - JONGEREN</h4>

            <div id="chart1" class="d-flex flex-column justify-content-center mt-5" style="width:70%">
                <canvas id="myChart11" class="bg-white">
                </canvas>
            </div>

            <!-- script chart 1 jongeren -->

            <script>

                var ctx = document.getElementById('myChart11').getContext('2d');
                var data ={
                    datasets: [
                        {
                        data: [<?php echo $NNTPST15; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST25; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST35; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(0,0,255,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACLVB'
                        }
                    ],
                    labels: [
                        <?php echo $NNTPYEAR; ?>
                    ]
                };

                var myChart11 = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: data,
                    options: {
                        legend: {
                            position: 'right',
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                        }
                        // rotation: 1 * Math.PI,
                        // circumference: 1 * Math.PI
                    }
                });

            </script>

        </div>
    </div>
</div>


<div class="container-fluid">

    <div  class="row d-flex  justify-content-around col-12">
        <br>
        <br>

        <!--  chart 2 arbeiders -->

        <div class="card bg-secondary d-flex flex-column align-items-center col-6">
                    
            <br>

            <h4 class="text-warning font-weight-bold">STEMMEN - ARBEIDERS</h4>

            <div id="chart1"  class="mt-5" style="width:70%">
                <canvas id="myChart2">
                </canvas>
            </div>

            <!-- script chart 2 arbeiders -->


            <script>

            var ctx = document.getElementById('myChart2').getContext('2d');

            var data ={
                datasets: [
                    {
                    data: [<?php echo $NTPST16; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(255,0,0,1)',
                    borderColor: 'rgba(255,0,0,1)',
                    borderWidth:5,
                    label:'A_ABVV'
                },{
                    data: [<?php echo $NTPST26; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(50,205,50,1)',
                    borderColor: 'rgba(50,205,50,1)',
                    borderWidth:5,
                    label:'A_ACV'
                },{
                    data: [<?php echo $NTPST36; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(0,0,255,1)',
                    borderColor: 'rgba(0,0,255,1)',
                    borderWidth:5,
                    label:'A_ACLVB'
                }
                ],
                    labels: [
                        <?php echo $NTPYEAR; ?>
                    ]
            };

            var myChart2 = new Chart(ctx, {

                type: 'horizontalBar',
                data: data,
                options: {
                    legend: {
                        position: 'right',
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                    }
                }
            });
            </script>
                
                <br>
        </div>

        <!--  chart arbeiders - zetels -->

        <div class="card bg-secondary d-flex flex-column align-items-center col-6">

            <br>

            <h4 class="text-warning font-weight-bold  justify-content-center">ZETELS - ARBEIDERS</h4>

            <div id="chart1" class="d-flex flex-column justify-content-center mt-5" style="width:70%">
                <canvas id="myChart22" class="bg-white">
                </canvas>
            </div>

            <!-- script chart 1 arbeiders -->

            <script>

                var ctx = document.getElementById('myChart22').getContext('2d');
                var data ={
                    datasets: [
                        {
                        data: [<?php echo $NNTPST16; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST26; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST36; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(0,0,255,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACLVB'
                        }
                    ],
                    labels: [
                        <?php echo $NNTPYEAR; ?>
                    ]
                };

                var myChart22 = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: data,
                    options: {
                        legend: {
                            position: 'right',
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                        }
                        // rotation: 1 * Math.PI,
                        // circumference: 1 * Math.PI
                    }
                });

            </script>
        </div>
    </div>
</div>


<div class="container-fluid">

<div  class="row d-flex  justify-content-around col-12">
    <br>
    <br>

    <!-- bar chart 3 bedienden  -->

    <div class="card bg-secondary d-flex flex-column align-items-center col-6">
        
        <br>

    <h4 class="text-warning font-weight-bold ">STEMMEN - BEDIENDEN</h4>


    <div id="chart1" class="mt-5" style="width:70%">
        <canvas id="myChart3">
        </canvas>
    </div>


        <!-- script chart 3 bedienden  -->

        <script>

            var ctx = document.getElementById('myChart3').getContext('2d');

            var data ={
                datasets: [
                    {
                    data: [<?php echo $NTPST17; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(255,0,0,1)',
                    borderColor: 'rgba(255,0,0,1)',
                    borderWidth:5,
                    label:'B_ABVV'
                },{
                    data: [<?php echo $NTPST27; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(50,205,50,1)',
                    borderColor: 'rgba(50,205,50,1)',
                    borderWidth:5,
                    label:'B_ACV'
                },{
                    data: [<?php echo $NTPST37; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(0,0,255,1)',
                    borderColor: 'rgba(0,0,255,1)',
                    borderWidth:5,
                    label:'B_ACLVB'
                }
                ],
                    labels: [
                        <?php echo $NTPYEAR; ?>
                    ]
            };

            var myChart3 = new Chart(ctx, {

                type: 'horizontalBar',
                data: data,
                options: {
                    legend: {
                        position: 'right',
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                    }
                }
            });

            </script>

                <br>
        </div>

        <!--  chart bedienden - zetels -->

        <div class="card bg-secondary d-flex flex-column align-items-center col-6">

            <br>

            <h4 class="text-warning font-weight-bold  justify-content-center">ZETELS - BEDIENDEN</h4>

            <div id="chart1" class="d-flex flex-column justify-content-center mt-5" style="width:70%">
                <canvas id="myChart33" class=" bg-white">
                </canvas>
            </div>

            <!-- script chart 1 bedienden zetels -->

            <script>

                var ctx = document.getElementById('myChart33').getContext('2d');
                var data ={
                    datasets: [
                        {
                        data: [<?php echo $NNTPST17; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST27; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST37; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(0,0,255,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACLVB'
                        }
                    ],
                    labels: [
                        <?php echo $NNTPYEAR; ?>
                    ]
                };

                var myChart33 = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: data,
                    options: {
                        legend: {
                            position: 'right',
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                        }
                        // rotation: 1 * Math.PI,
                        // circumference: 1 * Math.PI
                    }
                });

            </script>

        </div>
    </div>
</div>


<div class="container-fluid">

<div  class="row d-flex  justify-content-around col-12">
    <br>
    <br>

    <!-- bar chart 4 kaders  -->

    <div class="card bg-secondary d-flex flex-column align-items-center col-6">

        <br>

    <h4 class="text-warning font-weight-bold ">STEMMEN - KADERS</h4>


    <div id="chart1" class="mt-5" style="width:70%">
        <canvas id="myChart4">
        </canvas>
    </div>


        <!-- script chart 4 kaders  -->

        <script>

            var ctx = document.getElementById('myChart4').getContext('2d');

            var data ={
                datasets: [
                    {
                    data: [<?php echo $NTPST18; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(255,0,0,1)',
                    borderColor: 'rgba(255,0,0,1)',
                    borderWidth:5,
                    label:'K_ABVV'
                },{
                    data: [<?php echo $NTPST28; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(50,205,50,1)',
                    borderColor: 'rgba(50,205,50,1)',
                    borderWidth:5,
                    label:'K_ACV'
                },{
                    data: [<?php echo $NTPST38; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(0,0,255,1)',
                    borderColor: 'rgba(0,0,255,1)',
                    borderWidth:5,
                    label:'K_ACLVB'
                },{
                    data: [<?php echo $NTPST48; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(255,0,255,1)',
                    borderColor: 'rgba(255,0,255,1)',
                    borderWidth:5,
                    label:'K_NCK'
                },{
                    data: [<?php echo $NTPST58; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(255,215,0,1)',
                    borderColor: 'rgba(255,215,0,1)',
                    borderWidth:5,
                    label:'K_ANDERE'
                }
                ],
                    labels: [
                        <?php echo $NTPYEAR; ?>
                    ]
            };

            var myChart4 = new Chart(ctx, {

                type: 'horizontalBar',
                data: data,
                options: {
                    legend: {
                        position: 'right',
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                            }
                    }
                }
            });
        </script>

            <br>

</div>

        <!--  chart kaders - zetels -->

        <div class="card bg-secondary d-flex flex-column align-items-center col-6">

            <br>

            <h4 class="text-warning font-weight-bold  justify-content-center">ZETELS - KADERS</h4>

            <div id="chart1" class="d-flex flex-column justify-content-center mt-5" style="width:70%">
                <canvas id="myChart44" class=" bg-white">
                </canvas>
            </div>

            <!-- script chart 1 bedienden zetels -->

            <script>

                var ctx = document.getElementById('myChart44').getContext('2d');
                var data ={
                    datasets: [
                        {
                        data: [<?php echo $NNTPST18; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST28; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST38; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(0,0,255,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACLVB'
                        },{
                        data: [<?php echo $NNTPST48; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,255,1)',
                        borderColor: 'rgba(255,0,255,1)',
                        borderWidth:5,
                        label:'K_NCK'
                        },{
                        data: [<?php echo $NNTPST58; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,215,0,1)',
                        borderColor: 'rgba(255,215,0,1)',
                        borderWidth:5,
                        label:'K_ANDERE'
                        }
                    ],
                    labels: [
                        <?php echo $NNTPYEAR; ?>
                    ]
                };

                var myChart44 = new Chart(ctx, {
                    type: 'horizontalBar',
                    data: data,
                    options: {
                        legend: {
                            position: 'right',
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                        }
                        // rotation: 1 * Math.PI,
                        // circumference: 1 * Math.PI
                    }
                });

            </script>

        </div>
    </div>
</div>

<br>
<br>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
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
