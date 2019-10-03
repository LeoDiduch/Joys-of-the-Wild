<?php require_once('PHP/cards_database.php'); ?>

<?php include 'PHP/header.php'; ?>

<?php include 'PHP/menus.php'; ?>

<div class="container">

    <?php
    $keyId = 1;
    foreach ($cards as $key => $cardDescriptions) {
        ?>

        <article class="card" id="card-<?= $keyId ?>">
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

                <button id="btn-<?= $keyId ?>" class="primary-btn like-btn"></button>
                <div class="share">
                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <ul>
                            <li><a class="a2a_button_facebook"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a class="a2a_button_twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="a2a_button_reddit"><i class="fab fa-slack-hash"></i></a></li>
                        </ul>
                    </div>
                    <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.locale = "fr";
                        a2a_config.num_services = 4;
                    </script>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->
                </div>
            </div>
        </article>

    <?php
        $keyId++;
    }
    ?>
</div>

<script type="text/javascript" src="hotPostSorting.js"></script>

<?php include 'PHP/partner.php'; ?>

<?php include 'PHP/footer.php'; ?>
