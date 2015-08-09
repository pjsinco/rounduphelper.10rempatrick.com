        {!! Form::open(['method' => 'GET', 'action' => $action]) !!}

            <div class="form-group">
                {!! Form::label('section_title', 'Section title') !!}
                {!! Form::text('section_title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Show HTML', ['class' => 'btn btn-primary form-control']) !!}
            </div>


        {!! Form::close() !!}

