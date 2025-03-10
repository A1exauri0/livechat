@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @role('cliente')
                        <livewire:chat-form />
                    @endrole
                    @role('soporte')
                        <livewire:chat-list />
                        <livewire:chat-list-finished />
                    @endrole
                    @role('admin')
                        <livewire:chat-list-Admin />
                    @endrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
