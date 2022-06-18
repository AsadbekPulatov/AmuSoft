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


                    <form action="{{route('abouts.update',$abouts)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" name="name" value="{{$abouts->name}}"  type="text" id="name" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="description">Текст(UZ)</label>
                            <textarea class="form-control" name="text_uz"  id="description" rows="10">{{$abouts->text_uz}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Текст(RU)</label>
                            <textarea class="form-control" name="text_ru"  id="description" rows="10">{{$abouts->text_ru}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Текст(EN)</label>
                            <textarea class="form-control" name="text_en"  id="description" rows="10">{{$abouts->text_en}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">facebook</label>
                            <input type="text" name="facebook" class="form-control" id="header_ru" placeholder="Титул" value="{{$abouts->facebook}}">
                        </div>

                        <div class="form-group">
                            <label for="description_ru">Mail</label>
                            <input  class="form-control"  type="text" name="email" id="description_ru" rows="10" value=" {{$abouts->email}}">
                        </div>
                        <div class="form-group">
                            <label for="description_ru">instagram</label>
                            <input  class="form-control"  name="instagram" id="description_ru" rows="10" value=" {{$abouts->instagram}}">
                        </div>
                        <div class="form-group">
                            <label for="description_ru">Telegram</label>
                            <input  class="form-control"  name="telegram" id="description_ru" rows="10" value=" {{$abouts->telegram}}">
                        </div>


                        <div class="form-group">
                            <label for="description_ru">Текст (Ру)</label>
                            <input  class="form-control"  name="position" id="description_ru" rows="10" value=" {{$abouts->position}}">
                        </div>




                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                            <input type="file" name="image" class="form-control" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
