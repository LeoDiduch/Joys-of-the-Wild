<?php require_once('cards_database.php'); ?>
<?php include 'header.php'; ?>

<?php include 'menus.php'; ?>

<div class="container">
    <div id="add-post">

        <div id="blank">
        </div>

        <div id="post-form">
            <div id="post">
                <img src="img/Wild-Logo.png" alt="" id="profile-photo">
                <textarea id="post-text" name="post-content" placeholder="Want to share something ?"></textarea>
            </div>

            <div id="control">
                <div id="control-btn">
                    <button id="add-media" class="primary-btn"><i class="fas fa-plus"></i> Add media </button>
                    <button id="add-tag" class="primary-btn"><i class="fas fa-plus"></i> Add tag </button>
                </div>

                <div id="control-send">
                    <a href="" id="send"><i class="fas fa-paper-plane"></i></a>
                    <a href="" id="cancel"><i class="far fa-times-circle"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div id="tag-popin">
        <input type="text" placeholder="Add tag please.">
        <button id="send-tag" type="submit">Add !</button>
        <a href="" id="tag-cancel"><i class="far fa-times-circle"></i></a>
        <button id="close-tag" type="submit">Close</button>

    </div>
    <?php
    foreach ($cards as $key => $cardDescriptions) {
        ?>


        <article class="card" id="cardOne">

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
                    <img src="" alt="">
                    <video autoplay="" loop="" muted="" playsinline="">
                        <source src="https://ljdchost.com/038/HsO3DA6.webm" type="video/webm">
                        <source src="https://ljdchost.com/038/HsO3DA6.mp4" type="video/mp4">
                        <object data="https://ljdchost.com/038/HsO3DA6.gif" type="image/gif"></object>
                    </video>
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

        <article class="card" id="cardTwo">

            <div class="info-post">
                <img src="img/Wild-Logo.png" alt="">
                <div class="profile-post">
                    <strong>Benjamin posted :</strong>
                    <p>26/09/2019 - 15h37</p>
                </div>
            </div>

            <div class="card-text">
                <p>
                    Quand tu as fait tes quêtes Git
                </p>
            </div>

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
            <button class="primary-btn"><i class="fas fa-thumbs-up"></i><?= $cardDescriptions[7] ?> Wild It !</button>
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

        <article class="card" id="cardThree">

            <div class="info-post">
                <img src="img/Wild-Logo.png" alt="">
                <div class="profile-post">
                    <strong>Theo posted :</strong>
                    <p>26/09/2019 - 15h37</p>
                </div>
            </div>

            <div class="card-text">
                <p>
                    Quand tu essaies de gagner alors que les autres trichent !
                </p>
            </div>

            <figure class="post-media">
                <img src="img/Essaie-gagner.jpg" alt="">
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

        <article class="card" id="cardFour">

        <?php
        }
        ?>


        <figure class="post-media">
            <img src="https://images-cdn.9gag.com/photo/aV3wWMd_700b.jpg" alt="">
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

</div>

<div id="asides-partners">
    <aside id="you-may-like">
        <h2>You may like :</h2>
    </aside>
    <aside id="partners">
        <h2>Partner Ads :</h2>
    </aside>
</div>

<?php include 'footer.php'; ?>