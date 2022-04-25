@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Проекты</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('projects.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить Проекты
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Категория</th>
                                <th scope="col">Фото</th>
                                <th scope="col">Ссылка</th>
                                <th scope="col">Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td class="col-1">{{$project->id}}</td>
                                <td>{{$project->name}}</td>
                                <td>{{$project->category->name}}</td>
                                <td>
                                    <img src="{{asset('assets/img/project/' . $project->img)}}" style="width: 30%" alt="">
                                </td>
                                <td><a href="{{ $project->url }}">{{ $project->url }}</a> </td>
                                <td class="col-2">
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('projects.edit', $project->id)}}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="btn-label"><i class="fa fa-trash"></i></span>
                                        </button>
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
