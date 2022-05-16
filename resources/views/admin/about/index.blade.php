@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Команда</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('abouts.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить команда
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center w-100">

                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Telegram</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Профессия</th>
{{--                            <th >rasm</th>--}}
{{--                            <th >yaratilgan vaqt</th>--}}
{{--                            <th >korganlar soni</th>--}}
                            <th scope="col">Действие</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($abouts as $about)
                            <tr>
                                <th scope="row" class="col-1">{{$about->id}}</th>
                                <td>  <a href="{{$about->facebook}}"><i class="bi bi-facebook" style="font-size: 1.8rem"></i></a></td>
                                <td> <a href="{{$about->email}}"><i class="fas fa-envelope " style="font-size: 1.8rem"></i></a></td>
                                <td> <a href="{{$about->instagram}}" ><i class="bi bi-instagram" style="font-size: 1.8rem"></i></a></td>
                                <td><a href="{{$about->telegram}}"><i class="bi bi-telegram" style="font-size: 1.8rem"></i></a></td>
                                <td>{{$about->name}}</td>
                                <td>{{$about->position}}</td>
{{--                                <td>--}}
{{--                                    <img src="{{ asset('assets/img/about_img/'.$about->image) }}"  alt="" class="text-center w-100">--}}
{{--                                </td>--}}
{{--                                <td>{{$about->created_at}}</td>--}}
{{--                                <td>{{$about->viewed}}</td>--}}
                                <td class="col-2">
                                    <form action="{{ route('abouts.destroy',$about->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('abouts.edit',$about->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
{{--                                                <i class="bi bi-trash-fill"></i>--}}
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
