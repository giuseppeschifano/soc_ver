
<?php
    require_once 'connect.php';
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php

// initialize variables CPPT - stemmen

$NTPYEAR = '';
$NTPCREG = '';


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


// initialize variables CPPT - zetels

$NNTPYEAR = '';
$NNTPCREG = '';

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
    $sth = $handler->prepare('SELECT * FROM TABLE_CPPT WHERE TPCREG like :start ORDER BY TPYEAR DESC');
    $sth->execute(array(':start' => $start));

    $rows = $sth->fetchAll();

    // $rows = [];

    // while( $row = $sth->fetch(PDO::FETCH_ASSOC) ){

    foreach ($rows as $row) {

    // array_push($rows, $row);

    $TPYEAR = $row['TPYEAR'];
    $TPCREG = $row['TPCREG'];


    // ABVV J-A-B
    $TPST11 = $row['TPST11'];
    $TPST12 = $row['TPST12'];
    $TPST13 = $row['TPST13'];

    // ABVV J-A-B zetels M+V
    $TPSTD11 = $row['TPSTD1'] + $row['TPSTE1'];
    $TPSTD12 = $row['TPSTD2'] + $row['TPSTE2'];
    $TPSTD13 = $row['TPSTD3'] + $row['TPSTE3'];


    // ACV J-A-B
    $TPST21 = $row['TPST21'];
    $TPST22 = $row['TPST22'];
    $TPST23 = $row['TPST23'];

    // ACV J-A-B zetels M+V
    $TPSTG21 = $row['TPSTG1'] + $row['TPSTH1'];    
    $TPSTG22 = $row['TPSTG2'] + $row['TPSTH2'];
    $TPSTG23 = $row['TPSTG3'] + $row['TPSTH3'];


    //ACLVB J-A-B
    $TPST31 = $row['TPST31'];
    $TPST32 = $row['TPST32'];
    $TPST33 = $row['TPST33'];

    //ACLVB J-A-B zetels M+V
    $TPSTJ31 = $row['TPSTJ1'] + $row['TPSTK1'];
    $TPSTJ32 = $row['TPSTJ2'] + $row['TPSTK2'];
    $TPSTJ33 = $row['TPSTJ3'] + $row['TPSTK3'];

    
    //   test  percentages 

    // $TPSTTOT = $TPSTD11 + $TPSTD22 + $TPSTD33 + $TPSTG11 + $TPSTG22 + $TPSTG33 + $TPSTJ11 + $TPSTJ22 + $TPSTJ33;


    // $T2PSTD1 = number_format((($TPSTD11 * 100 ) / ($TPSTTOT)), 2, ',', '.');
    // $T2PSTD2 = number_format((($TPSTD22 * 100 ) / ($TPSTTOT)), 2, ',', '.');
    // $T2PSTD3 = number_format((($TPSTD33 * 100 ) / ($TPSTTOT)), 2, ',', '.');

    // $T2PSTG1 = number_format((($TPSTG11 * 100 ) / ($TPSTTOT)), 2, ',', '.');
    // $T2PSTG2 = number_format((($TPSTG22 * 100 ) / ($TPSTTOT)), 2, ',', '.');
    // $T2PSTG3 = number_format((($TPSTG33 * 100 ) / ($TPSTTOT)), 2, ',', '.');

    // $T2PSTJ1 = number_format((($TPSTJ11 * 100 ) / ($TPSTTOT)), 2, ',', '.');
    // $T2PSTJ2 = number_format((($TPSTJ22 * 100 ) / ($TPSTTOT)), 2, ',', '.');
    // $T2PSTJ3 = number_format((($TPSTJ33 * 100 ) / ($TPSTTOT)), 2, ',', '.');



    // MEERDERE ROWS AFBEELDEN

    $NTPYEAR = $NTPYEAR.$TPYEAR.',';
    $NTPCREG = $NTPCREG.$TPCREG.',';

    $NTPST11 = $NTPST11.$TPST11.',';
    $NTPST12 = $NTPST12.$TPST12.',';
    $NTPST13 = $NTPST13.$TPST13.',';

    $NTPST21 = $NTPST21.$TPST21.',';
    $NTPST22 = $NTPST22.$TPST22.',';
    $NTPST23 = $NTPST23.$TPST23.',';

    $NTPST31 = $NTPST31.$TPST31.',';
    $NTPST32 = $NTPST32.$TPST32.',';
    $NTPST33 = $NTPST33.$TPST33.',';
    

        // zetels

    $NNTPYEAR = $NNTPYEAR.$TPYEAR.',';
    $NNTPCREG = $NNTPCREG.$TPCREG.',';

    $NNTPST11 = $NNTPST11.$TPSTD11.',';
    $NNTPST12 = $NNTPST12.$TPSTD12.',';
    $NNTPST13 = $NNTPST13.$TPSTD13.',';

    $NNTPST21 = $NNTPST21.$TPSTG21.',';
    $NNTPST22 = $NNTPST22.$TPSTG22.',';
    $NNTPST23 = $NNTPST23.$TPSTG23.',';

    $NNTPST31 = $NNTPST31.$TPSTJ31.',';
    $NNTPST32 = $NNTPST32.$TPSTJ32.',';
    $NNTPST33 = $NNTPST33.$TPSTJ33.',';

}


    $NTPYEAR = trim($NTPYEAR, ',');
    $NTPCREG = trim($NTPCREG, ',');

    $NTPST11 = trim($NTPST11, ',');
    $NTPST12 = trim($NTPST12, ',');
    $NTPST13 = trim($NTPST13, ',');

    $NTPST21 = trim($NTPST21, ',');
    $NTPST22 = trim($NTPST22, ',');
    $NTPST23 = trim($NTPST23, ',');

    $NTPST31 = trim($NTPST31, ',');
    $NTPST32 = trim($NTPST32, ',');
    $NTPST33 = trim($NTPST33, ',');

    // zetels

    $NNTPST11 = trim($NNTPST11, ',');
    $NNTPST12 = trim($NNTPST12, ',');
    $NNTPST13 = trim($NNTPST13, ',');

    $NNTPST21 = trim($NNTPST21, ',');
    $NNTPST22 = trim($NNTPST22, ',');
    $NNTPST23 = trim($NNTPST23, ',');

    $NNTPST31 = trim($NNTPST31, ',');
    $NNTPST32 = trim($NNTPST32, ',');
    $NNTPST33 = trim($NNTPST33, ',');


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

            <li class="nav-item active">
                <a class="nav-link text-danger font-weight-bolder"  href="index2.php">Stemmen-CPBW</a>
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
        <form class="mt-3 w-45" action="index2.php" method="POST">
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

