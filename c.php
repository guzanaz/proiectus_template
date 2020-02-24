<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once("includes/imports.php"); ?>
    <title>Proiectus</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

</head>


<body id="body" onload="checkCookie()" onbeforeunload="return beforeUnload()" onresize="onResize()">
    <?php include_once("includes/header.php"); ?>
    <div class="content formulari closed">

        <form class="was-validated">
            <!-- inicio formulario -->
            <div class="row justify-content-center">

                <!-- grid container formulario-->
                <div class="col-11 col-sm-11 col-md-10 col-lg-10 col-xl-10">

                    <!-- Imagen formulario -->
                    <div class="container">
                        <div class="contact-image text-center mt-3">
                            <img class="form-img" src="img/icono_negro.png" />
                        </div>
                    </div>

                    <!-- container formulario -->
                    <div class="container contact-form">


                        <div class="container">
                            <div class="row no-gutters justify-content-center mt-5">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <h1>Proiectus forms.</h1>
                                    <p>Estás en la plantilla proiectus forms, toma lo que sea útil para tu formulario, aplícalo bien, haz tu trabajo.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Input básico -->
                        <div class="form-group mt-4">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <label for="exampleFormControlInput1">Tipo de información</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo del tipo de información" required>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>
                            </div>
                        </div>
                        <!-- fin input básico -->


                        <!-- select básico -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <label for="exampleFormControlSelect1">Ejemplo de select</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>
                            </div>
                        </div>
                        <!-- Fin select básico -->

                        <!-- select múltiple -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <label for="exampleFormControlSelect2">Ejemplo de select múltiple</label>
                                    <select multiple class="form-control" id="exampleFormControlSelect2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>
                            </div>
                        </div>
                        <!-- Fin select múltiple -->

                        <!-- text área -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <label for="exampleFormControlTextarea1">Ejemplo de textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ejemplo del tipo de información" required></textarea>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>
                        <!-- fin text área -->

                        <!-- inicio checkbox -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                        <label class="form-check-label" for="gridCheck" >Ejemplo de checkbox</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- fin checkbox-->


                        <!-- radio button -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio1"> un radio button </label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin radio button -->

                        <!-- radio button 2 -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio2">otro radio button</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin radio button 2-->

                        <!-- radio button 3 -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" required>
                                        <label class="custom-control-label" for="customRadio3"> Y otro radio button!</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin radio button 3-->

                        <!-- elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10  col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <h3>Custom File</h3>
                                    <form action="/action_page.php">
                                        <p>Custom file:</p>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="validatedCustomFile1" name="filename" required>
                                            <label class="custom-file-label" for="validatedCustomFile1">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });
                        </script>


                        <!-- fin elemento -->



                        <!-- elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <div class="mb-3">
                                        <label for="validationTextarea">Textarea</label>
                                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter a message in the textarea.
                                        </div>
                                    </div>

                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                        <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                        <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                                        <div class="invalid-feedback">More example invalid feedback text</div>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select" required>
                                            <option value="Obrir menu select">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                    </div>

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile2" required>
                                        <label class="custom-file-label" for="validatedCustomFile2">Choose file...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <script>
                            // Add the following code if you want the name of the file appear on select
                            $(".custom-file-input").on("change", function() {
                                var fileName = $(this).val().split("\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });
                        </script>
                        <!-- fin elemento -->

                        <!-- elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <button type="button" class="btn btn-primary justify-content-center mb-3" id="hiddeable">Anunci</button>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <iframe src="banner/Proiectus.html" style="width: 304px; height: 254px; overflow: hidden;"></iframe>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function(){
                              $("#hiddeable").click(function(){
                                $("iframe").toggle(1000);
                              });
                            });
                        </script>

                        <!-- fin elemento -->


                        <!-- elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <button type="button" class="btn btn-primary justify-content-center mb-3" id="buttonfade">Caixes</button>
                                    <button type="button" class="btn btn-danger justify-content-center mb-3" id="stop">Stop</button>
                                    <button type="button" class="btn btn-warning justify-content-center mb-3" id="callback">Callback</button>

                                    <div class="row">
                                        <div class="col-3 mb-3">
                                            <div id="div1" style="width:20px;height:20px;display:none;background-color:red;"></div><br>
                                            <div id="div2" style="width:20px;height:20px;display:none;background-color:green;"></div><br>
                                            <div id="div3" style="width:20px;height:20px;display:none;background-color:blue;"></div>
                                        </div>
                                        <div class="col-3">
                                            <div id="div4" style="width:20px;height:20px;display:none;background-color:red;"></div><br>
                                            <div id="div5" style="width:20px;height:20px;display:none;background-color:green;"></div><br>
                                            <div id="div6" style="width:20px;height:20px;display:none;background-color:blue;"></div>
                                        </div>
                                        <div class="col-3">
                                            <div id="div7" style="width:20px;height:20px;;background-color:red;"></div><br>
                                        </div>
                                        <div class="col-3">

                                            <p id="p1">Lorem Fistrum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                      $(document).ready(function(){
                          $("#callback").click(function(){
                            $("#p1").hide("slow", function(){
                              $("#p1").show("slow,");
                              alert("Ameno dolor sit amet");
                            });
                          });
                        });


                        $(document).ready(function(){
                          $("#buttonfade").click(function(){
                            $("#div1").fadeToggle(1500);
                            $("#div2").fadeToggle(1000);
                            $("#div3").fadeIn(2000).fadeOut(500);

                            $("#div4").slideToggle(1500);
                            $("#div5").slideToggle(1000);
                            $("#div6").slideToggle(500);
                             $("#stop").click(function(){
                                $("#div4").stop();
                                $("#div5").stop();
                                $("#div6").stop();
                            });
                            $("#div7").animate({
                              opacity: '0.5',
                              height: '60px',
                              width: '60px'
                            });


                          });
                        });
                        </script>
                        <!-- fin elemento -->

                        <!-- start elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <button type="button" class="btn btn-danger justify-content-center mb-3" id="DOM1">Mostrar Text</button>
                                    <button type="button" class="btn btn-danger justify-content-center mb-3" id="DOM2">Mostrar HTML</button>
                                    <button type="button" class="btn btn-danger justify-content-center mb-3" id="DOM3">Mostrar FormVal</button>
                                    <button type="button" class="btn btn-danger justify-content-center mb-3" id="DOM4">Inserir Text</button>
                                    <button type="button" class="btn btn-danger justify-content-center mb-3" id="DOM5">Eliminar TOT</button>
                                   <p id="getDOM">Text de <b>prova</b> dins d'un paragraf</p>
                                   <p id="pvalorDOM">Nom: <input type="text" id="valorDOM" value="Valor formulari"></p>
                                </div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function(){
                              $("#DOM1").click(function(){
                                alert("Text: " + $("#getDOM").text());
                              });
                              $("#DOM2").click(function(){
                                alert("HTML: " + $("#getDOM").html());
                              });
                              $("#DOM3").click(function(){
                                $("#valorDOM").val("Valor nou establert");
                                alert("ValorForm: " + $("#valorDOM").val());

                              });
                              $("#DOM4").click(function(){
                                $("#getDOM").before(" Text pre Text pre Text pre").after(" Text post Text post Text post");
                                $("#getDOM").css("background-color", "red");

                                });
                              $("#DOM5").click(function(){
                                $("#getDOM").remove();
                                $("#valorDOM, #pvalorDOM").remove();
                                $("#DOM1, #DOM2, #DOM3, #DOM4").removeClass("btn-danger");

                              });
                            });
                        </script>

                        <!-- fin elemento -->

                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                  <form>
                                      <input type="checkbox" id="myCheck" onmouseover="myFunction()" onclick="alert('event click actuat')">
                                    </form>
                                    <p id="pdeprova" ondblclick="dobleClick()" onmousedown="mouseDown()" onmouseup="mouseUp()">Wololo!</p>
                                    <p id="demodobleclick"></p>
                                    <img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="https://lh3.googleusercontent.com/dG7j8LakbjqDfXEjufztYEAF9HtAyAzjZHo-13AR9ga0b4snoPVLKQbjas4G3hpI3Gun=s32" alt="Smiley" width="32" height="32">
                                    <style>
                                    .divcosarara {
                                      width: 200px;
                                      height: 100px;
                                      border: 1px solid black;
                                    }
                                    .divonscroll {
                                      border: 1px solid black;
                                      width: 200px;
                                      height: 100px;
                                      overflow: scroll;
                                    }
                                    </style>
                                    <b></b>
                                    <div class="divcosarara" onmousemove="mouseOver(event)" onmouseout="clearCoor()">asd</div>
                                    <p id="demomouseover"></p>
                                    <input type="text" onkeydown="keyDown()" onfocus="onFocus(this)">
                                    <input type="text" onkeypress="return KeyPressConcreta(event)" id="onblur" onblur="onBlur()">
                                    <img src="https://i.ytimg.com/vi/PCpekfjA-xE/maxresdefauslt.jpg" onabort="onAbort()" onerror="onError()">
                                    <p>Selecciona un llenguatge de programació</p>

                                    <select id="mySelectonchange" onchange="onChange()">
                                      <option value="Python">Python</option>
                                      <option value="Java">Java</option>
                                      <option value="C++">C++</option>
                                      <option value="HTML/CSS/JS">HTML/CSS/JS</option>
                                    </select>
                                    <p id="demoonchange"></p>
                                    <p id="demoonresize"></p>
                                    <div class="divonscroll" onscroll="onScroll()">In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
                                    <br><br>
                                    'Whenever you feel like criticizing anyone,' he told me, just remember that all the people in this world haven't had the advantages that you've had.'</div>

                                    <p>Has usat el scroll <span id="demoonscroll">0</span> vegades.</p>
                                    <input id="idFormVal" type="number" min="100" max="300" required>
                                    <button onclick="formVal()">OK</button>

                                    <p>El num ha de ser major que 100 i menor que 300</p>

                                    <p id="demoFormVal"></p>
                                </div>
                            </div>
                          </div>

                          <!-- Scripts M6 SPRINT4 -->

                          <script>
                          function myFunction() {
                            document.getElementById("myCheck").click();
                          }
                          function dobleClick() {
                            document.getElementById("demodobleclick").innerHTML = "Hello World";
                          }
                          function mouseDown() {
                            document.getElementById("pdeprova").style.color = "red";
                          }
                          function mouseUp() {
                            document.getElementById("pdeprova").style.color = "green";
                          }
                          function bigImg(x) {
                            x.style.height = "64px";
                            x.style.width = "64px";
                          }

                          function normalImg(x) {
                            x.style.height = "32px";
                            x.style.width = "32px";
                          }
                          function mouseOver(e) {
                            var x = e.clientX;
                            var y = e.clientY;
                            var coor = "Coordinades: (" + x + "," + y + ")";
                            document.getElementById("demomouseover").innerHTML = coor;
                          }

                          function clearCoor() {
                            document.getElementById("demomouseover").innerHTML = "";
                          }
                          function keyDown() {
                            alert("has premut una tecla jj");
                          }
                          function KeyPressConcreta(e){
                           var keynum;

                           if(window.event) { // IE
                             keynum = e.keyCode;
                           } else if(e.which){ // Netscape/Firefox/Opera
                             keynum = e.which;
                           }

                           alert(String.fromCharCode(keynum));
                         }
                         function onLoad() {
                           alert("Page is loaded");
                         }
                         function beforeUnload() {
                           alert("Segur segurissisissim ???");
                         }
                         function onAbort(){
                           alert("S'ha abortat la carrega de l'imatge");
                         }
                         function onError(){
                           alert("S'ha abortat la carrega de l'imatge per un error");
                         }

                         function onChange() {
                           var x = document.getElementById("mySelectonchange").value;
                           document.getElementById("demoonchange").innerHTML = "Has seleccionat: " + x;
                         }
                         function onResize() {
                            var w = window.outerWidth;
                            var h = window.outerHeight;
                            var txt = "Tamany finestra: Amplada=" + w + ", Alçada=" + h;
                            document.getElementById("demoonresize").innerHTML = txt;
                          }
                          var xonscroll = 0;
                          function onScroll() {
                            document.getElementById("demoonscroll").innerHTML = xonscroll += 1;
                          }
                          function onFocus(x) {
                            x.style.background = "blue";
                          }
                          function onBlur() {
                            var xonBlur = document.getElementById("onblur");
                            xonBlur.value = xonBlur.value.toUpperCase();
                          }
                          function formVal() {
                            var inpObj = document.getElementById("idFormVal");
                            if (!inpObj.checkValidity()) {
                              document.getElementById("demoFormVal").innerHTML = inpObj.validationMessage;
                            } else {
                              document.getElementById("demoFormVal").innerHTML = "Input OK";
                            }
                          }
                            function setCookie(cname,cvalue,exdays) {
                              var d = new Date();
                              d.setTime(d.getTime() + (exdays*24*60*60*1000));
                              var expires = "expires=" + d.toGMTString();
                              document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
                            }

                            function getCookie(cname) {
                              var name = cname + "=";
                              var decodedCookie = decodeURIComponent(document.cookie);
                              var ca = decodedCookie.split(';');
                              for(var i = 0; i < ca.length; i++) {
                                var c = ca[i];
                                while (c.charAt(0) == ' ') {
                                  c = c.substring(1);
                                }
                                if (c.indexOf(name) == 0) {
                                  return c.substring(name.length, c.length);
                                }
                              }
                              return "";
                            }

                            function checkCookie() {
                              var user=getCookie("username");
                              if (user != "") {
                                alert("Benvingut: " + user);
                              } else {
                                user = prompt("Perfavor, insereix el teu nom d'usuari:","");
                                if (user != "" && user != null) {
                                  setCookie("username", user, 30);
                                }
                              }
                            }


                          </script>


                        <!-- elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <nav aria-label="...">
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- fin elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </div>

                        <!-- FIN -->





                    </div>
                    <!-- fin container formulario -->

                </div>
                <!--  fin grid container formulario-->

            </div>
            <!-- fin formulario -->
        </form>

    </div>
    <?php include_once("includes/footer.php"); ?>

    <script src="js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>

    <script>
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#eaf7f7",
          "text": "#5c7291"
        },
        "button": {
          "background": "#56cbdb",
          "text": "#ffffff"
        }
      },
      "theme": "classic",
      "position": "bottom-right",
      "content": {
        "message": "Aquesta pàgina web usa cookies per a millorar la teva experiència :D",
        "dismiss": "Aceptar !"
      }
    });
    </script>
</body>

</html>