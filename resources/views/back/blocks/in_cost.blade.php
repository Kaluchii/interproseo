@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Что входит в стоимость'])

    <div class="box box-info group-item-widget"
         data-block="works">
        <div class="box-header with-border">
            <h3 class="box-title"> Входит в стоимость </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($in_cost->works_group as $item)
                    @include('back.groups.works.works_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection