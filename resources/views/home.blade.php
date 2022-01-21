@extends ('layouts.main')

@section('main-content')
<section class="container-fluid">
    <div class="container p-5">
        <div class="row">
            <div class="col-12">
                <h3 class="mb-4">Movies Database</h3>
            </div>
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-2 card p-3">
                <h6>{{ $movie->title }}</h6>
                <span class="d-block">{{ $movie->original_title }}</span>
                <span class="d-block">{{ $movie->nationality }}</span>
                <span class="d-block">{{ $movie->date }}</span>
                <span class="d-block">{{ $movie->vote}}</span>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
@endsection