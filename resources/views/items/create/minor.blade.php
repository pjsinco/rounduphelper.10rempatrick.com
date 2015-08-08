@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Create a minor</h1>
        @include('items.article_form', ['action' => 'ItemsController@minor'])
    </div>
</div>


@stop

