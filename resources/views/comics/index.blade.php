@extends("layouts.app")

@section("page-title", "Comics")

@section("main-content")
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center">
                    Comics list:
                </h1>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    @forelse ( $comics as $comic )
                        <div class="card col-3">
                            <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic["title"] }}</h5>
                                <p class="card-text">{{ $comic["description"] }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <h2>
                                No comics are available...
                            </h2>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
