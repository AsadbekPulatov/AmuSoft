@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Новости</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('posts.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить новости
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                        <table class="table table-bordered text-center table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Заголовок</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Фото</th>
                            <th scope="col">Время</th>
                            <th scope="col">Посмотреть</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $key => $post)
                        <tr>
                            <th scope="row" class="col-1">{{$key+1}}</th>
                            <td>{{$post->title_uz}}</td>
                            <td>{{substr($post->description_uz,0,20)}}</td>
                            <td>
                                <img src="{{ asset('assets/img/post/'.$post->img) }}" alt="" class="text-center w-100">
                            </td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->viewed}}</td>
                            <td class="col-2">
                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                                <a class="btn btn-warning btn-sm" href="{{ route('posts.edit',$post->id) }}">
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
