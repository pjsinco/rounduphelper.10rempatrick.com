        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('date', 'Date of roundup') !!}
                {!! Form::text('date', null, ['class' => 'form-control', 'v-model' => 'date']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Show HTML', ['class' => 'btn btn-primary form-control']) !!}
            </div>


        {{-- Form::close() --}}


