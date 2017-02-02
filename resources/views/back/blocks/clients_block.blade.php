@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Среди клиентов'])

    <div class="box box-info group-item-widget"
         data-block="clients">
        <div class="box-header with-border">
            <h3 class="box-title"> Клиенты </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($clients_block->clients_group as $item)
                    @include('back.groups.clients.clients_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection