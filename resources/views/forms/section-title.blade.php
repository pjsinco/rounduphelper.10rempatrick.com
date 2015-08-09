        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('section_title', 'Section title') !!}
                {!! Form::text('section_title', null, ['class' => 'form-control', 'v-model' => 'section_title']) !!}
            </div>

        {{-- Form::close() --}}

