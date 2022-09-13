@extends('layouts.index')
@section('content')
<div class="container my-5">
        <div class="container my-5">
            <table class="table table-striped table-bordered table-hover table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nick name</th>
                        <th>Profile_ID</th>

                        <th>Age</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->nickname }}</td>
                            <td>{{ $user->profil_id }}</td>
                            <td>{{ $user->profil->age }}</td>
                            <td>{{ $user->profil->name }}</td>
                            <td>{{ $user->profil->phone }}</td>
                            <td>
                                <a href="">
                                    <button class="btn btn-outline-warning">Edit</button>
                                </a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    @endsection
