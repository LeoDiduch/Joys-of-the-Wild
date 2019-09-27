<?php include 'header.php'; ?>

<?php include 'menus.php'; ?>

<div class="container">
    <section id="randomButtonSection">
        <button onclick="randomCard()" id="randomButton">Randomize</button>
    </section>

    <article class="card" id="cardOne">

        <div class="info-post">
            <img src="img/Wild-Logo.png" alt="">
            <div class="profile-post">
                <strong>Loïc posted :</strong>
                <p>26/09/2019 - 15h37</p>
            </div>
        </div>

        <div class="card-text">
            <p>
                Quand tu commences un nouveau language
            </p>
        </div>

        <figure class="post-media">
            <img src="" alt="">
            <video autoplay="" loop="" muted="" playsinline="">
                <source src="https://ljdchost.com/038/HsO3DA6.webm" type="video/webm">
                <source src="https://ljdchost.com/038/HsO3DA6.mp4" type="video/mp4">
                <object data="https://ljdchost.com/038/HsO3DA6.gif" type="image/gif"></object>
            </video>
        </figure>

        <div class="card-buttons">
            <button class="primary-btn"><i class="fas fa-thumbs-up"></i> Wild It !</button>
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

        <figure class="post-media">
            <img src="img/Jean-roch.jpg" alt="">
        </figure>

        <div class="card-buttons">
            <button class="primary-btn like-btn" onclick="flip()"><i class="fas fa-thumbs-up"></i> Wild It !</button>
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
            <button class="primary-btn"><i class="fas fa-thumbs-up"></i> Wild It !</button>
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

        <div class="info-post">
            <img src="img/Wild-Logo.png" alt="">
            <div class="profile-post">
                <strong>Margot posted :</strong>
                <p>26/09/2019 - 15h37</p>
            </div>
        </div>

        <div class="card-text">
            <p>
            </p>
        </div>

        <figure class="post-media">
            <img src="https://images-cdn.9gag.com/photo/aV3wWMd_700b.jpg" alt="">
        </figure>

        <div class="card-buttons">
            <button class="primary-btn"><i class="fas fa-thumbs-up"></i> Wild It !</button>
            <div class="share">
                <ul>
                    <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-slack-hash"></i></a></li>
                </ul>
            </div>
        </div>
    </article>

    <article class="card" id="cardFive">

        <div class="info-post">
            <img src="img/Wild-Logo.png" alt="">
            <div class="profile-post">
                <strong>Theo posted :</strong>
                <p>26/09/2019 - 15h37</p>
            </div>
        </div>

        <div class="card-text">
            <p>
                Quand tu es meta dans ton travail
            </p>
        </div>

        <figure class="post-media">
            <img src="img/DavidMeta.jpg" alt="">

        </figure>

        <div class="card-buttons">
            <button class="primary-btn"><i class="fas fa-thumbs-up"></i> Wild It !</button>
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
<script type="text/javascript" src="random-card.js"></script>
<?php include 'footer.php'; ?>