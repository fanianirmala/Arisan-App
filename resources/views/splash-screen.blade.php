<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/splash.css">
    <title>Arisan App</title>
</head>
<body>
    <div class="splash">
         <img src="Assets/img/logo-Arumi.png" alt="Arumi Logo" class="fade-in">
         <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
    </div>
    <section>
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row rounded-5 shadow p-3 mb-5 bg-body-tertiary rounded">
                 <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background-image: url('Assets/img/login.png'); background-size: cover;"></div>
                 <div class="col-md-6 right-box">
                     <div class="row align-items-center">
                         <center>
                             <div class="header-text mb-4">
                                 <h2><b>Get Started</b></h2>
                                 <p>Already have account? <a href="#" style="text-decoration: none;">Sign In</a></p>
                             </div>
                         </center>
                     <form method="POST">
                         <div class="login-input">
                           <input type="text" name="username" required>
                           <span></span>
                           <label>Username</label>
                         </div>
                         <div class="login-input">
                           <input type="email" name="email" required>
                           <span></span>
                           <label>Email</label>
                         </div>
                         <div class="login-input">
                             <input type="password" name="password" required>
                             <span></span>
                             <label>Password</label>
                           </div>
                     </form>
                         <div class="input-group mb-3">
                             <button class="btn btn-lg w-100 fs-6" style="background-color: #03346E; color: #fff;">Sign Up</button>
                         </div>
                         <div class="divider">or</div>
                         <div class="button" style="text-align: center;">
                             <button class="btn shadow rounded-2"><img src="Assets/img/icon-google.png" style="width:40px;"></button>
                             <button class="btn shadow rounded-2"><img src="Assets/img/icon-facebook.png" style="width:40px;"></button>
                             <button class="btn shadow rounded-2"><img src="Assets/img/icon-twitter.png" style="width:40px;"></button>
                         </div>
                     </div>
                 </div>
           </div>
         </div>
    </section>
    <section></section>
    <section></section>
    <section></section>
    <section></section>

    <script>
        const splash = document.querySelector('.splash');

        document.addEventListener('DOMContentLoaded',(e)=>{
            setTimeout(()=>{
                splash.classList.add('display-none');
            }, 3000);
        })

        const header = document.querySelector('.header');

        window.onscroll = function(){
            var top = window.scrollY;
            console.log(top);
            if (top>= 50) {
                header.classList.add('active')
            }else{
                header.classList.remove('active');
            }
        }
    </script>
</body>
</html>
