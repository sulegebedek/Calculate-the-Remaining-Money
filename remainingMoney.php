<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Para Üstü Hesaplama</title>
    <style>
    *{
        box-sizing: border-box;
    }
    body{
        margin: 0;
        padding: 0;
        background-color: #4b4949;
    
    }
    h1{
        color: #333333;
    }
    #panel{
        border: 1px solid #4b4949;
        width: 500px;
        height: auto;
        margin: auto;
        margin-top: 110px;
        background-color:whitesmoke;
        border-radius: 10px;
        padding: 25px;
    }
    #panel h1{
        text-align: center;
    }
    input{
        width: 50%;
        height: 30px;
        display: block;
        margin: auto;
        border: none;
        background-color: whitesmoke;
        border-bottom: 2px solid #4b4949;
        padding: 0 5px;
    }
    input:focus{
        outline: 0;
        width: 60%;
        transition: 1s;
        border: 2px solid #4b4949;
        border-radius: 5px;
    }
    button{
        margin: auto;
        width: 120px;
        height: 40px;
        display: block;
        margin-top: 15px;
        background-color: #4b4949;
        border: none;
        border-radius: 5px;
        color: white;
        font-size: 17px;
    }
    button:hover{
        background-color: rgb(182, 181, 181);
        color: #3b3a3a;
        transition: 1s;
        border: 1px solid #3b3a3a;
    
    }
    #panel p{
        color:#333333;
        font-size: 17px;
        text-align: center;
    }
    #panel a{
        color: #333333;
        text-decoration: none;
    }
    
    </style>

	</head>
	<body>
   
    <div id="panel">
        <h1>Para Üstü Hesaplama</h1>
        <form method="post">
            <input type="text" name="para" placeholder="Para üstünü giriniz (krs cinsinden)"><br><br>
            <button>HESAPLA</button><br><br>
        </form>

  <?php
    $para = $_POST['para'];
    $arrParaBirimleri = array(1, 5, 10, 25, 50, 100, 500);
    $arrParaTurkceKarsilik = array(" 1 Kuruş", " 5 Kuruş", " 10 Kuruş", " 25 Kuruş", " 50 Kuruş", " 1 TL");

    for ($i = 5; $i >= 0; $i--) {
        $sayac = 0;
        while ($para >= $arrParaBirimleri[$i]) {
            $sayac++;
            $para = $para - $arrParaBirimleri[$i];
        }
        if ($sayac > 0) {
            echo $sayac . " tane" . $arrParaTurkceKarsilik[$i];
            echo "<br>";
        }
    }
    ?></div>
	</body>
</html>