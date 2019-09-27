
<?php require_once('PHP/cards_database.php'); ?>
<?php include 'PHP/header.php'; ?>

<?php include 'PHP/menus.php'; ?>

<div class="container">

    <!--<form action="" method="post">-->
    <?php include 'PHP/poster.php'; ?>    
    <!--</form>-->
    <?php
       foreach ($cards as $key => $cardDescriptions) {
    ?>
       <article class="card" id="">
           <div class="info-post">
               <img src="<?= $cardDescriptions[0] ?>" alt="">
               <div class="profile-post">
                   <strong><?= $cardDescriptions[1] ?> posted :</strong>
                   <p><?= $cardDescriptions[2] ?> - <?= $cardDescriptions[3] ?></p>
               </div>
           </div>
           <div class="card-text">
               <p>
                   <?= $cardDescriptions[4] ?>
               </p>
           </div>
           <figure class="post-media">
               <?php
                   if (isset($cardDescriptions[6])) {
               ?>
                   <img src="<?= $cardDescriptions[6] ?>" alt="">
               <?php
                   } elseif (isset($cardDescriptions[5])) {
               ?>
               <video autoplay="" loop="" muted="" playsinline="">
                   <source src="<?= $cardDescriptions[5] ?>" type="video/webm">
                   <!--<source src="https://ljdchost.com/038/HsO3DA6.mp4" type="video/mp4">
                   <object data="https://ljdchost.com/038/HsO3DA6.gif" type="image/gif"></object>-->
               </video>
               <?php
                   }
               ?>
           </figure>
           <div class="card-buttons">
               <button id="like-btn" class="primary-btn" onclick="anim()"></button>
               <div class="share">
                   <ul>
                       <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                       <li><a href=""><i class="fab fa-twitter"></i></a></li>
                       <li><a href=""><i class="fab fa-slack-hash"></i></a></li>
                   </ul>
               </div>
           </div>
       </article>
       <?php
       }
       ?>


</div>

<?php include 'PHP/partner.php'; ?>

<?php include 'PHP/footer.php'; ?>