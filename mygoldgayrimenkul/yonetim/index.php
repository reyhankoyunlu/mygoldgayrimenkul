
<?php



if ($_POST) {
    $kullanici = $_POST["kullanici"];
    $parola = $_POST["sifre"];
    
   
    if ($kullanici == "admin" && $parola == "123456") {
        
       
        echo "<script>  window.location.href='anasayfa.php';</script>";
        
    }else {
        echo "<script> alert ('HATALI KULLANICI BİLGİSİ!'); window.location.href='index.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
    <meta name="google-site-verification" content="Q5F3fwZNK83xOyNS49QMVuYKWDPHPG0ncwnKk0KafCM" />
    <meta name="robots" content="index,follow"/>
    <meta name="description" content="MY GOLD Emlak Aydın'ın altın yüzü "/>
    <link rel="stylesheet" href="../style.css">
    <!--ANİMATE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--ANİMATE-->
    <!--favicon-->
    <link rel="shortcut icon" href="../favicon.ico">
    <!--favicon-->
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--BOOSTRAP-->
    <!--MDB-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"rel="stylesheet"/>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <!--MDB-->

</head>
<body>
 
    <div style="position: absolute ;
   top: 50%; left: 50%;
    transform: translate(-50%,-50%);">
    <h3 style="color: #f0a500; text-align: center;">MY GOLD GAYRİMENKUL</h3>
    <h5 style="text-align: center;">Yönetici Paneline Hoşgediniz</h5>
<form action="" method="POST">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input name="kullanici" type="text" id="form1Example1" class="form-control" />
    <label class="form-label" for="form1Example1">Kullanıcı Adı</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input name="sifre" type="password" id="form1Example2" class="form-control" />
    <label class="form-label" for="form1Example2">Şifre</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block">Giriş Yap</button>
</form>
</div>
</body>
</html>