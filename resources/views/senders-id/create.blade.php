@php
    $pagetitle = 'Senders ID';
    $breadcrumbs = [
        'Liste des Senders ID' => route('senders-ids.index'),
        'Nouvel Senders ID' => route('senders-ids.create'),
    ];
@endphp

@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Senders Id
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau: Senders ID</h5>
                            <span>Formulaire d'ajout de Senders Ids</span>
                        </div>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('senders-ids.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('senders-id.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
