@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Roundupper</h1>
    </div>
    <div class="col-xs-offset-4 col-xs-4">
        <form id="selectArticleType" action="">
            <div class="form-group">
                <label for="articleType">Select component to create</label>
                <select class="form-control input-lg" name="type" id="articleType">
                    <optgroup label="Stories">
                        <option value="top-story">Top story</option>
                        <option value="feature">Feature</option>
                        <option value="brief">Brief</option>
                    </optgroup>
                    <optgroup label="Other parts">
                        <option value="quote">Quote</option>
                        <option value="section-title">Section Title</option>
                        <option value="date">Date</option>
                    </optgroup>
                </select>
            </div>
        </form>
    </div> <!-- .col-xs-8 -->
</div> <!-- .row -->

<div id="workspace" class="row">
    <div id="form" class="col-xs-8">
    </div> <!-- .col-xs-12 -->
    <div id="rendered" class="col-xs-4">
    </div> <!-- .col-xs-4 -->
</div> <!-- .row -->

@stop
