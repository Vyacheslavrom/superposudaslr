@extends('layouts.app')
@section('creating')
<div class="alert alert-primary d-flex justify-content-center" role="alert">
  <h1>Страница создания заказов.</h1>
</div>
<div class='input-group flex-nowrap d-flex justify-content-center'>
  <form action="{{route('get-p')}}" id='form-creating' method="get">
    <label for="order">НОМЕР ЗАКАЗА</label>
    <input readonly class="form-control" id='order-f' name='order-f'  value='27041981'>
    <label for="fio">Ваше Фамилия Имя Отчество:</label>
    <input class="form-control" id='fio' name='fio' type="text"  placeholder='тут пишем ФИО'>
    <label for="article">Артикул</label>
    <input class="form-control" id='article' name='article' type="text" placeholder='сюда пишем артикул'>
    <label for="brand">Бренд</label>
    <input class="form-control" id='brand' name='brand' type="text" placeholder='сюда пишем бренд'>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Коментарий к заказу</label>
      <textarea class="form-control" id="comment" name='comment' rows="3" placeholder='github'></textarea>
    </div>
    <input type='submit' type="button" value="Отправить заказ">
  </form>
</div>
<div id='view-block'></div>

<div class='alert alert-secondary'>
@if (isset($sus))
<div id='sus' class="alert alert-success" role="alert">
    {{ $sus }}

</div>
@endif
  @if (isset($page))
  
  <div class="alert alert-success" role="alert">
    <P>Номер заказ: {{ $page }}</P>
    <p>Тип заказа: {{ $orderType }}</p>
    
  
  </div>

  @endif
</div>

@endsection