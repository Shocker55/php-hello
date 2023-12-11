@extends("layouts.helloapp")

@section("title", "index")

@section("menubar")
    @parent
    インデックスページ
@endsection

@section("content")
    <p>本文のコンテンツ</p>
    <p>必要なだけ記述できる。</p>
@endsection

@section("footer")
    copyright 2020 tuyano.
@endsection
