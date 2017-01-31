@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <div class="wrap-1200 wrap-1200--offers">
        <div class="offers wrap-1200__offers">
            <div class="offers__header header">
                <div class="information-row header__information-row">
                    <div class="information-row__discuss">
                        <a href="#" class="link">Обсудить проект</a>
                    </div>
                    <div class="information-row__phone">+7 (727) 279-65-50</div>
                </div>
            </div>
            <div class="offers__about about">
                <h1 class="about__title">Разработка интернет-магазинов:
                    быстро, хорошо, дорого</h1>
                <p class="about__description">Интернет-магазин создает продажи без аренды помещения,
                    штата консультантов и дорогой витрины. Мы знаем, как сделать его без каскада ошибок и пустой траты
                    денег.</p>
            </div>

            <div class="offers__offer-case">
                <div class="offer-case offer-case--package">
                    <h2 class="offer-case__title">Для небольших магазинов</h2>
                    <p class="offer-case__description">Вы сможете начать продажи через 18 дней. Мы запустим базовую
                        версию интернет-магазина, подключим рекламу и организуем почтовые рассылки.</p>
                </div>
                <div class="offer-case offer-case--cart">
                    <h2 class="offer-case__title">Для крупных магазинов</h2>
                    <p class="offer-case__description">Сайт заработает лучше, конверсия увеличится.
                        Мы перенесем ассортимент и базу клиентов на новую систему, подключим 1С, CRM и систему учета
                        звонков.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-1200">
        <div class="wrap-1200__quick-start quick-start">
            <div class="quick-start__table table">
                <div class="table__row row">
                    <div class="row__block-title">
                        <h2 class="block-title">Быстрый старт</h2>
                    </div>
                    <div class="row__check-printer"></div>
                </div>
                <div class="table__row row">
                    <div class="row__column-text">
                        <div class="offer-case offer-case--no-pad">
                            <p class="offer-case__title">Система готова</p>
                            <p class="offer-case__description offer-case__description--small-space">Вы не потратите лишних денег и времени на разработку сайта с нуля. Все модули готовы, протестированы и стабильно работают: покупатель не уйдет, из-то того, что магазин завис, а в корзине невозможно отредактировать заказ.</p>
                        </div>
                    </div>
                    <div class="row__column-check column-check">
                        <img src="/img/3.jpg" alt="" class="column-check__icon">
                        <p class="column-check__description">Запуск полнофункционального магазина займет от 18 до 36
                            рабочих дней.</p>
                    </div>
                </div>
                <div class="table__row row">
                    <div class="row__column-text">
                        <div class="offer-case offer-case--no-pad">
                            <p class="offer-case__title">Легко развивается</p>
                            <p class="offer-case__description offer-case__description--small-space">Даже базовуюверсию интернет-магазина можно превратить в космический шаттл: подключается 1С и система учета клиентов, автоматическая статистика и аналитика.</p>
                        </div>
                    </div>
                    <div class="row__column-check column-check">
                        <img src="/img/2.jpg" alt="" class="column-check__icon">
                        <p class="column-check__description">Платежные системы, СЕО, импорт и экспорт ассортимента уже предусмотрены.</p>
                    </div>
                </div>
                <div class="table__row row">
                    <div class="row__column-text ">
                        <div class="offer-case offer-case--no-pad">
                            <p class="offer-case__title">Хорошо выглядит</p>
                            <p class="offer-case__description offer-case__description--small-space">В разработке дизайна мы учтем особенности магазина и подготовим красивый, удобный интерфейс. Мы изучаем маркетинг и опыт действующих магазинов, чтобы использовать проверенные дизайн-решения.</p>
                        </div>
                    </div>
                    <div class="row__column-check column-check">
                        <img src="/img/1.jpg" alt="" class="column-check__icon">
                        <p class="column-check__description">Покупатель не запутается на сайте, а оформление не затеряется среди конкурентов.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-1200 wrap-1200--clients">
        <div class="clients wrap-1200__clients">
            <h2 class="clients__block-title block-title block-title--white">Среди клиентов</h2>
            <ul class="clients__clients-list clients-list">
                <li class="clients-list__item item">
                    <img src="/img/item.png" alt="" class="item__picture">
                    <p class="item__description">Официальный интернет-магазин
                        «Knauf Казахстан» для покупателей
                        и диллеров со всего Казахстана </p>
                </li>
                <li class="clients-list__item item">
                    <img src="/img/item.png" alt="" class="item__picture">
                    <p class="item__description">«Баумаркт» магазин инструментов и товаров для дома</p>
                </li>
                <li class="clients-list__item item">
                    <img src="/img/item.png" alt="" class="item__picture">
                    <p class="item__description">Крупнейший в Казахстане интернет-магазин автомобильных
                        шин «Шинторг»</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="wrap-1200 ">
        <div class="wrap-1200__all-inclusive all-inclusive">
            <h2 class="all-inclusive__block-title block-title">Все включено</h2>
            <ul class="all-inclusive__advantages-list advantages-list">
                <li class="advantages-list__advantages-item advantages-item">
                    <p class="advantages-item__title">Удобное управление</p>
                    <p class="advantages-item__description">Сайтом сможет обновлять любой, кто освоил Ворд. Поддерживается импорт и экспорт в Сату, OLX и Яндекс.Маркет.</p>
                </li>
                <li class="advantages-list__advantages-item advantages-item">
                    <p class="advantages-item__title">Интеграция</p>
                    <p class="advantages-item__description">Магазин интегрируется с 1С, популярными CRM и сервисами учета звонков.</p>
                </li>
                <li class="advantages-list__advantages-item advantages-item">
                    <p class="advantages-item__title">СЕО-оптимизация</p>
                    <p class="advantages-item__description">Сайт приспособлен к поисковой оптимизации и сразу сэкономит владельцу около 100 000 тенге.</p>
                </li>
                <li class="advantages-list__advantages-item advantages-item">
                    <p class="advantages-item__title">Маркетинг</p>
                    <p class="advantages-item__description">Подарочные сертификаты, акции, скидки по промо-коду помогут стимулировать продажи.</p>
                </li>
                <li class="advantages-list__advantages-item advantages-item">
                    <p class="advantages-item__title">Адаптивный дизайн</p>
                    <p class="advantages-item__description">Сайт корректно работает на ноутбуках, любых смартфонах, планшетах и настольных ПК.</p>
                </li>
                <li class="advantages-list__advantages-item advantages-item">
                    <p class="advantages-item__title">Безопасность</p>
                    <p class="advantages-item__description">Сайт использует современные протоколы безопасности. Это защищает магазин от взлома и спама.</p>
                </li>
            </ul>
            <p class="all-inclusive__interview">
              Мы подробно расскажем о возможностях интернет-магазина на личной встрече.
            </p>
        </div>
    </div>

    <div class="wrap-1200 wrap-1200--in-cost">
        <div class="wrap-1200__in-cost in-cost">
            <h2 class="in-cost__block-title block-title block-title--white block-title--over">Что входит в стоимость</h2>
            <div class="in-cost__package package">
                <ul class="package__in-cost-list in-cost-list">
                    <li class="in-cost-list__item advantages-item advantages-item--cost">
                        <img src="/img/p6.jpg" alt="" class="advantages-item__icon">
                        <p class="advantages-item__title advantages-item__title--blue">Рабочее предложение</p>
                        <p class="advantages-item__description">Мы подготовим анализ конкурентов и существующих сайтов. Это поможет понять, какой подход сработает лучше.</p>
                    </li>
                    <li class="in-cost-list__item advantages-item">
                        <img src="/img/p2.jpg" alt="" class="advantages-item__icon">
                        <p class="advantages-item__title advantages-item__title--blue">Анализ аудитории</p>
                        <p class="advantages-item__description">Изучим, как и где люди ищут продукт, какую потребность хотят решить, что влияет на их решение о покупке.</p>
                    </li>
                    <li class="in-cost-list__item advantages-item">
                        <img src="/img/p3.jpg" alt="" class="advantages-item__icon">
                        <p class="advantages-item__title advantages-item__title--blue">Торговое предложение</p>
                        <p class="advantages-item__description">Мы разберем приоритеты покупателя и подготовим торговое предложение, которое поможет продавать лучше.</p>
                    </li>
                    <li class="in-cost-list__item advantages-item">
                        <img src="/img/p1.jpg" alt="" class="advantages-item__icon">
                        <p class="advantages-item__title advantages-item__title--blue">Оформление почтовых рассылок</p>
                        <p class="advantages-item__description">62% повторных продаж приходится на почтовые рассылки. Мы оформим письмо и запустим первую рассылку.</p>
                    </li>
                    <li class="in-cost-list__item advantages-item">
                        <img src="/img/p4.jpg" alt="" class="advantages-item__icon">
                        <p class="advantages-item__title advantages-item__title--blue">Адаптация материалов</p>
                        <p class="advantages-item__description">Подготовим к публикации текст и фотографии, поможем провести фотосессию.</p>
                    </li>
                    <li class="in-cost-list__item advantages-item">
                        <img src="/img/p5.jpg" alt="" class="advantages-item__icon">
                        <p class="advantages-item__title advantages-item__title--blue">Оформление и дизайн</p>
                        <p class="advantages-item__description">Оформим интерфейс, нарисуем иллюстрации, подготовим баннеры специальных предложений.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection