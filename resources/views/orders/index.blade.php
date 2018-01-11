@extends('layouts.crm')
@include('orders.tmenu')
@section('content')
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center; min-width: 33px;">№</th>
                            <th style="text-align: center; min-width: 90px;">Принял</th>
                            <th style="text-align: center; min-width: 120px;">Клиент</th>
                            <th style="text-align: center; min-width: 120px;">Устройство</th>
                            <th style="text-align: center; min-width: 230px;">Неисправность</th>
                            <th style="text-align: center; min-width: 50px;">Цена</th>
                            <th style="text-align: center; min-width: 90px;">Мастер</th>
                            <th style="text-align: center; min-width: 60px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr role="row" class="drag info">
                            <td style="text-align: center; min-width: 33px;">
                                {{ $order->id }}
                            </td>
                            <td style="text-align: center; min-width: 90px;">
                                manager_firstname manager_lastname
                                </br>
                                data
                            </td>
                            <td style="text-align: center; min-width: 120px;">
                                clientfname clientlname
                                <br>
                                <span style='opacity: .7;'>
                                    phone
                                </span>
                                <br>
                                <span style='opacity: .7;'>
                                    address
                                </span>
                            </td>
                            <td style="text-align: center; min-width: 120px;">
                                device_name
                                <br>brand_name
                                <br>model
                                <br>sn
                            </td>
                            <td style="text-align: center; min-width: 230px;">
                                defect
                            </td>
                            <td style="text-align: center; min-width: 50px;">
                                Итого:<br>
                                price
                                <br>ЗП мастера<br>
                                price
                            </td>
                            <td style="text-align: center; min-width: 90px;">
                                master_firstname master_lastname
                                <br>Дата опл.
                            </td>
                            <td style="text-align: center; min-width: 60px;">
                                <a href='/orders/{{ $order->id }}/edit' class='btn btn-default btn-smile'><i class="material-icons">edit</i></a>
                                <a href='/orders/del/{{ $order->id }}'  onClick='return window.confirm(\"Удалить ремонт?\")' class='btn btn-default btn-smile'><i class="material-icons">delete_forever</i></a>
                                <a href='/orders/pay/{{ $order->id }}'  onClick='return window.confirm(\"Оплатить мастеру?\")' class='btn btn-default btn-smile'><i class="material-icons">shopping_cart</i></a></td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
                <!-- Постраничная навигация -->
            </div>
        </div>
    </div>
</main>
@endsection