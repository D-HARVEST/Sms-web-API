<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="token" class="form-label">{{ __('Token') }}</label>
            <input type="text" name="Token" class="form-control @error('Token') is-invalid @enderror" value="{{ old('Token', $device?->Token) }}" id="token" placeholder="Token">
            {!! $errors->first('Token', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="libelle" class="form-label">{{ __('Libelle') }}</label>
            <input type="text" name="Libelle" class="form-control @error('Libelle') is-invalid @enderror" value="{{ old('Libelle', $device?->Libelle) }}" id="libelle" placeholder="Libelle">
            {!! $errors->first('Libelle', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>