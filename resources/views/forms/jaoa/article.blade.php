        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('category', 'Category') !!}
                {!! Form::select('category', [
                  'Book Reviews' => "Book Reviews",
                  'Brief Reports' => "Brief Reports",
                  'Case Reports' => "Case Reports",
                  'Clinical Images' => "Clinical Images",
                  'Clinical Practice' => "Clinical Practice",
                  'Clinical Review' => "Clinical Review",
                  'CME Quiz' => "CME Quiz",
                  'Editorials' => "Editorials",
                  'Empathy in Medicine' => "Empathy in Medicine",
                  'Evidence-Based Clinical Reviews' => "Evidence-Based Clinical Reviews",
                  'Health Policy' => "Health Policy",
                  'In My View' => "In My View",
                  'In Your Words' => "In Your Words",
                  'Letters to the Editor' => "Letters to the Editor",
                  'Medical Education' => "Medical Education",
                  'Original Contributions' => "Original Contributions",
                  'Reviews' => "Reviews",
                  'The Somatic Connection' => "The Somatic Connection",
                  'Special Communication' => "Special Communication",
                  'Special Report' => "Special Report",
                  'Still Relevant?' => "Still Relevant?" ,
                  'Surf' => "SURF",
                ], 'Original Contributions', ['v-model' => 'category', 'class' => 'form-control', 'v-on' => 'change: handleCategoryChange']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'v-model' => 'title']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('authors', 'Authors') !!}
                {!! Form::text('authors', null, ['class' => 'form-control', 'v-model' => 'authors']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('blurb', 'Blurb') !!}
                {!! Form::textarea('blurb', null, ['class' => 'form-control', 'v-model' => 'blurb', 'rows' => '4']) !!}
            </div>

            {{--
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
            --}}

            
            <div class="form-group clearfix">
                <button class="btn btn-default" id="refresh"><span class="glyphicon glyphicon-refresh"></span> Reset</button>
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" id="copyHtml" v-on="click: copyHtml"><span class="glyphicon glyphicon-copy"></span> Copy HTML</button>
                    <button class="btn btn-info" id="copyTextVersion" data-component="article" v-on="click: copyTextVersion"><span class="glyphicon glyphicon-copy"></span> Copy text</button>
                </div>
            </div>
        {{-- Form::close() --}}
