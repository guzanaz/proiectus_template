<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once("includes/imports.php"); ?>
    <title>Proiectus</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <header>
        <?php include_once("includes/header_unlogged.php"); ?>
    </header>
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="img/carrusel0.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Connecta.</h1>
                            <p>La teva empresa pot connectar amb centres educatius o visceversa <br> Proposa un desafiament, forma el teu equip i desenvolupa un projecte.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Registra't</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="img/carrusel1.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Per a les empreses.</h1>
                            <p>Podran connectar amb centres educatius que imparteixin graus mitjans o superiors <br> en la seva àrea professional, col·laborar en projectes del seu interès o publicar propostes.</p>
                            <p><a class="btn btn-lg btn-primary" href="#que_es_proiectus" role="button">Més info...</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="img/carrusel2.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Per als centres educatius.</h1>
                            <p>Els alumnes podran accedir a experiències professionals <br>a través de la col·laboració en projectes en el seu camp d'estudis.</p>
                            <p>
                                <a muted type="button" class="btn btn-lg btn-primary video-btn" href="#" data-toggle="modal" data-src="/video/comosedberiaver.mp4" data-target="#myModal" role="button">Veure vídeo</a>
                            </p>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe muted class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="muted" controls muted onloadedmetadata="this.muted = true">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class=" mt-3 container">
            <div class="row justify-content-center">
                <div class="col-3">
                    <audio autoplay controls id="player">
                        <source src="music/just_do_it.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </div>
        </div>

        <div class="container pt-3 pb-4"></div>
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container py-4">
            <section id="que_es_proiectus">
                <div class="pricing-header px-3 py-5 pt-5 pb-5 mx-auto text-center">
                    <h2 id="que_es" class="display-4 font-weight-bold">Què és <bold>Proiectus</bold>?</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <button type="button" class="mt-2 btn btn-primary btn-block justify-content-center mb-3" id="getcontent_1">Get Content text</button>
                            <button type="button" class="mt-2 btn btn-primary btn-block justify-content-center mb-3" id="getcontent_2">Get Content html</button>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $("#getcontent_1").click(function() {
                                alert("Text: " + $("#que_es").text());
                            });
                            $("#getcontent_2").click(function() {
                                alert("HTML: " + $("#que_es").html());
                            });
                        });
                    </script>
                </div>
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">Segur que vols saber més <span class="text-muted">...Ara t'ho direm!</span></h2>
                        <p id="set_text" class="lead">Aquest és un text simulat per a la presentacio de Proiectus.cat en principi no ha de ser tan llarg, ha de ser prou atractiu perquè instituts i empreses vulguin apuntar-se i ser part de la comunitat Proiectus.</p>
                        <p class="lead">Aquest és un text simulat per a la presentacio de Proiectus.cat en principi no ha de ser tan llarg, ha de ser prou atractiu perquè instituts i empreses vulguin apuntar-se i ser part de la comunitat Proiectus.</p>
                        <p class="lead">Aquest és un text simulat per a la presentacio de Proiectus.cat en principi no ha de ser tan llarg.</p>
                        <p class="lead">Tenim una gran tasca per fidelitzar usuaris!</p>
                        <button type="button" class="mt-2 btn btn-primary btn-block justify-content-center mb-3" id="chaining">Chaining</button>
                        <button type="button" class="mt-2 btn btn-outline-primary btn-block justify-content-center mb-3" id="set_1">Set text</button>
                        <button type="button" class="mt-2 btn btn-outline-primary btn-block justify-content-center mb-3" id="set_2">Set HTML</button>
                        <button type="button" class="mt-2 btn btn-outline-primary btn-block justify-content-center mb-3" id="append">Append</button>
                        <button type="button" class="mt-2 btn btn-outline-primary btn-block justify-content-center mb-3" id="prepend">Prepend</button>
                        <button type="button" class="mt-2 btn btn-outline-primary btn-block justify-content-center mb-3" id="empty">Empty</button>

                    </div>

                    <script>
                        //chaining
                        $(document).ready(function() {
                            $("#chaining").click(function() {
                                $(".lead").css({
                                    "color": "#008080",
                                    "font-weight": "700"
                                }).slideUp(2000).slideDown(2000);
                            });
                        });

                        //set
                        $(document).ready(function() {
                            $("#set_1").click(function() {
                                $("#set_text").text("Hello world!");
                            });
                            $("#set_2").click(function() {
                                $(".lead").html("<b>Aquest és un text simulat per a la presentacio de Proiectus.cat en principi no ha de ser tan llarg, ha de ser prou atractiu perquè instituts i empreses vulguin apuntar-se i ser part de la comunitat Proiectus.</b>");
                            });
                        });

                        //add
                        $(document).ready(function() {
                            $("#append").click(function() {
                                $("#set_text").css("color", "red").append(" <b>Appended text</b>.");
                            });

                            $("#prepend").click(function() {
                                $("#set_text").css("color", "blue").prepend("<b>Todo esto es extra a la descripción anterior</b>");
                            });
                        });
                        //emptydiv
                        $(document).ready(function() {
                            $("#empty").click(function() {
                                $(".lead").empty();
                            });
                        });
                    </script>

                    <div class="col-md-4 offset-md-1">
                        <img id="cohete" class="featurette-image img-fluid mx-auto" src="img/que_es_proiectus.jpg" alt="proiectus">
                        <button type="button" class="mt-2 btn btn-secondary btn-block justify-content-center mb-3" id="animate">Animate</button>
                        <button type="button" class="mt-2 btn btn-outline-primary btn-block justify-content-center mb-3" id="remove">Remove</button>
                        <script>
                            $(document).ready(function() {
                                //animate
                                $("#animate").click(function() {
                                    $("#cohete").animate({
                                        opacity: '0.5',
                                        height: 'auto',
                                        width: '600px'
                                    });
                                });
                                //remove
                                $(document).ready(function() {
                                    $("#remove").click(function() {
                                        $(".featurette-image").remove();
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
                <hr class="featurette-divider">
        </div><!-- /.container -->
        </section>

        <section id="com_funciona">
            <div class="row">
                <div class="container mt-5 col-lg-8">
                    <div class="pricing-header px-3 py-5 pt-md-5 pb-md-4 mx-auto text-center">
                        <h1 class="display-4 font-weight-bold">Com funciona?</h1>
                        <div class="mt-2">
                            <button type="button" class="btn btn-outline-primary btn-block justify-content-center" id="stop">Stop (w/ callback effect)</button>
                            <button type="button" class="btn btn-secondary btn-block justify-content-center" id="slide">Slide</button>
                            <div id="slided" class="bg-secondary pb-1" style="display: none; border-radius:1px; color:white;">Esto explica cómo funciona<br>
                                Esto explica cómo funciona <br> Esto explica cómo funciona <br> Esto explica cómo funciona <br> Esto explica cómo funciona <br></div>

                            <script>
                                //slidedown
                                $(document).ready(function() {
                                    $("#slide").click(function() {
                                        $("#slided").slideDown("slow");
                                    });
                                });
                                //slideup
                                $(document).ready(function() {
                                    $("#slided").click("slow", function() {
                                        $("#slided").slideUp("slow");
                                    });
                                    //callback
                                    $("#stop").click(function() {
                                        alert("detuviste el slide!");
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="container mt-5 col-lg-4">
                </div>
            </div>
            <div class="row">
                <div class="container my-5 col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <button type="button" class="mt-2 btn btn-primary btn-block justify-content-center mb-3" id="css_clases">CSS Clases</button>
                        </div>
                    </div>
                    <!-- 4 columnas de texto luego de qué es proiectus-->
                    <div class="row">
                        <div class="col-lg-4 text-center mx-auto ">
                            <img class="rounded-circle" src="img/pruebaa.jpg" alt="com funciona" width="140" height="140">
                            <h3 class="pt-2">Registra't</h3>
                            <p>Si vols col·laborar en PROIECTUS.cat com a empresa o centre educatiu, registra't!</p>
                        </div><!-- /.col-lg-3 -->

                        <div class="col-lg-4 text-center mx-auto">
                            <img class="rounded-circle" src="img/pruebab.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h3 class="pt-2">Proposa</h3>
                            <p>Crea una proposta d'un projecte perquè un centre/empresa vulgui col·laborar amb tu!</p>
                        </div><!-- /.col-lg-3 -->

                        <style>
                            .important {
                                font-weight: bold;
                            }

                            .blue {
                                color: blue;
                            }
                        </style>

                        <script>
                            //CSS clases
                            $(document).ready(function() {
                                $("#css_clases").click(function() {
                                    $(".col-lg-4").addClass("important blue");
                                });
                            });
                        </script>
                    </div><!-- /.row -->
                    <div class="row my-5">
                        <div class="col-lg-4 text-center mx-auto">
                            <img class="rounded-circle" src="img/pruebac.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h3 class="pt-2">Match!</h3>
                            <p>Quan un centre/empresa s'interessa en la teva proposta comença el teu projecte!</p>
                        </div><!-- /.col-lg-3-->

                        <div class="col-lg-4 text-center mx-auto mb-5">
                            <img class="rounded-circle" src="img/pruebad.jpg" alt="Generic placeholder image" width="140" height="140">
                            <h3 class="pt-2">Segueix</h3>
                            <p>Els avenços del projecte, comparteix documents i missatges amb tots els col·laboradors!</p>
                        </div><!-- /.col-lg-3 -->

                    </div><!-- /.row -->
                </div><!-- /.container -->
                <div class="container my-5 col-lg-3">
                    <div class="row">
                        <div class="col-lg-3">
                            <iframe src="banner_externo/zenout.html" frameborder="0" scrolling="no" width="300" height="600" style="text-align: center;"></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-primary justify-content-center mb-3" id="hiddeable">Hide</button>
                        </div>
                        <div class="col-lg-3">
                            <button type="button" class="btn btn-primary justify-content-center mb-3" id="buttonfade">Fade</button>
                        </div>
                    </div>
                    <script>
                        //HIDE
                        $(document).ready(function() {
                            $("#hiddeable").click(function() {
                                $("iframe").toggle(1000);
                            });
                        });
                        //FADE
                        $(document).ready(function() {
                            $("#buttonfade").click(function() {
                                $("iframe").fadeToggle(1500);
                            });
                        });
                    </script>
                </div>
            </div><!-- /.row -->
        </section>

        </div><!-- /.fin main container -->
        <!--footer-->
        <?php include_once("includes/footer_unlogged.php"); ?>
        <!--fin footer-->
        <script src="js/video_index.js"></script>


</body>

</html>