@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Create a feature</h1>
        @include('items.article_form', ['action' => 'ItemsController@feature'])
    </div>
</div>


@stop


