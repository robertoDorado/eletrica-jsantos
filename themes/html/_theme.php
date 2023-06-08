<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elétrica J. Santos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= theme("assets/style.css") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="shortcut icon" href="<?= theme("assets/img/favicon.ico") ?>" type="image/x-icon">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif
        }

        .w3-bar,
        h1,
        button {
            font-family: "Montserrat", sans-serif
        }

        .fa-anchor,
        .fa-coffee {
            font-size: 200px
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div>
        <div class="w3-bar w3-card w3-left-align w3-large container-nav">
            <div class="container-logo">
                <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white logo">
                    <img src="<?= theme("assets/img/logo-black.png") ?>" alt="logo">
                </a>
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            </div>
            <div class="nav-menu">
                <div class="link-menu">
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Home</a>
                    <div class="underline-hover-home"></div>
                </div>
                <div class="link-menu link-menu-category">
                    <i class="fa fa-angle-down angle-down-icon"></i>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large category-link">Categorias</a>
                    <div class="underline-hover-category"></div>
                    <i class="fa fa-angle-up angle-up-icon"></i>
                    <div class="submenu">
                        <ul>
                            <li>
                                <img src="<?= theme("assets/img/products/lamps.png") ?>" alt="lamps">
                                <a href="#">Lâmpadas</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/chandeliers.png") ?>" alt="chandeliers">
                                <a href="#">Lustres</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/big-lamps.png") ?>" alt="big-lamps">
                                <a href="#">Luminárias</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/decorations.png") ?>" alt="decorations">
                                <a href="#">Decorações</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/accessories.png") ?>" alt="accessories">
                                <a href="#">Acessórios</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/tools.png") ?>" alt="tools">
                                <a href="#">Ferramentas</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/household-items.png") ?>" alt="household-items">
                                <a href="#">Utensílios Domésticos</a>
                            </li>
                            <li>
                                <img src="<?= theme("assets/img/products/cables.png") ?>" alt="cables">
                                <a href="#">Cabos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="link-menu">
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Sobre</a>
                    <div class="underline-hover-about"></div>
                </div>
                <div class="link-menu">
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large">Localização</a>
                    <div class="underline-hover-location"></div>
                </div>
                <button href="#" class="w3-hidden btn btn-primary btn-contact"><span>Contato</span></button>
            </div>
        </div>


        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large menu-mobile-container">
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
            <div class="underline-mobile"></div>
            <div class="menu-category-mobile">
                <a href="#" class="w3-bar-item w3-button w3-padding-large" id="menuCategoryMobile">Categorias</a>
                <i class="fa fa-angle-down angle-down-icon-mobile" id="angleDownIconMobile"></i>
                <div class="underline-mobile"></div>
                <div class="submenu-mobile" id="subMenuMobile">
                    <ul>
                        <li>
                            <img src="<?= theme("assets/img/products/lamps.png") ?>" alt="lamps">
                            <a href="#">Lâmpadas</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/chandeliers.png") ?>" alt="chandeliers">
                            <a href="#">Lustres</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/big-lamps.png") ?>" alt="big-lamps">
                            <a href="#">Luminárias</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/decorations.png") ?>" alt="decorations">
                            <a href="#">Decorações</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/accessories.png") ?>" alt="accessories">
                            <a href="#">Acessórios</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/tools.png") ?>" alt="tools">
                            <a href="#">Ferramentas</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/household-items.png") ?>" alt="household-items">
                            <a href="#">Utensílios Domésticos</a>
                            <div class="underline-mobile"></div>
                        </li>
                        <li>
                            <img src="<?= theme("assets/img/products/cables.png") ?>" alt="cables">
                            <a href="#">Cabos</a>
                            <div class="underline-mobile"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Sobre</a>
            <div class="underline-mobile"></div>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Localização</a>
            <div class="underline-mobile"></div>
            <button href="#" class="btn btn-primary btn-contact-mobile"><span>Contato</span></button>
        </div>

    </div>
    <?= $v->section("content"); ?>
</body>
<script src="<?= theme("/assets/scripts.js") ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />

</html>