<h4 class="d-flex mt-3 text-white bg-danger font-weight-bold justify-content-center">SOCIALE VERKIEZINGEN 2016 - CPPT</h4>

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

            <h4 class="text-warning font-weight-bold ">STEMMEN - JONGEREN</h4>

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
                        data: [<?php echo $NTPST11; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,0,0,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NTPST21; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(50,205,50,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NTPST31; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(0,0,255,1)',
                        // borderColor: 'rgba(0,0,255,1)',
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
                        data: [<?php echo $NNTPST11; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST21; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST31; ?>],
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

    <!-- bar chart jongeren -->

    <div class="card bg-secondary d-flex flex-column align-items-center col-6">
        
        <br>

    <h4 class="text-warning font-weight-bold ">STEMMEN - ARBEIDERS</h4>

    <div id="chart1" class="mt-5" style="width:70%">
        <canvas id="myChart2">
        </canvas>
    </div>


        <!-- script chart 2 arbeiders -->

        <script>

            var ctx = document.getElementById('myChart2').getContext('2d');

            var data ={
                datasets: [
                    {
                    data: [<?php echo $NTPST12; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(255,0,0,1)',
                    // borderColor: 'rgba(255,0,0,1)',
                    borderWidth:5,
                    label:'A_ABVV'
                },{
                    data: [<?php echo $NTPST22; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(50,205,50,1)',
                    // borderColor: 'rgba(50,205,50,1)',
                    borderWidth:5,
                    label:'A_ACV'
                },{
                    data: [<?php echo $NTPST32; ?>],
                    // backgroundColor: 'rgba(255,255,255,1)',
                    backgroundColor: 'rgba(0,0,255,1)',
                    // borderColor: 'rgba(0,0,255,1)',
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
                <canvas id="myChart22" class=" bg-white">
                </canvas>
            </div>

            <!-- script chart 1 jongeren -->

            <script>

                var ctx = document.getElementById('myChart22').getContext('2d');
                var data ={
                    datasets: [
                        {
                        data: [<?php echo $NNTPST12; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST22; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST32; ?>],
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

        <!-- bar chart bedienden -->

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
                        data: [<?php echo $NTPST13; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,0,0,1)',
                        borderWidth:5,
                        label:'B_ABVV'
                    },{
                        data: [<?php echo $NTPST23; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(50,205,50,1)',
                        borderWidth:5,
                        label:'B_ACV'
                    },{
                        data: [<?php echo $NTPST33; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(0,0,255,1)',
                        // borderColor: 'rgba(0,0,255,1)',
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
                <canvas id="myChart33" class="bg-white">
                </canvas>
            </div>

            <!-- script chart 1 jongeren -->

            <script>

                var ctx = document.getElementById('myChart33').getContext('2d');
                var data ={
                    datasets: [
                        {
                        data: [<?php echo $NNTPST13; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(255,0,0,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ABVV'
                        },{
                        data: [<?php echo $NNTPST23; ?>],
                        // backgroundColor: 'rgba(255,255,255,1)',
                        backgroundColor: 'rgba(50,205,50,1)',
                        // borderColor: 'rgba(255,255,255,1)',
                        borderWidth:5,
                        label:'J_ACV'
                        },{
                        data: [<?php echo $NNTPST33; ?>],
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
