@extends('layout.common')
@include('layout.header')
<section class="index__work">
	<div class="recruit__ttl"></div>
	<h2 class="recruit__ttll">私たちの求める人材</h2>
	<div class="space-100"></div>
</section>
<div id="wrapper">
	<div id="contents">
		<div class="anim section-in animated fadeIn" data-label="fadeIn">
			<div class="recruit__wrap">
				<a href="/recruitNewgraduates" class="recruit__left">
					<div class="recruit__link">新卒募集要項</div>
				</a>
				<a href="/recruitMidcareer" class="recruit__right">
					<div class="recruit__link">中途募集要項</div>
				</a>
			</div>
			<div class="space-100"></div>
			<div class="guideline">
				<h2 class="r-title">新卒採用情報</h2>
				<div class="state">
					<p class="read wanted">2022年卒　Webプログラマー職を募集します</p>
				</div>
				<table class="entry-format">
					<tbody>
						<tr>
							<th>ポジション</th>
							<td>大　　卒 ： 1<br>短・専卒 ： １<br>
							</td>
						</tr>
						<tr>
							<th>仕事内容</th>
							<td>全学部全学科</td>
						</tr>
						<tr>
							<th>求める人物像</th>
							<td>WEBプログラマー職</td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td></td>
						</tr>
						<tr>
							<th>選考スケジュール</th>
							<td>履歴書<br>
						</tr>
						<tr>
							<th>入社後のイメージ</th>
							<td>書類選考、面接</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="space-100"></div>
@include('layout.footer')