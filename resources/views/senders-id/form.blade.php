<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        {{-- <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('User Id') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', $sendersId?->user_id) }}" id="user_id" placeholder="User Id">
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}
        <div class="form-group mb-2 mb20">
            <label for="nom" class="form-label">{{ __('Nom') }}</label>
            <input type="text" name="Nom" class="form-control @error('Nom') is-invalid @enderror" value="{{ old('Nom', $sendersId?->Nom) }}" id="nom" placeholder="Nom">
            {!! $errors->first('Nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        {{-- <div class="form-group mb-2 mb20">
            <label for="is_active" class="form-label">{{ __('Isactive') }}</label>
            <input type="text" name="isActive" class="form-control @error('isActive') is-invalid @enderror" value="{{ old('isActive', $sendersId?->isActive) }}" id="is_active" placeholder="Isactive">
            {!! $errors->first('isActive', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div> --}}

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>