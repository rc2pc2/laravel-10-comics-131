@extends("layouts.app")

@section("page-title", "Comics")

@section("main-content")
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center py-4">
                    Comics:
                </h1>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    @forelse ( $comics as $comic )
                    <article class="card col-2 mb-3 me-3">
                        <a href="{{ route("comic.show", $loop->index) }}">
                            <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
                            <div class="card-body">
                                <p class="card-title fw-bold">{{ $comic["title"] }}</p>
                                {{-- <p class="card-text">{{ $comic["description"] }}</p> --}}
                            </div>
                        </a>
                    </article>
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
