            <div class="form-group">
                {!! Form::label('category', 'Category') !!}
                {!! Form::select('category', [
                  'Book Reviews' => "Book Reviews",
                  'Brief Report' => "Brief Report",
                  'Case Report' => "Case Report",
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
                  'Original Contribution' => "Original Contribution",
                  'Review' => "Review",
                  'The Somatic Connection' => "The Somatic Connection",
                  'Special Communication' => "Special Communication",
                  'Special Report' => "Special Report",
                  'Still Relevant?' => "Still Relevant?" ,
                  'Surf' => "SURF",
                ], 'Original Contribution', ['v-model' => 'category', 'class' => 'form-control', 'v-on' => 'change: handleCategoryChange']) !!}
            </div>

            <div class="image-group" id="imageGroup" v-if="showImageForm" v-transition="show">
              <h3>Image</h3>
              <div class="form-group">
                  {!! Form::label('imageSrc', 'Image URL') !!}
                  {!! Form::text('imageSrc', null, ['class' => 'form-control', 'v-model' => 'imageSrc']) !!}
                  <p class="help-block">Image size: 480px x 240px</p>
              </div>

              <div class="form-group">
                  {!! Form::label('imageUrl', 'Image Link') !!}
                  {!! Form::text('imageUrl', null, ['class' => 'form-control', 'v-model' => 'imageUrl']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('imageAlt', 'Image Alt Text') !!}
                  {!! Form::text('imageAlt', null, ['class' => 'form-control', 'v-model' => 'imageAlt']) !!}
              </div>
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
                {!! Form::label('url', 'Article URL') !!}
                {!! Form::text('url', null, ['class' => 'form-control', 'v-model' => 'articleUrl']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('blurb', 'Blurb') !!}
                {!! Form::textarea('blurb', null, ['class' => 'form-control', 'v-model' => 'blurb', 'rows' => '4']) !!}
            </div>

            <div class="form-group">
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" name="free" v-model="free"> Free 
                    </label>
                    <label>
                        <input type="checkbox" name="video" v-model="video"> Video
                    </label>
                </div>
                <button class="btn btn-default btn-xs pull-right" id="showImageForm" v-on="click: onShowImageForm">@{{ showImageForm ? 'Remove image' : 'Add image' }}</button>
            </div>

            @include('forms.copy-buttons')
