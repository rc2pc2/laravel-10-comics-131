@extends("layouts.app")

@section("page-title", $comic["title"])

@section("main-content")
    <section class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center py-4">
                    {{ $comic["title"] }}
                </h1>
            </div>
            <div class="col-12">
                <div class="row justify-content-center">
                    <article class="card col-12 mb-3 me-3">
                        <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
                        <div class="card-body">
                            <p class="card-title fw-bold">{{ $comic["title"] }}</p>
                            <p class="card-text">{{ $comic["description"] }}</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
