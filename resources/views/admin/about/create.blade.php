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


                    <form action="{{route('abouts.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" class="form-control" id="facebook" >
                        </div>

                        <div class="form-group">
                            <label for="twitter">Mail</label>
                            <input class="form-control" type="text" name="twitter" id="twitter" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input class="form-control" type="text" name="instagram" id="instagram" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="Telegram">Telegram</label>
                            <input class="form-control" name="telegram" type="text" id="Telegram" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" name="name"  type="text" id="name" rows="10">
                        </div>
                        <div class="form-group">
                            <label for="lavozim">Kasbi</label>
                            <input class="form-control" name="position" type="text" id="lavozim" rows="10">
                        </div>

                        <div class="form-group">
                            <label for="img">Добавьте рисунок </label>
                            <input type="file" name="image" class="form-control" id="img">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Сохранить</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
