@if(! $errors->any() )
    {{ $slot ?? '' }}
    
@else
    @error($buscar)
    <div class="text-danger">
        <span class="fw-bold">*</span>
        <span class="small">{{ $message }}</span>
    </div>
    @enderror

@endif
