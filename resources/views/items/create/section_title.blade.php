@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Create a section title</h1>
        @include('items.section_title_form', ['action' => 'ItemsController@sectionTitle'])
    </div>
</div>


@stop


