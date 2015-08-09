@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h1 class="page-heading">Roundupper</h1>
    </div>
    <div class="col-xs-offset-5 col-xs-2">
        <form id="selectArticleType">
            <div class="form-group">
                <label for="type">Make a</label>
                <select class="form-control" name="type" id="articleType">
                    <optgroup label="Stories">
                        <option value="top-story">Top story</option>
                        <option value="feature">Feature</option>
                        <option value="brief">Brief</option>
                    </optgroup>
                    <optgroup label="Components">
                        <option value="quote">Quote</option>
                        <option value="section-title">Section Title</option>
                        <option value="date">Date</option>
                    </optgroup>
                </select>
            </div>
        </form>
    </div> <!-- .col-xs-8 -->
</div> <!-- .row -->

<div class="row">
    <div id="form" class="col-xs-8">
    </div> <!-- .col-xs-12 -->
    <div class="col-xs-4">
    </div> <!-- .col-xs-4 -->
</div> <!-- .row -->

@stop
