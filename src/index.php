<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Vízvezetékszerelő'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 containerP0">
                    <div class="header__box">
                        <div class="header__left">
                            <div class="header__imgWrapper">
                                <img class="header__img" src="./assets/img/mainFon.jpg" alt="mainFon">
                            </div>
                            <h1 class="header__title"><?= $title ?></h1>
                            <p class="header__txt"><strong>Vízvezeték-szerelés</strong>, javítás és beszerelés 0-24  órában, gyorsan és egyszerűen! <strong> Mindenféle  szanitáris probléma</strong>, beleértve a <strong>dugulásokat</strong>  és fűtési gondokat. Hívjon minket, és 30-40  percen belül a helyszínen vagyunk!
                            </p>
                        </div>
                        <div class="header__right">
                            <ul class="header__ul">
                                <li><strong>Azonnali időpont lehetséges</strong></li>
                                <li><strong>20 - 40 perc múlva a helyszínen</strong></li>
                                <li><strong>Közeli vízvezeték-szerelő</strong></li>
                            </ul>
                            <div class="header__imgWrapper2">
                                <img class="header__img2" src="./assets/img/number.png" alt="number">
                            </div>
                            <div class="header__btnWrp">
                                <a class="header__btn" href="tel:111222333"><span>111222333</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="pipeLeakageRemoval">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="pipeLeakageRemoval__box">
                            <div class="pipeLeakageRemoval__content">
                                <div class="pipeLeakageRemoval__imgWrp">
                                    <img class="pipeLeakageRemoval__img" src="./assets/img/fon2.jpg" alt="fon2">
                                </div>
                                <h2 class="pipeLeakageRemoval__title"><span>Gáz</span> <span>Víz</span> <span>Fűtés</span></h2>
                                <p class="pipeLeakageRemoval__txt">25 éves tapasztalattal a <strong> gáz-, víz- és </strong> fűtésinstallálás  terén megbízható, kiváló minőségű szolgáltatásokat  és gyors javításokat kínálunk a lakóhelyéhez közel.</p>
                            </div>
                            <div class="pipeLeakageRemoval__content">
                                <div class="pipeLeakageRemoval__imgWrp">
                                    <img class="pipeLeakageRemoval__img" src="./assets/img/fon3.jpg" alt="fon3">
                                </div>
                                <h2 class="pipeLeakageRemoval__title">Csőszivárgás Eltávolítása</h2>
                                <p class="pipeLeakageRemoval__txt"><strong> Szakértőink </strong> gyorsan és hatékonyan lokalizálják és  megszüntetik a csőszivárgásokat, hogy megelőzzék  otthona károsodását. 30 percen belül a helyszínen  vagyunk, hogy azonnali megoldást kínáljunk!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="antiClogging">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="antiClogging__box">
                           <div class="antiClogging__imgWrp">
                            <img class="antiClogging__img" src="./assets/img/fon4.png" alt="fon4">
                           </div>
                           <div class="antiClogging__content">
                            <h2 class="antiClogging__title">Duguláselhárítás <?= $city ?></h2>
                            <p class="antiClogging__txt">Professzionális <strong>duguláselhárító</strong>  szolgáltatásaink garantálják a lefolyók  zökkenőmentes működését. Hívjon minket  bizalommal, és mi gyorsan és hatékonyan  orvosoljuk a dugulásokat!</p>
                            <div class="antiClogging__btnWrp">
                                <a class="antiClogging__btn" href="tel:111222333"><span>111222333</span></a>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="time">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="time__box">
                            <div class="time__imgWrp">
                                <img class="time__img" src="./assets/img/fon5.jpg" alt="fon5">
                            </div>
                            <div class="time__content">
                                <h2 class="time__title">Gázkazánok Szervizelése</h2>
                                <p class="time__txt">Formálisan és szakszerűen végezzük a  gázkazánok karbantartását és javítását. Kérje  szakértőink segítségét a gázkazánja optimális  működése érdekében.</p>
                                <div class="time__btn">
                                    <a class="time__message" href="#anchorForm"><span>Email küldése</span></a>
                                    <img class="time__icon" src="./assets/img/24h.jpg" alt="24h">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="troubleshootingHeatingProblems">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="troubleshootingHeatingProblems__box">
                            <div class="troubleshootingHeatingProblems__content">
                                <h2 class="troubleshootingHeatingProblems__title">Fűtési Problémák Elhárítása</h2>
                                <p class="troubleshootingHeatingProblems__txt">A fűtési rendszerek meghibásodása komoly  kellemetlenséget okozhat, különösen a hideg  hónapokban. Cégünk gyors és megbízható  megoldásokat kínál, hogy otthona mindig  kellemesen meleg legyen. Szakértőink azonnal  kiszállnak, és alapos diagnózist végeznek, hogy  a problémát mielőbb elhárítsák. Bízza ránk  fűtési gondjait, és élvezze a kellemes  hőmérsékletet az otthonában!</p>
                            </div>
                            <div class="troubleshootingHeatingProblems__content">
                                <h2 class="troubleshootingHeatingProblems__title">Miért Válasszon Minket?</h2>
                                <p class="troubleshootingHeatingProblems__txt">Szakértőink 24 órás szolgáltatással állnak  rendelkezésére, így bármikor kereshet minket.  Az összes szolgáltatásunk során lehetőséget  biztosítunk a helyszíni, kényelmes terminálos  fizetésre, így nem kell aggódnia a készpénz  miatt. Garantáljuk a gyors, hatékony és teljes  körű megoldásokat!</p>
                                <div class="troubleshootingHeatingProblems__btnWrp">
                                    <a class="troubleshootingHeatingProblems__btn" href="<?= $phone_href ?>"><span>111222333</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="comments">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="comments__box">
                            <h2 class="comments__title">Ügyfélvélemények</h2>
                            <div class="comments__wrapper">
                                <div class="comments__inner">
                                    <div class="comments__imgWrp">
                                        <img  class="comments__img" src="./assets/img/man.png" alt="man">
                                    </div>
                                    <p class="comments__name">Németh Péter</p>
                                    <p class="comments__message">„A duguláselhárítást kértem, és nem csalódtam! A  szakember rendkívül segítőkész és ügyes volt.
                                        Azonnal megoldotta a problémát, és még tanácsokat  is adott a karbantartásról. Kiváló szolgáltatás,  biztosan újra igénybe fogom venni a jövőben!”</p>
                                </div>
                                <div class="comments__inner">
                                    <div class="comments__imgWrp">
                                        <img  class="comments__img" src="./assets/img/woman.png" alt="woman">
                                    </div>
                                    <p class="comments__name">Kovács Anna</p>
                                    <p class="comments__message">„Teljesen elégedett vagyok a szolgáltatással! A  vízvezeték-szerelő 30 percen belül megérkezett, és  gyorsan megoldotta a szivárgást a konyhában. A  munkája profi volt, és a helyszíni fizetés is nagyon  kényelmes. Mindenkinek ajánlom őket!”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="anchorForm" class='forms'>
            <div class='forms__wrapper'>
               <div class='container-fluid'>
                  <div class='row'>
                     <div class='col-12 container'>
                        <div class='forms__box'>
                        <h2 class='forms__title'>Kapcsolatfelvétel:</h2>
                      <form id='jq_form' class='mb-0 mt-3'>
                         <div class='my-0'>
                            <input class='form-control' placeholder='Név' name='jq_name' type='text'>
                            <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ez egy kötelező mező.</div>
                         </div>
                         <div class='my-4'>
                            <input class='form-control' placeholder='Telefonszám' name='jq_phone' type='text'>
                            <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ez egy kötelező mező.</div>
                         </div>
                         <div class='my-4'>
                            <input class='form-control' placeholder='Email cím' name='jq_email' type='text'>
                         </div>
                         <div class='my-4'>
                            <textarea rows='3' class='form-control' name='jq_text' placeholder='Üzenet'></textarea>
                            <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Ez egy kötelező mező.</div>
                         </div>
                         <div>
                            <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Küldés'>
                         </div>
                         <div id='jq_success' style='display:none'>Köszönöm az üzenetet. Elküldte.</div>
                      </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>
        <section class='btnFixedD'>
            <div class='btnFixedD__box'>
                <a class="btnFixedD__btn" href="<?= $phone_href ?>" ><img class="btnFixedD__img" src="assets/icons/telephone-fill.svg" alt=""></a>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>