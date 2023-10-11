<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Mon CV</title>
    <!-- Bootstrap CSS -->
  </head>
  <body>

  <?php include_once('variable.php') ;?>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index1.html"> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about1.html"></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="contact1.html">
                                        
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a class="navbar-brand" href="#">CV <?php echo $prenoms ;?>
                        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#etatCivil">Etat Civil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Competences">Comp&eacute;tences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cursusScolaire">Cursus scolaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Loisirs">Loisirs</a>
            </li>
          </ul>
        </div>
      </nav>
      
      <main role="main" class="container" id="etatCivil">
        <div class="jumbotron">
              <div class="row">
                  <div class="col-12">
                      <h2 class="texte-bleu">
                          <?php echo $titre ;?>	</h2>
                  </div>
                  <div class="col-12 col-sm-4 col-md-3 identite">
                      <br><?php echo $no. " " .$prenoms;?><br>
                      <?php echo $date ;?>  <?php echo $lieu ;?> 
                      <?php echo $nation ;?><br>
                      <?php echo $situation ;?>
                                  </div>
                  <div class="col-12 col-sm-5 col-md-7 contact">
                      <br><?php echo $contact1 ;?><br><?php echo $contact2 ;?><br><?php echo $contact3 ;?>	</div>
                  <div class="col-12 col-sm-3 col-md-2" id="etatCivil-photo">
                      <img src="photo.jpg" alt="ma photo " class=" img img-responsive img-thumbnail rounded float-right" width="200px">
                  </div>
              </div>
        </div>
      </main>
          <div class="container-fluid cta">
              <hr>
          </div>
          <div class="container" id="Competences">
              <div class="row">
                    <div class="col-12">
                        <h2>
                          Comp&eacute;tences
                        </h2>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <h4>
                              Informatique					</h4>
                        <ul>
                        <li><?php echo $competence1 ;?></li><li><?php echo $competence2 ;?></li><li><?php echo $competence3 ;?></li>					
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <h4>
                              Langue				
                        </h4>
                        <ul>
                          <li><?php echo $langue1 ;?></li><li><?php echo $langue2 ;?></li>					</ul>
                      </div>
              </div>
          </div>
          <div class="container-fluid cta">
              <hr>
          </div> 
          </div>
          <div class="container-fluid cta">
              <hr>
          </div>
          <div class="container" id="cursusScolaire">
              <div class="row">
                  <div class="col-12">
                      <h2>
                          Cursus scolaires
                      </h2>
                  </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                          <h4>
                              2021-2022					</h4>
                          <p>
                                <strong>
                                    <label for=""><?php echo $diplo0 ;?></label>					
                                </strong>: 
                              <span>
                                  <?php echo $cursus0 ;?>						</span><br>
                              					</p>
                      </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                          <h4>
                              2017-2018					</h4>
                          <p>
                              <strong>
                                  <?php echo $diplo1 ;?>						</strong>: 
                              <span>
                                  <?php echo $cursus1 ;?>						</span><br>
                                                  </p>
                      </div>
                                  <div class="col-12 col-md-6 col-lg-4">
                          <h4>
                              2010-2011 					</h4>
                          <p>
                              <strong>
                                  <?php echo $diplo2 ;?>						
                                </strong>: 
                                  
                              <span>
                                <?php echo $cursus2 ;?>			
                                	</span><br>
                            </p>
                      </div>
               
          <div class="container-fluid cta">
              <hr>
          </div>
          <div class="container" id="Loisirs">
              <div class="row">
                  <div class="col-12">
                      <h2>
                          Loisirs
                      </h2>
                  </div>
                                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <?php echo $loisir1 ;?>	</div>
                                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <?php echo $loisir2 ;?>				</div>
                                  <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                          				</div>
                          </div>	
          </div>
          <div class="container-fluid cta">
      
          </div>
     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>