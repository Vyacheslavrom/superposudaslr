@extends('layouts.app')
@section('get-prod')
@if (isset($sus))
<div id='sus' class="alert alert-success" role="alert">
    {{ $sus }}

</div>
@endif
@if (isset($page))
<div id='page-get' class="alert alert-success" role="alert">
    {{ $page }}

</div>
@endif
@endsection