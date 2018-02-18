<?php
include "header.php";
?>

    <div class="content">

        <div class="h1">
            КОНТАКТЫ
        </div>

        <div style="text-align: center">
            <div class="h3">
                Наш адрес:
            </div>
            <br>
            <div>
                Г. Москва. Каширский проезд, д13.
            </div>
            <br>
            <div>
                Проходная Технопарка <b><u><a href="http://tpmgm.ru">"МосГорМаш"</a></u></b>.
            </div>
            <br>
            <div class="text-danger">
                <b>ВНИМАНИЕ! Необходим предварительный заказ электронного пропуска.</b>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: center">
                <div class="zoom">
                    <img src="images/contacts/img_2.jpg" class="img img-responsive table-bordered" alt=""/>
                </div>
                <br>
                <b>Расположение на территории Технопарка</b>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: center">
                <div class="zoom">
                    <img src="images/contacts/img_1.jpg" class="img img-responsive table-bordered" alt=""/>
                </div>
                <br>
                <b>Доехать на машине</b>
            </div>
        </div>
        <br>

        <div class="h3" style="text-align: center">
            <u>Мы на Яндекс.Карте</u>
        </div>
        <br>
        <div>
            <script type="text/javascript">
                ymaps.ready(function () {
                    var MainMap = new ymaps.Map("MainMap", {

                        center: [55.76, 37.64],
                        zoom: 10,
                        type: "yandex#map"

                    });
                    MainMap.controls.add("typeSelector").add("zoomControl");


                });
            </script>

            <div id="MainMap" style="width:100%;height:400px;"></div>
        </div>

        <br>

        <div>
            Телефоны (будни с 8:00 до 18:00)
        </div>
        <br>
        <div>
            +7 (495) 543-91-93
        </div>
        <div>
            +7 (916) 685-46-21. Директор.
        </div>
        <br>
        <div>
            E-mail: <u class="text-primary">modern.prom@yandex.ru</u>
        </div>
        <br>

        <div>
            <div class="col-sm-68col-sm-offset-2">
                <h3 class="lead center-block text-center">ФОРМА ОБРАТНОЙ СВЯЗИ</h3>
                <form role="form" id="contactForm" data-toggle="validator" class="shake">
                    <div class="form-group col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="ФИО:" required data-error="Пожалуйста, заполните поле!">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <input type="email" class="form-control" id="email" placeholder="Контактный Email:"
                               required data-error="Пожалуйста, заполните поле!">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <input class="form-control" id="phone" placeholder="Контактный телефон:"
                               required data-error="Пожалуйста, заполните поле!">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="Текст сообщения:"
                                  required data-error="Пожалуйста, заполните поле!"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdO8B0TAAAAAIiMFwghU-t5rLFpFW49qCWkAwXD"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right">Отправить</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>

        <br>

    </div>

<?php
include "footer.php";
?>