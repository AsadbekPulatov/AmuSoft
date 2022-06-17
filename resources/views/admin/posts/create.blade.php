@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить новости</h1></div>
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


                    <form action="{{route('posts.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header">Титу UZ</label>
                            <input type="text" name="title_uz" class="form-control" id="header" placeholder="Титул UZ" >
                        </div>

                        <div class="form-group">
                            <label for="description">Текст UZ</label>
                            <textarea class="form-control" name="description_uz" id="description" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="header">Титу RU</label>
                            <input type="text" name="title_ru" class="form-control" id="header_ru" placeholder="Титул RU" >
                        </div>

                        <div class="form-group">
                            <label for="description">Текст RU</label>
                            <textarea class="form-control" name="description_ru" id="description" rows="10"  ></textarea>
                        </div>

                        <div class="form-group">
                            <label for="header_ru">Титу EN</label>
                            <input type="text" name="title_en" class="form-control" id="header" placeholder="Титул EN" >
                        </div>

                        <div class="form-group">
                            <label for="description">Текст EN</label>
                            <textarea class="form-control" name="description_en" id="description" rows="10"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="img">Добавьте рисунок </label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
