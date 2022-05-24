<?php


$data = new UsersController();
// $users=$data->getAllUsers();
if(isset($_POST['Login'])){
  $users=$data->checkUser($_POST['email'],$_POST['Password']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Views/Assets/css/paricles.css">
    <link rel="stylesheet" href="Views/Assets/css/my-bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="Views/Assets/image/favion.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Login</title>
</head>
<body id="particles-js">
    
    <div class=" text-dark container" style="height:100vh; width:100vw; position:absolute; z-index:0; top:50%; left:50%; transform:translate(-50%,-50%); display:flex; justify-content:center; align-items:center;">
    <div class="col-12 col-lg-10 d-flex justify-content-center align-items-center" style="min-height:425px;">
          <div class ="bg-white formulaire col-12 col-sm-8 col-md-6 d-flex flex-column align-items-center px-5" style="height:500px;">
                        <h5 class="bienvenu text-muted mt-3">Bienvenu Sur</h5>
                        <a class="navbar-brand" href="index"><img src="Views/Assets/image/School_logoblue.png" class="mb-3 mt-2" alt="" style="width: 170px;"></a>
                        <p class="text-muted text-center">connectez-vous pour obtenir les mises à jour des moments sur les choses qui vous intéressent</p>
                        <form  class="px-3 align-self-start w-100" method="post" style="height:300px;">
                            <div class="errormsg"></div>
                            <div class="mb-3 emailD position-relative">
                                <label for="email" class="form-label text-muted px-2 mb-0" id="emailLabel" style="position:absolute;top:8px; left:40px;"></label>
                                <input type="text" class="form-control shadow-none text-muted ps-5" placeholder="Email" id="email" name="email" style="border:0;border-bottom: 3px solid #2480EA; border-radius:0;">
                                <i class="fa-regular fa-at fs-5 text-muted" style="position:absolute; top:7px; left:7px;"></i>
                                <span id="emailavailblty" class="text-danger"><?php if(isset($users)) echo $users;?></span>
                            </div>
                            <div class="mb-4 pass position-relative">
                                <label for="Password" class="form-label text-muted px-2 mb-0" id="passwordLabel" style="position:absolute;top:8px; left:40px;"></label>
                                <input type="password" class="form-control text-muted shadow-none ps-5" placeholder="Mot de passe" id="Password" name="Password" style="border:0;border-bottom: 3px solid #2480EA; border-radius:0;">
                                <i class="bi bi-shield-lock fs-5 text-muted fw-bolder" style="position:absolute; top:3px; left:7px;"></i>
                                <span id="checkpassword" class="text-danger"></span>
                            </div>
                            <div class="mb-4">
                                <input type="checkbox" class="" placeholder="cokies" id="cokies" name="cokies">
                                <label for="cokies" class="form-label text-muted px-2 mb-0" id="cokiesLabel">Souviens de moi</label>
                            </div>
                            <input type="submit" class="btn log w-100 mb-3 text-white" id="Login" name="Login" value="Login" style="background:#2480EA;">
                            <p class="text-center mt-md-2 mt-0"><a href="#" class="text-decoration-none fw-bold" style="color:#2480EA;">Mot de passe oublié?</a></p>
                        </form>
          </div>
          <div class="d-none position-relative d-md-flex col-md-6" style="height:500px;">
            <!-- <div class="h-100 w-100" style=""> -->
              <img src="Views/Assets/image/Groupe 29.png" alt="" class="w-100 h-100">
            <!-- </div> -->
            <div class ="d-flex flex-column align-items-center h-100 w-100 justify-content-center" style="position:absolute; z-index:1; left:0; top:0;">
              <img src="Views/Assets/image/School_logo.png" class="mb-3 mt-2" alt="" style="width: 240px;">
              <p class="text-white text-center" style="width:70%">Notre cerveau a le don de connecter des faits. Parfois ces connexions conduisent à des découvertes scientifiques, parfois à des oeuvres d'art, le plus souvent à des affabulations.</p>
            </div>
          </div>
    
    </div>
    
  </div>
  
  <script src="Script/particles.js"></script>
  <script src="Script/app.js"></script>
  <script>
      const email = document.querySelector("#email");
      const password = document.querySelector("#Password");
      const emailLabel = document.querySelector("#emailLabel");
      const passwordLabel = document.querySelector("#passwordLabel");
      const passwordDiv = document.querySelector(".pass");
      const emailDiv = document.querySelector(".emailD");
      const checkemail = document.querySelector("#emailavailblty");
      const submit = document.querySelector("#Login");
      const checkpassword = document.querySelector("#checkpassword");
      const Regexemail =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/;
      const Regexpassword =/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;
      const lowerCase =/(?=\S*[a-z])/;
      const upperCase =/(?=\S*[A-Z])/;
      const size =/(?=\S{8,})/;
      const number =/(?=\S*[0-9])/;
      
      
  
      // email.addEventListener("input",()=>{
      //   if(email.value==""){
      //     emailLabel.innerText="";
      //     email.placeholder="Email";
      //   }else{
      //     emailLabel.innerText="Email";
      //   }
      // })
      email.addEventListener("input",()=>{
        if(!Regexemail.test(email.value)){
          submit.setAttribute("disabled","disabled");
          email.setAttribute("style","border:solid 2px red;");
          checkemail.innerText="invalid address email (exemple@email.com)";
        }else{
          email.setAttribute("style","border:0; border-bottom: 3px solid #2480EA; border-radius:0;");
          checkemail.innerText="";
          submit.removeAttribute("disabled","disabled");
        }
      })

      password.addEventListener("input",()=>{
        
          
          if(!lowerCase.test(password.value)){
            submit.setAttribute("disabled","disabled");
            password.setAttribute("style","border:solid 2px red;");
            checkpassword.innerText= !lowerCase.test(password.value) ? "mot de passe doit contenire au moins 1 caractére miniscule" : "";
          }else if(!upperCase.test(password.value)){
            submit.setAttribute("disabled","disabled");
            password.setAttribute("style","border:solid 2px red;");
            checkpassword.innerText= !upperCase.test(password.value) ? "mot de passe doit contenire au moins 1 caractére Majiscule" : "";
          }
          else if(!number.test(password.value)){
            submit.setAttribute("disabled","disabled");
            password.setAttribute("style","border:solid 2px red;");
            checkpassword.innerText= !number.test(password.value) ? "mot de passe doit contenire au moins 1 nombre" : "";
          } 
          else if(!size.test(password.value)){
            submit.setAttribute("disabled","disabled");
            password.setAttribute("style","border:solid 2px red;");
            checkpassword.innerText= !size.test(password.value) ? "mot de passe doit contenire au moins 8 caractére" : "";
          }else{
            password.setAttribute("style","border:0; border-bottom: 3px solid #2480EA; border-radius:0;");
            checkpassword.innerText="";
            submit.removeAttribute("disabled","disabled");
          }
        
      })
      

      submit.addEventListener("click",(e)=>{
        checkemail.innerText = email.value == "" ? "champ vide !" : "";
        checkpassword.innerText = password.value == "" ? "champ vide !" : "";
        if(email.value == ""){
            e.preventDefault();
            email.setAttribute("style","border:solid 2px red;");
        }else{
          email.setAttribute("style","border:0; border-bottom: 3px solid #2480EA; border-radius:0;");
        }
        if(password.value == ""){
          e.preventDefault();
            password.setAttribute("style","border:solid 2px red;");
        }else{
          password.setAttribute("style","border:0; border-bottom: 3px solid #2480EA; border-radius:0;");
        }
      })
  </script>
</body>
</html>