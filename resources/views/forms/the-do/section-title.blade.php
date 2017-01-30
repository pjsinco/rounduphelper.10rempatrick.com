        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('section_title', 'Section title') !!}
                {!! Form::text('section_title', null, ['class' => 'form-control', 'v-model' => 'section_title']) !!}
            </div>

            <div class="form-group clearfix">
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" id="copyHtml" v-on="click: copyHtml"><span class="glyphicon glyphicon-copy"></span> Copy HTML</button>
                    <button class="btn btn-info" id="copyTextVersion" data-component="section-title" v-on="click: copyTextVersion"><span class="glyphicon glyphicon-copy"></span> Copy text</button>
                </div>
            </div>
        {{-- Form::close() --}}

