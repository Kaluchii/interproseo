@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <div class="wrap-1200 wrap-1200--offers">
        <div class="offers wrap-1200__offers">
            <div class="offers__header header">
                <div class="information-row header__information-row">
                    <div class="information-row__discuss">
                        <a href="#discuss" class="link discuss-project">Обсудить проект</a>
                    </div>
                    <div class="information-row__logo">
                        <img src="/img/logo.png" alt="ИнтерПро разработка сайтов, SEO" class="information-row__logo-img">
                    </div>
                    <div class="information-row__phone">{{$all->phone_field}}</div>
                </div>
            </div>
            <div class="offers__about about">
                <h1 class="about__title">Привлечение клиентов на&nbsp;сайт</h1>
                <p class="about__description">{{$offer->offer_about_field}}</p>
            </div>

            <div class="offers__offer-case">
                <div class="offer-case">
                    <h2 class="offer-case__title">{{$offer->offer_case_title1}}</h2>
                    <p class="offer-case__description">{{$offer->offer_case_desc1}}</p>
                </div>
                <div class="offer-case">
                    <h2 class="offer-case__title">{{$offer->offer_case_title2}}</h2>
                    <p class="offer-case__description">{{$offer->offer_case_desc2}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-1200">
        <div class="wrap-1200__where where">
            <div class="where__table table">
                <div class="table__column column column--where">
                    <h2 class="column__block-title block-title">Где ваши клиенты?</h2>
                    @foreach($quick->text_left_group as $item)
                        <div class="offer-case offer-case--where">
                            <p class="offer-case__title">{{$item->adv_title_field}}</p>
                            <p class="offer-case__description offer-case__description--small-space">{{$item->descr_field}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="table__column column column--results">
                    <p class="column__title">Результаты</p>
                    @foreach($quick->on_check_group as $item)
                        <div class="column-result">
                            <img src="{{$item->icon_field->link}}" alt="{{$item->icon_field->alt}}"
                                 class="column-result__icon">
                            <p class="column-result__description">{{$item->descr_field}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="wrap-1200 wrap-1200--clients">
            <div class="clients wrap-1200__clients">
                <h2 class="clients__block-title block-title block-title--white">Наши клиенты</h2>
                <ul class="clients__clients-list clients-list">
                    @foreach($client->clients_group as $item)
                        <li class="clients-list__item item">
                            <div class="item__text-top text-block"><p>{!! $item->text_top_field !!}</p></div>
                            <div class="item__picture-wrap"><img src="{{$item->client_logo_field->link}}"
                                                                 alt="{{$item->client_logo_field->alt}}"
                                                                 class="item__picture"></div>
                            <p class="item__description">{!! $item->descr_field !!}</p>
                            <div class="item__text-bottom text-block"><p>{!! $item->text_bottom_field !!}</p></div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="wrap-1200 ">
            <div class="wrap-1200__all-inclusive all-inclusive">
                <h2 class="all-inclusive__block-title block-title">Как мы работаем</h2>
                <ol class="all-inclusive__advantages-list advantages-list">
                    @foreach($inclusive->advantages_group as $item)
                        <li class="advantages-list__advantages-item advantages-item">
                            <p class="advantages-item__title">{{$item->adv_title_field}}</p>
                            <p class="advantages-item__description">{{$item->descr_field}}</p>
                        </li>
                    @endforeach
                </ol>
                <p class="all-inclusive__interview">
                    Мы подробно расскажем о нашем подходе на личной встрече.
                </p>
            </div>
        </div>

        <div class="wrap-1200 wrap-1200--in-cost">
            <div class="wrap-1200__in-cost in-cost">
                <h2 class="in-cost__block-title block-title block-title--white block-title--over">Комплекты услуг</h2>
                <div class="in-cost__package package">
                    <ul class="package__offers-cost offers-cost">
                        @foreach($cost->shops_variant_group as $item)
                            <li class="offers-cost__tarif tarif tarif--package">
                                <p class="tarif__name">{{$item->title_field}}</p>
                                <div class="tarif__services text-block">
                                    {!! $item->descr_field !!}
                                </div>
                                <p class="tarif__cost-row">@if($item->cost_without_field != '')<span
                                            class="sale-row">{{$item->cost_without_field}}</span>@endif{{$item->cost_with_field}}
                                </p>
                                <button href="#discuss_type" class="tarif__discuss-button discuss-button discuss-project-type">
                                    Обсудить проект
                                </button>
                                @if($item->special_condition_field != '')
                                    <div class="tarif__sale"
                                         style="background-color: {{$item->spec_cond_color_field}};">{{$item->special_condition_field}}</div>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <p class="package__interview">Если вам требуется отдельная услуга или возникли вопросы,
                        назначьте встречу. Мы расскажем об услугах и приведем примеры.</p>
                </div>
            </div>
        </div>

        <div class="wrap-1200">
            <div class="wrap-1200__recommendations recommendations">
                <h2 class="recommendations__block-title block-title">Рекомендации клиентов</h2>
                <div class="recommendations__table">
                    <div class="recommendations__column">
                        @foreach($rec->recommend_group->odd() as $key => $item)
                            @if($key >= count($rec->recommend_group->even()) )
                                <div class="recommendations__comment comment comment--last">
                                    @else
                                        <div class="recommendations__comment comment">
                                            @endif
                                            <div class="comment__head">
                                                <div class="comment__photo">
                                                    <img src="{{$item->photo_field->link}}" alt="">
                                                </div>
                                                <div class="comment__about">
                                                    <p class="comment__name">{{$item->r_name_field}}</p>
                                                    <p class="comment__profession">
                                                        {!! $item->profession_field !!}
                                                    </p>
                                                    <img src="{{$item->logo_field->link}}" alt="" class="comment__logo">
                                                </div>
                                            </div>
                                            <div class="comment__content">{!! $item->content_field !!}</div>
                                        </div>
                                        @endforeach
                                </div>
                                <div class="recommendations__column">
                                    @foreach($rec->recommend_group->even() as $key => $item)
                                        @if($key == 3 )
                                            <div class="recommendations__comment comment comment--last">
                                                @else
                                                    <div class="recommendations__comment comment">
                                                        @endif
                                                        <div class="comment__head">
                                                            <div class="comment__photo">
                                                                <img src="{{$item->photo_field->link}}" alt="">
                                                            </div>
                                                            <div class="comment__about">
                                                                <p class="comment__name">{{$item->r_name_field}}</p>
                                                                <p class="comment__profession">
                                                                    {!! $item->profession_field !!}
                                                                </p>
                                                                <img src="{{$item->logo_field->link}}" alt=""
                                                                     class="comment__logo">
                                                            </div>
                                                        </div>
                                                        <div class="comment__content">{!! $item->content_field !!}</div>
                                                    </div>
                                                    @endforeach

                                                    <div class="recommendations__all-recommendations">
                                                        <a class="recommendations__link" target="_blank"
                                                           href="http://interpro.kz/agency/rekomendations">Все
                                                            рекомендации</a>
                                                    </div>
                                            </div>
                                </div>
                    </div>
                </div>

@endsection