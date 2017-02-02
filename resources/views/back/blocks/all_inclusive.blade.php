@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Все включено'])

    <div class="box box-info group-item-widget"
         data-block="advantages">
        <div class="box-header with-border">
            <h3 class="box-title"> Преимущества </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($all_inclusive->advantages_group as $item)
                    @include('back.groups.advantages.advantages_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection