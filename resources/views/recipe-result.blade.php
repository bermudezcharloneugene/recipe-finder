@extends('layouts.app')

@section('style')
<style>
img{
    width: 100%;
    min-width: 300px;
    max-width: 300px;
    min-height: 300px;
    max-height: 300px;
}
</style>
@endsection

@section('section')
    <div class="container mt-5">
        <div class="card-deck">
            <div class="d-flex flex-column">
            @for ($i = 0; $i < $count; $i++)
            <div class="card mt-4 mb-4">
                <img class="card-img-top" src="{{$body->meals[$i]->strMealThumb}}" alt="">
                <div class="card-body">
                  <h4>{{$body->meals[$i]->strMeal}}</h4>
                    <p class="card-text"><strong>How to prepare:</strong> {{$body->meals[$i]->strInstructions}}</p>
                </div>
            </div>
            @endfor
            </div>
        </div>
    </div>
@endsection