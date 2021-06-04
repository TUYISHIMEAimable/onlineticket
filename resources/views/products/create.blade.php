@extends('products.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New TASKE</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> View Records</a>
            <tr><strong><h4><a href="/login">LOGOUT</a></h1></strong>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   

<form action="{{ route('products.store') }}" method="POST">

    @csrf

  
    <table border="1" bgcolor="#ccccff" align = "center"  >
		<tr style = "background-color: #4B5320; color:white">
			
			
        @include('header_admin')
			
		</tr>
	  <tr >

			
			<td colspan = "3" ><h1>
				<center>Welcome to Adimin Taskes</center> </h1><p><Strong>ONLINE TICKET set activities</Strong>             
			</td>
    


			<tr><th>Set price </th><td> <input type = "text" name = "price" size = "30" placeholder = "set price" required></td>
			<td rowspan = "8" > <a href="changer_password"><h2>Change your Password</h2></a> </td>
			 </tr>
			 

             <tr><th>Set car with prack </th><td> <input type = "text" name = "prack" size = "30" placeholder = "set car with prack" required></td></tr>
             <tr><th>Set Time </th><td> <input type = "date" name = "time" size = "30" placeholder = "time" required></td></tr>			
             <tr><th>Set location  from</th><td> <input type = "text" name = "locationf" size = "30" placeholder = " is from where" required></td></tr>
             <tr><th>Set location to </th><td> <input type = "text" name = "locationt" size = "30" placeholder = "is go where ??" required></td></tr>			
<tr><th> Select Agance </th>

					<td>
  <select name="Agance" >
  <option >----------</option>
  <option value="Differnt">DIFFERENT</option>
  <option value="stella">STELL</option>
  <option value="select">SELECT</option>
  <option value="Fidelity">FIDELTY</option>
  <option value="kigali cotch">KIGALI COTCH</option>
   <option value="Virunga " >VIRUNGA</option>
  </select>
</td>
<tr>
<th> <input type = "submit" value = "save"></th><td><input type = "reset" value = "Clear"></td>
</tr>
		
<tr>
			
				@include('footer')
			
</tr>
	</table></form>
@endsection