@extends('layouts.app')
@section('title', 'Панель администратора')

@section('content')
<div class="screen">
    <div class="heading">
        <h2>Управление сайтом</h2>
    </div>
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Новый фреймворк для веба</td>
                <td class="admin-actions">
                    <button>Редактировать</button>
                    <button class="danger">Удалить</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection