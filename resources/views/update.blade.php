@extends('layout')

@section('content')
  

   

  <div class="container">
            
        <div class="row">
               <div class="col-lg-6 col-lg-offset-3 text-center">
                  
                   <form action="{{route ('todos.save', ['id' => $todo->id ]) }}" method="post">
                       {{ csrf_field() }}
                        <input type="text" class="form-control" name="todo" value="{{ $todo->Todo }}" />
                       
                   </form>
                  
               </div>
         </div>

        </div>

@stop