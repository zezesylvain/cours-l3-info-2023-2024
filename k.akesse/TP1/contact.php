<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmation Web</title>
    <link rel="icon" type="image/x-icon" href="images/work-item-svgrepo-com.svg">
    <link rel="stylesheet" href="styles/style.css">   
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <?php
          include('pages/content.php');
      ?> 
        <div class="row mb-2">
            <div class="text-center"><h2 style="color: rgb(27, 25, 11);"> <strong>Contacts</strong></h2></div>
        </div>
        <hr class="mb-5" style="text-align: center; height:4px;  border-width:0;color:rgb(224, 148, 7);background-color:rgb(235, 151, 27) ; margin-left: 300px; margin-right: 300px;"> 
        <div class="row justify-content-center mb-4">
            <div class="button-container" style="text-align: center;">
                <a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-4">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="card shadow">
                    <div class="card-body">
                        <p>Ecrivez-moi en remplissant le formulaire</p>
                        <div class="my-5">
                            <form id="contactForm">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nom</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Numéro de téléphone</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <br />
                                <button class="btn btn-primary text-uppercase disabled" id="submitButton" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
          include('pages/footer.php');
        ?>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>