@extends('back-end.master')
@section('content')

<section id="search-vehicle">
  <div class= "container">
     <div class="alert alert-secondary" role="alert">
            <center>
                <h1>Search Your Vehicle</h1>
            </center>


            <div class= "row">

              <div class= "col-8 offset-2">

                <form>
                    <div class = "form-group">
                        <label  class= "font-weight-bold" for="name">Enter vehicle number </label>
                        <input class = "form-control"type="text" id="name" required>
                    </div>
                    <div class = "form-group">
                        <label  class= "font-weight-bold" for="email">Enter driving licence number</label>
                        <input class = "form-control" type="text" id="email" >

                    </div>
                    <div class = "form-group">
                        <label  class= "font-weight-bold" for="name">Enter NID</label>
                        <input class = "form-control"type="text" id="name" required>
                    </div>

                    <button class= "btn btn-success btn-block"> Search</button>
                </form>
                <br>

              </div>

            </div>
     </div>
</div> 
</section>

@endsection