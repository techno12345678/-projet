
<?php require('signupaction.php'); ?>
<?php    require('loginaction.php'); ?>


<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>



        <div class="content">
            
             <h1>Espace <br><span> d'inscreption 
                </span><br>Vacataires</h1> </span>
           
               

                <button class="cn"><a href="#">JOIN US</a></button>

                <div class="wrapper">
                    <div class="title-text">
                       <div class="title login">
                          Login Form
                       </div>
                       <div class="title signup">
                          Signup Form
                       </div>
                    </div>
                    <div class="form-container">
                       <div class="slide-controls">
                          <input type="radio" name="slide" id="login" checked>
                          <input type="radio" name="slide" id="signup">
                          <label for="login" class="slide login">Login</label>
                          <label for="signup" class="slide signup">Sign up</label>
                          <div class="slider-tab"></div>
                       </div>
                       <div class="form-inner">
                       <form  class="login"  action = ""method="POST"  >
                      
                       <?php if(isset($errorMsg)) : ?>
        <div class="message" >
            <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>      
                       
                       <div class="field">
                                <input type="email" name="email" placeholder="you@exemple" required>
                             </div>
                            
                             <div class="field">
                                <input type="password" name="password"placeholder="Password" required>
                             </div>
                             
                             <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" name="validate" value="Login">
                             </div>
                             <div class="signup-link">
                                Not a member? <a href="">Sign up now</a>
                             </div>
                          </form>
                          <form   class="signup"action = "signupaction.php "method ="POST" >
                          <?php if(isset($errorMsg)) : ?>
        <div class="message" >
            <?php echo $errorMsg; ?>
        </div>
    <?php endif; ?>       		
                             <div class="field"> 
                                <input type="text"class="form-control" name="name" placeholder="Name" ><br>
                             </div>
                             <div class="field">
                                <input type="email"class="form-control"
                                           name="email"  placeholder="you@exemple.com" required>
                             </div>
                             <div class="field">
                                <input type="password"class="form-control"
                                    name="password" placeholder="Password" required>
                             </div>
                             <div class="field btn">
                                <div class="btn-layer"></div>
                                <input type="submit" name="validate" value="Sign up">
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
          loginForm.style.marginLeft = "-50%";
          loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
          loginForm.style.marginLeft = "0%";
          loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
          signupBtn.click();
          return false;
        });
     </script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
