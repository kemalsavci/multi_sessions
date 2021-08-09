<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#"><?php echo $user->full_name; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="dropdown navbar-nav ml-auto" class="navbar-nav ml-auto">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            İşlemler
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo base_url("cikis/" . md5($user->email)) ;?>">Çıkış</a>
            <a target="_blank" class="dropdown-item" href="<?php echo base_url("giris"); ?>">Farklı bir hesap ile oturum aç</a>
        </div>
    </div>
</nav><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 bg-light">
            <h3>Eklediğiniz Ürünler</h3>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <th>#id</th>
                    <th>Ürün Adı</th>
                </thead>
                <tbody>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.bundle.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.6.0.min.js")?>"></script>
</body>
</html>