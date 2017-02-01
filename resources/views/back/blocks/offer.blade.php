@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Предложения'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Статичные поля блока</h3>
        </div>


        <div class="box-body">

            <div class="form-group">
                <label>Описание интернет магазина</label>
                <textarea class="form-control text"
                          data-name="offer_about"
                          data-type="text"
                          data-block="offer"
                          data-id="0">{{$offer->offer_about_field}}</textarea>
            </div>

            <div class="form-group">
                <label>Предложение слева</label><br>
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$offer->offer_case_title1_field}}"
                       data-name="offer_case_title1"
                       data-type="string"
                       data-block="offer"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Описание</label>
                <textarea class="form-control text"
                          data-name="offer_case_desc1"
                          data-type="text"
                          data-block="offer"
                          data-id="0">{{$offer->offer_case_desc1_field}}</textarea>
            </div><br>

            <div class="form-group">
                <label>Предложение справа</label><br>
                <label>Заголовок</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$offer->offer_case_title2_field}}"
                       data-name="offer_case_title2"
                       data-type="string"
                       data-block="offer"
                       data-id="0">
            </div>

            <div class="form-group">
                <label>Описание</label>
                <textarea class="form-control text"
                          data-name="offer_case_desc2"
                          data-type="text"
                          data-block="offer"
                          data-id="0">{{$offer->offer_case_desc2_field}}</textarea>
            </div>
        </div>
    </div>
@endsection