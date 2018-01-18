@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Stats</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Models: {{ $stats['models'] }}<br>
                    Repairs: {{ $stats['repairs'] }}<br>
                    Spares: {{ $stats['spares'] }}<br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
