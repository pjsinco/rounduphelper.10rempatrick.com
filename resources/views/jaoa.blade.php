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
                    <optgroup label="Articles">
                        <option value="jaoa-article" selected>Article</option>
                        <option value="jaoa-article-first">Article in Series - First</option>
                        <option value="jaoa-article-middle">Article in Series - Middle</option>
                        <option value="jaoa-article-last">Article in Series - Last</option>
                    </optgroup>
                    <optgroup label="Other parts">
                        <option value="jaoa-banner">Banner</option>
                        <option value="jaoa-intro">Intro</option>
                    </optgroup>
                </select>
            </div>
        </form>
    </div> <!-- .col-xs-8 -->
</div> <!-- .row -->
<hr />


<div class="row" id="workspace">
  <div id="form" class="col-lg-6 col-md-12">
  </div> <!-- #form -->
  <div id="rendered" class="col-lg-6 col-md-12">
    <div id="highlight">
    </div>
  </div> <!-- #rendered -->
  <div id="clone" style="position: absolute; top: -5000px; left: -5000px">
  </div>
</div> <!-- .row -->


@stop
