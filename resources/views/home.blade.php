@extends('layouts.app_template')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="text-block">K-POP BOY</div>
        </div>
        <div class="card-body">
            @foreach($votations as $votation)
                <div class="col">
                    <a href="{{ route('votations.show',$votation->id) }}" class="link-block-4 w-inline-block">
                        <div class="div-block-3">
                            <div class="text-block-2">{{ $votation->created_at->format('Y.m.d') }}</div>
                            <div class="div-block-4">
                                <div class="card-avatar">
                                    <div class="text-block-4">2</div>
                                    <div class="avatar sm">
                                        <img src="{{ $votation->options[1]->photo }}" loading="lazy" alt=""></div>
                                    <div class="text-block-3"><strong>{{ $votation->options[1]->name }}</strong></div>
                                </div>
                                <div class="card-avatar">
                                    <div class="text-block-4">1</div>
                                    <div class="avatar">
                                        <img src="{{ $votation->options[0]->photo }}" loading="lazy" alt="">
                                    </div>
                                    <div class="text-block-3"><strong>{{ $votation->options[0]->name }}</strong></div>
                                </div>
                                <div class="card-avatar">
                                    <div class="text-block-4">3</div>
                                    <div class="avatar sm">
                                        <img src="{{ $votation->options[2]->photo }}" loading="lazy" alt="">
                                    </div>
                                    <div class="text-block-3"><strong>{{ $votation->options[2]->name }}</strong></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
