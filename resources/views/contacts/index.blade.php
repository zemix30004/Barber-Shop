@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Управление контактами</h2>
        </div>
        <div class="pull-right">
            {{-- <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Contact</a> --}}
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
    <th>№</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Message</th>
    <th width="280px">Action</th>
    </tr>
    @foreach ($contacts as $key => $contact)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->message }}</td>
        <td>
            <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}">Show</a>
                @can('contact-edit')
                <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('contact-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['contacts.destroy', $contact->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
                <button type="submit" class="btn btn-danger">Delete</button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $contacts->links() !!}
@endsection


