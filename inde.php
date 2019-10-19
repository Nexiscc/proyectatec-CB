<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="icon" type="image/png" href="mapa.png">
    <title>Formulario</title>

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="" rel="icon">


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/contact-form.css" type="text/css">

</head>

<body>

    <section id="contact-form-section" class="form-content-wrap">
        <div class="container">
            <div class="row">
                <div class="tab-content">
                    <div class="col-sm-12">
                        <div class="item-wrap">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="item-content colBottomMargin">
                                        <div class="item-info">
                                            <h2 class="item-title text-center">Contacto</h2>

                                        </div>


                                    </div>

                                </div>

                                <div class="col-md-12">


                                    <form id="contactForm" name="contactform" data-toggle="validator" class="popup-form">
                                        <div class="row">
                                            <div id="msgContactSubmit" class="hidden"></div>

                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre">
                                                <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
                                                <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
                                                <div class="input-group-icon"><i class="fa fa-phone"></i></div>
                                            </div>

                                            <div class="form-group col-sm-6">
                                                <div class="help-block with-errors"></div>
                                                <input name="subject" id="subject" placeholder="Asunto*" class="form-control" type="text" required data-error="Por favor ingresa el asunto">
                                                <div class="input-group-icon"><i class="fa fa-book"></i></div>
                                            </div>

                                            <div class="form-group col-sm-12">
                                                <div class="help-block with-errors"></div>
                                                <textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control"></textarea>
                                                <div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
                                            </div>


                                            <div class="form-group last col-sm-12">
                                                <button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
                                            </div>
                                            <div class="form-group last col-sm-12">
                                                <button type="button" > <a href="Index.php">Pagina principal</a></button>
                                            </div>


                                            <span class="sub-text">* Campos requeridos</span>
                                            <div class="clearfix"></div>
                                        </div>

                                    </form>







                                </div>
                            </div>







                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>












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
                    
                </div>
                <div class="row">

                </div>
    </section>
    <!-- ./Footer -->

    </div>

    <a href="#" class="scrollup"><i class="fa fa-arrow-circle-up"></i></a>


    <script src="js/jquery-3.2.1.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/validator.min.js"></script>

    <script src="js/contact-form.js"></script>

</body>

</html>