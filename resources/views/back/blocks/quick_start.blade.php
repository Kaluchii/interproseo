@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Где ваши клиенты?'])

    <div class="box box-info group-item-widget"
         data-block="text_left">
        <div class="box-header with-border">
            <h3 class="box-title"> Преимущества слева </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить
            </button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($quick_start->text_left_group as $item)
                    @include('back.groups.text_left.text_left_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
    <div class="box box-info group-item-widget"
         data-block="on_check">
        <div class="box-header with-border">
            <h3 class="box-title"> Результаты </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить
            </button>
        </div>
        <div class="box-body">
            <div class="groupflat-widget group-item-wrap">
                @foreach($quick_start->on_check_group as $item)
                    @include('back.groups.on_check.on_check_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>

@endsection