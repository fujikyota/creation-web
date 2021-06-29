@extends('layout.common')
@include('layout.header')
<div class="hero">
    <div class="hero__ttl">
    @if ($message)
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript">
    const message = '{{$message}}';
    swal(message);
</script>
@endif
        <h2 class="hero__ttl-text"><object type="image/svg+xml" data="https://creation2016.co.jp/wp-content/themes/creation/assets/svg/top/text-hero-value.svg" width="200" height="80"></object> <span>for things,</span><br /><object type="image/svg+xml" data="https://creation2016.co.jp/wp-content/themes/creation/assets/svg/top/text-hero-value.svg" width="200" height="80"></object> <span>for the time.</span></h2>
        <p class="hero__middle">モノに価値を、<span>時代に価値を。</span></p>
        <p class="hero__small">Creation.co.Ltd RECRUITMEN</p>
    </div>
</div>
<div class="space-100"></div>
<section class="index__work">
    <div class="work__ttl"></div>
    <h2 class="mission__ttl">私たちの使命</h2>
    <div class="space-100"></div>
    <div class="mission__item">
        <div class="mission__imgBox">
            <img src="/img/tower.jpg" alt="img2" class="mission__img">
        </div>
        <div class="mission__descBox">
            <p class="mission__desc ">どんな事にも”貪欲”に<br>そして”謙虚”であれ</p>
            <p class="mission__text">「企画提案力」「リピート率」「ブランディング」「デザイン力」「運用率」全てが弊社の武器でもありそれらが評価される部分だと理解し考える事を止めず、行動と結果を見せていきます。</p>
            <a href="/work">
            <div class="more">会社を知る</div>
            </a>
        </div>
    </div>
</section>
<div class="space-100"></div>
<section class="index__human">
<div class="friend__ttl"></div>
    <h2 class="human__ttl">私たちの仲間</h2>
    <div class="space-50"></div>
    <div class="human__descBox">
        <p class="human__desc ">「〇〇〇〇」な人が集まる会社</p>
        <p class="human__text">社員について<br>どんな人がいる会社なのか</p>
    </div>
    <div class="human__box">
        <ul class="human__list">
            <li class="human__item">
                <img src="/img/icon.jpeg" alt="icon1" class="human__icon">
                <div class="mask">
                    <div class="caption">山田太郎</div>
                </div>
            </li>
            <li class="human__item">
                <img src="/img/icon.jpeg" alt="icon2" class="human__icon">
                <div class="mask">
                    <div class="caption">山田太郎</div>
                </div>
            </li>
            <li class="human__item">
                <img src="/img/icon.jpeg" alt="icon3" class="human__icon">
                <div class="mask">
                    <div class="caption">山田太郎</div>
                </div>
            </li>
            <a href="/human" class="human__link">
            <li>
                <img src="/img/next.png" alt="icon3" class="next__img">
            </li>
            </a>
        </ul>
    </div>
</section>
<div class="space-100"></div>
<section class="index__message">
    <div class="space-100"></div>
    <div class="message__item">
        <div class="message__left">
            <div class="message__ttlimg"></div>
            <h2 class="message__ttl">採用担当より</h2>
            <div class="message__descBox">
                <p class="mission__text">求める人材<br>クリエイションはどんなことをしているか<br>などの文章をここに入れます。</p>
                <div class="message__more">
                    <a href="/work" class="message__more">
                    <div class="more">詳しく見る</div>
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
<section class="index__recruit">
    <div class="recruit__ttlimg"></div>
    <h2 class="mission__ttl">採用情報
    </h2>
    <div class="space-100"></div>
    <div class="recruit__wrap">
                <a href="/recruitNewgraduates" class="recruit__left">
                    <div class="recruit__link">新卒募集要項</div>
                </a>
                <a href="/recruitMidcareer" class="recruit__right">
                    <div class="recruit__link">中途募集要項</div>
                </a>
    </div>
</section>
<div class="space-100"></div>
@include('layout.footer')
