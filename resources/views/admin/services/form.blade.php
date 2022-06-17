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
                            <label for="title_uz">Сервис UZ</label>
                            <input type="text" name="title_uz" class="form-control" id="title_uz" placeholder="Сервис UZ" value="{{$service->title_uz}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Oписание UZ</label>
                            <textarea name="description_uz" class="form-control" id="description" placeholder="Oписание UZ" rows="10">{{$service->description_uz}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_ru">Сервис RU</label>
                            <input type="text" name="title_ru" class="form-control" id="title_ru" placeholder="Сервис ru" value="{{$service->title_ru}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Oписание RU</label>
                            <textarea name="description_ru" class="form-control" id="description" placeholder="Oписание RU" rows="10">{{$service->description_ru}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="title">Сервис EN</label>
                            <input type="text" name="title_en" class="form-control" id="title_en" placeholder="Сервис en" value="{{$service->title_en}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Oписание EN</label>
                            <textarea name="description_en" class="form-control" id="description" placeholder="Oписание EN" rows="10">{{$service->description_en}}</textarea>
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

