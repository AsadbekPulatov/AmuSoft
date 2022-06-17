@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Обновлять новости</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('posts.update',$posts)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="header_ru">Титул(UZ)</label>
                        <input type="text" name="title_uz" class="form-control" id="header_ru" placeholder="Титул UZ" value="{{$posts->title_uz}}">
                    </div>

                    <div class="form-group">
                        <label for="description_ru">Текст (UZ)</label>
                        <textarea  class="form-control"  name="description_uz" id="description_ru" rows="10">{{$posts->description_uz}}</textarea>
                    </div>
                        <div class="form-group">
                            <label for="header_ru">Титул(Ру)</label>
                            <input type="text" name="title_ru" class="form-control" id="header_ru" placeholder="Титул RU" value="{{$posts->title_ru}}">
                        </div>

                        <div class="form-group">
                            <label for="description_ru">Текст (Ру)</label>
                            <textarea  class="form-control"  name="description_ru" id="description_ru" rows="10">{{$posts->description_ru}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">Титул(EN)</label>
                            <input type="text" name="title_en" class="form-control" id="header_ru" placeholder="Титул EN" value="{{$posts->title_en}}">
                        </div>

                        <div class="form-group">
                            <label for="description_ru">Текст (EN)</label>
                            <textarea  class="form-control"  name="description_en"  id="description_ru" rows="10">{{$posts->description_en}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
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
