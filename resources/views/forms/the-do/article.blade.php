            <div class="form-group">
                {!! Form::label('kicker', 'Kicker') !!}
                {!! Form::text('kicker', null, ['class' => 'form-control', 'v-model' => 'kicker']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('headline', 'Headline') !!}
                {!! Form::text('headline', null, ['class' => 'form-control', 'v-model' => 'headline']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('excerpt', 'Excerpt') !!}
                {!! Form::text('excerpt', null, ['class' => 'form-control', 'v-model' => 'excerpt']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Story link') !!}
                {!! Form::text('link', null, ['class' => 'form-control', 'v-model' => 'link']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('imageUrl', 'Image URL') !!}
                {!! Form::text('imageUrl', null, ['class' => 'form-control', 'v-model' => 'imageUrl', 'debounce' => '500']) !!}
            </div>

            @if($ruleForm)
            <div class="form-group">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="rule_below" v-on="click: cloneRenderedVersion" v-model="ruleBelow"> Rule below
                    </label>
                    <label>
                        <input type="checkbox" name="rule_above" v-on="click: cloneRenderedVersion" v-model="ruleAbove"> Rule above
                    </label>
                </div>
            </div>
            @endif()

            
            <div class="form-group clearfix">
                <button class="btn btn-default" id="refresh"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" id="copyHtml" v-on="click: copyHtml"><span class="glyphicon glyphicon-copy"></span> Copy HTML</button>
                    <button class="btn btn-info" id="copyTextVersion" data-component="article" v-on="click: copyTextVersion"><span class="glyphicon glyphicon-copy"></span> Copy text</button>
                </div>
            </div>
