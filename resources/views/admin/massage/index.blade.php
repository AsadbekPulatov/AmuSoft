@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Новости</h1></div>

                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Title</th>
                            <th scope="col">Massage</th>
                            <th scope="col">Activity</th>
                            <th scope="col">Command</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($massages as $massage)
                            <tr>
                                <th scope="row" class="col-1">{{$massage->id}}</th>
                                <td>{{$massage->name}}</td>
                                <td>{{$massage->email}}</td>

                                <td>{{$massage->title}}</td>
                                <td>{{$massage->massage}}</td>
                                <td>{{$massage->activity}}</td>
                                <td class="col-2">
                                    <form action="{{ route('massage.destroy',$massage->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('massage.show',$massage->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
