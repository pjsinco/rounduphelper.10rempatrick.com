        {{-- Form::open(['method' => 'GET', 'action' => $action]) --}}

            <div class="form-group">
                {!! Form::label('kicker', 'Kicker') !!}
                {!! Form::text('kicker', null, ['class' => 'form-control input-lg', 'v-model' => 'kicker']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('headline', 'Headline') !!}
                {!! Form::text('headline', null, ['class' => 'form-control input-lg', 'v-model' => 'headline']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('excerpt', 'Excerpt') !!}
                {!! Form::text('excerpt', null, ['class' => 'form-control input-lg', 'v-model' => 'excerpt']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('link', 'Story link') !!}
                {!! Form::text('link', null, ['class' => 'form-control input-lg', 'v-model' => 'link']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('imageUrl', 'Image URL') !!}
                {!! Form::text('imageUrl', null, ['class' => 'form-control input-lg', 'v-model' => 'imageUrl', 'debounce' => '500']) !!}
            </div>

        {{-- Form::close() --}}
