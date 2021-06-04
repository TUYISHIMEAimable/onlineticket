@extends('passangerinfors.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>passanger inforation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('passangerinfors.create') }}"> Create New Passanger</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr >
            
            <th>First Name</th>
            <th >Last Name</th>
            <th>Gender</th>
            <th>Date</th>
            <th>Telephone </th>
            <th>E-Mail</th>
            <th> come </th>
            <th> go</th>
            <th>National ID</th>
            <th>Agance</th>
            <th >Action</th>
        </tr>
        @foreach ($passangerinfors as $passangerinfor)
        <tr>
            
            <td>{{ $passangerinfor->FirstName}}</td>
            <td>{{ $passangerinfor->LastName}}</td>
            <td>{{ $passangerinfor->Gender}}</td>
            <td>{{ $passangerinfor->DateOfBirth}}</td>
            <td>{{ $passangerinfor->PhoneNumber}}</td>
            <td>{{ $passangerinfor->Email}}</td>
            <td>{{ $passangerinfor->locationFrom}}</td>
            <td>{{ $passangerinfor->locationto}}</td>
            <td>{{ $passangerinfor->n_id}}</td>
            <td>{{ $passangerinfor->Agance}}</td>

            <td>
                <form action="{{ route('passangerinfors.destroy',$passangerinfor->id) }}" method="POST">
   
                    <a  href="{{ route('passangerinfors.show',$passangerinfor->id) }}">Gate Ticket</a>
    
                
   
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $passangerinfors->links() !!}
      
@endsection