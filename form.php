<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include_once("includes/imports.php"); ?>
    <title>Proiectus</title>
</head>

<body id="body">
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
                                        <label class="form-check-label" for="gridCheck">Ejemplo de checkbox</label>
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
                                            <option value="">Open this select menu</option>
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

                                </div>
                            </div>
                        </div>

                        <!-- fin elemento -->


                        <!-- elemento -->
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-10 col-sm-10 col-md-8 col-lg-8 col-xl-6">

                                </div>
                            </div>
                        </div>
                        <!-- fin elemento -->

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

</body>

</html>