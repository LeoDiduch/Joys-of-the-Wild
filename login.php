<?php include 'header.php';?>

<?php include 'menus.php';?>
        

        <section>
            <ul id="bottom-navbar">
                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="hot-post.html"><i class="fas fa-star"></i> Hot Posts</a></li>
                <li><a href="profil.html"><i class="fas fa-user-circle"></i> Your Profile</a></li>
                <li><a href="index.html"><i class="fas fa-plus-circle"></i> Add</a></li>
            </ul>
        </section>

            <section id="login-form-container">
                <div id="login-logo">
                    <a href="index.html">
                        <img src="img/Wild-Logo.png" alt="Wild Code School logo">
                    </a>
                </div>
                <form id="login-form">
                    <label for="username"><p>Username</p></label>
                    <input type="text" name="login" id="login-name" placeholder="Enter your username">
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="password" id="password" placeholder="Enter you password">
                    <button id="login-button" class="example_f"><span>Login</span></button>
                </form>                                 
            </section>              

<?php include 'footer.php';?>
