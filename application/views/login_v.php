<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<h3 class="text-center">Giriş</h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 bg-light">
            <form action="<?php echo base_url("giris-yap"); ?>" method="post">
                <div class="form-group">
                    <label>E-posta Adresiniz</label>
                    <input type="email" class="form-control" name="eposta" placeholder="E-posta">
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <input type="password" class="form-control" name="sifre" placeholder="Şifre">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Giriş</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>