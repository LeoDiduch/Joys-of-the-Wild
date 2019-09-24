<?php include 'header.php';?>

<?php include 'menus.php';?>

        <div class="container">
            <section id="user_profile">
                <div id="profile_header">
                    <img src="img/Wild-Logo.png" alt="Wild Code School logo">
                    <h2>Team Wilders 1</h2>
                </div>

                <h3>Profile</h3>
                <form method="post" action="update_user_profile.php">

                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" maxlength="30" placeholder="Team Wilders 1" />

                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" placeholder="thebestwildersever@wcs.com" />

                    <label for="avatar">Avatar :</label>
                    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" class="example_f">

                    <label for="biography">Biography :</label>
                    <textarea name="biography"
                        id="biography" maxlength="500" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore non ut corporis, vitae harum quos fuga, magnam assumenda pariatur perspiciatis ipsa eaque impedit eos odio saepe quam ab eius? Minima?"></textarea>

                    <input type="submit" value="Save changes" class="example_f"/>

                </form>


                <h3>Change your password</h3>
                <form method="post" action="edit-profile.php">

                    <label for="current_password">Current Password :</label>
                    <input type="password" name="current_password" id="current_password" maxlength="16" placeholder="Enter your current password"/>

                    <label for="new_password">New Password :</label>
                    <input type="password" name="new_password" id="new_password" maxlength="16" placeholder="Enter your new password"/>

                    <label for="new_password_verification">Retype New Password :</label>
                    <input type="password" id="new_password_verification" name="new_password_verification" maxlength="16" placeholder="Enter your new password again"/>

                    <input type="submit" value="Save changes" class="example_f"/>
                </form>

                <form>
                    <input type="button" value="Delete your account" class="example_f"/>
                </form>
            </section>
        </div>

<?php include 'footer.php';?>