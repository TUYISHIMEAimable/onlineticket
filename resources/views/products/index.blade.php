@extends('products.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Admin tasks view</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New taske</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

        <th>Set price </th>
            <th>car with prack</th>
            <th>Date</th>
            <th> location from</th>
            <th> location Go</th>
            <th> Agance </th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

                      
            <td>{{ $product->price }}</td>
            <td>{{ $product->prack }}</td>
            <td>{{ $product->time }}</td>
            <td>{{ $product->locationf }}</td>
            <td>{{ $product->locationt }}</td>
            <td>{{ $product->Agance }}</td>
        



            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $products->links() !!}

      

@endsection