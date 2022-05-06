@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h1 class="card-title">@if($service->id){{'Обновлять Сервисы'}}@else{{'Добавить Сервисы'}}@endif</h1>
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

                    <form action="@if($service->id) {{ route('services.update', ['service' => $service->id]) }} @else {{ route('services.store') }} @endif"
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($service->id)
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="title">Сервис</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Сервис" value="{{$service->title}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Oписание</label>
                            <textarea name="description" class="form-control" id="description" placeholder="Oписание" rows="10">{{$service->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(100x100)</i></b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>

                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
