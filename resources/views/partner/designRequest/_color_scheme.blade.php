<div class="pt-4">
    <fieldset disabled>
        <div class="form-group row">
            <label for="posts_clamps{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Posts & Clamps</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="posts_clamps{{ $colorScheme->id }}" placeholder="Posts & Clamps" value="{{ $colorScheme->posts_clamps ?? $colorScheme->posts_clamps }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="metal_rails{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Metal Rails</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="metal_rails{{ $colorScheme->id }}" placeholder="Metal Rails" value="{{ $colorScheme->metal_rails ?? $colorScheme->metal_rails }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="roofs{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Roofs</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="roofs{{ $colorScheme->id }}" placeholder="Roofs" value="{{ $colorScheme->roofs ?? $colorScheme->roofs }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="slides{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Slides</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="slides{{ $colorScheme->id }}" placeholder="Slides" value="{{ $colorScheme->slides ?? $colorScheme->slides }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="plastic_climbers{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Plastic Climbers</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="plastic_climbers{{ $colorScheme->id }}" placeholder="Plastic Climbers" value="{{ $colorScheme->plastic_climbers ?? $colorScheme->plastic_climbers }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="panels{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Panels</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="panels{{ $colorScheme->id }}" placeholder="Panels" value="{{ $colorScheme->panels ?? $colorScheme->panels }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="panel_accents{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Panel Accents</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="panel_accents{{ $colorScheme->id }}" placeholder="Panel Accents" value="{{ $colorScheme->panel_accents ?? $colorScheme->panel_accents }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="accessories{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Accessories</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="accessories{{ $colorScheme->id }}" placeholder="Accessories" value="{{ $colorScheme->accessories ?? $colorScheme->accessories }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="bridges{{ $colorScheme->id }}" class="col-sm-4 col-form-label">Bridges</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="bridges{{ $colorScheme->id }}" placeholder="Bridges" value="{{ $colorScheme->bridges ?? $colorScheme->bridges }}">
            </div>
        </div>
    </fieldset>
</div>

