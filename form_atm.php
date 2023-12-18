<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php 
    class Nomor {
        public $nomor;

        function __construct($nomor){
            $this->nomor = $nomor;
        }
        
        public function nomer(){
            echo $this->nomor;
        }
    }

    class Customer {
        public $customer;

        function __construct($customer){
            $this->cust = $customer;
        }

        public function customer(){
            echo $this->cust;
        }
    }

    class Saldo {
        protected $saldo;

        function __construct($saldo){
            $this->saldo = $saldo;
        }

        public function saldo(){
            echo $this->saldo;
        }
    }
?>
<body>
    <div class="registration-form">
        <h2 class="text-center mb-4">Form Registrasi Bank</h2>

        <form method="POST" action="hasil.php">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-credit-card" style="font-size: 16px;"></i>
                        </div>
                    </div>
                    <input type="password" class="form-control item" id="username" placeholder="No Rekening" name="nomer">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user" style="font-size: 16px;"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control item" id="password" placeholder="Nama Customer" name="customer">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-money" style="font-size: 16px;"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control item" id="email" placeholder="Saldo Awal" name="saldo">
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block create-account" value="Submit">
            </div>
        </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>

    <style>
    body{
        background-color: transparent;
    }

    .registration-form{
        padding: 50px 0;
    }

    .registration-form form{
        background-color: #fff;
        max-width: 600px;
        margin: auto;
        padding: 50px 70px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
    }

    .registration-form .item{
        border-radius: 20px;
        margin-bottom: 25px;
        padding: 10px 20px;
    }

    .registration-form .create-account{
        border-radius: 30px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        background-color: #001f3f; /* Warna biru tua */
        border: none;
        color: white;
        margin-top: 20px;
    }

    @media (max-width: 576px) {
        .registration-form form{
            padding: 50px 20px;
        }
    }
    </style>
</body>
</html>
