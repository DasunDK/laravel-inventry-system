<div class="row">

    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">Province <span class="text-danger">*</span></label>
        <select wire:model.live="selectedProvinceID" class="form-select" name="province">
            <option value="1">Select a province</option>
            @foreach ($this->provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name_en }}</option>
            @endforeach
        </select>

    </div>

    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">District <span class="text-danger">*</span></label>
        <select wire:model.live="selectedDistrictID" class="form-select" name="province">

            @if ($selectedProvinceID)
                <option>Select a District</option>
                @foreach ($this->districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name_en }}</option>
                @endforeach
            @else
                <option value="">Fist Select a Province</option>
            @endif

        </select>

    </div>

</div>

<div class="row">


    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">Divisional secretaries <span class="text-danger">*</span></label>
        <select wire:model.live="selectedDivisionalSecID" class="form-select" name="province">

            @if ($selectedDistrictID)
                <option>Select a Divisional Secretary</option>
                @foreach ($this->divisionalSec as $secretary)
                    <option value="{{ $secretary->id }}">{{ $secretary->name_en }}</option>
                @endforeach
            @else
                <option>First Select a District</option>
            @endif
        </select>

    </div>

    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">Division <span class="text-danger">*</span></label>
        <select wire:model.live="selectedDivision" class="form-select" name="province">
            @if ($selectedDivisionalSecID)
                <option value="">Select a Divsion</option>
                @foreach ($this->divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name_en }}</option>
                @endforeach
            @else
                <option value="1">First Select a Divisional Secretary</option>
            @endif

        </select>
        @error('selectedDivision')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


</div>
