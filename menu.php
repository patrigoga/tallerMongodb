<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="index.php">taller con mongodb</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


       <?php  if(!isset($_SESSION['dni'])){ ?>
      <li class="nav-item active">
        <a class="nav-link text-success mr-1" href="index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
        <?php }?>

     <?php  if(isset($_SESSION['dni'])){ ?>

         <li class="nav-item active">
           <a class="nav-link text-success  mr-1" href="gestion.php">Gestión de Vehiculos  <span class="sr-only">(current)</span></a>
        </li>

        <?php }?>
      
  <?php  if(!isset($_SESSION['dni'])){ ?>

      <li class="nav-item">
        <a class="nav-link text-success  mr-1" href="registro.php">Registro</a>
      </li>
      <?php }?>
      
    </ul>
    
  </div>
</nav>