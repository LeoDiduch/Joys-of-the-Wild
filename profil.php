<?php include 'PHP/header.php';?>

<?php include 'PHP/menus.php';?>

        <div class="container">
            <section id="user_profile">
                <div id="profile_header">
                    <img src="img/Wild-Logo.png" alt="Wild Code School logo">
                    <h2>Team Wilders 1</h2>
                </div>
                
                <h3>Profile</h3>
                <div id="profile_items">
                    <h4>Username :</h4>
                    <p>Team Wilders 1</p>
                    <h4>Email :</h4>
                    <p>thebestwildersever@wcs.com</p>
                    <h4>Avatar :</h4>
                    <a href="avatar.jpeg">avatar.jpeg</a>
                    <h4>Biography :</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non ut corporis, vitae harum quos
                        fuga, magnam assumenda pariatur perspiciatis ipsa eaque impedit eos odio saepe quam ab eius? Minima?
                    </p>
                </div>

                <form action="edit-profile.php">
                    <input type="submit" value="Edit your profile" class="example_f">
                </form>

                <h3>Change your password</h3>
                <form method="post" action="update_user_password.php">

                    <label for="current_password">Current Password :</label>
                    <input type="password" name="current_password" id="current_password" maxlength="16" placeholder="Enter your current password"/>

                    <label for="new_password">New Password :</label>
                    <input type="password" name="new_password" id="new_password" maxlength="16" placeholder="Enter your new password"/>

                    <label for="new_password_verification">Retype New Password :</label>
                    <input type="text" id="new_password_verification" name="new_password_verification" maxlength="16" placeholder="Enter your new password again"/>

                    <input type="submit" value="Save changes" class="example_f"/>

                    <form>
                        <input type="button" value="Delete your account" class="example_f"/>
                    </form>
            </section>
        </div>

<?php include 'PHP/footer.php';?>