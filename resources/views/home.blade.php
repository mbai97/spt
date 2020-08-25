@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($totalTickets) }}</div>
                                    <div>Total tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-white bg-success">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($openTickets) }}</div>
                                    <div>Open tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Closed tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($priority) }}</div>
                                    <div>High priority</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-12"> --}}
                            <div class="container p-3 my-3 bg-dark text-white">
                            {{-- <div class="card text-white bg-dark"> --}}
                                <div class="card-body pb-24">
                                    <div class="text-value">{{ number_format($graph) }}</div>
                                    <div>Graph</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection