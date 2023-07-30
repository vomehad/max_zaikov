@extends('layouts.app')
<div class="content">
    <div class="offset__leftcol">
        <div class="offset_leftcol__container">
            <div class="offset_leftcol__nav_toggle">
                <i></i>
            </div>
            <a href="/">
                <img src="https://www.artis21.ru/local/templates/artis21.ru/img/logo.svg" class="offset_leftcol__logo" alt="" width="147" height="35">
            </a>


            <form action="/search/index.php" class="offset_leftcol__search">
                <input type="text" name="q" value="" placeholder="Поиск ..." id="search-popup">
                <button type="submit">
                    <svg width="18" height="18" viewBox="0 0 18 18">
                        <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/offset_search_icon.svg#search"></use>
                    </svg>
                </button>
                <div class="search__close"></div>
            </form>

            <nav class="offset_leftcol__nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <div class="offset_leftcol__item offset_leftcol__parent">


                    <a itemprop="url" href="/catalog/"><span itemprop="name">Каталог</span></a>
                    <div class="offset_leftcol__subnav offset_leftcol__subnav-active">
                        <a href="/catalog/vse-tovary/shkafy/" >Шкафы</a>
                        <a href="/catalog/vse-tovary/krovati/" >Кровати</a>
                        <a href="/catalog/vse-tovary/komody/" >Комоды</a>
                        <a href="/catalog/vse-tovary/tumby/" >Тумбы</a>
                        <a href="/catalog/vse-tovary/stoly/" >Столы</a>
                        <a href="/catalog/vse-tovary/stellazhi/" >Стеллажи</a>
                        <a rel="nofollow" href="http://kuhni.artis21.ru" >Кухни</a>
                        <a href="/catalog/spalni/norden/" >Шкафы-купе</a>
                        <a href="/catalog/vse-tovary/myagkaya-mebel/" >Мягкая мебель</a>
                        <a href="/catalog/garderobnye/" >Гардеробные</a>
                        <a href="/catalog/spalni/spalni-matrasy/artis/" >Матрасы</a>

                    </div>
                    <div class="offset_leftcol_item__trigger offset_leftcol_item__trigger-catalog active">
                        <i class="active"></i>
                    </div>
                </div>
                <div class="offset_leftcol__item offset_leftcol__parent">


                    <a itemprop="url" href="/interiors/"><span itemprop="name">Готовые композиции</span></a>
                    <div class="offset_leftcol__subnav ">
                        <a href="/interiors/shkafy/" >Шкафы</a>
                        <a href="/interiors/mebel-v-prikhozhuyu/" >Мебель в прихожую</a>
                        <a href="/interiors/mebel-v-gostinuyu/" >Мебель в гостиную</a>
                        <a href="/interiors/mebel-dlya-spalni/" >Мебель для спальни</a>
                        <a href="/interiors/mebel-dlya-doma/" >Мебель для дома</a>
                        <a href="/interiors/stenki/" >Стенки</a>
                        <a href="/interiors/biblioteka/" >Библиотека</a>
                        <a href="/interiors/detskaya-komnata/" >Детская комната</a>

                    </div>
                    <div class="offset_leftcol_item__trigger offset_leftcol_item__trigger2row">
                        <i class="active"></i>
                    </div>
                </div>
                <div class="offset_leftcol__item offset_leftcol__parent">


                    <a itemprop="url" href="/buyers/"><span itemprop="name">Покупателям</span></a>
                    <div class="offset_leftcol__subnav ">
                        <a href="/buyers/payment/" >Оплата</a>
                        <a href="/buyers/delivery/" >Доставка</a>
                        <a href="/buyers/feedback/" >Задать вопрос</a>
                        <a href="/buyers/discount/" >Дисконтная программа</a>
                        <a href="/buyers/3d/" >3D</a>
                        <a href="/vyzov-dizaynera/" >Вызов дизайнера</a>
                        <a href="/buyers/instructions/" >Инструкции по сборке</a>
                        <a href="/buyers/garantiya/" >Гарантия</a>

                    </div>
                    <div class="offset_leftcol_item__trigger">
                        <i class="active"></i>
                    </div>
                </div>
                <div class="offset_leftcol__item offset_leftcol__parent">


                    <a itemprop="url" href="/about/"><span itemprop="name">О компании</span></a>
                    <div class="offset_leftcol__subnav ">
                        <a href="/about/materials-and-technologies/" >Материалы и технологии</a>
                        <a href="/about/news/" >Новости</a>
                        <a href="/otzyvy/" >Отзывы</a>

                    </div>
                    <div class="offset_leftcol_item__trigger">
                        <i class="active"></i>
                    </div>
                </div>
                <div class="offset_leftcol__item offset_leftcol__parent">


                    <a itemprop="url" href="/vacancy/"><span itemprop="name">Вакансии</span></a>
                    <div class="offset_leftcol__subnav ">
                        <a href="/vacancy/roznichnaya-set/" > Розничная сеть</a>
                        <a href="/vacancy/golovnoy-ofis-zelenograd/" >Головной офис (Зеленоград)</a>
                        <a href="/vacancy/proizvodstvo-zelenograd/" >Производство (Зеленоград)</a>

                    </div>
                    <div class="offset_leftcol_item__trigger">
                        <i class="active"></i>
                    </div>
                </div>
                <div class="offset_leftcol__item offset_leftcol__parent">


                    <a itemprop="url" href="/contacts/"><span itemprop="name">Контакты</span></a>
                    <div class="offset_leftcol__subnav ">
                        <a href="/contacts/uchebnyy-tsentr.php" >Офис г. Москва</a>
                        <a href="/contacts/golovnoy-ofis-i-proizvodstvo.php" >Головной офис и производство</a>
                        <a href="/contacts/suppliers/" >Поставщикам</a>

                    </div>
                    <div class="offset_leftcol_item__trigger">
                        <i class="active"></i>
                    </div>
                </div>
            </nav>
            <div class="offset_leftcol__contacts topper__contacts">
                <div>
                    Интернет-магазин 10:00 - 21:00
                    <img src="https://www.artis21.ru/local/templates/artis21.ru/img/phone_white.svg" alt="">
                    <a href="tel:+7 (495) 720-26-48">+7 (495) 720-26-48</a>
                    <a href="javascript:void(0)" class="mobile-callback headerCallback">Заказать звонок</a>
                </div>
            </div>

            <div class="offset_leftcol__socials">
                <div class="offset_leftcol__socials_container">
                    <a rel="nofollow" href="https://vk.com/mebel_artis" class="vk" target="_blank">
                        <svg width="18" height="12" viewBox="0 0 18 12">
                            <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/social_icons.svg#vk"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="maincol">
        <div class="topper">
            <div class="topper__container">
                <div class="offset_leftcol__nav_toggle">
                    <i></i>
                </div>
                <a href="/" class="topper__logo">
                    <img src="https://www.artis21.ru/local/templates/artis21.ru/img/logo.svg" alt="" width="147" height="35">
                </a>
                <div class="topper__contacts">
                    <div itemscope itemtype="http://schema.org/Organization" style="display: none;">
                        <div itemprop="name">Корпусная мебель «АРТИС»</div>
                        <link itemprop="url" href="/">
                        <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                            <span itemprop="postalCode">141441</span>,
                            <span itemprop="addressCountry">Россия</span>,
                            <span itemprop="addressRegion">Московская обл.</span>,
                            <span itemprop="addressLocality">Солнечногорский район, д. Елино</span>,
                            <span itemprop="streetAddress">ул. Летняя, стр. 1</span>
                        </div>
                        <div>Телефон: <a itemprop="telephone" href="tel:+74959660028">+7 (495) 966-00-28</a></div>
                        <div>Почта:
                            <link itemprop="email" href="mail@artis21.ru">
                        </div>
                    </div>
                    <div class="topper__contacts-row topper__contacts-row-ofice">
                        <div>



                            <a href="tel:8 800 301 50 01" class="topper__contacts__phone">
                                <div class="topper__contacts__phoneBlock">
                                    <img src="https://www.artis21.ru/local/templates/artis21.ru/img/phone_white.svg" alt="">
                                    <img class="topper__contacts__phoneBlock__grey" src="https://www.artis21.ru/local/templates/artis21.ru/img/phone_gray.svg" alt="">
                                    <span>8 (800) 301-50-01</span>
                                </div>
                                <div class="topper__contacts__grafik">
                                    Головной офис 9.00 - 20.00
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="topper__contacts-row topper__contacts-row-shop">
                        <div>
                            <a href="tel:+7 (495) 720-26-48" class="topper__contacts__phone">
                                <div class="topper__contacts__phoneBlock">
                                    <img src="https://www.artis21.ru/local/templates/artis21.ru/img/phone_white.svg" alt="">
                                    <img class="topper__contacts__phoneBlock__grey" src="https://www.artis21.ru/local/templates/artis21.ru/img/phone_gray.svg" alt="">
                                    <span>+7 (495) 720-26-48</span>
                                </div>
                                <div class="topper__contacts__grafik">
                                    Интернет-магазин 10.00 - 21.00
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="topper__contacts-row topper__contacts-row-buttons">
                    <div class="topper__contacts-row-buttons-row">
                        <a href="https://wa.me/79250283213?text=Здравствуйте!%20Хочу%20вызвать%20дизайнера!" class="topper__contacts-row-buttons-whatsap-link" target="_blank" rel="nofollow">WhatsApp</a>
                        <a href="/vyzov-dizaynera/">Вызвать дизайнера</a>
                    </div>
                    <div class="topper__contacts-row-buttons-row">
                        <a href="#salons" class="topper__contacts-row-buttons-row topper__contacts-row-buttons-anchor">
                            <div class="topper__contacts-row-buttons-img"></div>
                            <div class="topper__contacts-row-buttons-salons">Салоны</div>
                        </a>
                        <a rel="nofollow" href="javascript:void(0);" class="headerCallback">Заказать звонок</a>
                    </div>
                </div>

                <div class="topper__phoneIcon">
                    <a rel="nofollow" href="tel:+74957202648"><img src="https://www.artis21.ru/local/templates/artis21.ru/img/phone_gray02.svg" alt="" width="16" height="16"></a>
                </div>


                <div class="topper__wa">
                    <a href="https://wa.me/79250283213?text=Здравствуйте!%20Хочу%20вызвать%20дизайнера!" class="topper__contacts-row-buttons-whatsap-link" target="_blank" rel="nofollow"></a>
                </div>

                <div class="topper__basket">
                    <a href="/personal/basket/">
                        <div class="top_basket_wr" id="baskettop">

                            <!--'start_frame_cache_baskettop'-->

                            <svg width="20" height="20" viewBox="0 0 20 20">
                                <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/basket_icon.svg#basket"></use>
                            </svg>

                            <!--'end_frame_cache_baskettop'-->                                                    </div>
                    </a>
                </div>

                <div class="topper_search__container">


                    <form action="/search/index.php" class="offset_leftcol__search">
                        <input type="text" name="q" value="" placeholder="Поиск ..." id="search-popup">
                        <button type="submit">
                            <svg width="18" height="18" viewBox="0 0 18 18">
                                <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/offset_search_icon.svg#search"></use>
                            </svg>
                        </button>
                        <div class="search__close"></div>
                    </form>
                </div>
            </div>

        </div>

        <div class="main_slider main_slider_desc">
            <div class="js-main_slider__container">
                <div>
                    <a href="/about/news/571507.php">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/098/we12r8hs58o9d91tkuelchqqkr9s8i6b.webp">
                            <img  src="https://www.artis21.ru/upload/resize_cache/webp/iblock/098/we12r8hs58o9d91tkuelchqqkr9s8i6b.webp" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/gostinye/gostinye-bergen/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/7b6/7b6e695794f599843d9045e87a5f4b54.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/7b6/7b6e695794f599843d9045e87a5f4b54.webp" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/gostinye/gostinye-elizaveta5/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/477/kb9rtfpvj0rxzsep8vguma5doshc69af.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/477/kb9rtfpvj0rxzsep8vguma5doshc69af.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/garderobnye/marbelya/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/95a/95ac14ea0f81abeaf68186a8c027d2d6.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/95a/95ac14ea0f81abeaf68186a8c027d2d6.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/detskie/detskie-elizaveta5/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/fde/fde934ec5d1a6844a1baf078f0f29d85.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/fde/fde934ec5d1a6844a1baf078f0f29d85.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/spalni/spalni-granada/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/318/318628439a5f1d4978ba02c6a486a24b.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/318/318628439a5f1d4978ba02c6a486a24b.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/gostinye/toledogostinye-toledo/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/479/4793b78b8226ff8838900be0c312023b.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/479/4793b78b8226ff8838900be0c312023b.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/detskie/ivisa-2/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/ac7/ac7df5f0d8fc9ce01798110acb454b23.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/ac7/ac7df5f0d8fc9ce01798110acb454b23.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="catalog/spalni/spalni-lozanna/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/734/734813c32c03ece9464b1d9044e61150.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/734/734813c32c03ece9464b1d9044e61150.webp" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="catalog/spalni/toledo/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/993/99379b01b0ca377fd0fab284c51eb398.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/993/99379b01b0ca377fd0fab284c51eb398.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="catalog/gostinye/gostinye-lozanna/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/d6f/d6f86bcae818fdb0fd6639123b1370a7.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/d6f/d6f86bcae818fdb0fd6639123b1370a7.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/prikhozhie/prikhozhie-toledo/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/438/91rjb2bch8rk33j5uixlo1ug0wzi6sua.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/438/91rjb2bch8rk33j5uixlo1ug0wzi6sua.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <div>
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/280/ti082kryvr1fprc8505tmiyob1ov3rah.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/280/ti082kryvr1fprc8505tmiyob1ov3rah.jpg" width="1920" height="750" style="object-fit: contain;" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_slider main_slider_mob">
            <div class="js-main_slider__container">
                <div>
                    <a href="/about/news/571507.php">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/db5/vuzlruqc5wk332uuk4842rpzz3zfzst1.webp">
                            <img  src="https://www.artis21.ru/upload/resize_cache/webp/iblock/db5/vuzlruqc5wk332uuk4842rpzz3zfzst1.webp" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/gostinye/gostinye-bergen/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/057/05738864acd877b712af4c50e2424260.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/057/05738864acd877b712af4c50e2424260.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/gostinye/gostinye-elizaveta5/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/d8f/eyhno05ao7jerhza4lyuzwgkdaqpgyio.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/d8f/eyhno05ao7jerhza4lyuzwgkdaqpgyio.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/garderobnye/marbelya/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/756/756cbf6a672d57c739ecfde31d266278.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/756/756cbf6a672d57c739ecfde31d266278.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/detskie/detskie-elizaveta5/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/4d1/4d1cfc465ac392d48d0716a976750771.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/4d1/4d1cfc465ac392d48d0716a976750771.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/spalni/spalni-granada/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/0b1/0b199a6afd8989cce5cdbbb0722beabb.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/0b1/0b199a6afd8989cce5cdbbb0722beabb.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/gostinye/toledogostinye-toledo/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/50c/50ca84acdc87c18bc1229e29e5601161.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/50c/50ca84acdc87c18bc1229e29e5601161.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/detskie/ivisa-2/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/52e/52ef084b50350dceeb022ac979fa1f86.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/52e/52ef084b50350dceeb022ac979fa1f86.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="catalog/spalni/spalni-lozanna/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/842/842d214d5ee6e65255f6d5fd462add86.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/842/842d214d5ee6e65255f6d5fd462add86.webp" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="catalog/spalni/toledo/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/4ed/4edd57f65a6d4fc7445851c558d97716.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/4ed/4edd57f65a6d4fc7445851c558d97716.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="catalog/gostinye/gostinye-lozanna/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/b5a/b5a0cd9cf8eb0ba94f39f983d865e15d.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/b5a/b5a0cd9cf8eb0ba94f39f983d865e15d.webp" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <a href="/catalog/prikhozhie/prikhozhie-toledo/">
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/aa6/g2zdo6bt8d9xwybph5qs8bupwa76wnuf.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/aa6/g2zdo6bt8d9xwybph5qs8bupwa76wnuf.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </a>
                </div>
                <div>
                    <div>
                        <picture>
                            <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/c82/8dvlsysskv1yj6als8vdk3mq0v0wpupz.webp">
                            <img loading="lazy" src="https://www.artis21.ru/upload/iblock/c82/8dvlsysskv1yj6als8vdk3mq0v0wpupz.jpg" width="700" height="520" style="object-fit: contain;" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .main_slider.main_slider_mob {
                display:none;
            }
            @media screen and (max-width: 700px) {
                .main_slider.main_slider_desc {
                    display: none;
                }
                .main_slider.main_slider_mob {
                    display:block;
                }
            }
        </style>

        <div class="advantages side_margin_mob">
            <div class="advantages__item">
                <i>
                    <svg width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/advantages_icons.svg#icon_1"></use>
                    </svg>
                </i>
                5 лет гарантии
            </div>
            <div class="advantages__item">
                <i>
                    <svg width="25" height="25" viewBox="0 0 25 25">
                        <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/advantages_icons.svg#icon_2"></use>
                    </svg>
                </i>
                Рассрочка без переплаты
            </div>
            <div class="advantages__item">
                <i>
                    <svg width="30" height="30" viewBox="0 0 30 30">
                        <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/advantages_icons.svg#icon_4"></use>
                    </svg>
                </i>
                Доставка 48 часов
            </div>
        </div>

        <div class="container containerMainPage">
            <a href="/catalog/" class="main-page-catalog-title"><h1>Мебель от производителя «АРТИС»</h1></a>




            <div class="catalog__categories catalog__categories__mobile">

                <a href="/catalog/gostinye/"><h2>Гостиные</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row"
                             data-count="8">


                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/gostinye-lozanna/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/2e2/nk1nsaieat6trok16v06ikd2s5u7hpy5.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/2e2/nk1nsaieat6trok16v06ikd2s5u7hpy5.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/gostinye-lozanna/"
                                       class="catalog_categories__name">
                                        Лозанна                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/gostinye-granada/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/c50/c5070354aa36d71cc2663d0a958b9f7c.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/c50/c5070354aa36d71cc2663d0a958b9f7c.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/gostinye-granada/"
                                       class="catalog_categories__name">
                                        Гранада                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/gostinye-elizaveta5/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/b0b/x8vlsokjfs72zt5zlk5lijrxhg45rnko.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/b0b/x8vlsokjfs72zt5zlk5lijrxhg45rnko.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/gostinye-elizaveta5/"
                                       class="catalog_categories__name">
                                        Елизавета                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/gostinye-elika/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/475/ueer3ie3qtv8oq72kg29e3tj3f06ni03.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/475/ueer3ie3qtv8oq72kg29e3tj3f06ni03.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/gostinye-elika/"
                                       class="catalog_categories__name">
                                        Элика                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/toledogostinye-toledo/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/aff/aff2b279108c4909aad726c7b4aa0455.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/aff/aff2b279108c4909aad726c7b4aa0455.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/toledogostinye-toledo/"
                                       class="catalog_categories__name">
                                        Толедо                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/gostinye-bergen/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/583/5834761dcaf0da3a1c642a295bf2f223.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/583/5834761dcaf0da3a1c642a295bf2f223.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/gostinye-bergen/"
                                       class="catalog_categories__name">
                                        Берген                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/divan/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/c97/c97d323a829cdd330b007bdd81577e72.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/c97/c97d323a829cdd330b007bdd81577e72.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/divan/"
                                       class="catalog_categories__name">
                                        Диваны                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/gostinye/zhurnalnye-stoly/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/708/708eb5b6115277f58737b83a8aef2062.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/708/708eb5b6115277f58737b83a8aef2062.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/gostinye/zhurnalnye-stoly/"
                                       class="catalog_categories__name">
                                        Журнальные столы                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/prikhozhie/"><h2>Прихожие</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row"
                             data-count="4">


                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/prikhozhie/prikhozhie-toledo/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/3e2/r9tjsnaha8sb8ljryzdwr8kf1xbfrttz.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/3e2/r9tjsnaha8sb8ljryzdwr8kf1xbfrttz.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/prikhozhie/prikhozhie-toledo/"
                                       class="catalog_categories__name">
                                        Толедо                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/prikhozhie/prikhozhie-elizaveta5/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/fc2/fc2831d636c3464b382f370a5061dd5a.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/fc2/fc2831d636c3464b382f370a5061dd5a.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/prikhozhie/prikhozhie-elizaveta5/"
                                       class="catalog_categories__name">
                                        Елизавета                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/prikhozhie/prikhozhie-ivisa/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/b65/b65d6838476fe5b4b2a4f4513e8d05cb.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/b65/b65d6838476fe5b4b2a4f4513e8d05cb.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/prikhozhie/prikhozhie-ivisa/"
                                       class="catalog_categories__name">
                                        Ивиса                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/prikhozhie/prikhozhie-granada/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/466/466f5dcb153040f966e5f5afe19e809d.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/466/466f5dcb153040f966e5f5afe19e809d.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/prikhozhie/prikhozhie-granada/"
                                       class="catalog_categories__name">
                                        Гранада                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/spalni/"><h2>Спальни</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row"
                             data-count="8">


                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/toledo/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/505/505d5de865bb21ae6bc30ca7e109321a.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/505/505d5de865bb21ae6bc30ca7e109321a.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/toledo/"
                                       class="catalog_categories__name">
                                        Толедо                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/spalni-granada/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/404/404c506c4453ff47f35c0178728e04a5.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/404/404c506c4453ff47f35c0178728e04a5.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/spalni-granada/"
                                       class="catalog_categories__name">
                                        Гранада                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/elizaveta/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/594/0i1jd0dd5ily4xzf7ik4bvxw01dp51wm.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/594/0i1jd0dd5ily4xzf7ik4bvxw01dp51wm.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/elizaveta/"
                                       class="catalog_categories__name">
                                        Елизавета                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/spalni-lozanna/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/198/1982d9bf7ce10414c27ded0165fd0530.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/198/1982d9bf7ce10414c27ded0165fd0530.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/spalni-lozanna/"
                                       class="catalog_categories__name">
                                        Лозанна 2                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/ravenna/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/45c/45cb8074f7fcc89d0bc51f3ec73a8456.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/45c/45cb8074f7fcc89d0bc51f3ec73a8456.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/ravenna/"
                                       class="catalog_categories__name">
                                        Равенна                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/norden/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/fef/fef4a544ba79582f86f631d347f17590.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/fef/fef4a544ba79582f86f631d347f17590.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/norden/"
                                       class="catalog_categories__name">
                                        Шкафы-купе Норден                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/spalni-matrasy/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/c32/c3204b4c95e635c2fb6def4a254351ca.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/c32/c3204b4c95e635c2fb6def4a254351ca.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/spalni-matrasy/"
                                       class="catalog_categories__name">
                                        Матрасы                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/spalni/krovati/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/99b/99bcea8b1442c141d02da13c5ab5d628.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/99b/99bcea8b1442c141d02da13c5ab5d628.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/spalni/krovati/"
                                       class="catalog_categories__name">
                                        Кровати                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/biblioteki/"><h2>Библиотеки</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row"
                             data-count="2">


                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/biblioteki/biblioteki-elizaveta5/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/e17/e175de85ab4661069fbe212eb3d2b6cf.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/e17/e175de85ab4661069fbe212eb3d2b6cf.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/biblioteki/biblioteki-elizaveta5/"
                                       class="catalog_categories__name">
                                        Елизавета                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/biblioteki/biblioteki-elika/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/6b4/ocpv3hi570k2g31amq0axo3cz3wbh62i.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/6b4/ocpv3hi570k2g31amq0axo3cz3wbh62i.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/biblioteki/biblioteki-elika/"
                                       class="catalog_categories__name">
                                        Элика                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/detskie/"><h2>Детские</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row"
                             data-count="3">


                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/detskie/ivisa-2/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/67c/67cb5a0ebe54a12a95cb70a33e619fdc.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/67c/67cb5a0ebe54a12a95cb70a33e619fdc.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/detskie/ivisa-2/"
                                       class="catalog_categories__name">
                                        Ивиса 2                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/detskie/detskie-elizaveta5/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/c49/c49134b7567713b9c9856444fcd866a1.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/c49/c49134b7567713b9c9856444fcd866a1.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/detskie/detskie-elizaveta5/"
                                       class="catalog_categories__name">
                                        Елизавета                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/detskie/detskie-elika/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/373/iable5tnrt1amnzdwhomgzmamqu08koo.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/373/iable5tnrt1amnzdwhomgzmamqu08koo.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/detskie/detskie-elika/"
                                       class="catalog_categories__name">
                                        Элика                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/garderobnye/"><h2>Гардеробные</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row">

                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/garderobnye/marbelya/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/4d8/4d895892b872a4e38750ff7896a56a26.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/4d8/4d895892b872a4e38750ff7896a56a26.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/garderobnye/marbelya/"
                                       class="catalog_categories__name">
                                        Марбелья                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/kukhni/"><h2>Кухни</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row"
                             data-count="11">


                            <div class="catalog_categories__item" style="border-radius: small">

                                <a href="/catalog/kukhni/obedennye-stoly/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/326/3264661e66dd8c90b9beb8f5756760ff.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/326/3264661e66dd8c90b9beb8f5756760ff.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a href="/catalog/kukhni/obedennye-stoly/"
                                       class="catalog_categories__name">
                                        Обеденные столы                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/skip"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/5ab/ap4gmquhnk8ka1jm1xzs9eu5ey4p928v.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/5ab/ap4gmquhnk8ka1jm1xzs9eu5ey4p928v.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/skip"
                                       class="catalog_categories__name">
                                        Скип                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/elara"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/ee7/ee73ae7d0755cdf5c338b9a147f4de78.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/ee7/ee73ae7d0755cdf5c338b9a147f4de78.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/elara"
                                       class="catalog_categories__name">
                                        Элара                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/Atik"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/iblock/cf2/lrmucwn2rgvrnnffq6focwa6maqjqoq2.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/iblock/cf2/lrmucwn2rgvrnnffq6focwa6maqjqoq2.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/Atik"
                                       class="catalog_categories__name">
                                        Атик                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/navi"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/661/661a2c8fde9c13c25dada5d9483db9ab.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/661/661a2c8fde9c13c25dada5d9483db9ab.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/navi"
                                       class="catalog_categories__name">
                                        Нави                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/astrid"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/26f/26f7d718bce5b79ba6f6a8a2471d25da.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/26f/26f7d718bce5b79ba6f6a8a2471d25da.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/astrid"
                                       class="catalog_categories__name">
                                        Астрид                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/nova"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/c92/c92fd95c15e08a76e841bc58ed0b509c.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/c92/c92fd95c15e08a76e841bc58ed0b509c.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/nova"
                                       class="catalog_categories__name">
                                        Нова                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/kapella"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/263/26347f6758e814064261a80e205ffadc.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/263/26347f6758e814064261a80e205ffadc.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/kapella"
                                       class="catalog_categories__name">
                                        Капелла                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/vega"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/af4/af40be9adffb4f5ae4174567f44a02fc.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/af4/af40be9adffb4f5ae4174567f44a02fc.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/vega"
                                       class="catalog_categories__name">
                                        Вега                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/Til"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/7a0/7a0d0f3e9cf3982bd1f7026fcc507260.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/7a0/7a0d0f3e9cf3982bd1f7026fcc507260.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/Til"
                                       class="catalog_categories__name">
                                        Тиль                                </a>
                                </div>

                            </div>
                            <div class="catalog_categories__item" style="border-radius: small">

                                <a rel="nofollow" href="http://kuhni.artis21.ru/atria"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/upload/resize_cache/webp/iblock/644/644f8af47d870339ff52abb8b50a2ba2.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/upload/resize_cache/webp/iblock/644/644f8af47d870339ff52abb8b50a2ba2.webp" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>

                                <div class="catalog_categories__container">
                                    <a rel="nofollow" href="http://kuhni.artis21.ru/atria"
                                       class="catalog_categories__name">
                                        Атриа                                </a>
                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <a href="/catalog/spalni/norden/"><h2>Шкафы-купе</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row">

                            <div class="catalog_categories__item" style="border-radius: small">
                                <a href="/catalog/spalni/norden/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/local/templates/artis21.ru/img/kupe-main.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/local/templates/artis21.ru/img/kupe-main.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>


                <a href="/catalog/gostinye/divan/"><h2>Мягкая мебель</h2></a>

                <div class="overlayScrollbars section-catalog">
                    <div class="overlayScrollbars__wrap">


                        <div class="catalog_categories__row">

                            <div class="catalog_categories__item" style="border-radius: small">
                                <a href="/catalog/gostinye/divan/"
                                   class="catalog_categories__link catalog_categories__link--cover catalog_categories__link-mob">
                                    <picture>
                                        <source type="image/webp" srcset="https://www.artis21.ru/local/templates/artis21.ru/img/divani-main.webp">
                                        <img loading="lazy" src="https://www.artis21.ru/local/templates/artis21.ru/img/divani-main.jpg" alt="" class="catalog_categories__img">
                                    </picture>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="catalog__categories catalog__categories__desktop">
                <div class="catalog_categories__wrap">
                    <div class="catalog_categories__row">

                        <div class="catalog_categories__item">

                            <a href="/catalog/gostinye/"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/9ce/9ce491b13b08c88a1f8f683303399a0a.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="4">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/gostinye/" data-idsection="4"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/9ce/9ce491b13b08c88a1f8f683303399a0a.webp" class="catalog_categories__name">
                                    Гостиные                        </a>

                                <div class="catalog_categories__sub">


                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/2e2/nk1nsaieat6trok16v06ikd2s5u7hpy5.webp"
                                       href="/catalog/gostinye/gostinye-lozanna/"
                                       class="catalog_categories_sub__item">Лозанна</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/iblock/c50/c5070354aa36d71cc2663d0a958b9f7c.jpg"
                                       href="/catalog/gostinye/gostinye-granada/"
                                       class="catalog_categories_sub__item">Гранада</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/b0b/x8vlsokjfs72zt5zlk5lijrxhg45rnko.webp"
                                       href="/catalog/gostinye/gostinye-elizaveta5/"
                                       class="catalog_categories_sub__item">Елизавета</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/475/ueer3ie3qtv8oq72kg29e3tj3f06ni03.webp"
                                       href="/catalog/gostinye/gostinye-elika/"
                                       class="catalog_categories_sub__item">Элика</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/aff/aff2b279108c4909aad726c7b4aa0455.webp"
                                       href="/catalog/gostinye/toledogostinye-toledo/"
                                       class="catalog_categories_sub__item">Толедо</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/583/5834761dcaf0da3a1c642a295bf2f223.webp"
                                       href="/catalog/gostinye/gostinye-bergen/"
                                       class="catalog_categories_sub__item">Берген</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/iblock/c97/c97d323a829cdd330b007bdd81577e72.jpg"
                                       href="/catalog/gostinye/divan/"
                                       class="catalog_categories_sub__item">Диваны</a>
                                    <a data-idsection="4"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/708/708eb5b6115277f58737b83a8aef2062.webp"
                                       href="/catalog/gostinye/zhurnalnye-stoly/"
                                       class="catalog_categories_sub__item">Журнальные столы</a>


                                </div>

                            </div>
                        </div>



                        <div class="catalog_categories__item">

                            <a href="/catalog/prikhozhie/"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/7bb/7bbd7321952b1b9d8cda5c6f66b896c9.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="5">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/prikhozhie/" data-idsection="5"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/7bb/7bbd7321952b1b9d8cda5c6f66b896c9.webp" class="catalog_categories__name">
                                    Прихожие                        </a>

                                <div class="catalog_categories__sub">


                                    <a data-idsection="5"
                                       data-path="https://www.artis21.ru/upload/iblock/3e2/r9tjsnaha8sb8ljryzdwr8kf1xbfrttz.jpg"
                                       href="/catalog/prikhozhie/prikhozhie-toledo/"
                                       class="catalog_categories_sub__item">Толедо</a>
                                    <a data-idsection="5"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/fc2/fc2831d636c3464b382f370a5061dd5a.webp"
                                       href="/catalog/prikhozhie/prikhozhie-elizaveta5/"
                                       class="catalog_categories_sub__item">Елизавета</a>
                                    <a data-idsection="5"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/b65/b65d6838476fe5b4b2a4f4513e8d05cb.webp"
                                       href="/catalog/prikhozhie/prikhozhie-ivisa/"
                                       class="catalog_categories_sub__item">Ивиса</a>
                                    <a data-idsection="5"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/466/466f5dcb153040f966e5f5afe19e809d.webp"
                                       href="/catalog/prikhozhie/prikhozhie-granada/"
                                       class="catalog_categories_sub__item">Гранада</a>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="catalog_categories__wrap">
                    <div class="catalog_categories__row">


                        <div class="catalog_categories__item">

                            <a href="/catalog/spalni/"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/c10/c10e7ca1810b1ab852ec760adfe81a00.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="6">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/spalni/" data-idsection="6"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/c10/c10e7ca1810b1ab852ec760adfe81a00.webp" class="catalog_categories__name">
                                    Спальни                        </a>

                                <div class="catalog_categories__sub">


                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/505/505d5de865bb21ae6bc30ca7e109321a.webp"
                                       href="/catalog/spalni/toledo/"
                                       class="catalog_categories_sub__item">Толедо</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/404/404c506c4453ff47f35c0178728e04a5.webp"
                                       href="/catalog/spalni/spalni-granada/"
                                       class="catalog_categories_sub__item">Гранада</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/594/0i1jd0dd5ily4xzf7ik4bvxw01dp51wm.webp"
                                       href="/catalog/spalni/elizaveta/"
                                       class="catalog_categories_sub__item">Елизавета</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/198/1982d9bf7ce10414c27ded0165fd0530.webp"
                                       href="/catalog/spalni/spalni-lozanna/"
                                       class="catalog_categories_sub__item">Лозанна 2</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/iblock/45c/45cb8074f7fcc89d0bc51f3ec73a8456.jpg"
                                       href="/catalog/spalni/ravenna/"
                                       class="catalog_categories_sub__item">Равенна</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/fef/fef4a544ba79582f86f631d347f17590.webp"
                                       href="/catalog/spalni/norden/"
                                       class="catalog_categories_sub__item">Шкафы-купе Норден</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/c32/c3204b4c95e635c2fb6def4a254351ca.webp"
                                       href="/catalog/spalni/spalni-matrasy/"
                                       class="catalog_categories_sub__item">Матрасы</a>
                                    <a data-idsection="6"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/99b/99bcea8b1442c141d02da13c5ab5d628.webp"
                                       href="/catalog/spalni/krovati/"
                                       class="catalog_categories_sub__item">Кровати</a>


                                </div>

                            </div>
                        </div>



                        <div class="catalog_categories__item">

                            <a href="/catalog/biblioteki/"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/c9a/c9a2dd5571423bda7aeac02a9abb19d1.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="7">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/biblioteki/" data-idsection="7"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/c9a/c9a2dd5571423bda7aeac02a9abb19d1.webp" class="catalog_categories__name">
                                    Библиотеки                        </a>

                                <div class="catalog_categories__sub">


                                    <a data-idsection="7"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/e17/e175de85ab4661069fbe212eb3d2b6cf.webp"
                                       href="/catalog/biblioteki/biblioteki-elizaveta5/"
                                       class="catalog_categories_sub__item">Елизавета</a>
                                    <a data-idsection="7"
                                       data-path="https://www.artis21.ru/upload/iblock/6b4/ocpv3hi570k2g31amq0axo3cz3wbh62i.jpg"
                                       href="/catalog/biblioteki/biblioteki-elika/"
                                       class="catalog_categories_sub__item">Элика</a>


                                </div>

                            </div>
                        </div>



                        <div class="catalog_categories__item">

                            <a href="/catalog/detskie/"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/e37/e37ac4314ca5582c3ad3d395640492d8.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="8">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/detskie/" data-idsection="8"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/e37/e37ac4314ca5582c3ad3d395640492d8.webp" class="catalog_categories__name">
                                    Детские                        </a>

                                <div class="catalog_categories__sub">


                                    <a data-idsection="8"
                                       data-path="https://www.artis21.ru/upload/iblock/67c/67cb5a0ebe54a12a95cb70a33e619fdc.jpg"
                                       href="/catalog/detskie/ivisa-2/"
                                       class="catalog_categories_sub__item">Ивиса 2</a>
                                    <a data-idsection="8"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/c49/c49134b7567713b9c9856444fcd866a1.webp"
                                       href="/catalog/detskie/detskie-elizaveta5/"
                                       class="catalog_categories_sub__item">Елизавета</a>
                                    <a data-idsection="8"
                                       data-path="https://www.artis21.ru/upload/iblock/373/iable5tnrt1amnzdwhomgzmamqu08koo.jpg"
                                       href="/catalog/detskie/detskie-elika/"
                                       class="catalog_categories_sub__item">Элика</a>


                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="catalog_categories__wrap">
                    <div class="catalog_categories__row">


                        <div class="catalog_categories__item">

                            <a href="/catalog/garderobnye/"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/221/22123fd7c8c1771820b0f6d87b30f5b4.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="732">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/garderobnye/" data-idsection="732"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/221/22123fd7c8c1771820b0f6d87b30f5b4.webp" class="catalog_categories__name">
                                    Гардеробные                        </a>

                                <div class="catalog_categories__sub">


                                    <a data-idsection="732"
                                       data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/4d8/4d895892b872a4e38750ff7896a56a26.webp"
                                       href="/catalog/garderobnye/marbelya/"
                                       class="catalog_categories_sub__item">Марбелья</a>


                                </div>

                            </div>
                        </div>



                        <div class="catalog_categories__item">

                            <a rel="nofollow" href="http://kuhni.artis21.ru"
                               style="background: url(https://www.artis21.ru/upload/resize_cache/webp/uf/b3a/b3a5163b3bf1cfc4663fbe3dc69ecd21.webp) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="984">
                            </a>


                            <div class="catalog_categories__container catalog_categories__container-wide">

                                <a rel="nofollow" href="http://kuhni.artis21.ru" data-idsection="984"
                                   data-path="https://www.artis21.ru/upload/resize_cache/webp/uf/b3a/b3a5163b3bf1cfc4663fbe3dc69ecd21.webp" class="catalog_categories__name">
                                    Кухни                        </a>

                                <div class="catalog_categories__sub">


                                    <div class="catalog_categories__sub-cols">
                                        <div class="catalog_categories__sub-cols-item">
                                            <a data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/326/3264661e66dd8c90b9beb8f5756760ff.webp"
                                               href="/catalog/kukhni/obedennye-stoly/"
                                               class="catalog_categories_sub__item">Обеденные столы</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/5ab/ap4gmquhnk8ka1jm1xzs9eu5ey4p928v.webp"
                                               href="http://kuhni.artis21.ru/skip"
                                               class="catalog_categories_sub__item">Скип</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/ee7/ee73ae7d0755cdf5c338b9a147f4de78.webp"
                                               href="http://kuhni.artis21.ru/elara"
                                               class="catalog_categories_sub__item">Элара</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/iblock/cf2/lrmucwn2rgvrnnffq6focwa6maqjqoq2.webp"
                                               href="http://kuhni.artis21.ru/Atik"
                                               class="catalog_categories_sub__item">Атик</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/661/661a2c8fde9c13c25dada5d9483db9ab.webp"
                                               href="http://kuhni.artis21.ru/navi"
                                               class="catalog_categories_sub__item">Нави</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/26f/26f7d718bce5b79ba6f6a8a2471d25da.webp"
                                               href="http://kuhni.artis21.ru/astrid"
                                               class="catalog_categories_sub__item">Астрид</a>
                                        </div>
                                        <div class="catalog_categories__sub-cols-item">
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/c92/c92fd95c15e08a76e841bc58ed0b509c.webp"
                                               href="http://kuhni.artis21.ru/nova"
                                               class="catalog_categories_sub__item">Нова</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/263/26347f6758e814064261a80e205ffadc.webp"
                                               href="http://kuhni.artis21.ru/kapella"
                                               class="catalog_categories_sub__item">Капелла</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/af4/af40be9adffb4f5ae4174567f44a02fc.webp"
                                               href="http://kuhni.artis21.ru/vega"
                                               class="catalog_categories_sub__item">Вега</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/7a0/7a0d0f3e9cf3982bd1f7026fcc507260.webp"
                                               href="http://kuhni.artis21.ru/Til"
                                               class="catalog_categories_sub__item">Тиль</a>
                                            <a rel="nofollow" data-idsection="984"
                                               data-path="https://www.artis21.ru/upload/resize_cache/webp/iblock/644/644f8af47d870339ff52abb8b50a2ba2.webp"
                                               href="http://kuhni.artis21.ru/atria"
                                               class="catalog_categories_sub__item">Атриа</a>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="catalog_categories__wrap">
                    <div class="catalog_categories__row">


                        <div class="catalog_categories__item">

                            <a href="/catalog/spalni/norden/"
                               style="background: url(https://www.artis21.ru/local/templates/artis21.ru/img/kupe-main.jpg) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/spalni/norden/" data-idsection=""
                                   data-path="" class="catalog_categories__name">
                                    Шкафы-купе                        </a>

                                <div class="catalog_categories__sub">




                                </div>

                            </div>
                        </div>



                        <div class="catalog_categories__item">

                            <a href="/catalog/gostinye/divan/"
                               style="background: url(https://www.artis21.ru/local/templates/artis21.ru/img/divani-main.jpg) no-repeat center center /cover"
                               class="catalog_categories__link catalog_categories__link--cover" id="">
                            </a>


                            <div class="catalog_categories__container">

                                <a href="/catalog/gostinye/divan/" data-idsection=""
                                   data-path="" class="catalog_categories__name">
                                    Мягкая мебель                        </a>

                                <div class="catalog_categories__sub">




                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>












            <div class="advantages side_margin">
                <div class="advantages__item">
                    <i>
                        <svg width="40" height="40" viewBox="0 0 40 40">
                            <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/advantages_icons.svg#icon_1"></use>
                        </svg>
                    </i>
                    5 лет<br>
                    гарантии
                </div>
                <div class="advantages__item">
                    <i>
                        <svg width="45" height="45" viewBox="0 0 45 45">
                            <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/advantages_icons.svg#icon_2"></use>
                        </svg>
                    </i>
                    Рассрочка<br>
                    без переплаты
                </div>
                <div class="advantages__item">
                    <i>
                        <svg width="50" height="50" viewBox="0 0 50 50">
                            <use xlink:href="https://www.artis21.ru/local/templates/artis21.ru/img/advantages_icons.svg#icon_4"></use>
                        </svg>
                    </i>
                    Доставка<br>
                    48 часов
                </div>
            </div>

        </div>



        <div class="info_mp__container bg_gray">
            <div class="container">
                <div class="info_slider js-info_slider">
                    <div class="info_slider__item">
                        <div class="info_slider__container">
                            <div class="info_slider_item__date">24 июля 2023</div>
                            <a href="/about/news/571507.php" class="info_slider_item__name">ВРЕМЯ ПОКУПАТЬ!</a>
                            <a href="/about/news/571507.php" class="info_slider_item__descr">С 28.07 по 30.07 бесплатная доставка, шампанское и подарки всем покупателям!</a>
                        </div>
                    </div>
                    <div class="info_slider__item">
                        <div class="info_slider__container">
                            <div class="info_slider_item__date">18 октября 2022</div>
                            <a href="/about/news/528897.php" class="info_slider_item__name">Новинка! Новый цвет в коллекции для детских!</a>
                            <a href="/about/news/528897.php" class="info_slider_item__descr">Коллекция &quot;Ивиса 2&quot; пополнилась новыми цветами! Спешите увидеть!</a>
                        </div>
                    </div>
                    <div class="info_slider__item">
                        <div class="info_slider__container">
                            <div class="info_slider_item__date">18 октября 2022</div>
                            <a href="/about/news/528895.php" class="info_slider_item__name">Новый фирменный салон</a>
                            <a href="/about/news/528895.php" class="info_slider_item__descr">Уважаемые покупатели! Рады сообщить Вам, что 18.10.2022 г. открылся новый фирменный салон «АРТИС» по адресу: г. Пушкино, Красноармейское шоссе, стр. 104, ТРЦ Пушкино Парк &#40;Мебель&#41;.<br />
                                Ждем вас ежедневно с 10.00 до 22.00</a>
                        </div>
                    </div>
                    <div class="info_slider__item">
                        <div class="info_slider__container">
                            <div class="info_slider_item__date">09 сентября 2022</div>
                            <a href="/about/news/521392.php" class="info_slider_item__name">Новый фирменный салон</a>
                            <a href="/about/news/521392.php" class="info_slider_item__descr">Уважаемые покупатели! Рады сообщить Вам, что 10.09.2022 г. Открылся новый фирменный салон «АРТИС» по адресу: г. Москва, Сиреневый бульвар д31 ТРЦ «София» -1-й этаж. Ждем вас ежедневно с 10.00 до 22.00</a>
                        </div>
                    </div>
                    <div class="info_slider__item">
                        <div class="info_slider__container">
                            <div class="info_slider_item__date">25 августа 2022</div>
                            <a href="/about/news/519006.php" class="info_slider_item__name">Новый цвет в коллекции Равенна!</a>
                            <a href="/about/news/519006.php" class="info_slider_item__descr">Один из самых популярных декоров теперь доступен для нашей классической коллекции.</a>
                        </div>
                    </div>
                    <div class="info_slider__item">
                        <div class="info_slider__container">
                            <div class="info_slider_item__date">08 июля 2022</div>
                            <a href="/about/news/515703.php" class="info_slider_item__name">Представляем новые кухни!</a>
                            <a href="/about/news/515703.php" class="info_slider_item__descr">АРТИС продолжает расширять ассортимент кухонных коллекций. Встречайте новые серии с фрезерованными фасадами: «Капелла» и «Тиль». <br />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="info_slider__more">
                    <a href="/about/news/" class="btn green__btn">Все новости</a>
                </div>
            </div>
        </div>



        <span id="salons_main" style="margin-top: -30px; margin-bottom: 30px"></span>
        <div class="container" >
            <div class="our_salons">
                <div class="title" id="salons">Салоны</div>
                <div class="our_salons__list">
                    <div class="our_salons__item " data-region="/contacts/moskva/">
                        <span>Москва</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/moskovskaya-oblast/">
                        <span>Московская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/sankt-peterburg/">
                        <span>Санкт-Петербург</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/nizhegorodskaya-oblast/">
                        <span>Нижегородская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/kaluzhskaya-oblast/">
                        <span>Калужская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/tverskaya-oblast/">
                        <span>Тверская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/vladimirskaya-oblast/">
                        <span>Владимирская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/ryazanskaya-oblast/">
                        <span>Рязанская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/tulskaya-oblast/">
                        <span>Тульская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/respublika-chuvashiya/">
                        <span>Республика Чувашия</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/voronezhskaya-oblast/">
                        <span>Воронежская область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/lipetskaya-oblast/">
                        <span>Липецкая область</span>
                    </div>
                    <div class="our_salons__item " data-region="/contacts/yaroslavskaya-oblast/">
                        <span>Ярославская область</span>
                    </div>
                </div>
            </div>
        </div>


        <div id="ajax_contacts">
            <script>
                var iObserver = new IntersectionObserver(function(entries) {
                    if (entries[0].isIntersecting === true) {
                        let map = $(entries[0].target);
                        if (!map.hasClass('loaded')) {
                            map.addClass('loaded');
                            $.get('?ajax=Y', function (html) {
                                map.html(html);
                                let js = document.createElement('script'),
                                    js2 = document.createElement('script'),
                                    css = document.createElement('link');
                                js.src = "https://www.artis21.ru/local/templates/artis21.ru/components/bitrix/catalog.section/mainContacts_list/script.js";
                                js2.src = "https://www.artis21.ru/local/templates/.default/components/bitrix/map.yandex.view/.default/script.js";
                                css.href = "https://www.artis21.ru/local/templates/artis21.ru/components/bitrix/catalog.section/mainContacts_list/style.css";
                                css.type = "text/css";
                                css.rel = "stylesheet";
                                document.getElementsByTagName('head')[0].appendChild(js);
                                document.getElementsByTagName('head')[0].appendChild(css);
                                document.getElementsByTagName('head')[0].appendChild(js2);
                            });
                        }
                    }
                }, {threshold: [0]}); // от 0 до 1, % видимой части элемента на экране

                iObserver.observe(document.getElementById('ajax_contacts'));
            </script>
        </div>

        <div class="container">
            <div class="container">
                <p>Корпусная мебель &laquo;АРТИС&raquo; &ndash; это высокое качество, разнообразие моделей и универсальные решения для любого интерьера. Мы предлагаем готовые коллекции для гостиных, спален, детских, прихожих и даже библиотек во всех популярных стилях, от классики до современности. Вы можете купить мебель от производителя в интернет-магазине компании &laquo;АРТИС&raquo;. Наши менеджеры подберут индивидуальную компоновку модулей.</p>

                <h2>О нас</h2>

                <p>Компания &laquo;АРТИС&raquo; основана в 2000 году и на протяжении 21 года создает корпусную мебель, стремясь превосходить все ожидания клиентов. Сейчас мы &ndash; один из ведущих производителей корпусной мебели в России. &laquo;АРТИС&raquo; в цифрах &ndash; это более 1&nbsp;000 сотрудников, 115 фирменных салонов в Москве и регионах, 20&nbsp;000 м&sup2; высокотехнологичного производства. Официальный интернет-магазин мебели от производителя &laquo;АРТИС&raquo; работает с 2008 года.</p>

                <h2>Почему стоит выбрать нас</h2>

                <ul>
                    <li><b>Высокое качество</b>. Готовая мебель от производителя &laquo;АРТИС&raquo; &ndash; это европейская фурнитура Hettich и Blum, итальянские тренды и высокие стандарты экологической безопасности. Мы вдохновляемся знаменитыми зарубежными производителями и постоянно совершенствуем модельный ряд.</li>
                    <li><b>Современные материалы</b>. &laquo;АРТИС&raquo; работает с материалами, которые делают мебель максимально удобной. Это пена с эффектом памяти Memory Foam, нежная и прочная искусственная замша для обивки мягкой мебели, долговечные фасады из МДФ и многое другое.</li>
                    <li><b>Широкий ассортимент</b>. Шкафчики и диваны, туалетные столики, сверхсовременные стеллажи с бесшумными доводчиками или мебель в ретростилистике &ndash; мы создаем решения на любой вкус.</li>
                    <li><b>Продуманный клиентский сервис</b>. &laquo;АРТИС&raquo; &ndash; это срочная доставка в течение 48 часов и сборка в день доставки, пятилетняя гарантия на каждый предмет мебели и безупречная репутация. Забота о клиенте &ndash; наш главный ориентир.</li>
                </ul>

                <p>Если вы хотите купить мебель напрямую от производителя, но не знаете, как она будет смотреться, &ndash; не проблема! Специалисты &laquo;АРТИС&raquo; бесплатно подготовят индивидуальный дизайн-проект и создадут 3D-модель интерьера &ndash; вы увидите все своими глазами. Просто свяжитесь с нами через сайт или по телефону, и мы тут же приступим к подготовке проекта.</p>

            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer_contacts__row">



                    <div class="footer__nav">
                        <div class="footer_nav__item">
			<span class="footer_nav__item__mainLink">
				<a href="/buyers/" style="color: #FFF;">Покупателям</a>
				<div class="footer_nav__item__mainLink__toggle"><span>&rsaquo;</span></div>
			</span>
                            <div class="footer__subnav">
                                <a href="/buyers/delivery/">Доставка</a>
                                <a href="/vyzov-dizaynera/">Вызов дизайнера</a>
                                <a href="/buyers/payment/">Оплата</a>
                                <a href="/buyers/discount/">Дисконтная программа</a>
                                <a href="/buyers/instructions/">Инструкции по сборке</a>
                                <a href="/buyers/garantiya/">Гарантия</a>

                            </div>
                        </div>
                        <div class="footer_nav__item">
			<span class="footer_nav__item__mainLink">
				<a href="/about/" style="color: #FFF;">О компании</a>
				<div class="footer_nav__item__mainLink__toggle"><span>&rsaquo;</span></div>
			</span>
                            <div class="footer__subnav">
                                <a href="/about/materials-and-technologies/">Материалы и технологии</a>
                                <a href="/about/news/">Новости</a>
                                <a href="/vacancy/">Вакансии</a>

                            </div>
                        </div>
                        <div class="footer_nav__item">
			<span class="footer_nav__item__mainLink">
				<a href="/contacts/" style="color: #FFF;">Контакты</a>
				<div class="footer_nav__item__mainLink__toggle"><span>&rsaquo;</span></div>
			</span>
                            <div class="footer__subnav">
                                <a href="/contacts/uchebnyy-tsentr.php">Офис г. Москва</a>
                                <a href="/contacts/golovnoy-ofis-i-proizvodstvo.php">Головной офис и производство</a>
                                <a href="/contacts/suppliers/">Поставщикам</a>

                            </div>
                        </div>
                    </div>
                    <div class="footer__contacts">
                        <div class="footer_contacts__col">
                            <div itemscope itemtype="http://schema.org/Organization" style="display: none;">
                                <div itemprop="name">Корпусная мебель «АРТИС»</div>
                                <link itemprop="url" href="/">
                                <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <span itemprop="postalCode">141441</span>,
                                    <span itemprop="addressCountry">Россия</span>,
                                    <span itemprop="addressRegion">Московская обл.</span>,
                                    <span itemprop="addressLocality">Солнечногорский район, д. Елино</span>,
                                    <span itemprop="streetAddress">ул. Летняя, стр. 1</span>
                                </div>
                                <div>Телефон: <a itemprop="telephone" href="tel:+74959660028">+7 (495) 966-00-28</a></div>
                                <div>Почта: <a itemprop="email" href="mailto:mail@artis21.ru">mail@artis21.ru</a></div>
                            </div>
                            <div class="footer_contacts__head">Головной офис</div>
                            с 09:00 до 20:00<br>
                            <a class="footer_contacts__phone" href="tel:+7 (495) 966-00-28">+7 (495) 966-00-28</a><br>
                            <a href="mailto:mail@artis21.ru">mail@artis21.ru</a>
                        </div>
                        <div class="footer_contacts__col">
                            <div class="footer_contacts__side">
                                <div class="footer_contacts__head">Интернет-магазин</div>
                                с 10:00 до 21:00<br>
                                <a class="footer_contacts__phone" href="tel:+7 (495) 720-26-48">+7 (495) 720-26-48</a><br>
                                <a href="mailto:sales@artis21.ru">sales@artis21.ru</a><br>
                            </div>
                            <div class="footer_contacts__side">
                                <a href="/buyers/feedback/" class="btn green_transparent__btn footer_contacts__btn">Обратная связь</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_copyright__row">
                    <div class="footer__copyright">
                        © 2000 – 2023 Корпусная мебель «АРТИС»<br>
                        <a href="/politics/">Политика конфиденциальности</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/sitemap/">Карта сайта</a>
                    </div>
                    <div class="footer__copyright">
                        Создание сайта —<br>
                        компания <a rel="nofollow" href="https://pixelplus.ru">«Пиксель Плюс»</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
