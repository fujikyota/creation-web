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
        <p>モノに価値を、<span>時代に価値を。</span></p>
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
<section class="index__message"></section>
<section class="index__recruit"></section>
@include('layout.footer')
