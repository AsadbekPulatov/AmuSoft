@extends('admin.master')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Категория</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('categories.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить категория
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body table-responsive">
                    <table class="table table-bordered text-center table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Категория</th>
                            <th scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $key => $category)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{ route('categories.destroy',[ 'category' => $category->id ]) }}" method="POST">
                                    <a class="btn btn-warning btn-sm" href="{{ route('categories.edit', ['category' => $category->id]) }}">
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
