<?php include 'header.php';?>

<?php include 'menus.php';?>

        <section>
            <ul id="bottom-navbar">
                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                <!--<li><a href=""><i class="fas fa-bell"></i> Notifications</a></li>-->
                <li><a href="hot-post.html"><i class="fas fa-star"></i> Hot Posts</a></li>
                <!--<li><a href=""><i class="fas fa-list-alt"></i> Categories</a></li>-->
                <li><a href="profil.html"><i class="fas fa-user-circle"></i> Your Profile</a></li>
                <!--<li><a href="index.html"><i class="fas fa-user-circle"></i> Login</a></li>-->
                <!--<li><a href="sign-up.html"><i class="fas fa-user-circle"></i> Signup</a></li>-->
                <!--<li><a href="index.html"><i class="fas fa-power-off"></i> Disconnect</a></li>-->
                <li><a href="index.html"><i class="fas fa-plus-circle"></i> Add</a></li>
            </ul>
        </section>

        <div class="container">

            <article class="card">

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
        </div>

        <div id="asides-partners">
            <aside id="you-may-like">
                <h2>You may like :</h2>
            </aside>
            <aside id="partners">
                <h2>Partner Ads :</h2>
            </aside>
        </div>

<?php include 'footer.php';?>