        {!! Form::open(['method' => 'GET', 'action' => $action]) !!}

            <div class="form-group">
                {!! Form::label('quote', 'Quote') !!}
                {!! Form::text('quote', null, ['class' => 'form-control']) !!}
                <p class="help-block">No quotation marks needed.</p>
            </div>

            <div class="form-group">
                {!! Form::label('quoter', 'Quoter and context (optional)') !!}
                {!! Form::text('quoter', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Link') !!}
                {!! Form::text('link', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Show HTML', ['class' => 'btn btn-primary form-control']) !!}
            </div>


        {!! Form::close() !!}

