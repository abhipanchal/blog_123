@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Height</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Audio</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($users as $user)
                            </tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->emil}}</td>
                            <td>{{$user->DOB}}</td>
                            <td>{{$user->height}}</td>
                            <td>{{$user->weight}}</td>
                            <td>{{$user->audio_url}}</td>
                            <td>{{$user->summery}}</td>
                            <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
                            </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
