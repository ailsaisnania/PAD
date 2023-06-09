@extends('Template/layoutAdmin')

@section('css')
<link href="dashboard.css" rel="stylesheet">
@stop

@section('navbar')
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/adminDashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Events -->
            <li class="nav-item">
                <a class="nav-link" href="/adminEvents">
                    <i class="fas fa-solid fa-calendar"></i>
                    <span>Events</span></a>
            </li>

            <!-- Nav Item - Projects -->
            <li class="nav-item">
                <a class="nav-link" href="/adminProjects">
                    <i class="fas fa-solid fa-laptop"></i>
                    <span>Projects</span></a>
            </li>

            <!-- Nav Item - Users -->
            <li class="nav-item">
                <a class="nav-link" href="/adminUsers">
                    <i class="fas fa-solid fa-user"></i>
                    <span>Users</span></a>
            </li>
            
            <!-- Nav Item - Approval -->
            <li class="nav-item active">
                <a class="nav-link" href="/adminApproval">
                <i class="fas fa-solid fa-user-check"></i>
                    <span>Approval</span></a>
            </li>
@stop

@section('content')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<br>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Approval</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>

        <!-- Content Row -->
        <div class="row">
        <table class="table">
            <thead class="table-dark text-center">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Video</th>
                <th scope="col">Project Name</th>
                <th scope="col">Team Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($unapproved_projects as $project)
                <tr>
                <th scope="row">1</th>
                <td>
                    <!-- dibuat formatnya begini: https://www.youtube.com/embed/(nama_token) -->
                    <iframe src="{{ $project->video_link }}"></iframe>
                </td>
                <td>{{ $project->project_name }}</td>
                <td>{{ $project->team_name }}</td>
                <td>{{ $project->description }}</td>
                <td>
                    <button type="button" class="btn" style="color:white;background-color:#0C003F;">Review</button>
                    
                    <form action="{{ route('approve', ['id' => $project->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <button type="submit" class="btn" style="color:white;background-color:#15C0A4;">Accept</button>
                    </form>

                    <button type="button" class="btn btn-danger">Decline</button>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>


@stop

@section('js')
<!-- <script src="navbar.js"></script> -->
@stop