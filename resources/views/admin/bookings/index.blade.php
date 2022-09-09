@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Бронировать</h1></div>
                </div>
                <hr>
                <div class="card-body table-responsive">
                    <table class="table table-bordered text-center table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Эл. адрес</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Курс</th>
                            <th scope="col">Дата</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $key => $booking)
                            <tr>
                                <td class="col-1">{{$key+1}}</td>
                                <td>{{$booking->name}}</td>
                                <td>{{$booking->surname}}</td>
                                <td>{{$booking->email}}</td>
                                <td>{{$booking->phone}}</td>
                                <td>
                                    @if(isset($booking->course->name_uz))
                                        {{$booking->course->name_uz}}
                                    @endif
                                </td>
                                <td>{{$booking->created_at}}</td>
                                <td class="col-2">
                                    <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                                        {{--                                        <a class="btn btn-warning btn-sm" href="{{ route('bookings.edit', $booking->id)}}">--}}
                                        {{--                                            <span class="btn-label">--}}
                                        {{--                                                <i class="fa fa-pen"></i>--}}
                                        {{--                                            </span>--}}
                                        {{--                                        </a>--}}
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
