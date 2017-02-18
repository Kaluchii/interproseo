@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Магазины на любой вкус'])

    <div class="row">
        <div class="col-xs-12">
            <div class="box table-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Магазины
                    </h3>
                    <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                    <div class="col-xs-5 pull-right">
                        <input type="text" class="form-control add-item"
                               data-name="title"
                               data-block="shops_variant"
                               placeholder="Название элемента"
                        >
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                           aria-describedby="example2_info"
                           data-block="shops">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-sort="ascending"
                                aria-label="">Название</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Дата</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Статус публикации</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Порядок выдачи</th>
                            <th  tabindex="0"  rowspan="1"
                                 colspan="1" aria-label="">Удаление</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($shops->shops_variant_group as $item)
                            @include('back.groups.shops_variant.shops_variant_row',['item' => $item])
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>

@endsection