@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Create a quote</h1>
        @include('items.quote_form', ['action' => 'ItemsController@quote'])
    </div>
</div>


@stop


