@extends('passangerinfors.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit passangerinfor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('passangerinfors.index') }}"> Back</a>
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
  
    <form action="{{ route('passangerinfors.update',$passangerinfor->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <table bgcolor="yellow" border="1" align = "center"  >
		<tr style = "background-color: #36922C ">
			<td colspan = "5" >
					
					<fieldset>

					<legend> <font color="black" size="50%" aligne ="center">Passanger Information Form </font></legend>
               			<table bgcolor="blue" border="1" align = "center" >
                           <tr>
 <th rowspan="12"><h3><font color="yellow">AGENCE CAR TIME</font></th>
 </tr>

                           
					<tr><th>First name </th><td> <input type = "text" value = {{ $passangerinfor->FirstName }} ></td></tr>
                    <tr><th>last name </th><td> <input type = "text" value = {{ $passangerinfor->LastName }}></td></tr>
                    <tr><th>Gender </th><td> <input type = "text" value = {{ $passangerinfor->Gender}}></td></tr>
					<tr><th>Date of Birth </th><td> <input type = "text" value = {{ $passangerinfor->DateOfBirth}}></td></tr>			
					<tr><th>Phone Number  </th><td> <input type = "text" value={{ $passangerinfor->PhoneNumber }}></td></tr>
					<tr><th>Email </th><td> <input type = "text" value= {{ $passangerinfor->Email }}></td></tr>
					<tr><th>Location from: </th><td> <input type = "text" value={{ $passangerinfor->locationFrom }}></td></tr>
					<tr><th>Location to: </th><td> <input type = "text" value={{ $passangerinfor->locationto }}></td></tr>
					<tr><th>National ID </th><td> <input type = "text" value={{ $passangerinfor->n_id }} ></td></tr>
                    <tr><th>Agance </th><td> <input type = "text" value={{ $passangerinfor->Agance }} ></td></tr>
					
					


	<tr><strong><h4><a href="/home">Go Home NOW</a>

    
    </h1></strong><br> <th> <input type = "submit" value = "update"></th><td><input type = "reset" value = "Clear"></td></tr>
	

					</table></fieldset></table>
                  
					</form>

</center>
@endsection