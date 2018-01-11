@extends('layouts.crm')
@include('orders.tmenu')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <form method="post" action="/order/{{$orders->id}}">
            {{ csrf_field()}}
            {{ method_field('PUT') }}
            <div class="form-group">
                <div class="col-sm-3">
                    <select class="form-control" name="id_status">
                        @foreach ($statuses as $id => $status)
                        <option selected="selected" value="{{$id}}">
                            {{$status}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-9">
                    <div class="btn-group">
                        <a class="btn btn-default" data-toggle="collapse" title="Вызов специалиста" href="#id_help">Вызов</a>
                        <a class="btn btn-default" data-toggle="collapse" title="Ячейка" href="#cell">Ячейка</a>
                        <a class="btn btn-default" data-toggle="collapse" title="История" href="#history">История | '12'</a>
                        <a class="btn btn-default" target="_blank" title="Печать" href="/orders/id_orders">Печать</a>
                        <a class="btn btn-default" target="_blank" title="Добавить ремонт от этого клиента" href="/order/add/id_client">+ ремонт</a>
                    </div>
                </div>
            </div>
            <div class="collapse form-group" id="cell">
                <div class="col-sm-12">
                    <h3>Выберите ячейку хранения</h3>
                    <label class="btn btn-default ">
                        <input type="radio" name="cell" 
                               onmousedown="this.isChecked = this.checked;" onclick="this.checked = !this.isChecked;" 
                               value="1" id="option1" autocomplete="off"> 1
                    </label>
                    <label class="btn btn-default ">
                        <input type="radio" name="cell" disabled value="1" id="option1" autocomplete="off"> 2
                    </label>
                </div>
            </div>
            </br>
            <div class="form-group">
                <div class="col-sm-4">
                    <input type="text" required name="firstname" id="firstname" autocomplete="off" class="form-control" placeholder="Имя" value="clientfname">
                </div>
                <div class="col-sm-4">
                    <input type="text" required name="lastname" id="lastname" autocomplete="off" class="form-control" placeholder="Фамилия" value="clientlname">
                </div>
                <div class="col-sm-4">
                    <input type="text" id="phone" name="phone" required autocomplete="off" class="form-control" placeholder="Телефон" value="phone">
                </div>
            </div>
            </br>
            <div class="collapse form-group" id="id_help">
                <div class="col-sm-12">
                    <input type="text" name="address" autocomplete="off" class="form-control" placeholder="Адрес клиента" value="address">
                </div>
                </br>
            </div>
            </br>
            <div class="form-group">
                <div class="col-sm-3">
                    <select class="form-control" name="id_device">
                        foreach ($device as $deviceItem):
                        <option <!--
                        if ($orderItem['id_device'] == $deviceItem['id_device']) {
                            echo "selected='selected'";
                        }
                            -->
                            value="id_device">
                            device_name
                    </option>
                    endforeach;
                </select>
            </div>
            <div class="col-sm-3">
                <select class="form-control" name="id_brand">
                    foreach ($brands as $brandItem):
                    <option 
                        <!--
                        if ($orderItem['id_brand'] == $brandItem['id_brand'])
                            echo "selected='selected'";
                        -->
                        value="id_brand">
                        brand_name
                </option>
                endforeach;
            </select>
        </div>
        <div class="col-sm-3">
            <input type="text" name="model" autocomplete="off" class="form-control" placeholder="Модель" value="model">
        </div>
        <div class="col-sm-3">
            <input type="text" name="sn" autocomplete="off" class="form-control" placeholder="Серийный номер" value="sn">
        </div>
    </div>
    </br>
    <div class="form-group">
        <div class="col-sm-12">
            <input type="text" name="defect" autocomplete="off" class="form-control" placeholder="Неисправность" value="defect">
        </div>
    </div>
    </br>
    <div class="form-group">
        <div class="col-sm-4">
            <input type="text" name="complit" autocomplete="off" class="form-control" placeholder="Комплектация" value="complit">
        </div>
        <div class="col-sm-4">
            <select class="form-control" name="id_master">
                foreach ($users as $userItem):
                <option  <!--
                if ($orderItem['id_master'] == $userItem['id_user']) {
                    echo "selected='selected'-->
                    value="id_user">
                    firstname lastname
            </option>
            endforeach
        </select>
    </div>
    <div class="col-sm-4">
        <select class="form-control" name="id_media" autocomplete="off" id="id_media">
            foreach ($medias as $mediaItem)
            <option 
                <!--id_media'] == id_media
                    selected='selected'-->
                value="id_media">
                media_name
        </option>
        endforeach
    </select>
</div>
</div>
</br>
<input type="hidden" name="id_orders" value="id_orders">
<div class="col-xs-6">
    <div class="input-group">
        <div class="input-group-btn">
            <button tabindex="-1" class="btn btn-default" type="submit" name="submit" value="update">Сохранить</button>
        </div>
    </div>
</div>
<div class="form-group">
    <!--https://www.jelu.ru/post/pishem-svoy-prostoy-variant-zhivogo-poiska.html-->
    <div class="col-sm-5">
        <ul class="search_result"></ul>
    </div>
</div>
</br>
<div class="collapse" id="history" style="padding: 10px;border-radius: 5px;height: auto;border: 1px solid #ddd;margin-bottom: 20px;">
    <h3>История заказа</h3>
</div>
</form>
</div>
</main>

@endsection