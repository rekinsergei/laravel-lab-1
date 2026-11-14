@extends('layouts.app')
@section('title', 'Панель журналиста')

@section('content')
<div class="screen">
    <div class="heading">
        <h2>Написать статью</h2>
    </div>
    <div class="form-container">
        <form action="#" method="POST">
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" placeholder="Введите заголовок...">
            </div>
            <div class="form-group">
                <label>Текст новости</label>
                <textarea placeholder="Текст..."></textarea>
            </div>
            <button type="submit" class="button">Опубликовать</button>
        </form>
    </div>
</div>
@endsection