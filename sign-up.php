<?php include 'header.php';?>

<?php include 'menus.php';?>

        <section id="sign-up-form-container">
            <form id="sign-up-form">
                    <img src="img/Wild-Logo.png" alt="Wild Code School logo">

                <label for="username">Choose your username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username">
                <label for="email">Your email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email adress">
                <label for="password">Choose your password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                <label for="password2">Retype your password</label>
                <input type="password" name="password" id="password2" placeholder="Enter your password again">
                <button id="sign-up" class="example_f"><span>Sign up !</span></button>

            </form>
        </section>
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

<?php include 'footer.php';?>