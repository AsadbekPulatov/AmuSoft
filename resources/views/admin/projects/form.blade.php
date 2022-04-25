@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h1 class="card-title">@if($project->id){{'Обновлять проекты'}}@else{{'Добавить проекты'}}@endif</h1>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Ой!</strong>С вашим вводом возникли некоторые проблемы.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="@if($project->id) {{ route('projects.update', ['project' => $project->id]) }} @else {{ route('projects.store') }} @endif"
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($project->id)
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name">Имя</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="{{$project->name}}">
                        </div>

                        <div class="form-group">
                            <label for="category">Категория</label>
                            <select class="form-control form-select" name="category">
                                @foreach($categories as $category)
                                    <option @if($category->id == $project->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>

                        <div class="form-group">
                            <label for="url">Ссылка</label>
                            <input type="url" name="url" class="form-control" id="url" placeholder="Ссылка" value="{{$project->url}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
