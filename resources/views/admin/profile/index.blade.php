@extends('layouts.profile')
@section('title', '登録済みのプロフィール一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row">
            <div class="list-profiles col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead> {{--表のヘッダー要素　一番上の行--}}
                            <tr> {{--行の区切り--}}
                                <th width="10%">ID</th>　　{{--<th>は見出し--}}
                                <th width="10%">名前</th>
                                <th width="10%">性別</th>
                                <th width="10%">趣味</th>
                                <th width="50%">自己紹介</th>
                            </tr>
                        </thead>
                        <tbody> {{--表のボデー--}}
                            @foreach($posts as $profile)
                            <tr>{{--行の区切り(開始(左端))--}}
                                <th>{{ $profile->id }}</th>　{{--<th>は見出し--}}
                                <td>{{ $profile->name }}</td>　{{--<td>は要素セル--}}
                                <td>{{ $profile->gender }}</td>
                                <td>{{ $profile->hobby }}</td>
                                <td>{{ \Str::limit($profile->introduction, 250) }}</td>
                                <td>
                                    <div>
                                        <a href="{{ action('Admin\ProfileController@edit', 
['id' => $profile->id]) }}">編集</a>
                                    </div>
                                    <div>
                                        <a href="{{ action('Admin\ProfileController@delete', 
['id' => $profile->id]) }}">削除</a>
                                    </div>
                                </td>
                            </tr>{{--行の区切り(終了(右端))--}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection