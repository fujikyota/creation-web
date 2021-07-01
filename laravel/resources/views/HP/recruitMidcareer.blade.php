@extends('layout.common')
@include('layout.common')
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
				<h2 class="r-title">中途採用情報</h2>
				<div class="state">
					<p class="read wanted">webシステム・プログラマー経験者をを募集します!</p>
				</div>
				<table class="entry-format">
					<tbody>
						<tr>
							<th>ポジション</th>
							<td><br>
							</td>
						</tr>
						<tr>
							<th>仕事内容</th>
							<td></td>
						</tr>
						<tr>
							<th>求める人物像</th>
							<td></td>
						</tr>
						<tr>
							<th>勤務地</th>
							<td></td>
						</tr>
						<tr>
							<th>選考スケジュール</th>
							<td><br>
						</tr>
					</tbody>
				</table>
                <h3>待遇</h3>
                <table class="entry-format">
					<tbody>
						<tr>
						<th>給与</th>
						<td>月収20万～38万円</td>
					    </tr>
						<tr>
						<th>諸手当</th>
						<td>通勤交通費（25,000円まで）</td>
					    </tr>
						<tr>
						<th>賞与</th>
						<td>年2回</td>
                        </tr>
                        <tr>
                        <th>昇給</th>
                        <td>スキルにより昇給<br>
                        </td>
                        </tr>
                        <tr>
                        <th>勤務時間</th>
                        <td>9：00～18：00（休憩60分）</td>
                        </tr>
                        <tr>
                            <th>休日休暇</th>
                            <td>完全週休2日制、祝祭日　年間約120日</td>
                        </tr>
                            <tr>
                            <th>勤務地</th>
                            <td><br>派遣や転勤はありません</td>
                        </tr>
                        <tr>
                            <th>福利厚生</th>
                            <td>社会保険、労働保険</td>
                        </tr>
                        <tr>
                            <th>備考</th>
                            <td></td>
                        </tr>
					</tbody>
				</table>
                <h3>入社後のイメージ</h3>
                <table class="entry-format">
					<tbody>
						<tr>
						<th>内容</th>
						<td></td>
					    </tr>
						<tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="space-100"></div>
@include('layout.footer')
