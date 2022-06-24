@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Курсы</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('courses.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить курсы
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Текст</th>
                            <th scope="col">Учитель</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Цена</th>
                            <th scope="col">Фото</th>
                            <th scope="col">Время</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $key => $course)
                            <tr>
                                <td class="col-1">{{$key+1}}</td>
                                <td>{{$course->name_uz}}</td>
                                <td>{{$course->text_uz}}</td>
                                <td>
                                    @if(isset($course->teacher->name))
                                        {{$course->teacher->name}}
                                    @endif
                                </td>
                                <td>
                                    @if(isset($course->category->name))
                                        {{$course->category->name}}
                                    @endif
                                </td>
                                <td>{{$course->price}}</td>
                                <td>
                                    <img src="{{asset('assets/img/course/' . $course->img)}}" style="width: 30%" alt="">
                                </td>
                                <td>{{$course->time}}</td>
                                <td class="col-2">
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('courses.edit', $course->id)}}">
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
