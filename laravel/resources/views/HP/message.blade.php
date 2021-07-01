@extends('layout.common')
@include('layout.common')
@include('layout.header')
<section class="index__message">
    <div class="message__item">
        <div class="message__left">
        <div class="space-100"></div>
            <div class="message__ttlimg"></div>
            <h2 class="message__ttl">採用担当より</h2>
            <div class="message__descBox">
                <p class="mission__text">求める人材<br>クリエイションはどんなことをしているか<br>などの文章をここに入れます。</p>
                <div class="message__more">
                    <a href="/work" class="message__more">
                    </a>
                </div>
            </div>
        </div>
        <div class="message__imgBox">
            <img src="/img/forest.jpg" alt="img2" class="message__img">
        </div>
    </div>
</section>
<div class="space-100"></div>
<div class="message__wrap">
<section class="message__2">
    <h1>選考で重視する点</h1>
</section>
<section class="message__3">
    <h1>よくある質問</h1>
</section>
</div>

@include('layout.footer')
