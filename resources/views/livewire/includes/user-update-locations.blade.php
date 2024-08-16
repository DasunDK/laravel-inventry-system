<div class="row">

    <div class="col-lg-12">
        <div class="mb-3">
            <label for="nic" class="form-label">Current Location
            </label>
            <input wire:model="curentDivision" disabled type="email" class="form-control">
        </div>
    </div>

    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">Province</label>
        <select wire:model.live="selectedProvinceID" class="form-select" name="province">
            <option value="1">Select a province</option>
            @foreach ($this->provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name_en }}</option>
            @endforeach
        </select>

    </div>

    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">District</label>
        <select wire:model.live="selectedDistrictID" class="form-select" name="province">

            @if ($selectedProvinceID)
                <option>select a district</option>
                @foreach ($this->districts as $district)
                    <option value="{{ $district->id }}">{{ $district->name_en }}</option>
                @endforeach
            @else
                <option value="">fist select a province</option>
            @endif

        </select>

    </div>

</div>

<div class="row">


    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">Divisional secretaries</label>
        <select wire:model.live="selectedDivisionalSecID" class="form-select" name="province">

            @if ($selectedDistrictID)
                <option>select a district</option>
                @foreach ($this->divisionalSec as $secretary)
                    <option value="{{ $secretary->id }}">{{ $secretary->name_en }}</option>
                @endforeach
            @else
                <option>first slecet a district</option>
            @endif
        </select>

    </div>

    <div class="col-12 col-md-6 mb-3">
        <label for="useremail" class="form-label">Division</label>
        <select wire:model.live="selectedDivisionID" class="form-select" name="province">
            @if ($selectedDivisionalSecID)
                <option value="">select a divsion</option>
                @foreach ($this->divisions as $division)
                    <option value="{{ $division->id }}">{{ $division->name_en }}</option>
                @endforeach
            @else
                <option value="1">first select a divisional secretary</option>
            @endif

        </select>
        @error('selectedDivision')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


</div>
