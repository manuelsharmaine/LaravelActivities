@extends('layouts.app')


@section('content')

    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-header">New User</div>
                <div class="card-body">
                 
                   
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf
                                <input type="text" name="title">
                                <textarea name="description"> </textarea>

                                <input type="submit">
                         
                        </form>
                    </form> 

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection