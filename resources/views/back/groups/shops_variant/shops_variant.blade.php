@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Редактирование комплекта услуг'])

    <div class="box box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования</h3>
        </div>

        <div class="box-body">
            <div class="form-group">
                <label>Заголовок для комплекта</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->title_field}}"
                       data-name="title"
                       data-block="shops_variant"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="form-group">
                <label>Текст входящих в комплект работ</label>
                <textarea class="form-control  text-editor"
                          data-name="descr"
                          data-type="text"
                          data-block="shops_variant"
                          data-id="{{$item->id_field}}">{{$item->descr_field}}</textarea>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Цена со скидкой (отображается всегда)</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->cost_with_field}}"
                           data-name="cost_with"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Цена без скидки (перечеркнутая)</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->cost_without_field}}"
                           data-name="cost_without"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Специальное условие (отображается внизу блока)</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->special_condition_field}}"
                           data-name="special_condition"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>

            <div class="box-body">
                <div class="form-group">
                    <label>Цвет блока спец. условия</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$item->spec_cond_color_field}}"
                           data-name="spec_cond_color"
                           data-type="string"
                           data-block="shops_variant"
                           data-id="{{$item->id_field}}">
                </div>
            </div>
        </div>
    </div>

@endsection