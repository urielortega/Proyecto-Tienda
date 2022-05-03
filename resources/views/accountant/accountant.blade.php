@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Accountant</div>

                <div class="card-body">
                    <a class="list-group-item" href="{{route('main')}}">
                        Homepage
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
