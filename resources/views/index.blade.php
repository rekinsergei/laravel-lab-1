@extends('layouts.app')
@section('title', 'Главная')

@section('content')
<div class="screen">
    <div class="heading">
        <h2>Главные новости</h2>
        <p>Самые свежие материалы</p>
    </div>
    <div class="news-grid">
        <article class="news-card">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80" alt="Код">
            <div class="news-content">
                <span class="date">14 Ноября 2026</span>
                <h3>Новый фреймворк для веба</h3>
                <p>Разработчики представили инструмент, который ускоряет верстку.</p>
                <a href="#" class="read-more">Читать далее &rarr;</a>
            </div>
        </article>
    </div>
</div>
@endsection