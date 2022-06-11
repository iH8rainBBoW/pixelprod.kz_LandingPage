<?php
    ob_start(); //Turn on output buffering

    if (!isset($_SESSION))  //Start session if it isn't exist
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=0.85, shrink-to-fit=no">
		<title>PixelProd</title>
		<link rel="icon" href="assets/images/icon.png" type="image/x-icon">
		<meta name="description" content="">
		<meta name="keywords" content="">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/a4ea5563f8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/helpers.css">
        <link rel="stylesheet" href="assets/css/style.css">
		<link rel="icon" href="https://pixelprod.kz/favicon.ico" type="image/x-icon">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-2B8BNSJZ7M"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'G-2B8BNSJZ7M');
		</script>
		<!-- Google Analytics -->
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
   		(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   		m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   		ym(89129715, "init", {
        	clickmap:true,
        	trackLinks:true,
        	accurateTrackBounce:true
   		});
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/89129715" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</head>
	<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">
        <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light znav" id="pb-navbar">
            <div class="container">
                <a class="navbar-brand" href="#section-home"><img src="assets/images/logo.PNG" width="150" height="50" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="ion-navicon"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="probootstrap-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#section-home">Главная</a></li>
                        <li class="nav-item"><a class="nav-link" href="#section-about">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="#section-attorneys">Спектр услуг</a></li>
                        <li class="nav-item"><a class="nav-link" href="#section-team">Наша команда</a></li>
                        <li class="nav-item"><a class="nav-link" href="#section-galery">Галерея</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->

        <!-- START section-home section -->   
        <section class="pb_cover_v1 text-left cover-bg-black cover-bg-opacity-4 fullscreen-bg" id="section-home" style="background-image: url(assets/video/fon.jpg);">
            <div class="container  txt" id="wrapper">
                <div class="row align-items-center justify-content-end ">
                    <div class="headder ">
                        <h2 class="heading mb-3 head">Welcome to Pixel production</h2>
                        <div class="sub-heading bot"><p class="mb-5">Продакшн, который  позволит вам реализовать абсолютно любые идеи</p>
                            <p><a href="#section-contact" role="button" class="btn pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2">Связаться с нами</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->

        <!-- START company section -->
        <section class="pb_section daverie" ">
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                    <h2 class="mt-0 heading-border-top light font-weight-normal text-white">Компании которые нам доверяют</h2>
                </div>
            </div>
            <div class="multiple-items pb_slide_v1" >
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/JKS.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/UBID.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/dizzy.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/vostok.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/UCA.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/2any1.png" alt="" class="img-fluid">
                    </a>
                </div>
				<div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/catec.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/yandex.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/activ.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/borjomi.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/qzq.png" alt="" class="img-fluid">
                    </a>
                </div>
                <div>
                    <a href="#" class="link-block disabled">
                        <img src="assets/images/AV.png" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </section>
        <!-- END section -->
        
        <!-- START about section -->
        <section class="pb_section pb_section_v1" data-section="about" id="section-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pr-md-5 pr-sm-0">
                        <h2 class="mt-0 heading-border-top mb-3 font-weight-normal">О нас</h2>
                        <p>Разновидность наших услуг поможет вам, сделать вашу рекламу качественной и креативной. У нас вы увидите все этапы реализации, начиная от раскадровок и сценария – заканчивая цветокоррекцией готового продукта. 
                            Наша команда подбирает индивидуальный подход каждому клиенту, учитывая стиль, качество и креатив.
                        </p> 
                    </div>
                    <div class="col-lg-7">
                        <div class="images">
                            <img class="img1 img-fluid" src="assets/images/compp.PNG" >
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <!-- END section -->
        
        <!-- START services section -->
        <section class="pb_section bg-light bg-image with-overlay uslug" data-section="attorneys" id="section-attorneys" style="background-image: url(assets/images/1900x1200_img_2.jpg)">
            <div class="container">
                <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                        <h2 class="mt-0 heading-border-top light font-weight-normal text-white">Спектр услуг</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/animation.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl">Анимация</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                        <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/VFX.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl">VFX</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/3D.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mt-0 mb-9 usl" style="font-size: 16px;">3D (визуальные эффекты)</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/video.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl" style="font-size: 22px;">Видеосьемка</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/camera.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl">Фотосьемка</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/drone.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl">Аэросьемка</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/room.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl" style="font-size: 22px;">Создание Интерьера</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/kadr.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl">Раскадровка</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/script.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl">Сценарий</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/graph.png" alt="Card image cap">
                            <div class="card-body" style="height: 88px;">
                                <h4 class="card-title mt-0 mb-9 usl" style="font-size: 22px;">Графический дизайн</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->

        <!-- START captain section -->
        <section class="pb_section pb_testimonial_v1 mne" data-section="testimonials" id="section-testimonials">
            <div class="container">
                <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                        <h2 class="mt-0 heading-border-top font-weight-normal">Идея зарождения</h2>
                    </div>
                </div>
            <div class="row justify-content-md-center">
                <div class="col-md-10 col-sm-12 mb-5">
                    <div>
                        <div class="media">
                            <div>
                                <img class="d-flex img-fluid rounded-circle mb-sm-5" src="assets/images/Tamer.CR2" alt="Generic placeholder image">
                                <h5 style="text-align: center;">Бейсенов Тамерлан</h5>
                            </div>
                            <div class="media-body pl-md-5 pl-sm-0">
                                <blockquote>
                                    <p class="pb_author"><citeclass="text-uppercase">Идея создания продакшна зародилась очень давно и чем больше я крутился в медиа сфере (более 5 лет), тем больше понимал все тонкости. Продакшн был создан в первую очередь не заработать деньги на клиентах, а сделать реально качественный продукт, который сможет помочь людям достичь желаемого. Поэтому наша основная задача это помочь вам  воплотить задуманное в реальность. Буду рад заглянуть в вашу фантазию. С Уважением Тамерлан.  </cite></p>
                                </blockquote>
                            </div>
                        </div> 
                    </div>         
                </div>
            </div>
        </section>
        <!-- END section -->
        
        <!-- START feedback section -->
        <section class="pb_section bg-light bg-image with-overlay uslug contacts" data-section="attorneys" id="section-contact" style="background-image: url(assets/images/1900x1200_img_2.jpg)">
            <div class="container" id="cont">
                <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                        <h2 class="mt-0 heading-border-top light font-weight-normal text-white"></h2>
                    </div>
                </div>
                <div class="row" id="row">
                    <div class="col-md" id="col">
                        <form class="con" style="float: left; margin-left:15%">
                            <h2>Свяжитесь с нами</h2>
                            <h5 style="margin-top: 10%;">Offline</h5>
                            <h6>Сатпаева 30/1 2 этаж</h6>
                            <h5 style="margin-top: 10%;">Online</h5>
							<p><h6>Тамерлан +7(777)817-68-91</h6></p>
                            <h6>pixelproduction@mail.ru</h6>
                        </form>
                        <form id="svyaz" method="post" class="form-svyaz" action="sendMail.php" method="POST">
                            <input class="input-field" type="text" name="name" placeholder="Ваше имя"/>
                            <input class="input-field" type="text" name="email" placeholder="Почта"/>
                            <input class="input-field" type="text" id = "phone" name="phone" placeholder="-7(777)-777-7777"/>
                            <input class="input-field" type="text" name="text" placeholder="Введите ваш текст"/>
                            <input type="button" class="sendmail btn smoothscroll pb_outline-light btn-xl pb_font-13 p-4 rounded-0 pb_letter-spacing-2 btm1" value="Отправить" onclick="Validation()"/>
                        </form>
                    </div> 
                </div>
            </div>
        </section>
        <!-- END section -->

        <!-- START team section -->   
        <section class="pb_section bg-light bg-image with-overlay uslug" data-section="attorneys" id="section-team" style="background-image: url(assets/images/1900x1200_img_2.jpg)">
            <div class="container">
                <div class="row justify-content-md-center text-center mb-5">
                    <div class="col-lg-7">
                        <h2 class="mt-0 heading-border-top light font-weight-normal text-white">Команда</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/Tamer1.jfif" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title mt-0 mb-9 usl" style="color: #ff2a5f;">Тамерлан</h4>
                                <p style="text-align: center; color:white">Генеральный продюсер, VFX-CGI художник</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/zhania.jpg" alt="Card image cap">
                            <div class="card-body" style="height: 152px;">
                                <h4 class="card-title mt-0 mb-9 usl" style="color: #ff2a5f;">Жания</h4>
                                <p style="text-align: center; color:white">2D моушн дизайнер</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/vlad.jpg" alt="Card image cap">
                            <div class="card-body" style="height: 152px;">
                                <h4 class="card-title mt-0 mb-9 usl" style="color: #ff2a5f;">Влад</h4>
                                <p style="text-align: center; color:white">Основной оператор, монтажёр</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row1">
                    <div class="col-md col1">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/alim.jpg" alt="Card image cap">
                            <div class="card-body" style="height: 152px;">
                            <h4 class="card-title mt-0 mb-9 usl" style="color: #ff2a5f;">Алим </h4>
                            <p style="text-align: center; color:white">Второй оператор, бэкстейдж</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col1">
                        <div class="card text-center pb_card_v1 mb-4">
                            <img class="card-img-top rounded-circle w-50 mx-auto" src="assets/images/sitora.jpg" alt="Card image cap">
                            <div class="card-body" style="height: 152px;">
                            <h4 class="card-title mt-0 mb-9 usl" style="color: #ff2a5f;">Ситора</h4>
                            <p style="text-align: center; color:white">Линейный продюсер, сценарист</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->

        <!-- START galery section -->
        <section class="pb_section gal" id="section-galery" >
            <div class="row justify-content-md-center text-center mb-5">
                <div class="col-lg-7">
                <h2 class="mt-0 heading-border-top light font-weight-normal text-white">Галерея</h2>
                </div>
            </div>
            <div class="multiple-items1 pb_slide_v1">
                <div>
                    <div class="link-block">
                        <img src="assets/images/galery/camera.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="link-block">
                        <img src="assets/images/galery/drone.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="link-block">
                        <img src="assets/images/galery/drone1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div>
                    <div class="link-block">
                        <img src="assets/images/galery/photo.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->       

        <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#FDA04F"/></svg></div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.waypoints.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/main.js"></script>
		<script type="text/javascript" charset="utf-8" src="assets/js/jquery.tubular.1.0.js"></script> <!--connecting jQuery plugin Tubular-->
        <script src="assets/js/index.js"></script>
	</body>
</html>
<script language="JavaScript">
    <?php 
        if (isset($_SESSION['send']))
        {
            if ($_SESSION['send'] == true)
            {
                ?>
                alert("Ваша заявка успешно отправлена!");
                <?php
            }
            else
            {
                ?>
                alert("Пожалуйста повторите отправку заявки!");
                <?php
            }

            session_unset();
        }
    ?>

    document.getElementById('phone').addEventListener('input', function (e)
        {
            var x = e.target.value.replace(/\D/g, '').match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
            e.target.value =  !x[2] ? x[1] : + x[1] + ' (' + x[2] + (x[3] ? ') ' + x[3] + (x[4] ? '-' + x[4] + (x[5] ? '-' + x[5] : '') : '') : '');
        }
    );

    function Validation()
    {
        userName = document.getElementsByName("name")[0].value;
        email = document.getElementsByName("email")[0].value;
        phone = document.getElementsByName("phone")[0].value;
        text = document.getElementsByName("text")[0].value;

        if (userName != "" && email != "" && phone != "" && text != "")
        {
            if (userName.match(/\D/) != null)
            {
                if (email.indexOf('@') > 0 && email[email.indexOf('@') + 1] != '.' && email.indexOf('.', email.indexOf('@') + 1) != -1 && email.length != email.indexOf('.', email.indexOf('@') + 1) + 1 && email.split('@').length == 2)
                {
                    if (phone.length == 17)
                    {
                        document.getElementById("svyaz").submit();
                    }
                    else
                    {
                        alert("Заполните номер телефона");
                    }
                }
                else
                {
                    alert("Неверный формат почты");
                }
            }
            else
            {
            alert("Неверный формат имени");
            }
        }
        else
        {
            alert("Заполните поля");
        }
    }
</script>

<?php
    ob_end_flush(); //Turn off output buffering
?>