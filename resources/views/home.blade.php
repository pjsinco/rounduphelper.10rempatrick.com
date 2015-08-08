@extends('app')

@section('content')
<div class="row">
    <div class="col-xs-12">
    <h1>Roundup helper</h1>
        <form id="typeForm" action="http://rounduphelper.dev/item/create" method="GET">
            <div class="form-group">
                <label for="type">Make a</label>
                <select class="form-control" name="type" id="articleType">
                    <option value="feature">Article - Feature</option>
                    <option value="major">Article - Major</option>
                    <option value="minor">Article - Minor</option>
                    <option value="quote">Quote</option>
                    <option value="section_title">Section Title</option>
<!--                     <option value="line_break">Empty Line Break</option> -->
                    <option value="date">Date</option>
                </select>
            </div>
            <input id="typeSubmit" class="btn btn-primary btn-large" type="submit" value="Get started" />
        </form>
    </div>
</div>
@stop

@section('script')
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        
//        $('#typeSubmit').submit
//            //evt.preventDefault();
//            window.location.href = 
//                '/item/create/' + document.getElementById('articleType').value;
//        });

    });
</script>
@stop
