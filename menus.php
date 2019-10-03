<main id="topbar">

        <aside id="sidebar-nav">
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="hot-post.php"><i class="fas fa-star"></i> Hot Posts</a></li>
                <li><a href="random.php"><i class="fas fa-random"></i> Random</a></li>
                <li><a href="profil.php"><i class="fas fa-user-circle"></i> Your Profile</a></li>
                <li><a href="login.php"><i class="fas fa-power-off"></i> Disconnect</a></li>
                <li><?php include 'switch.php'; ?></li>
            </ul>
           
        </aside>
        
        
        <div id="burger" onclick="changeStyle()">
            <p>MENU</p>
            <span id="cross"></span>
        </div>

        <aside id="mobile-nav">
            <ul>
                <li><a href="random.php"><i class="fas fa-random"></i> Random</a></li>
                <li><a href="login.php"><i class="fas fa-user-circle"></i> Login</a></li>
                <li><a href="sign-up.php"><i class="fas fa-user-circle"></i> Signup</a></li>
                <li><a href="login.php"><i class="fas fa-power-off"></i> Disconnect</a></li>
                <li><?php include 'switch.php'; ?></li>
            </ul>
            <p>Made with <i class="fas fa-heart"></i> by <a href="https://www.wildcodeschool.com/">Wild Code School.</a><br>
            Copyright 2019 ®</p>
        </aside>

        <section>
            <ul id="bottom-navbar">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="hot-post.php"><i class="fas fa-star"></i> Hot Posts</a></li>
                <li><a href="profil.php"><i class="fas fa-user-circle"></i> Your Profile</a></li>
                <li><a href="index.php"><i class="fas fa-plus-circle"></i> Add</a></li>
            </ul>
        </section>

        