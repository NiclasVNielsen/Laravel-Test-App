@extends('treasures.layout')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Pirate CRUD</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('treasures.create') }}"> Create New Treasures</a>
        </div>
    </div>
</div>

@if ($message = Session::get('noFire'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Tale</th>
        <th>Value</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($treasures as $treasure)
    <tr>
        <td>{{ $treasure->id }}</td>
        <td>{{ $treasure->title }}</td>
        <td>{{ $treasure->tale }}</td>
        <td>{{ $treasure->value }}</td>
        <td>
            <form action="{{ route('treasures.destroy',$treasure->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('treasures.show',$treasure->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('treasures.edit',$treasure->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $treasures->links() }}


@endsection