<div class="collapse" id="customColorSchemeExample">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="custom_color">Choose Color Mix %</label>
        </div>
        <select class="custom-select" id="custom_color" name="custom_color">
            <option selected value="">Choose...</option>
            @if(isset($colorSchemes) && $colorSchemes->isNotEmpty())
                @foreach($colorSchemes as $colorScheme)
                    <option value="{{ $colorScheme->id }}">{{ $colorScheme->proportions }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="first_top_color">1st Top Color</label>
        </div>
        <select class="custom-select" id="first_top_color" name="first_top_color">
            <option selected value="">Choose...</option>
            @if(isset($colors) && $colors->isNotEmpty())
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="second_top_color">2nd Top Color</label>
        </div>
        <select class="custom-select" id="second_top_color" name="second_top_color">
            <option selected value="">Choose...</option>
            @if(isset($colors) && $colors->isNotEmpty())
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="third_top_color">3nd Top Color</label>
        </div>
        <select class="custom-select" id="third_top_color" name="third_top_color">
            <option selected value="">Choose...</option>
            @if(isset($colors) && $colors->isNotEmpty())
                @foreach($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>