@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>

                    {{-- @php
                      dd(Auth::user()->hasRole('admin'))
                    @endphp --}}

                    @if (Auth::user()->hasRole('admin'))
                      ciao amministratore
                    @elseif (Auth::user()->hasRole('customer'))
                      ciao cliente
                      @else
                        non sei ne amministratore ne cliente
                    @endif

                    @php
                      dd(Auth::user()->can('edit'));
                      dd(Auth::user()->can('show'));
                    @endphp

                    @if (Auth::user()->can('edit'))
                      puoi modificare
                    @elseif (Auth::user()->can('show'))
                      puoi vedere
                      @else
                      non puoi fare nulla
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
