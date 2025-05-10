<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://megagroups.ir/Weather-App/Weather App/css/JS Weather App.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
</head>
    <body>
        <div class="container-fluid">
            <div class="row offset-sm-1">
                <section class="header col-md-4 col-sm-10 ">
                    <h1> دریافت اطلاعات هواشناسی </h1>
                    <br/><h4>Mega Groups (Ojlato) Weather App</h4>
                    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><p> می باشد <a href="https://megagroups.ir" style="color:black;">Mega Groups </a> تمامی حقوق متعلق به</p>
                </section>
                <section class="main col-md-7 col-sm-10">
                    <section class="inputs">
                        <input type="submit" value="جستجو" id="add">
                        <input type="text" dir="rtl" placeholder="نام شهر خود را وارد کنید..." id="cityInput">
                    </section>
                    <section class="display">
                        <div class="wrapper">
                            <h3 id="cityoutput">نام شهر</h3>
                            <p id="jav">وضعیت جوی</p>
                            <p id="temp">دما</p><!--<br>-->
                            <p id="wind">سرعت باد</p>
                            <img src="https://megagroups.ir/Weather-App/Weather App/img/1.jpg">
                        </div>
                    </section>
                </section>
            </div>
        </div>
        <script src="https://megagroups.ir/Weather-App/Weather App/js/JS Weather App.js"></script>
    </body>
</html>