@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Create a date</h1>
        @include('items.date_form', ['action' => 'ItemsController@date'])
    </div>
</div>


@stop



