<?php $v->layout("_theme") ?>
<!-- Header -->
<header class="home-cover">
    <div class="container">
        <img class="ligth" src="<?= theme("assets/img/ligth.png") ?>" alt="ligth">
        <img class="bubles" src="<?= theme("assets/img/bubles.png") ?>" alt="bubles">
        <img class="bubles-2" src="<?= theme("assets/img/bubles.png") ?>" alt="bubles">
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
                <img class="bubles-section-1" src="<?= theme("assets/img/gray-bubles.png") ?>" alt="bubles-section-1">
                <h2>produtos em destaque</h2>
            </div>
            <div class="row-hilight-products">
                <?php if (!empty($hilightProducts)) : ?>
                    <?php foreach ($hilightProducts as $products) : ?>
                        <div class="content-card">
                            <div class="card">
                                <img src="<?= theme("assets/img/hilight-products/{$products->img}.png") ?>" alt="<?= $products->img ?>" style="width:100%">
                                <div class="container-title">
                                    <div class="underline"></div>
                                    <h4><?= $products->title ?></h4>
                                    <span class="last-price"><?= numberFormatReal($products->last_price) ?></span>
                                    <span class="current-price"><?= numberFormatReal($products->current_price) ?></span>
                                    <?php if (!empty($products->installment) && !empty($products->installment_price)) : ?>
                                        <span class="installments">ou em <?= $products->installment ?>X de <?= numberFormatReal($products->installment_price) ?></span>
                                    <?php endif ?>
                                    <span class="tag"><?= $products->tag ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container background-section-2">
    <div class="w3-content content-section-2">
        <img src="<?= theme("assets/img/gray-bubles.png") ?>" alt="bubles">
        <h3>categorias</h3>
    </div>
</div>
<div class="container category-container">
    <a href="#">
        <img src="<?= theme("assets/img/products/lamps.png") ?>" alt="lamps">
        <div class="underline-lamps"></div>
        <span>Lâmpadas</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/chandeliers.png") ?>" alt="chandeliers">
        <div class="underline-chandeliers"></div>
        <span>Lustres</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/big-lamps.png") ?>" alt="big-lamps">
        <div class="underline-big-lamps"></div>
        <span>Luminárias</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/decorations.png") ?>" alt="decorations">
        <div class="underline-decorations"></div>
        <span>Decorações</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/accessories.png") ?>" alt="accessories">
        <div class="underline-accessories"></div>
        <span>Acessórios</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/tools.png") ?>" alt="tools">
        <div class="underline-tools"></div>
        <span>Ferramentas</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/household-items.png") ?>" alt="household-items">
        <div class="underline-household-items"></div>
        <span>Utensílios Domésticos</span>
    </a>
    <a href="#">
        <img src="<?= theme("assets/img/products/cables.png") ?>" alt="cables">
        <div class="underline-cables"></div>
        <span>Cabos</span>
    </a>
</div>

<div class="ww3-row-padding w3-container background-section-3">
    <div class="w3-content content-title-section-3">
        <img src="<?= theme("assets/img/gray-bubles.png") ?>" alt="gray-bubles">
        <h4>sua melhor opção</h4>
    </div>
    <div class="content-section-3">
        <img class="banner" src="<?= theme("assets/img/img-section-3.png") ?>" alt="img-section-3">
        <img class="thumbs-up-sharp" src="<?= theme("assets/img/thumbs-up-sharp.png") ?>" alt="thumbs-up-sharp">
        <p>
            Desde 1970 somos especializados em materiais elétricos, sendo uma das principais distribuidoras
            do setor. Oferecemos os melhores produtos, com o preço que cabe no seu bolso e atende todas
            as necessidades do seu dia a dia. 📍 Venha conhecer a nossa loja, estamos na Avenida Rio das Pedras
            , 85/89, em Vila Carrão-SP. Aqui você irá encontrar lustres, luminárias, utilidades domésticas, 
            ferramentas, acessórios, lâmpadas, fios e cabos, quadros de distribuição, caixas de entrada padrão 
            Eletropaulo, materiais elétricos em geral, equipamentos de segurança e comunicação.
        </p>
        <a href="#">
            <button class="btn btn-primary">saiba mais sobre nós</button>
        </a>
    </div>
</div>

<div class="ww3-row-padding w3-container background-section-4">
    <img class="bubles-section-4" src="<?= theme("assets/img/bubles.png") ?>" alt="bubles">
    <img class="woman-photo-footer" src="<?= theme("assets/img/woman-photo-footer.png") ?>" alt="woman-photo-footer">
    <a href="#">
        <button class="btn btn-primary">acione o nosso televendas</button>
    </a>
</div>