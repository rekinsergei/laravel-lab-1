@extends('layouts.app')
@section('title', 'Категория: Наука')

@section('content')
<div class="screen">
    <div class="heading">
        <h2>Категория: Наука</h2>
        <p>Все новости в разделе "Наука"</p>
    </div>
    <div class="news-grid">
        <article class="news-card">
            <img src="https://images.unsplash.com/photo-1507413245164-6160d8298b31?auto=format&fit=crop&w=800&q=80" alt="Космос">
            <div class="news-content">
                <span class="date">14 Ноября 2026</span>
                <h3>Новые открытия в космосе</h3>
                <p>Телескоп передал снимки экзопланеты.</p>
                <a href="#" class="read-more">Читать далее &rarr;</a>
            </div>
        </article>
    </div>
</div>
@endsection