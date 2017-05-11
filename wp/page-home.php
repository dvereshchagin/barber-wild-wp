<?php
    /*
        Template Name: Home Page
    */

    get_header();
?>

<body>
    <header class="site-header">
        <nav class="main-nav">
            <div class="logo">
                <a href="#">Barber WILD
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
                    <p class="logo__motto">всё, что нужно для твоей головы</p>
                </a>
            </div>

            <div class="main-nav__menu-icon">
                <div class="main-nav__menu-icon__middle"></div>
            </div>

            <ul class="main-menu">
                <li><a href="shop.html">Каталог</a></li>
                <li><a href="partners.html">Сотрудничество</a></li>
                <li><a href="about.html">О компании</a></li>
            </ul>

            <div class="cart">
                <a href="order.html">Оформить заказ</a>
            </div>

            <div class="for-owners">
                <a href="#">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/for-owners.png">
                </a>
            </div>
        </nav>
        
        <div class="hero">
            <div class="hero__scene scene"></div>
            <div class="hero__text-content hero__text-content--main">
                <h1 class="hero__title">«Barber WILD»</h1>
                <p class="hero__subtitle">— Мужская косметика с характером</p>
            </div>
        </div>
    </header>

    <main class="site-main site-main--no-bg">
        <article class="shop-item-main shop-item-main--clay">
            <div class="shop-item-main__wrapper">
                <div class="shop-item-main__image"><img src="./img/items/matt-clay.png"></div>
                <div class="shop-item-main__description">
                    <h2 class="shop-item-main__title">Матирующая глина <br> «Barber WILD» </h2>
                    <p class="shop-item-main__text">Глина Barber Wild создана на водной основе, поэтому не только несет пользу здоровью кожи и волос, но
                        и значительно легче смывается водой. Пчелиный воск обладает влагоотталкивающей структурой, а исцеляющая
                        энергия ценного масла арганы благотворно влияет на волосы и кожу головы, насыщая их питательными
                        ингредиентами. Уникальная текстура помады Barber Wild после высыхания придает волосам роскошный матовый
                        оттенок, сохраняющийся в течение всего дня.</p>
                    <div class="shop-item-main__buttons"><a class="button button--right-m" href="#">Подробнее</a></div>
                </div>
                <div class="shop-item-main__deco"><img src="./img/items/clay-machine.jpg"></div>
            </div>
        </article>
        <article class="shop-item-main shop-item-main--oil shop-item-main--alt">
            <div class="shop-item-main__wrapper">
                <div class="shop-item-main__image"><img src="./img/items/beard-oil-idaho.png"></div>
                <div class="shop-item-main__description">
                    <h2 class="shop-item-main__title">Масло для бороды <br> «Barber WILD» </h2>
                    <p class="shop-item-main__text">Масло для бороды Barber Wild полностью состоит из высококачественных природных компонентов. Его основу
                        составляют масла касторовых семян, миндаля и косточек винограда. Эти ингредиенты делают волосы послушными,
                        они не колются, не путаются, и укладка становится легкой и приятной. Увлажненная кожа под бородой
                        приобретает особенную мягкость и здоровый внешний вид.</p>
                    <div class="shop-item-main__buttons"><a class="button button--right-m" href="#">Подробнее</a></div>
                </div>
                <div class="shop-item-main__deco"><img src="./img/items/hangmen.jpg"></div>
            </div>
        </article>
        <article class="shop-item-main shop-item-main--pomade">
            <div class="shop-item-main__wrapper">
                <div class="shop-item-main__image"><img src="./img/items/pomade-juicy.png"></div>
                <div class="shop-item-main__description">
                    <h2 class="shop-item-main__title">Помада для волос <br> «Barber WILD» </h2>
                    <p class="shop-item-main__text">Помада Barber Wild создана на водной основе, поэтому не только несет пользу здоровью кожи и волос, но
                        и значительно легче смывается водой. Пчелиный воск обладает влагоотталкивающей структурой, а исцеляющая
                        энергия ценного масла арганы благотворно влияет на волосы и кожу головы, насыщая их питательными
                        ингредиентами. Уникальная текстура помады Barber Wild после высыхания придает волосам роскошный матовый
                        оттенок, сохраняющийся в течение всего дня.</p>
                    <div class="shop-item-main__buttons"><a class="button button--right-m" href="#">Подробнее</a></div>
                </div>
                <div class="shop-item-main__deco"><img src="./img/items/pomade-deco.jpg"></div>
            </div>
        </article>
        <article class="shop-item-main shop-item-main--soap shop-item-main--alt">
            <div class="shop-item-main__wrapper">
                <div class="shop-item-main__image"><img src="./img/items/soap.png"></div>
                <div class="shop-item-main__description">
                    <h2 class="shop-item-main__title">Мыло «Barber WILD» <br> </h2>
                    <p class="shop-item-main__text">Мыло для бритья Barber Wild сделано по крафтовому рецепту вручную. Его основу составляют натуральные
                        масла, которые содержат впечатляющее изобилие витаминов А и Е, обеспечивают защиту кожи, насыщают
                        ее влагой, и оказывают великолепный эффект регенерации. Особый ингредиент – белая глина эффективно,
                        но мягко очищает поры, сужая их, а приятный успокаивающий аромат мыла и хорошее настроение способны
                        сделать любой день лучшим.</p>
                    <div class="shop-item-main__buttons"><a class="button button--right-m" href="#">Подробнее</a></div>
                </div>
                <div class="shop-item-main__deco"><img src="./img/items/witch.jpg"></div>
            </div>
        </article>
    </main>
    <section class="video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uho9zCQJc9M?autoplay=0&amp;showinfo=0&amp;controls=0"
            frameborder="0" allowfullscreen></iframe>
    </section>


<?php
    get_footer();
?>