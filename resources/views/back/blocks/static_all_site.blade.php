@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Общие настройки сайта'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля блока</h3>
        </div>


        <div class="box-body">

            <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$static_all_site->phone_field}}"
                       data-name="phone"
                       data-type="string"
                       data-block="static_all_site"
                       data-id="0">
            </div>

        </div>
    </div>
@endsection