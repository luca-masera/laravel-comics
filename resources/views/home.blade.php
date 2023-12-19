@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>

        <section class="container">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($products as $items)
                    <div class="col-12 col-md-4 col-lg-3 my-3 ">
                        <div class="card">
                            <img src="{{ $items['thumb'] }}" alt="{{ $items['title'] }}">
                            <div class="card-body">
                                <h2 class="card-title">{{ $items['title'] }}</h2>
                                <p class="card-text"> {!! substr($items['description'], 0, 100) . '....' !!} </p>
                                <p> {{ $items['price'] }} </p>
                                <a href="" class="btn btn-danger ">Vedi comics</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>

@endsection
