@extends('layouts.app')

@section('content')
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
                    
                    <div class="row">
                        @foreach($rssFeeds as $rssFeed)
                            
                            <a href="{{ $rssFeed->url }}" class="btn-link">
                                <div class="card" style="width: 18rem; margin-right: 0.5rem; margin-bottom: 0.5rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">{!! $rssFeed->title  !!}</h5>
                                        <p class="card-text">{!! $rssFeed->description !!} </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="card-footer">
                        <ul class="list-unstyled">
                            @foreach($rssFilteredTags as $tag => $count)
                                <li>{{ $tag }} <span>{{ $count }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
