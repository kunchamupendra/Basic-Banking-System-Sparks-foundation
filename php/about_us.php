<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Demo.css">

    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    min-height: 100vh;
    
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}
.about{
    background: url('https://2050ap.com/wp-content/uploads/2018/01/07-1100x619.jpg') no-repeat left;
    background-size: 55%;
    background-color: white;
    overflow: hidden;
    padding: 100px 0;
}
.inner-section{
    width: 55%;
    float: right;
    background-color: orange;
    padding: 140px;
    box-shadow: 10px 10px 8px rgba(0,0,0,0.3);
}
.inner-section h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
.text{
    font-size: 16px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}


@media screen and (max-width:1200px){
    .inner-section{
        padding: 80px;
    }
}
@media screen and (max-width:1000px){
    .about{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-section{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about{
        padding: 0;
    }
    .inner-section{
        padding: 60px;
    }
   
}
    </style>
</head>

<body>
<?php 
include 'navbar.php';
?>
    <div class="about">
        <div class="inner-section">
            <h1>About Us</h1>
            <p class="text">
                Sparks bank is a leading private sector bank. sparks bank was originally promoted in 2021 by spark limited. sparks bank offers a wide range of banking products and financial services to corporate and retail customers through a variety of delivery channels and through its group companies. 
            </p>
            
        </div>
    </div>

<?php 
include ('footer.html');
?>
</body>
</html>