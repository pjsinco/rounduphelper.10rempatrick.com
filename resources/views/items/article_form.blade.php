        {!! Form::open(['method' => 'GET', 'action' => $action]) !!}

            <div class="form-group">
                {!! Form::label('kicker', 'Kicker') !!}
                {!! Form::text('kicker', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('headline', 'Headline') !!}
                {!! Form::text('headline', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('excerpt', 'Excerpt') !!}
                {!! Form::text('excerpt', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Story link') !!}
                {!! Form::text('link', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('image_url', 'Image URL') !!}
                {!! Form::text('image_url', null, ['class' => 'form-control']) !!}
            </div>

<!--             <div class="form-group"> -->
<!--             </div> -->

            <div class="form-group">
                {!! Form::submit('Show HTML', ['class' => 'btn btn-primary form-control']) !!}
            </div>


        {!! Form::close() !!}
