<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入り登録するアクション。
     *
     * @param  $micropostId  お気に入り登録するmicropostId
     * @return \Illuminate\Http\Response
     */
    public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 micropostIdの投稿をお気に入り登録する
        \Auth::user()->favorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * 投稿をお気に入り登録から解除するアクション。
     *
     * @param  $micropostId  お気に入り登録の解除をしたい投稿micropostId
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 micropostIdの投稿をお気に入り登録から解除する
        \Auth::user()->unfavorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
