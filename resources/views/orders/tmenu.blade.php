@section('topmenu')
<a href="/orders/create" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Добавить</a>  
<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="фильтр по статусу">
        <span class="glyphicon glyphicon-filter"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
        @foreach ($statuses as $id => $status)
        <li><a href="/orders/status/{{$id}}">{{$status}}</a></li>
        @endforeach
    </ul>
</div>
<div class="btn-group">
    <a href="/orders/media/2" class="btn btn-default" title="заявоки JOTO"><span class="glyphicon">JOTO</span></a>
    <a href="/orders/help/1" class="btn btn-default" title="Вызов специалиста"><span class="glyphicon">Вызовы</span></a>
    <a href="/orders/payment" class="btn btn-default" title="Оплата"><span class="glyphicon">Оплата</span></a>
</div>
@endsection