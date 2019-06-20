<div class="col-12">
    <div class="col-12">

        <h5 class="modal-header">Color Change Request</h5>
    </div>
    <div class="col-8">
        <div class="form-group row">
            <label for="structure_name" class="col-sm-4 col-form-label">Structure Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="structure_name" id="structure_name" placeholder="Structure Name" value="{{ old('structure_name') }}">
            </div>
            {{ $errors->first('structure_name') }}
        </div>
        <div class="form-group row">
            <label for="sku" class="col-sm-4 col-form-label">SKU #</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU" value="{{ old('sku') }}">
            </div>
            {{ $errors->first('sku') }}
        </div>
        <div class="form-group row">
            <label for="model" class="col-sm-4 col-form-label">Model #</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="model" id="model" placeholder="Model" value="{{ old('model') }}">
            </div>
            {{ $errors->first('model') }}
        </div>

        <p>
            <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Select Color Scheme
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">

                <div class="media">
                    <label class="form-check-label" for="color_scheme[1]">
                        <img src="{{ asset('storage/img/color-scheme/background.png') }}" class="align-self-end mr-3" alt="..." style="max-width: 100px;">
                        <span class="small">Background</span>
                    </label>
                    <div class="media-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color_scheme" id="color_scheme[1]" value="1" checked >
                        </div>
                    </div>

                    <label class="form-check-label" for="color_scheme[2]">
                        <img src="{{ asset('storage/img/color-scheme/beachball.png') }}" class="align-self-end mr-3" alt="..." style="max-width: 100px;">
                        <span class="small">Beachball</span>
                    </label>
                    <div class="media-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color_scheme" id="color_scheme[2]" value="3" >
                        </div>
                    </div>

                    <label class="form-check-label" for="color_scheme[3]">
                        <img src="{{ asset('storage/img/color-scheme/cascade.png') }}" class="align-self-end mr-3" alt="..." style="max-width: 100px;">
                        <span class="small">Cascade</span>
                    </label>
                    <div class="media-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color_scheme" id="color_scheme[3]" value="3" >
                        </div>
                    </div>

                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#customColorSchemeExample" aria-expanded="false" aria-controls="customcolor_schemeExample">
                        <label class="form-check-label" for="custom_color_scheme">Custom</label>
                    </button>
                    <div class="media-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="color_scheme" id="custom_color_scheme" value="" >
                        </div>
                    </div>
                </div>

                {{ $errors->first('color_scheme') }}

                @include(config('settings.folder_partner') . '.designRequest._custom_color_scheme')

            </div>
        </div>

        <div class="form-group row">
            <label for="posts_clamps" class="col-sm-4 col-form-label">Posts & Clamps</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="posts_clamps" id="posts_clamps" placeholder="Posts & Clamps" value="{{ old('posts_clamps') }}">
            </div>
            {{ $errors->first('posts_clamps') }}
        </div>
        <div class="form-group row">
            <label for="metal_rails" class="col-sm-4 col-form-label">Metal Rails</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="metal_rails" id="metal_rails" placeholder="Metal Rails" value="{{ old('metal_rails') }}">
            </div>
            {{ $errors->first('metal_rails') }}
        </div>
        <div class="form-group row">
            <label for="roofs" class="col-sm-4 col-form-label">Roofs</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="roofs" id="roofs" placeholder="Roofs" value="{{ old('roofs') }}">
            </div>
            {{ $errors->first('roofs') }}
        </div>
        <div class="form-group row">
            <label for="slides" class="col-sm-4 col-form-label">Slides</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="slides" id="slides" placeholder="Slides" value="{{ old('slides') }}">
            </div>
            {{ $errors->first('slides') }}
        </div>
        <div class="form-group row">
            <label for="plastic_climbers" class="col-sm-4 col-form-label">Plastic Climbers</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="plastic_climbers" id="plastic_climbers" placeholder="Plastic Climbers" value="{{ old('plastic_climbers') }}">
            </div>
            {{ $errors->first('plastic_climbers') }}
        </div>
        <div class="form-group row">
            <label for="panels" class="col-sm-4 col-form-label">Panels</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="panels" id="panels" placeholder="Panels" value="{{ old('panels') }}">
            </div>
            {{ $errors->first('panels') }}
        </div>
        <div class="form-group row">
            <label for="panel_accents" class="col-sm-4 col-form-label">Panel Accents</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="panel_accents" id="panel_accents" placeholder="Panel Accents" value="{{ old('panel_accents') }}">
            </div>
            {{ $errors->first('panel_accents') }}
        </div>
        <div class="form-group row">
            <label for="accessories" class="col-sm-4 col-form-label">Accessories</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="accessories" id="accessories" placeholder="Accessories" value="{{ old('accessories') }}">
            </div>
            {{ $errors->first('accessories') }}
        </div>
        <div class="form-group row">
            <label for="bridges" class="col-sm-4 col-form-label">Bridges</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="bridges" id="bridges" placeholder="Bridges" value="{{ old('bridges') }}">
            </div>
            {{ $errors->first('bridges') }}
        </div>

        <div class="form-group row">
            <label for="notes" class="col-sm-4 col-form-label">Notes</label>
            <div class="col-sm-12">
                <textarea type="text" class="form-control" name="notes" id="notes" rows="3">{{ old('notes') }}</textarea>
            </div>
            {{ $errors->first('notes') }}
        </div>

    </div>
</div>