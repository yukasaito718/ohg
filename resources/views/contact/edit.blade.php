@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    editなう
                    <div class="row justify-content-center">
                        <form method="POST" action="{{route('contact.update',['id' => $contact->id])}}">
                            @csrf
                            氏名
                            <input type="text" name="your_name" class="form-control" id="exampleFormControlInput1" value="{{ $contact->your_name }}">
                            <br>
                            件名
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{ $contact->title }}">
                            <br>
                            メールアドレス
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="{{ $contact->email }}">
                            <br>
                            ホームページ
                            <input type="url" name="url" class="form-control" id="exampleFormControlInput1" value="{{ $contact->url }}">
                            <br>
                            性別
                            <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" id="flexRadioDefault1" value="0" @if($contact->gender === 0) checked @endif></input>
                                <label class="form-check-label" for="flexRadioDefault1">男性</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="gender" class="form-check-input" id="flexRadioDefault2" value="1" @if($contact->gender === 1) checked @endif></input>
                                <label class="form-check-label" for="flexRadioDefault2">女性</label>
                                <br>
                            </div>
                            <br>
                            年齢
                            <div class="form-floating">
                                <select name="age" id="floatingSelect" class="form-select" aria-label="Floating label select example">
                                    <option selected>選択して下さい</option>
                                    <option value="1" @if($contact->age === 1) selected @endif>~19歳</option>
                                    <option value="2" @if($contact->age === 2) selected @endif>20歳~29歳</option>
                                    <option value="3" @if($contact->age === 3) selected @endif>30歳~39歳</option>
                                    <option value="4" @if($contact->age === 4) selected @endif>40歳~49歳</option>
                                    <option value="5" @if($contact->age === 5) selected @endif>50歳~59歳</option>
                                    <option value="6" @if($contact->age === 6) selected @endif>~60歳</option>
                                </select>
                            </div>
                            <br>
                            お問合せ内容
                            <textarea name="contact" id="" cols="30" rows="10" class="form-control" id="floatingTextarea">
                                {{ $contact->contact }}
                            </textarea>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" id="flexRadioDefault2" type="checkbox" name="caution" value="1">注意事項に同意する</input>
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="更新する"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
