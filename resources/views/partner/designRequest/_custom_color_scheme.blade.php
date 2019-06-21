<div class="pt-4">
    <div class="form-group row">
        <label for="posts_clamps" class="col-sm-4 col-form-label">Posts & Clamps</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="posts_clamps" id="posts_clamps" placeholder="Posts & Clamps" value="{{ old('posts_clamps') }}">
            @error('posts_clamps')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="metal_rails" class="col-sm-4 col-form-label">Metal Rails</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="metal_rails" id="metal_rails" placeholder="Metal Rails" value="{{ old('metal_rails') }}">
            @error('metal_rails')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="roofs" class="col-sm-4 col-form-label">Roofs</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="roofs" id="roofs" placeholder="Roofs" value="{{ old('roofs') }}">
            @error('roofs')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="slides" class="col-sm-4 col-form-label">Slides</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="slides" id="slides" placeholder="Slides" value="{{ old('slides') }}">
            @error('slides')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="plastic_climbers" class="col-sm-4 col-form-label">Plastic Climbers</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="plastic_climbers" id="plastic_climbers" placeholder="Plastic Climbers" value="{{ old('plastic_climbers') }}">
            @error('plastic_climbers')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="panels" class="col-sm-4 col-form-label">Panels</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="panels" id="panels" placeholder="Panels" value="{{ old('panels') }}">
            @error('panels')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="panel_accents" class="col-sm-4 col-form-label">Panel Accents</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="panel_accents" id="panel_accents" placeholder="Panel Accents" value="{{ old('panel_accents') }}">
            @error('panel_accents')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="accessories" class="col-sm-4 col-form-label">Accessories</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="accessories" id="accessories" placeholder="Accessories" value="{{ old('accessories') }}">
            @error('accessories')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="bridges" class="col-sm-4 col-form-label">Bridges</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" name="bridges" id="bridges" placeholder="Bridges" value="{{ old('bridges') }}">
            @error('bridges')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

</div>