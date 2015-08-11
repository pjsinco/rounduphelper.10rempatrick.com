        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('section_title', 'Section title') !!}
                {!! Form::text('section_title', null, ['class' => 'form-control', 'v-model' => 'section_title']) !!}
            </div>

            <div class="form-group clearfix">
                <button class="btn btn-primary pull-right" id="copyHtml" v-on="click: copyHtml"><span class="glyphicon glyphicon-copy"></span> Copy HTML</button>
            </div>
        {{-- Form::close() --}}

