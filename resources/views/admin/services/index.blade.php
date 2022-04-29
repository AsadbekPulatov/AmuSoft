@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Сервисы</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('services.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить Сервисы
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Сервис</th>
                                <th scope="col">Oписание</th>
                                <th scope="col">Фото</th>
{{--                                <th scope="col">Ссылка</th>--}}
                                <th scope="col">Действие</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                            <tr>
                                <td class="col-1">{{$service->id}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->description}}</td>
                                <td>
                                    <img src="{{asset('assets/img/service/' . $service->img)}}" style="width: 30%" alt="">
                                </td>
{{--                                <td><a href="{{ $servi->url }}">{{ $project->url }}</a> </td>--}}
                                <td class="col-2">
                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('services.edit', $service->id)}}">
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
