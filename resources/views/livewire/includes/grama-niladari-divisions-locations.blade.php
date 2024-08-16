<div class="col-12 col-md-6">

    <label class="form-label">Province <span class="text-danger">*</span></label>
    <select id="Province" wire:change="districtLoad($event.target.value)" class="form-select">
        <option value="">Select a Province</option>
        @foreach ($this->provinces as $province)
            <option value="{{ $province->id }}">{{ $province->name_en }}</option>
        @endforeach
    </select>

</div>

<div class="col-12 col-md-6">
    <label class="form-label">District <span class="text-danger">*</span></label>

    <select id="District" wire:model="selectedDistrictID" class="form-select">
        {{ $districtSet }}
        @if ($districtSet)
            <option value="">Select a District</option>
            @foreach ($this->districtSet as $district)
                <option value="{{ $district->id }}">{{ $district->name_en }}
                </option>
            @endforeach
        @else
            <option value="">First select a Province</option>
        @endif
    </select>

    @error('selectedDistrictID')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>
