@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h3 class="mt-3">Pre-Registered Form List</h3>
        <hr style="height: 4px;color: rgb(0,0,0);">
        <div class="card">
            <div class="card-body">
                <table class="table table-resposive table-bordered">
                    <thead>
                        <tr>
                            <th hidden style="text-align: center;">ID</th>
                            <th style="text-align: center;">REFERENCE NO.</th>
                            <th style="text-align: center;">NAME</th>
                            <th style="text-align: center;">ENROLLING GRADE LEVEL</th>
                            <th style="text-align: center;">GWA</th>
                            <th style="text-align: center;">STATUS</th>
                            <th style="text-align: center;">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($learners as $student)
                            <tr></tr>
                                <td hidden>{{ $student->id }}</td>
                                <td>{{ $student->RefNo }}</td>
                                <td>{{ $student->fname }} {{ $student->mname }} {{ $student->lname }}</td>
                                <td style="text-align: center;">{{ $student->glevel }}</td>
                                <td>{{ $student->GWA }}</td>
                                <td>{{ $student->EnrollmentStatus }}</td>
                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewLeaners{{ $student->id }}">View</button>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#approveRegistration{{ $student->id }}">Accept</button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#declineRegistration{{ $student->id }}">Decline</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('modals.approveRegistration')
    @include('modals.declineRegistration')
    @include('modals.viewRegistration')
@endsection
