@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <h1 class="card-title">@if($course->id){{'Обновлять Курсы'}}@else{{'Добавить Курсы'}}@endif</h1>
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

                    <form action="@if($course->id) {{ route('courses.update', ['course' => $course->id]) }} @else {{ route('courses.store') }} @endif"
                          method="POST" enctype="multipart/form-data">
                        @csrf
                        @if($course->id)
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="name_uz">Имя(UZ)</label>
                            <input type="text" name="name_uz" class="form-control" id="name_uz" placeholder="Имя(UZ)" value="{{$course->name_uz}}">
                        </div>

                        <div class="form-group">
                            <label for="text_uz">Текст(UZ)</label>
                            <input type="text" name="text_uz" class="form-control" id="text_uz" placeholder="Текст(UZ)" value="{{$course->text_uz}}">
                        </div>

                        <div class="form-group">
                            <label for="name_ru">Имя(RU)</label>
                            <input type="text" name="name_ru" class="form-control" id="name_ru" placeholder="Имя(RU)" value="{{$course->name_ru}}">
                        </div>

                        <div class="form-group">
                            <label for="text_ru">Текст(RU)</label>
                            <input type="text" name="text_ru" class="form-control" id="text_ru" placeholder="Текст(RU)" value="{{$course->text_ru}}">
                        </div>

                        <div class="form-group">
                            <label for="name_en">Имя(EN)</label>
                            <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Имя(EN)" value="{{$course->name_en}}">
                        </div>

                        <div class="form-group">
                            <label for="text_en">Текст(EN)</label>
                            <input type="text" name="text_en" class="form-control" id="text_en" placeholder="Текст(EN)" value="{{$course->text_en}}">
                        </div>

                        <div class="form-group">
                            <label for="teacher_id">Учитель</label>
                            <select class="form-control form-select" name="teacher_id" id="teacher_id">
                                @if($course->id == NULL)
                                    <option value="">Выбрать</option>
                                @endif
                                @foreach($teachers as $teacher)
                                    <option @if($teacher->id == $course->teacher_id) selected @endif value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="category">Категория</label>
                            <select class="form-control form-select" name="category_id">
                                @if($course->id == NULL)
                                    <option value="">Выбрать</option>
                                @endif
                                @foreach($categories as $category)
                                    <option @if($category->id == $course->category_id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="price">Цена</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Цена" value="{{$course->price}}">
                        </div>

                        <div class="form-group">
                            <label for="time">Время</label>
                            <input type="text" name="time" class="form-control" id="time" placeholder="Время" value="{{$course->time}}">
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок</label>
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
