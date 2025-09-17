<?php
class Layouts {
    public function header($conf) {
?>
<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en" data-bs-theme="dark">
=======
<html lang="en" data-bs-theme="auto">
>>>>>>> 273789ef8ef672d8474e96470bc8ec4fb23ee044
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
<<<<<<< HEAD
      <meta name="author" content="<?php echo $conf['site_name']; ?>">
      <title><?php echo $conf['site_name']; ?> - Modern Web Experience</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <meta name="theme-color" content="#1a1a2e">
      <style>
         :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --dark-gradient: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            --card-shadow: 0 10px 40px rgba(0,0,0,0.1);
            --hover-transform: translateY(-5px);
         }
         
         body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-gradient);
            min-height: 100vh;
            color: #ffffff;
         }
         
         .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
         }
         
         .hover-lift {
            transition: all 0.3s ease;
         }
         
         .hover-lift:hover {
            transform: var(--hover-transform);
            box-shadow: var(--card-shadow);
         }
         
         .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
         }
         
         .modern-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.3s ease;
         }
         
         .modern-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            border-color: rgba(255, 255, 255, 0.3);
         }
         
         .btn-modern {
            background: var(--primary-gradient);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
         }
         
         .btn-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
         }
         
         .floating-navbar {
            background: rgba(26, 26, 46, 0.9);
            backdrop-filter: blur(20px);
            border-radius: 15px;
            margin: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
         }
         
         @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
         }
         
         .floating-element {
            animation: float 3s ease-in-out infinite;
         }
      </style>
   </head>
<?php
    }
    
    public function navbar($conf) {
?>
   <body>
      <main class="min-vh-100">
         <div class="container-fluid px-4">
            <nav class="floating-navbar navbar navbar-expand-lg navbar-dark" aria-label="Modern Navigation">
               <div class="container-fluid">
                  <a class="navbar-brand fw-bold gradient-text fs-3" href="#"><i class="fas fa-rocket me-2"></i><?php echo $conf['site_name'] ?? 'ModernSite'; ?></a>
                  <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#modernNav" aria-controls="modernNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="modernNav">
                     <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-2">
                           <a class="nav-link fw-medium hover-lift" href="./"><i class="fas fa-home me-2"></i>Home</a>
                        </li>
                        <li class="nav-item mx-2">
                           <a class="nav-link fw-medium hover-lift" href="signup.php"><i class="fas fa-user-plus me-2"></i>Join Us</a>
                        </li>
                        <li class="nav-item mx-2">
                           <a class="nav-link fw-medium hover-lift" href="signin.php"><i class="fas fa-sign-in-alt me-2"></i>Sign In</a>
                        </li>
                     </ul>
                     <form role="search" class="d-flex">
                        <div class="input-group glass-effect rounded-pill">
                           <input class="form-control border-0 bg-transparent text-white" type="search" placeholder="Discover..." aria-label="Search">
                           <button class="btn btn-outline-light border-0" type="submit">
                              <i class="fas fa-search"></i>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </nav>
=======
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Astro v5.13.2">
      <title>Jumbotron example · Bootstrap v5.3</title>
      <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <meta name="theme-color" content="#712cf9">
   </head>
<?php
    }
    public function navbar($conf) {
?>
   <body>

      <main>
         <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
            <div class="container-fluid">
               <a class="navbar-brand" href="#">Expand at lg</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
               <div class="collapse navbar-collapse" id="navbarsExample05">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item"> <a class="nav-link active" aria-current="page" href="./">Home</a> </li>
                     <li class="nav-item"> <a class="nav-link" href="signup.php">Sign Up</a> </li>
                     <li class="nav-item"> <a class="nav-link" href="signin.php">Sign In</a> </li>

                  </ul>
                  <form role="search"> <input class="form-control" type="search" placeholder="Search" aria-label="Search"> </form>
               </div>
            </div>
         </nav>
            </header>
>>>>>>> 273789ef8ef672d8474e96470bc8ec4fb23ee044
<?php
    }

    public function banner($conf) {
<<<<<<< HEAD
?>
            <div class="text-center py-5 my-5">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-8">
                        <div class="floating-element">
                           <i class="fas fa-stars fs-1 gradient-text mb-4 d-block"></i>
                           <h1 class="display-3 fw-bold mb-4">Welcome to the <span class="gradient-text">Future</span></h1>
=======
        ?>
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
               <div class="container-fluid py-5">
                  <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                  <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
                  <button class="btn btn-primary btn-lg" type="button">Example button</button> 
               </div>
            </div>
        <?php
    }
    public function content($conf) {
        ?>
                <div class="row align-items-md-stretch">
               <div class="col-md-6">
                  <div class="h-100 p-5 text-bg-dark rounded-3">
                     <h2>Change the background</h2>
                     <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
                     <button class="btn btn-outline-light" type="button">Example button</button> 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                     <h2>Add borders</h2>
                     <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                     <button class="btn btn-outline-secondary" type="button">Example button</button> 
                  </div>
               </div>
            </div>
        <?php

    }
    public function form_content($conf, $ObjForm) {
        ?>
                <div class="row align-items-md-stretch">
               <div class="col-md-6">
                  <div class="h-100 p-5 text-bg-light rounded-3">
<?php if($_SERVER['PHP_SELF'] == '/tol/signup.php') { $ObjForm->signup(); }else{ $ObjForm->signin();} ?>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                     <h2>Add borders</h2>
                     <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
                     <button class="btn btn-outline-secondary" type="button">Example button</button> 
                  </div>
               </div>
            </div>
        <?php

    }
    public function footer($conf) {
?>

            <footer class="pt-3 mt-4 text-body-secondary border-top">
            <p>Copyrights &copy; <?php echo date("Y") . " {$conf['site_name']}. All rights reserved.</p>"; ?>
            </footer>
         </div>
      </main>
      <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" class="astro-vvvwv3sm"></script>
   </body>
</html>

<?php
    }
}
>>>>>>> 273789ef8ef672d8474e96470bc8ec4fb23ee044
