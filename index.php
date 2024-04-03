<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="preload" as="image" href="/img/preloader/flask_anton222.gif">
    <link rel="stylesheet" href="css/preLoader.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Oswald:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/repeating-min.css">
    <link rel="stylesheet" href="css/modules-min.css">
    <link rel="stylesheet" href="css/style-min.css">
    <title>Retention</title>
</head>

<body>
    <div class="preloader">
        <div class="preloader_container none">
            <div class="preloader_coins ">
                <div class="preloader_coins-item">
                    <img src="img/preloader/coint.png" alt="">
                    <img src="img/preloader/coint_dollar.png" class='preloader_coint_dollar' alt="">
                </div>
                <div class="preloader_coins-item">
                    <img src="img/preloader/coint.png" alt="">
                    <img src="img/preloader/coint_dollar.png" class='preloader_coint_dollar' alt="">
                </div>
                <div class="preloader_coins-item">
                    <img src="img/preloader/coint.png" alt="">
                    <img src="img/preloader/coint_dollar.png" class='preloader_coint_dollar' alt="">
                </div>
                <div class="preloader_coins-item">
                    <img src="img/preloader/coint.png" alt="">
                    <img src="img/preloader/coint_dollar.png" class='preloader_coint_dollar' alt="">
                </div>
                <div class="preloader_coins-item">
                    <img src="img/preloader/coint.png" alt="">
                    <img src="img/preloader/coint_dollar.png" class='preloader_coint_dollar' alt="">
                </div>
                <div class="preloader_coins-item">
                    <img src="img/preloader/coint.png" alt="">
                    <img src="img/preloader/coint_dollar.png" class='preloader_coint_dollar' alt="">
                </div>
            </div>
            <div class="preloader_flasks ">
                <img src="img/preloader/flask_orange.png" alt="">
                <img src="img/preloader/flask_orange.png" id="preloader_flasks_shadow_image" alt="">
                <div class="loader-bg"></div>
                <div class="loader-bg-two"></div>
            </div>
        </div>
    </div>
    <div class='wraper y-hidden'>
        <header class="header">
            <div class="header_menu">
                <div>
                    <div class="header_menu-icon">
                        <img loading="lazy" data-src="img/header/menu.svg" src="" alt="">
                    </div>
                    <h5 class="header_menu-text">меню</h5>
                </div>
            </div>
            <div class="header_container">
                <div class="header_logo">
                    <img loading="lazy" data-src="img/header/logo.svg" src="" alt="">
                    <img loading="lazy" data-src="img/header/logo_under.svg" src="" alt="">
                </div>
                <div class="header_languages">
                    <h5 class="header_languages-languag languages_active" id="languag_russian">ru</h5>
                    <div class="header_languages-line"></div>
                    <h5 class="header_languages-languag" id="languag_english">en</h5>
                </div>
            </div>
        </header>
        <setion class="presentation">
            <div class="presentation_container">
                <img loading="lazy" data-src="img/presentation/Grid.png" src="" class="presentation_grid" alt="">
                <div class="presentation_tv">
                    <img loading="lazy" data-src="img/presentation/tv.png" src="" class="presentation_tv-tv" alt="">
                    <div class="presentation_tv-star">
                        <div>
                            <img loading="lazy" data-src="img/presentation/star.svg" src="" class="star_cicle" alt="">
                            <img loading="lazy" data-src="img/presentation/words.svg" data-translation="img/presentation/en/words.svg" src="" class="star_words translation_image" alt="">
                            <img loading="lazy" data-src="img/presentation/arrow-down-circle.svg" src="" class="star_arrow" alt="">
                            <img loading="lazy" data-src="img/presentation/cicle.svg" src="" class="star_min_cicle" alt="">
                        </div>
                    </div>
                    <div class="presentation_tv-button"></div>
                </div>
                <div class="presentation_content">
                    <div class="presentation_content-title">
                        <h2>We don’t brew </h2>
                        <div class="presentation_slider_container">
                            <h2>we gain</h2>
                            <div class="presentation_slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <h2>Conversion</h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2>money</h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2>Rate</h2>
                                    </div>
                                    <div class="swiper-slide">
                                        <h2>Trust</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="presentation_content-line"></div>
                    <div class="presentation_content-text">
                        <p>Работаем в нишах:</p>
                        <p>→ ecommerce,</p>
                        <p>→ IT-продуктовые компании (включая хайриск),</p>
                        <p>→ Worldwide B2B</p>
                    </div>
                    <button class="button_support">
                        <h4>Связаться с нами</h4>
                        <img loading="lazy" data-src="img/button_support_icon.svg" src="" alt="">
                    </button>
                </div>
            </div>
        </setion>
        <section class="retention">
            <div class="retention_title">
                <h2>ЧТО ТАКОЕ РЕТЕНШН?</h2>
            </div>
            <div class="retention_buttons">
                <div class="retention_button retention_button-active" data-retentioButton='0' onclick="">
                    <h4>Email</h4>
                </div>
                <div class="retention_button " data-retentioButton='1' onclick="ipnoneMelody()">
                    <h4>мессенджеры</h4>
                </div>
                <div class="retention_button" data-retentioButton='2' onclick="ipnoneMelody()">
                    <h4>обзвоны</h4>
                </div>
                <div class="retention_button" data-retentioButton='3' onclick="ipnoneMelody()">
                    <h4>sms</h4>
                </div>
                <div class="retention_button" data-retentioButton='4' onclick="ipnoneMelody()">
                    <h4>автоматизация процессов</h4>
                </div>
                <div class="retention_button" data-retentioButton='5' onclick="ipnoneMelody()">
                    <h4>VIP</h4>
                </div>
                <div class="retention_button" data-retentioButton='6' onclick="ipnoneMelody()">
                    <h4>push</h4>
                </div>
            </div>
            <script>
                function ipnoneMelody() {
                    var audioIphone = new Audio();
                    audioIphone.src = 'sound/iphone.mp3';
                    audioIphone.volume = 0
                    audioIphone.muted = true
                    console.log(audioIphone)
                    audioIphone.autoplay = true;
                }
            </script>
            <div class="retention_images">
                <div class="retention_images-background">
                    <img data-src="img/retention/image_background.png" src="" alt="">
                </div>
                <div class="retention_images-slider swiper">
                    <div class=" swiper-wrapper">
                        <div class="retention_slide swiper-slide" data-retentioSlide="0">
                            <div class="retention_slide-item">
                                <img data-src="img/retention/retention_email.svg" src="" data-translation="img/retention/en/retention_email.svg" class="ret_desc  ret_desc_animation translation_image" alt="">
                            </div>
                        </div>
                        <div class="retention_slide swiper-slide" data-retentioSlide="1">
                            <div class="retention_slide-item retention_messager">
                                <img data-src="img/retention/retention_messager-min.png" data-translation="img/retention/en/retention_messager.png" src="" class="ret_desc translation_image " alt="">
                                <img data-src="img/retention/retention_call.svg" src="" class="mob  " alt="">
                            </div>
                        </div>
                        <div class="retention_slide swiper-slide" data-retentioSlide="2">
                            <div class="retention_slide-item">
                                <img data-src="img/retention/retention_call.svg" data-translation="img/retention/en/retention_call.svg" src="" class="ret_desc  translation_image" alt="">
                            </div>
                        </div>
                        <div class="retention_slide swiper-slide" data-retentioSlide="3">
                            <div class="retention_slide-item">
                                <img data-src="img/retention/retention_sms.svg" data-translation="img/retention/en/retention_sms.svg" src="img/retention/en/retention_sms.svg" class="ret_desc  translation_image" alt="">
                            </div>
                        </div>
                        <div class="retention_slide swiper-slide" data-retentioSlide="4">
                            <div class="retention_slide-item retention_avtomatization">
                                <img data-src="img/retention/prosses_avtomatization-min.png" src="" class="ret_desc " alt="">
                            </div>
                        </div>
                        <div class="retention_slide swiper-slide" data-retentioSlide="5">
                            <div class="retention_slide-item">
                                <img data-src="img/retention/retention_push.svg" data-translation="img/retention/en/retention_push.svg" src="" class="ret_desc ret_mob translation_image" alt="">
                            </div>
                        </div>
                        <div class="retention_slide swiper-slide" data-retentioSlide="6">
                            <div class="retention_slide-item">
                                <img data-src="img/retention/retention_vip.svg" data-translation="img/retention/en/retention_vip.svg" src="" class="ret_desc ret_mob translation_image" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="retention_content">
                <div class="retention_content-slider swiper">
                    <div class=" swiper-wrapper">
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>01</h3>
                                <h3>Email</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>05</h3>
                                <h3>мессенджеры</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>02</h3>
                                <h3>Обзвоны</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>04</h3>
                                <h3>sms</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>05</h3>
                                <h3>автоматизация процессов</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>06</h3>
                                <h3>push</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                        <div class="retention_text swiper-slide">
                            <div class="retention_text-title ">
                                <h3>07</h3>
                                <h3>vip</h3>
                            </div>
                            <div class="retention_text-description">
                                <p>Обзвоны клиентской базы достаточно важный элемент работы Retention направления
                                    который безусловно увеличивает конечный результат.
                                    Особенно важно, фиксировать customer lifecycle и постоянно поддерживать его в
                                    актуальном состоянии.
                                    За время работы, мы выявили тенденцию, что определенная часть клиентов поддерживает
                                    общение с продуктом исключительно по телефону. Более того, часть из них возвращается
                                    только после повторных звонков.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="retention_navigation">
                    <div class="retention_progress-line"></div>
                    <div class="retention_navigation-prev">
                        <h5 id="retention_current"></h5>
                        <div class="slider_navigation-prev" id="retention_prev"><img data-src="img/arrow_slider.svg" src="" alt=""></div>
                        <h5>prev</h5>
                    </div>
                    <div class="retention_navigation-next">
                        <h5 id="retention_total"></h5>
                        <div class="slider_navigation-next" id="retention_next">
                            <svg class="retention_progress_ring">
                                <circle class="retention_progress_ring-circle" />
                                <img data-src="img/arrow_slider_white.svg" src="" alt="">
                            </svg>
                        </div>
                        <h5>next</h5>
                    </div>
                </div>
            </div>
        </section>
        <div class="retention_notifications">
            <div class="retention_notifications-item " data-notification='0'>
                <img data-src="img/retention/retention_email.svg" data-translation="img/retention/en/retention_email.svg" src="" alt="" class="desc translation_image" id='mobile_email_notification '>
                <img data-src="img/retention/mob/retention_email.svg" data-translation="img/retention/mob/en/retention_email.svg" src="" alt="" class="mob translation_image">
            </div>
            <div class="retention_notifications-item none_message" data-notification='1'>
                <img data-src="img/retention/retention_messager-min.png" data-translation="img/retention/en/retention_messager.png" src="" class="desc translation_image" alt="">
                <img data-src="img/retention/mob/retention_call.svg" data-translation="img/retention/mob/en/retention_call.svg" src="" class="mob translation_image" alt="">
            </div>
            <div class="retention_notifications-item none" data-notification='2'>
                <img data-src="img/retention/retention_call.svg" data-translation="img/retention/en/retention_call.svg" src="" class="desc translation_image" alt="">
                <img data-src="img/retention/mob/retention_call.svg" data-translation="img/retention/mob/en/retention_call.svg" src="" class="mob translation_image" alt="">
            </div>
            <div class="retention_notifications-item none" data-notification='3'>
                <img data-src="img/retention/retention_sms.svg" data-translation="img/retention/en/retention_sms.svg" src="" class="desc translation_image" alt="">
                <img data-src="img/retention/mob/retention_sms.svg" data-translation="img/retention/mob/en/retention_sms.svg" src="" class="mob translation_image" alt="">
            </div>
            <div class="retention_notifications-item " data-notification='4'>
                <img alt="" class='none'>
            </div>
            <div class="retention_notifications-item none" data-notification='5'>
                <img data-src="img/retention/retention_push.svg" data-translation="img/retention/en/retention_push.svg" src="" class="desc translation_image" alt="">
                <img data-src="img/retention/mob/retention_push.svg" data-translation="img/retention/mob/en/retention_push.svg" src="" class="mob translation_image" alt="">
            </div>
            <div class="retention_notifications-item none" data-notification='6'>
                <img data-src="img/retention/retention_vip.svg" data-translation="img/retention/en/retention_vip.svg" src="" class="desc translation_image" alt="">
                <img data-src="img/retention/mob/retention_vip.svg" data-translation="img/retention/mob/en/retention_vip.svg" src="" class="mob translation_image" alt="">
            </div>
        </div>
        <section class="profit ">
            <div class="profit_content">
                <h2>Что это даст ВАМ?</h2>
                <img loading="lazy" data-src="img/arrow.svg" src="" class="profit_content-line desc">
                <img loading="lazy" data-src="img/arrow_mobile.svg" src="" class="profit_content-line mob">
                <div class="profit_content-navigation">
                    <div class="slider_navigation-prev"><img loading="lazy" data-src="img/arrow_slider.svg" src="" alt=""></div>
                    <div class="slider_navigation-next"><img loading="lazy" data-src="img/arrow_slider.svg" src="" alt=""></div>
                </div>
            </div>
            <div class="profit_slider swiper">
                <div class=" swiper-wrapper">
                    <div class="profit_slider-slide swiper-slide">
                        <h5 class="profit_slide-nuber ">01</h5>
                        <img loading="lazy" data-src="img/profit/1-min.png" src="" alt="" class="profit_slide-img">
                        <h3 class="profit_slide-text">Реактивация старых пользователей/клиентов</h3>
                    </div>
                    <div class="profit_slider-slide swiper-slide ">
                        <h5 class="profit_slide-nuber">02</h5>
                        <img loading="lazy" data-src="img/profit/2-min.png" src="" alt="" class="profit_slide-img">
                        <h3 class="profit_slide-text">Автоматизация процессов взаимодействия с клиентами </h3>
                    </div>
                    <div class="profit_slider-slide swiper-slide">
                        <h5 class="profit_slide-nuber">03</h5>
                        <img loading="lazy" data-src="img/profit/3-min.png" src="" alt="" class="profit_slide-img">
                        <h3 class="profit_slide-text">Отдельная работа с VIP клиентами</h3>
                    </div>
                    <div class="profit_slider-slide swiper-slide">
                        <h5 class="profit_slide-nuber ">04</h5>
                        <img loading="lazy" data-src="img/profit/4-min.png" src="" alt="" class="profit_slide-img">
                        <h3 class="profit_slide-text">Увеличение процента повторных покупок/депозитов</h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="cases">
            <div class="cases_left">
                <div class="cases_left-header">
                    <h2>наши кейсы</h2>
                    <div class="cases_progress">
                        <div class="cases_progress-slider swiper">
                            <div class="swiper-wrapper">
                                <h2 class="swiper-slide">01</h2>
                                <h2 class="swiper-slide">02</h2>
                                <h2 class="swiper-slide">03</h2>
                            </div>
                        </div>
                        <div class="cases_progress-line"></div>
                        <h2 class='cases_fraction-total'></h2>
                    </div>
                </div>
                <div class="cases_left-navigation">
                    <div class="cases_navigation">
                        <h5 class="cases_fraction-current"></h5>
                        <div class="slider_navigation-prev"><img data-src="img/arrow_slider.svg" src="" alt=""></div>
                        <h5>prev</h5>
                    </div>
                    <div class="cases_navigation">
                        <h5 class='cases_fraction-total'></h5>
                        <div class="slider_navigation-next ">
                            <svg class="progress_ring">
                                <circle class="progress_ring-circle" />
                                <img data-src="img/arrow_slider_white.svg" src="" alt="">
                            </svg>
                        </div>
                        <h5>next</h5>
                    </div>
                </div>
                <div class="cases_left-logo">
                    <div class="cases_logoSlider swiper">
                        <div class=" swiper-wrapper">
                            <div class="swiper-slide"><img data-src="img/casses/logo_casino.svg" src="" class='cases_logo' id="cases_picture_casino" alt=""></div>
                            <div class="swiper-slide"><img data-src="img/casses/logo_monkeys.svg" src="" class='cases_logo' id="cases_picture_monkeys" alt=""></div>
                            <div class="swiper-slide"><img data-src="img/casses/logo_betmatch.svg" src="" class='cases_logo' id="cases_picture_betmatch" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cases_slide-background">
                <img data-src="img/casses/background_casino.svg" src="" class="cases_background_active" alt="">
                <img data-src="img/casses/background_monkeys.svg" src="" alt="">
                <img data-src="img/casses/background_betmatch.svg" src="" alt="">
            </div>
            <div class="cases_mobile_navigation">
                <p class="cases_mobile_navigation-realization">Реализация</p>
                <p class="cases_mobile_navigation-result mobile_navigation_active">Результат</p>
            </div>
            <div class="cases_slider swiper">
                <div class=" swiper-wrapper">

                    <div class="cases_slider-slide swiper-slide" id="cases_casino">
                        <div class="cases_realization cases_slide-text">
                            <h4>Реализация</h4>
                            <p>Подготовили бонусную сетку для реактивации клиентов с помощью телефонии,
                                утвердили сегменты для реактивации. Дополнительно провели аудит по
                                направлениям саппорт и ретеншн, внесли предложения по улучшению
                                интерактивов проекта, разработали внутреннюю программу лояльности,
                                составили план VIP ретеншна, email-кампаний, включая дизайн писем
                                и копирайт по топовым гео, улучшили воронку регистрации и депозитов</p>
                        </div>
                        <div class="cases_result cases_slide-text">
                            <h4>Результат</h4>
                            <p>Внедрение программы лояльности и настройка телефонии помогли повысить
                                коэффициент удержания игроков в 1,6 раза, звонки более чем с 10 000 клиентов
                                Благодаря оптимизации воронки, конверсия выросла на 47%
                            </p>
                        </div>
                        <div class="cases_slide-picture">
                            <img data-src="img/casses/picture_casino-next.png" src="" alt="">
                        </div>
                    </div>
                    <div class="cases_slider-slide swiper-slide" id="cases_monkey">
                        <div class="cases_realization cases_slide-text">
                            <h4>Реализация</h4>
                            <p>Составили полную программу по каналам коммуникации для ретеншна пользователей и
                                адаптировали сайт
                                под разные гео по предпочтениям игроков. Внедрили новые акции и соревнования под
                                игроков,
                                ставящих на лайв и слоты. Разработали программу по обработке сегмента VIP и план по
                                получению
                                крупных клиентов из актива.
                            </p>
                        </div>
                        <div class="cases_result cases_slide-text">
                            <h4>Результат</h4>
                            <p>Добавили 4 дополнительных каналов связи, чем снизили показатель неактива на 43%/месяц
                                Увеличили время сессии игроков на сайте на 22%
                                Частота депозитов сегмента VIP повысилась вдвое/месяц
                            </p>
                        </div>
                        <div class="cases_slide-picture">
                            <img data-src="img/casses/picture_monkeys.png" src="" alt="">
                        </div>
                    </div>
                    <div class="cases_slider-slide swiper-slide" id="cases_betmatch">
                        <div class="cases_realization cases_slide-text">
                            <h4>Реализация</h4>
                            <p>Реализация Retention направления и оперирование продуктом под ключ. Была разработана
                                мультиязычная
                                автоматизированная цепочка email-писем с учетом разных сценариев customer lifecycle.
                                Параллельно
                                запустили работу через мессенджеры в полу автоматическом режиме. Особое внимание было
                                уделено
                                VIP-сегменту игроков, так как на момент начала партнерства, продукт имел пул игроков.
                                Ввели более чем 6 автоматизированных бонусов с тех. описанием логики работы и
                                учетом risk management. Разработка, запуск и ведение акционных кампаний в
                                период с июля 2019 года по август 2020 включительно.
                            </p>
                        </div>
                        <div class="cases_result cases_slide-text">
                            <h4>Результат</h4>
                            <p>Анализируя конкретно retention деятельность, ежемесячный conversion rate держался в
                                промежутке 30-40%.
                                Геометрический скачек пользовательской активности произошел в период с января по май
                                2020 г.
                                Ситуация с появлением COVID-19 в этот период времени позитивно повлияла на активность
                                чем мы успешно воспользовались ведя активную акционную деятельность,
                                массовые рассылки пользовательской базы и персональную работу с VIP-клиентами.
                                Дополнительно как результат - возврат более 40% VIP-игроков из клиентской базы
                            </p>
                        </div>
                        <div class="cases_slide-picture">
                            <img data-src="img/casses/picture_betmatch-min.png" src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pupUp_overlay none">
            <div class="pupUp_container">
                <img loading="lazy" loading="lazy" data-src="img/close.svg" src="" class="popUp_close close" alt="">
                <img loading="lazy" loading="lazy" data-src="img/popUpLogo.svg" src="" class="popUp_logo " alt="">
                <h3>Благодарим за <br> проявленный интерес</h3>
                <p>Будем рады <br> сотрудничать с вами <img loading="lazy" loading="lazy" data-src="img/handshake.png" src="" alt=""></p>

                <form class="popUp_form" action="" method="POST">
                    <input type="text" value='' name="name" placeholder="Имя">
                    <input type="text" value='' name="contact" placeholder="Контакт ( Email / telegram/ номер телефона)">
                    <button>
                        <div class="button_support">
                            <h4>Вперед</h4>
                            <img loading="lazy" loading="lazy" data-src="img/button_support_icon_ready.svg" src="" alt="">
                        </div>
                    </button>
                </form>
            </div>
        </div>
        <section class="contact">
            <div class="contact_title">
                <h2>Возникли вопросы? </h2>
                <h2>Свяжитесь с нами </h2>
            </div>
            <div class="contact_form">
                <form action="" method="POST" class="contact_form-form">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="contact" placeholder="Контакт ( Email / telegram/ номер телефона)">
                    <button type="submit" readonly class="button_support">
                        <h4>Связаться с нами</h4>
                        <img loading="lazy" loading="lazy" data-src="img/button_support_icon.svg" src="" alt="">
                    </button>
                </form>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script>
                    $(".contact_form-form").submit(function(e) {
                        e.preventDefault();
                        var form_data = $(this).serialize();
                        $.ajax({
                            method: 'POST',
                            url: 'https://formsubmit.co/ajax/samsonigorevich@gmail.com',

                            dataType: 'json',
                            accepts: 'application/json',
                            data: form_data,
                            success: (data) => console.log(data),
                            error: (err) => console.log(err),
                        });
                    });
                </script>
            </div>
            <div class="contact_information-download">
                <img loading="lazy" data-src="img/contact/downloas_star.svg" src="" alt="">
                <img loading="lazy" data-src="img/contact/download_worsd.svg" data-translation="img/contact/en/download_worsd.svg" src="" class="translation_image" alt="">
                <img loading="lazy" loading="lazy" data-src="img/contact/download-cloud.svg" src="" alt="">
                <div class="contact_download-cicle">
                    <img loading="lazy" data-src="img/contact/download_back_circle.svg" src="" alt="">
                    <img loading="lazy" data-src="img/contact/download_back_circle_big.svg" src="" alt="">
                    <img loading="lazy" data-src="img/contact/download_back_circle_1024.svg" src="" alt="">
                </div>
                <a href="#"></a>
            </div>
            <div class="contact_information-contacts">
                <div class="information">
                    <a href="mailto:general@gainlab.tech">
                        <div class="information_img">
                            <img loading="lazy" loading="lazy" data-src="img/contact/email.svg" src="" alt="">
                        </div>
                        <p class="information_title">email</p>
                        <p class="information_link"><a href="mailto:general@gainlab.tech">general@gainlab.tech</a></p>
                    </a>
                </div>
                <div class="information">
                    <a href="https://t.me/eeniemo" target="_blank">
                        <div class="information_img">
                            <img loading="lazy" loading="lazy" data-src="img/contact/telegram.svg" src="" alt="">
                        </div>
                        <p class="information_title">Телеграм</p>
                        <p class="information_link"><a href="https://t.me/eeniemo" target="_blank">t.me/eeniemo →</a>
                        </p>
                    </a>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer_logo">
                <img loading="lazy" loading="lazy" data-src="img/popUpLogo.svg" src="" alt="">
            </div>
            <ul class="footer_menu">
                <li data-menuAnchor=".retention">ЧТО ТАКОЕ РЕТЕНШН?</li>
                <li data-menuAnchor=".profit">Что это даст ВАМ?</li>
                <li data-menuAnchor=".cases">Наши кейсы</li>
                <li data-menuAnchor=".contact">Свяжитесь с нами</li>
            </ul>
        </footer>
        <div class="menu ">
            <div class="menu_close">
                <img loading="lazy" loading="lazy" data-src="img/close.svg" src="" class="close" alt="">
                <h5>ЗАкрыть</h5>
            </div>
            <div class="menu_logo">
                <img loading="lazy" loading="lazy" data-src="img/popUpLogo.svg" src="" alt="">
            </div>
            <ul class="menu_list">
                <li data-menuAnchor=".retention">ЧТО ТАКОЕ РЕТЕНШН?</li>
                <li data-menuAnchor=".profit">Что это даст ВАМ?</li>
                <li data-menuAnchor=".cases">Наши кейсы</li>
                <li data-menuAnchor=".contact">Свяжитесь с нами</li>
            </ul>
        </div>
    </div>
    <script>
        var src = 'https://gainlab.tech/img/preloader/load_background2.png';
        var img = document.createElement("img");
        var allImagesWebSite = document.querySelectorAll('.wraper img')
        var preloaderContainer = document.querySelector('.preloader_container')
        var loaderBg = document.querySelector('.loader-bg')
        var flasks = document.querySelector('.preloader_flasks')
        var imageInterval = setInterval(() => {
            if (img.complete) {
                preloaderContainer.classList.remove('none')
                loaderBg.style.backgroundImage = "url('https://gainlab.tech/img/preloader/load_background2.png')"
                loaderBg.style.animationName = 'wave'
                clearInterval(imageInterval)

                for (var i = 0; i < allImagesWebSite.length; i++) {
                    allImagesWebSite[i].src = allImagesWebSite[i].dataset.src
                }
            }
        }, 10)
    </script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="js/retention.js"></script>
    <script src="js/modules.js"></script>
    <script src="js/presentation.js"></script>
    <script src="js/profit.js"></script>
    <script src="js/cassec.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/translateDB.js"></script>
    <script src="js/translation.js"></script>
    <script src="js/preLoader.js"></script>
    <script src="js/script.js"></script>
</body>

</html>