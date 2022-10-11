<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション。
     *
     * @param  $micropostid  投稿のid
     * @return \Illuminate\Http\Response？
     */
    public function store($micropostid)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
        \Auth::user()->favorite($micropostid);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * 投稿をお気に入りから外すアクション。
     *
     * @param  $micropostid  投稿のid
     * @return \Illuminate\Http\Response？
     */
    public function destroy($micropostid)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unfavorite($micropostid);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
