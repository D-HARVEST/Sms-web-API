@php
    $pagetitle = 'Dashboard';
    $breadcrumbs = ['Dashboard' => route('dashboard.index')];
@endphp

@extends('layouts.app')

@section('content')
<div class="row">
    @foreach ($senders as $index => $sender)
        <div class="col-md-6 col-xl-3">
            <a href="{{ route('senders-ids.index') }}" class="text-decoration-none">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="mb-2 fs-15 fw-medium">Sender {{ $index + 1 }}</p>
                                <h3 class="text-dark fw-bold d-flex align-items-center gap-2 mb-0">
                                    {{ $sender->Nom }}
                                </h3>
                            </div>
                            <div>
                                <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                    <iconify-icon icon="solar:user-plus-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>



<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center border-0">
        <div>
            <h4 class="card-title mb-1">Messages</h4>
            <p class="mb-0 fs-13">Liste des derniers messages envoyés</p>
        </div>
    </div>
    
    <div class="card-body pt-2">
        @forelse($messages as $message)
            <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom gap-2 py-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="avatar">
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="avatar" class="img-fluid rounded-circle">
                    </div>
                    <div class="d-block">
                        <span class="text-dark">
                            <a href="#!" class="text-dark fw-medium fs-15">{{ $message->Destinataire }}</a>
                        </span>
                        <p class="mb-0 fs-13 text-muted">{{ $message->Contenu }}</p>
                    </div>
                </div>
                <div>
                    <p class="text-muted fw-medium mb-0">{{ $message->created_at->format('d M Y') }}</p>
                </div>
            </div>
        @empty
            <p class="text-center text-muted">Aucun message trouvé.</p>
        @endforelse
    </div>
    <div class="card-header justify-content-between align-items-center text-end">
     
        <a href="{{ route('historiques.index') }}" class="btn btn-primary">Voir plus</a>
    </div>
</div>
@endsection
