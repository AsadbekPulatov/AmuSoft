@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Сообщении</h1></div>

                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Email</th>
                            <th scope="col">Заглавие</th>
                            <th scope="col">Сообщение</th>
                            <th scope="col">События</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($massages as $key => $massage)
                            <tr>
                                <th scope="row" class="col-1">{{$key+1}}</th>
                                <td>{{$massage->name}}</td>
                                <td>{{$massage->email}}</td>

                                <td>{{$massage->title}}</td>
                                <td>{{$massage->massage}}</td>
                                <td>
                                    @if($massage->activity) <button class="btn btn-success">Новый</button>
                                    @else <button class="btn btn-danger">Старый</button>
                                    @endif
                                </td>
                                <td class="col-2">
                                    <form action="{{ route('massage.destroy',$massage->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm" href="{{ route('massage.show',$massage->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-eye"></i>
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
