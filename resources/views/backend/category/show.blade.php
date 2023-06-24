@extends('backend.master')
@section('content')

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Post</h6>
                        <a href="{{ url('/dashboard/category/create') }}">Create Category</a>
                    </div>

            @if(session()->has('delete'))
                <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td>{{date('F d, Y', strtotime($categories->created_at)) }}</td>
                                    <td>{{ $categories->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            <!-- Widgets End -->

@endsection
