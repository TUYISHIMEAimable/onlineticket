@extends('products.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit taske</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>

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

  

    <form action="{{ route('products.update',$product->id) }}" method="POST">

        @csrf

        @method('PUT')

   
        <table border="1" bgcolor="#ccccff" align = "center"  >
		<tr style = "background-color: #4B5320; color:white">
			
			
        @include('header_admin')
			
		</tr>
	  <tr >

			
			<td colspan = "3" ><h1>
				<center>Welcome to Adimin Taskes</center> </h1><p><Strong>ONLINE TICKET set activities</Strong>             
			</td>
    


			<tr><th>PRICE </th><td> <input type = "text" value = {{ $product->price }} ></td></tr>
                    <tr><th>Car Prack </th><td> <input type = "text" value = {{ $product->prack }}></td></tr>
                    <tr><th>Time  </th><td> <input type = "text" value = {{ $product->time}}></td></tr>
					<tr><th>location from </th><td> <input type = "text" value = {{ $product->locationf}}></td></tr>			
					<tr><th>location goto  </th><td> <input type = "text" value={{ $product->locationt}}></td></tr>
					
                    <tr><th>Agance </th><td> <input type = "text" value={{ $product->Agance }} ></td></tr>
</td>
<tr>
<th> <input type = "submit" value = "update"></th><td><input type = "reset" value = "Clear"></td>
</tr>
		
<tr>
			
				@include('footer')
			
</tr>
	</table></form>
@endsection