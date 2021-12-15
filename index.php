<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/parts/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/parts/nav.php';
?>
<main>
    <section class="section-1">
        <div class="container">
            <div class="text_left">
                <div class="text_size-48">
                    <strong>Производство и продажа изделий из графита</strong>
                </div>
                <div class="text text_size-20">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibu
                </div>
            </div>
            <div class="form-1 text">
                <div>
                    <form class="needs-validation" novalidate>
                        <legend class="text_legend text_size-20">
                            <div>Нужна консультация?</div>
                            <div>Заполните форму и мы перезвоним!</div>
                        </legend>
                        <div class="form-group">
                            <input type="text" name="name" class=" input_name  form-control text_size-14"  placeholder="Ваше имя" required>
                            <div class="invalid-feedback">
                                Поле пустое!
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class=" input_phone form-control text_size-14" placeholder="Номер телефона" required>
                            <div class="invalid-feedback">
                                Поле пустое!
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input check-input" type="checkbox" name="checkbox" id="condition" value="agree" required>
                            <label class="form-check-label text_size-12" for="condition">Принимаю условия политики конфиденциальности</label>
                            <div class="invalid-feedback">
                                Вы должны принять перед отправкой.
                            </div>
                        </div>
                        <div class="form-group form_butn">
                            <div  class="btn text_btn text_size-18 form_butn-submit">Заказать звонок</div>  
                            <div class="btn-shadow"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section-2">
        <div class="container">
            <div class="title-1">
                <div class="text text_size-36">Наша <strong>продукция</strong></div>
                <img class="line" src="image/right_line.png"/>
            </div>
            <div class="row list_link-1">    
                <a class="col" href="/"><div class="col link-1 img-1"><div class="text_size-20"><strong>Графит природный</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-2"><div class="text_size-20"><strong>Графит искусственный</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-3"><div class="text_size-20"><strong>Изделия из графита</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-4"><div class="text_size-20"><strong>Изделия футеровочные</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-5"><div class="text_size-20"><strong>Бой графита</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-6"><div class="text_size-20"><strong>Антифрикционный графит</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-7"><div class="text_size-20"><strong>Электроды графитированные</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-8"><div class="text_size-20"><strong>Препараты коллоидно-графитовые</strong></div></div></a>
                <a class="col" href="/"><div class="col link-1 img-9"><div class="text_size-20"><strong>Угольные электроды</strong></div></div></a>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="title-1">
                <div class="text text_size-36">Наши <strong>приемущества</strong></div>
                <img class="line" src="image/right_line.png"/>
            </div>
            <div class="row text text_size-20">
                <div class="col"><img src="/image/icon1_1.png"/><div>Более 20 <strong>лет</strong> на рынке</div></div>
                <div class="col"><img src="/image/icon2_2.png"/><div>Высокое качество продукции</div></div>
                <div class="col"><img src="/image/icon3_3.png"/><div><strong>300+</strong> тн отгрузок в месяц</div></div>
                <div class="col"><img src="/image/icon4_4.png"/><div>Доставка по России и СНГ</div></div>
            </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="title-1">
                <div class="text text_size-36">Нам доверяют <strong>лучшие</strong></div>
                <img class="line" src="image/right_line.png"/>
            </div>
            <div class="slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner1.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner2.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner3.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner4.png"/></div></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner1.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner2.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner3.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner4.png"/></div></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner1.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner2.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner3.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner4.png"/></div></a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner1.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner2.png"/></div></a>
                                <a class="col" href="/"><div class="col col-parthner"><img src="/image/partner3.png"/></div></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-5">
        <div class="container">  
            <div class="contacts_form">
                <div>
                    <div class="title-1">
                        <div class="text text_size-36">Контакты</div>
                        <img class="line" src="image/right_line.png"/>
                    </div>
                    <div class="info">
                        <div>
                            <img src="image/Group 23.png"/>
                            <div class="text">
                                <div class="text_size-16"><a href="mailto:info@graphitservis.ru">info@graphitservis.ru</a></div>
                            </div>
                        </div>
                        <div>
                            <img src="image/Group 22.png"/>
                            <div class="text">
                                <div class="text_size-16"><a href="tel:+73517299915">+7 (351) 729-99-15</a></div>
                            </div>
                        </div>
                        <div>
                            <img src="image/icon.png"/>
                            <div class="text">
                                <div class="text_size-16"><a href="/contacts.php">г. Челябинск, ул. С.Юлаева, 25</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="text text_size-18">
                        Наши филиалы в <strong >других городах России</strong>
                    </div>
                    
                    <div>
                        <div class="text text_size-16 city">
                            <div><a href="/contacts.php">Москва</a></div>
                            <div><a href="/contacts.php">Санкт-Петербург</a></div>
                            <div><a href="/contacts.php">Ростов-на-Дону</a></div>
                            <div><a href="/contacts.php">Екатеринбург</a></div>
                            <div><a href="/contacts.php">Пермь</a></div>
                            <div><a href="/contacts.php">Тюмень</a></div>
                        </div>
                        <div class="text text_size-16 city">
                            <div><a href="/contacts.php">Нижний Новгород</a></div>
                            <div><a href="/contacts.php">Самара</a></div>
                            <div><a href="/contacts.php">Воронеж</a></div>
                            <div><a href="/contacts.php">Казань</a></div>
                            <div><a href="/contacts.php">Волгоград</a></div>
                            <div><a href="/contacts.php">Казахстан</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/parts/footer.php";
?>