        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('quote', 'Quote') !!}
                {!! Form::text('quote', null, ['class' => 'form-control', 'v-model' => 'quote']) !!}
                <p class="help-block">No quotation marks needed.</p>
            </div>

            <div class="form-group">
                {!! Form::label('quoter', 'Quoter and context (optional)') !!}
                {!! Form::text('quoter', null, ['class' => 'form-control', 'v-model' => 'quoter']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Link') !!}
                {!! Form::text('link', null, ['class' => 'form-control', 'v-model' => 'link']) !!}
            </div>

            <div class="form-group clearfix">
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" id="copyHtml" v-on="click: copyHtml"><span class="glyphicon glyphicon-copy"></span> Copy HTML</button>
                    <button class="btn btn-info" id="copyTextVersion" data-component="quote" v-on="click: copyTextVersion"><span class="glyphicon glyphicon-copy"></span> Copy text</button>
                </div>
            </div>
        {{-- Form::close() --}}

