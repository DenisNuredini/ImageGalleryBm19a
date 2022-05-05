<!DOCTYPE html>

<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Galerie</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <link rel="stylesheet" href="css/foundation.css" />
      <script src="js/vendor/jquery.js"></script>
      <script src="js/vendor/modernizr.js"></script>
   </head>
   <body>
      <nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name">
               <h1><a>Galerie</a></h1>
            </li>
            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
         </ul>
         <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
               <li class="divider"></li>
               <li><a href="index.php">Home</a></li>
               <li class="divider"></li>
               <li class="divider"></li>
               <li><a href="upload-photo.php" data-reveal-id="uploadModal" data-reveal-ajax="true">Foto hochladen</a></li>
               <li class="divider"></li>
			   
            </ul>
         </section>
      </nav>
      <br/>
      <!--Content goes here-->
      <div class="row">
         <div class="large-12 columns">
            <?php
            if(isset($_GET['success'])) {
            if($_GET['success']=="yes"){?>
            <div class="row">
               <div class="small-6 large-6 columns">
                  <div data-alert class="alert-box success radius ">
                     Image "<?= $_GET['title']; ?>" erfolgreich hochgeladen.
                     <a href="#" class="close">&times;</a>
                  </div>
               </div>
            </div>
            <?php } else {?>
             <div class="row">
               <div class="small-6 large-6 columns">
                  <div data-alert class="alert-box alert radius ">
                     Es gab ein Problem mit dem hochladen.
                     <a href="#" class="close">&times;</a>
                  </div>
               </div>
            </div>
            <?php } }?>
            <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
               <?php
               require 'dbc.php';
               $stmt = $dbc->query("SELECT * FROM tbl_photos ORDER by img_id ASC");
               foreach ($stmt as $img) {
               ?>
               <li>
                  <a href="<?= $img['img_path']; ?>">
                  <img data-caption="Name: <?= $img['img_title']; ?>, Höhe: <?= $img['img_height']; ?>, Breite: <?= $img['img_width']; ?>" src="<?= $img['img_path']; ?>"></a>
               </li>
               <?php } ?>
            </ul>
         </div>
      </div>
      <!--End content-->
      <!--MODALS-->
      <div id="uploadModal" class="reveal-modal tiny" data-reveal></div>
      <!--END MODALS-->
      <div id="footer">

         <div class="row">
            <div class="large-6 columns" style="margin-top: -25px;">
               &copy; 2022 Denis Nuredini und Jason Caviezel
            </div>
         </div>
      </div>

      <style>
          body {
              background-image: url('background.jpg');
          }
          #footer{
              color white;
          }
      </style>

      </div>
      <script src="js/foundation.min.js"></script>
    <script src="js/sticky-footer.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    <script src="js/foundation/foundation.reveal.js"></script>
    <script src="js/foundation/foundation.abide.js"></script>
    <script>
       $(document).foundation();
    </script>
 </body>
</html>
