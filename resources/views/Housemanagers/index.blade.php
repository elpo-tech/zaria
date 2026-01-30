@extends('layouts.app') {{-- use your template layout name --}}

@section('title', 'Housemanager')

@section('content')
    <h1>Housemanager</h1>
    @foreach($housemanager as $housemanager)
    <div class="container">
    <h2 class="mb-4">Housemanager Details</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th> Name</th>
                <th>id number</th>
                <th>Phone number</th>
                <th>education level</th>
                <th>years of experience</th>
                <th>former employer number</th>
                <th>housemanager residence</th>
                <th>next of kin details</th>
            </tr>
        </thead>

        <tbody>
        @forelse($customers as $customer)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $housemanager->name }}</td>
                <td>{{ $housemanager->id number }}</td>
                <td>{{ $housemanager->phone number }}</td>
                <td>{{ $housemanager->education level }}</td>
                <td>{{$housemanager->years of experience}}</td>
                <td>{{$housemanager->former employer number}}</td>
                <td>{{$housemanager->residence}}</td>
                <td>{{$housemanager->next of kin details}}</td>
                    <a href="{{ route('housemanager.show', $housemanager->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('housemanager.edit', $housemanager->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No housemanagers found</td>
            </tr>
            @endforeach
        @endforelse
        </tbody>
    </table>
</div>
@endsection
@endsection