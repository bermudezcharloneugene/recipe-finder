@extends('layouts.app')

@section('section')
    
    <div class="container mt-5">
        <form action="{{route('search_recipe')}}" method="GET">
            <div class="form-group">
              <label for="search">SEARCH</label>
              <input type="search" name="search" id="search" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        </form>
    </div>

@endsection