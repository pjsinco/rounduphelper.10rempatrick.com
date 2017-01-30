        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('category', 'Category') !!}
                {!! Form::select('category', [
                  'original_contributions' => "Original Contributions",
                  'reviews' => "Reviews",
                  'evidence-based_clinical_reviews' => "Evidence-Based Clinical Reviews",
                  'clinical_review' => "Clinical Review",
                  'clinical_practice' => "Clinical Practice",
                  'brief_reports' => "Brief Reports",
                  'medical_education' => "Medical Education",
                  'case_reports' => "Case Reports",
                  'special_communication' => "Special Communication",
                  'special_report' => "Special Report",
                  'health_policy' => "Health Policy",
                  'still_relevant?' => "Still Relevant?" ,
                  'editorials' => "Editorials",
                  'in_my_view' => "In My View",
                  'empathy_in_medicine' => "Empathy in Medicine",
                  'the_somatic_connection' => "The Somatic Connection",
                  'clinical_images' => "Clinical Images",
                  'in your_words' => "In Your Words",
                  'letters_to_the_editor' => "Letters to the Editor",
                  'surf' => "SURF",
                  'cme_quiz' => "CME Quiz",
                  'book_reviews' => "Book Reviews",
                ], null, ['placeholder' => 'Select category', 'class' => 'form-control']) !!}
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
