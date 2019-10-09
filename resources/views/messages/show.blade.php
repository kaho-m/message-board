@extends('layouts.app')

@section('content')

    <hi>id ={{ $message->id  }}のメッセージページ</hi>
    
    <table class="table table-borderd">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', [class'=> 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection