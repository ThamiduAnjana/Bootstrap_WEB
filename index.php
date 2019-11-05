<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'header.php';?>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Slide_01.png" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
          <img src="images/Slide_02.png" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
          <img src="images/Slide_03.png" class="d-block w-100" alt="Image 3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <br>

    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
          </nav>
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          </div>
        </div>
        <div class="col-9">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">New Items</li>
            </ol>
          </nav>
          
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="card-group">
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="card-group">
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <div class="card-group">
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <div class="card-group">
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;">
                    <img style="width: 200px;height: auto;" src="images/Logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>




    <?php include 'footer.php';?>
    