@extends('layout')

@section('content')
  

   

  <div class="container">
            
        <div class="row">
               <div class="col-lg-6 col-lg-offset-3 text-center">
                  
                   <form action="/create/todo" method="post">
                       {{ csrf_field() }}
                        <input type="text" class="form-control" name="todo" placeholder="Create your Todo" />
                       
                   </form>
                  
               </div>
         </div>
            <div class="content">
                <div class="title">
                    
                    @foreach($todos as $todo)
                    
                    {{ $todo -> Todo }}  <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger">&times;</a>
                    <hr>
                    @endforeach
                    
                </div>
            </div>
        </div>

@stop