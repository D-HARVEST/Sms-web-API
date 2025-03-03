@extends('layouts.app')

@section('template_title')
    {{ $sendersId->name ?? __('Show') . " " . __('Senders Id') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Senders Id</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('senders-ids.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $sendersId->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $sendersId->Nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Isactive:</strong>
                                    {{ $sendersId->isActive }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
