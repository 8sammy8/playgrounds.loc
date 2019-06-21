<div class="col-9">

    <div class="col-8">
        <div class="form-group row">
            <label for="structure_name" class="col-sm-4 col-form-label">Structure Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="structure_name" id="structure_name" placeholder="Structure Name" value="{{ old('structure_name') }}">
                @error('structure_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="sku" class="col-sm-4 col-form-label">SKU #</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU" value="{{ old('sku') }}">
                @error('sku')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="model" class="col-sm-4 col-form-label">Model #</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="model" id="model" placeholder="Model" value="{{ old('model') }}">
                @error('model')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <label for="" class="col-sm-6 col-form-label">Select Color Scheme</label>
    <div class="accordion card card-body" id="accordionColorScheme">
        <div class="media">
            @if(isset($colorSchemes) && $colorSchemes->isNotEmpty())
                @foreach($colorSchemes as $colorScheme)
                    <label class="form-check-label" for="color_scheme_data[{{ $colorScheme->id }}]">
                        @if($colorScheme->img)
                            <img src="{{ asset("storage/img/color-scheme/{$colorScheme->img}") }}"
                                 class="align-self-end mr-3"
                                 alt="{{ $colorScheme->name }}"
                                 style="max-width: 100px;"
                                 data-toggle="collapse" data-target="#color_scheme_data{{ $colorScheme->id }}"
                            >
                        @else
                            <img src="{{ asset('storage/img/color-scheme/default.png') }}"
                                 class="align-self-end mr-3"
                                 alt="default"
                                 style="max-width: 100px;"
                                 data-toggle="collapse" data-target="#color_scheme_data{{ $colorScheme->id }}"
                            >
                        @endif
                        <p style="max-width: 100px;"><span class="small" >{{ $colorScheme->name }}</span></p>
                    </label>

                @endforeach
            @endif

            <label class="form-check-label" for="color_scheme_data">
                <img src="{{ asset('storage/img/color-scheme/custom.png') }}"
                     class="align-self-end mr-3"
                     alt="custom"
                     style="max-width: 100px;"
                     data-toggle="collapse" data-target="#color_scheme_data"
                >
                <span class="small"></span>
            </label>
        </div>

        <div id="color_scheme_data" class="col-9 collapse "
             aria-labelledby="" data-parent="#accordionColorScheme">

            @include(config('settings.folder_partner') . '.designRequest._custom_color_scheme')
        </div>

        @if(isset($colorSchemes) && $colorSchemes->isNotEmpty())
            @foreach($colorSchemes as $colorScheme)
                <div id="color_scheme_data{{ $colorScheme->id }}" class="col-9 collapse "
                     aria-labelledby="headingOne" data-parent="#accordionColorScheme">

                    @include(config('settings.folder_partner') . '.designRequest._color_scheme')
                </div>
            @endforeach
        @endif

    </div>

</div>
@error('color_scheme')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
