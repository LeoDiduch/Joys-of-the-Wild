<div class="container">
       <section id="sign-up-form-container">
           <form id="sign-up-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                   <img src="img/Wild-Logo.png" alt="Wild Code School logo">
               <label for="username">Choose your username :</label>
               <input type="text" name="userName" id="username" maxlength="30" placeholder="Enter your username" value="<?php if(isset($userName))echo $userName; ?>">
               <p class="errorForm"><?= $formErrors["errUserName"] ?></p>
               <label for="email">Your email :</label>
               <input type="text" name="userEmail" id="email" placeholder="Enter your email adress" value="<?php if(isset($userEmail)) echo $userEmail; ?>">
               <p class="errorForm"><?php if(isset($formErrors["errUserEmail"])) echo $formErrors["errUserEmail"];
                    elseif(isset($formErrors["errEmailForm"])) echo $formErrors["errEmailForm"];?></p>
               <label for="password">Choose your password :</label>
               <input type="password" name="userPassword" maxlength="16" id="password" placeholder="Enter your password" value="<?php if(isset($userPassword)) echo $userPassword; ?>">
               <p class="errorForm"><?= $formErrors["errUserPassword"] ?></p>
               <label for="password2">Retype your password :</label>
               <input type="password" name="userPasswordConfirm" id="password2" maxlength="16" placeholder="Enter your password again" value="<?php if(isset($userPasswordConfirm)) echo $userPasswordConfirm; ?>">
               <p class="errorForm"><?= $formErrors["errUserPasswordConfirm"]?></p>
               <button id="sign-up" class="example_f"><span>Sign up !</span></button>
           </form>
       </section>
   </div>