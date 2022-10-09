@extends('layouts.app')

@section ('css')

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

a {
    margin: 2px;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
  margin-bottom: 15px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
    
  }
}

/* Style the counter cards */
.card { 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height: 40vh;
}
</style>
@endsection
 
@section ('content')
<div class="container">
        
            <div class="row">
            @foreach ($stocks as $stock) 
                <div class="column">
                    <div class="card">
                    <h2 style="text-align : left ;"><b>Product:</b> <i>{{$stock->name}}</i> </h2>
                    <h3 style="text-align : left ;"><b>Price:</b>  <i>{{$stock->price}}</i> </h3>
                    <h4 style="text-align : left ;"><b>Stock:</b>  <i>{{$stock->stock}}</i> </h4>
                    <h5 style="text-align : left ;"><b>Brand:</b>  <i>{{$stock->brand}}</i> </h5>
                    <a href="/edit/{{$stock->id}}" style="text-align : right ;"><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="/delete/{{$stock->id}}" style="text-align : right ;"><button type="button" class="btn btn-danger">Delete</button></a>
                    </div>
                </div>
            @endforeach
            </div>
   





</div>
@endsection