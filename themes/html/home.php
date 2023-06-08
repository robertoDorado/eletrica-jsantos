<?php $v->layout("_theme") ?>
<!-- Header -->
<header class="home-cover">
    <div class="container">
        <img class="ligth" src="<?= theme("assets/img/ligth.png") ?>" alt="ligth">
        <img class="bubles" src="<?= theme("assets/img/bubles.png") ?>" alt="bubles">
        <img class="bubles-2" src="<?= theme("assets/img/bubles-2.png") ?>" alt="bubles-2">
        <img class="woman-photo" src="<?= theme("assets/img/woman-photo.png") ?>" alt="woman-photo">
        <img class="stars" src="<?= theme("assets/img/stars.png") ?>" alt="stars">
        <h1 class="title-cover">ilumine o seu dia a dia!</h1>
        <p>Aqui na Elétrica J. Santos queremos trazer mais luz para o seu dia a dia!
            Temos produtos para toda sua casa com a melhor qualidade e atendimento da região!</p>
        <div class="container-buttons">
            <button class="product-btn btn btn-primary">veja nossos produtos</button>
            <button class="aboutus-btn btn btn-primary">nos conheça melhor</button>
        </div>
        <div class="see-more">
            <a href="#" class="link-see-more" id="linkSeeMore">Role para ver mais</a>
            <i class="fa fa-arrow-down icon-arrow"></i>
        </div>
    </div>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="container">
            <div class="background-section-1">
                <img class="bubles-section-2" src="<?= theme("assets/img/bubles.png") ?>" alt="bubles-section-2">
                <img class="bubles-section-1" src="<?= theme("assets/img/bubles.png") ?>" alt="bubles-section-1">
                <h2>produtos em destaque</h2>
            </div>
            <div class="card">
                <img src="img_avatar.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>John Doe</b></h4>
                    <p>Architect & Engineer</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
            <h1>Lorem Ipsum</h1>
            <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

            <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>