<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PNT</title>
    <link rel="stylesheet" href="footer.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" type="image/png" href="mapa.png">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/otro.js"></script>

</head>

<body>



    <nav class="navegacion">

        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">

            </button>
        </div>

        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            <li>
                <a href="javascript:;">
                    <a href="Index.php"> <i class="fa fa-home" aria-hidden="true"></i></a>
                    <span class="title" href="Index.php">Inicio </span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <!-- <i class="fa fa-cube" aria-hidden="true"></i>-->
                    <span class="title">Busqueda</span>

                </a>

                <ul>
                    <li>
                        <a href="pornombre.php">Por nombre</a>
                    </li>
                    <li>
                        <a href="municipio.php">Por municipio</a>
                    </li>


                </ul>
            </li>



            <li>
                <a href="inde.php">
            <li><a href="inde.php">Contactanos</a></li>
            </a>
            </li>
        </ul>
        </li>


        </ul>
    </nav>

    <div id="map" style="height: 500px; width: 800px;"></div>
    <script href="Mapa.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#respMenu").aceResponsiveMenu({
                resizeWidth: '768',
                animationSpeed: 'fast',
                accoridonExpAll: false
            });
        });
    </script>

    <br><br><br><br><br><br><br><br><br>


    <section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">



                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">

                            <a href="https://www.facebook.com/PlataformaNacionalTransparencia/?ref=br_tf&epa=SEARCH_BOX"><img src="facebook.png" width="40" height="40"></a><br>
                            <br>
                            <img src="telefono.png" width="40" height="40"> TeliNAI 01 800 835 43 24
                        </ul>
                    </div>
                    </hr>
                </div>

            </div>
    </section>

</body>

</html>