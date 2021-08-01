<?php

$cardArray = [
    ['img' =>  'assets/cards/one.jpg', 'title' =>  'Penguin', 'desc' =>  'Penguins live in cold climate'],
    ['img' =>  'assets/cards/two.jpg', 'title' =>  'Eagle', 'desc' =>  'Eagles fly'],
    ['img' =>  'assets/cards/three.jpg', 'title' =>  'Bat', 'desc' =>  'Bats also fly'],
    ['img' =>  'assets/cards/four.jpg', 'title' =>  'Bear', 'desc' =>  'Bears do not fly'],
    ['img' =>  'assets/cards/five.jpg', 'title' =>  'Camel', 'desc' =>  'Camels wish they could fly'],
    ['img' =>  'assets/cards/six.jpg', 'title' =>  'Cheeta\'s', 'desc' =>  'Female Cheetas have babies sometimes'],
];

?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <br>
    <br>

    <div class="row">
        <?php foreach($cardArray as $index => $card): ?>
            <div class="col-sm-4" style="margin-top: 5px;">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $card['img']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $card['title']; ?></h5>
                        <p class="card-text"><?php echo $card['desc']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <br>
    <br>

    <div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets/carousel/one.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/carousel/two.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="assets/carousel/three.jpg" alt="Third slide">
        </div>
      </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
