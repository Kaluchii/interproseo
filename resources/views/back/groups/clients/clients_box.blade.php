<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Клиент {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="clients">Удалить
        </button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Изображение в блоке</label>
            <div class="dropzone">
                <div class="file-input">
                    <div class="file-preview">
                        <div class="input-group file-caption-main">

                            <div class="file-preview-frame">
                                <div class="kv-file-content">
                                    <img src="{{$item->client_logo_field->link}}?{{$item->client_logo_field->cache_index}}"
                                         class="kv-preview-data file-preview-image"
                                         title="{{$item->client_logo_field->alt}}"
                                         alt="{{$item->client_logo_field->alt}}">
                                </div>
                                <div class="file-thumbnail-footer">
                                    <div class="file-footer-caption"
                                         title="{{$item->client_logo_field->alt}}">{{$item->client_logo_field->name_field}}
                                        <br><samp>(425.24 KB)</samp></div>
                                    <input type="text" class="form-control alt-text" data-block="clients"
                                           data-type="images" data-id="{{$item->id_field}}" data-name="alt">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="input-group-btn">
                <button type="button" tabindex="500" title="Clear selected files"
                        class="btn btn-default fileinput-remove fileinput-remove-button"><i
                            class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                <button type="button" tabindex="500" title="Abort ongoing upload"
                        class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                            class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                <div tabindex="500" class="btn btn-primary btn-file">
                    <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                    <span class="hidden-xs">Выбрать изображение …</span>
                    <input type="file" class="form-control file"
                           data-block="clients"
                           data-name="client_logo"
                           data-type="image"
                           data-id="{{$item->id_field}}">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Текст под изображением</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->descr_field}}"
                   data-name="descr"
                   data-type="string"
                   data-block="clients"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Текст вверху блока</label>
            <textarea class="form-control text"
                      data-name="text_top"
                      data-type="text"
                      data-block="clients"
                      data-id="{{$item->id_field}}">{{$item->text_top_field}}</textarea>
        </div>
        <div class="form-group">
            <label>Текст внизу блока</label>
            <textarea class="form-control text"
                      data-name="text_bottom"
                      data-type="text"
                      data-block="clients"
                      data-id="{{$item->id_field}}">{{$item->text_bottom_field}}</textarea>
        </div>
    </div>
</div>