@section('footer')
    <footer class="wrap-1200 wrap-1200--footer">
        <div class="footer wrap-1200__footer">
            <div class="footer__column-wrap">
                <div class="footer__column footer__column--left">
                    <p class="footer__p">Сделано в <a href="http://interpro.kz" target="_blank" class="footer__link">ИнтерПро</a></p>
                    <p class="footer__p">Алматы, ул. Айтеке би, 78 <br>(уг. Желтоксана)</p>
                </div>
                <div class="footer__column footer__column--center">
                    <p class="footer__p">Обсудить по телефону:</p>
                    <p class="footer__phone">{{$all->phone_field}}</p>
                </div>
                <div class="footer__column footer__column--right">
                    <p class="footer__p">
                        <a href="http://interpro.kz/warranty" target="_blank" class="footer__link">Гарантия на сайт</a>
                    </p>
                    <p class="footer__p">
                        <a href="http://interpro.kz/agency/rekomendations" target="_blank" class="footer__link">Рекомендации клиентов</a>
                    </p>
                    <p class="footer__p">
                        <a href="http://interpro.kz/agency" target="_blank" class="footer__link">О компании</a>
                    </p>
                </div>
            </div>
            <div class="footer__row">
                <img src="/img/arrow.png" alt="Стрелка" class="footer__img">
                <p class="footer__p--yellow"><span class="yellow-p">Нужен интернет магазин?</span></p>
                <p class="footer__p">Ознакомьтесь с нашим предложением по разработке <a href="http://shops.interpro.kz/" target="_blank" class="footer__link"><nobr>интернет-магазинов</nobr></a></p>
            </div>
        </div>
    </footer>
    {{--<section class="seo-text">
        {!! $all->seo_text_field !!}
    </section>--}}
@endsection