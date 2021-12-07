<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="css/style.css">

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>        
        <script src="js/custom.js"></script>
        <title></title>
    </head>
    <body>
        <header class="header-backdrop">
            <div class="container">
                <div class="header">
                    <a href="/">
                        <div>
                            <img src="image/graphitservis_logo 1.png"/>
                        </div>
                    </a>
                    <div class="info">
                        <div>
                            <img src="image/Group 23.png"/>
                            <div class="text">
                                <div class="text_size-16"><a href="mailto:info@graphitservis.ru">info@graphitservis.ru</a></div>
                                <div class="text_size-12">
                                    <ul class="green_marker">
                                        <li><span>пн-вс 9:00-19:00</span></li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="image/Group 22.png"/>
                            <div class="text">
                                <div class="text_size-16"><a href="tel:+73517299915">+7 (351) 729-99-15</a></div>
                                <div class="text_size-12">
                                    <ul class="green_marker">
                                        <li><span>пн-вс 9:00-19:00</span></li>
                                    </ul>                                      
                                </div>
                            </div>
                        </div>
                        <div>
                            <img src="image/icon.png"/>
                            <div class="text">
                                <a href="/contacts.php">
                                    <div class="text_size-16">г. Челябинск,</div>
                                    <div class="text_size-16">ул. С.Юлаева, 25</div>
                                </a>    
                            </div>
                        </div>
                    </div>
                    <div class="header_butn">
                        <div class="btn text_btn text_size-18 header_butn-submit">Заказать звонок</div>
                        <div class="btn-shadow"></div>
                    </div>
                    <div class="modal fade" id="calling" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg modal-dialog-centered">
							<div class="modal-content">
                                <div class="modal-body">
                                    <div class="form text">
                                        <div>
                                            <form class="needs-validation" novalidate>
                                                <button type="button" id="close" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                                <legend class="text_legend text_size-20">
                                                    <div>Нужна консультация?</div>
                                                    <div>Заполните форму и мы перезвоним!</div>
                                                </legend>
                                                <div class="form-group">
                                                    <input type="text" name="name" class="input_name  form-control text_size-14"  placeholder="Ваше имя" required>
                                                    <div class="invalid-feedback">
                                                        Поле пустое!
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="tel" name="phone" class="input_phone form-control text_size-14" placeholder="Номер телефона" required>
                                                    <div class="invalid-feedback">
                                                        Поле пустое!
                                                    </div>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input class="form-check-input check-input" type="checkbox" name="checkbox" id="condition" value="agree" required>
                                                    <label class="form-check-label" for="condition"><span class="text_size-12">Принимаю условия политики конфиденциальности</span></label>
                                                    <div class="invalid-feedback">
                                                        Вы должны принять перед отправкой.
                                                    </div>
                                                </div>
                                                <div class="form-group form_butn">
                                                    <div class="btn text_btn text_size-18 form_butn-submit">Заказать звонок</div>  
                                                    <div class="btn-shadow"></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
                    <div class="modal fade" id="sending" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="form text">
            
                                        <div class="answer_content">
                                            <form>
                                                <button type="button" id="close" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                                <img src="image/check48.png"/>
                                                <p class="text_size-30">Успешно отправлено!</p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>