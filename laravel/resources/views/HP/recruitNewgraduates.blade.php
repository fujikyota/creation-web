@extends('layout.common')
@include('layout.header')
<section class="index__work">
	<div class="recruit__ttl"></div>
	<h2 class="recruit__ttll">私たちの求める人材</h2>
	<div class="space-100"></div>
</section>

<body id="">
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
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="/js/master.js"></script>
	<script type="text/javascript" src="/js/scrollfade.js"></script>
	<script type="text/javascript" src="/js/dropdown.js"></script>
	<script type="text/javascript" id="gtm-scroll-tracking">
		(function(b, g, a) {
			function l() {
				if (!b.querySelector || !b.body.getBoundingClientRect) return !1;
				a.dataLayerName = a.dataLayerName || "dataLayer";
				a.distances = a.distances || {};
				p();
				n(g, "scroll", v(p, 500))
			}

			function q(e, f, c, d, a) {
				var k;
				for (k = 0; k < f.length; k++) {
					var b = parseInt(f[k], 10),
						h = "%" !== c ? b + a : b / 100 * d + a;
					b += c;
					h <= d + a && (e[b] = h)
				}
				return e
			}

			function r(e, a) {
				var c = parseInt(e, 10),
					d = a / c,
					f = [],
					b;
				for (b = 1; b < d + 1; b++) f.push(b * c);
				return f
			}

			function p() {
				var e = t(a.bottom),
					f = t(a.top),
					c = b.body,
					d = b.documentElement;
				c = Math.max(c.scrollHeight,
					c.offsetHeight, d.clientHeight, d.scrollHeight, d.offsetHeight);
				f && (c -= f);
				e && (c = e - (f || 0));
				e = c - 5;
				f = f || 0;
				c = {};
				d = [];
				var h = [];
				if (a.distances.percentages && (a.distances.percentages.each && (d = d.concat(a.distances.percentages.each)), a.distances.percentages.every)) {
					var k = r(a.distances.percentages.every, 100);
					d = d.concat(k)
				}
				a.distances.pixels && (a.distances.pixels.each && (h = h.concat(a.distances.pixels.each)), a.distances.pixels.every && (k = r(a.distances.pixels.every, e), h = h.concat(k)));
				c = q(c, d, "%", e, f);
				e = c = q(c, h, "px",
					e, f);
				f = void 0 !== g.pageXOffset;
				c = "CSS1Compat" === (b.compatMode || "");
				f = f ? g.pageYOffset : c ? b.documentElement.scrollTop : b.body.scrollTop;
				f = parseInt(f, 10);
				c = parseInt;
				d = "CSS1Compat" === b.compatMode ? b.documentElement : b.body;
				d = d.clientHeight;
				f += c(d, 10);
				for (var m in e)
					if (f > e[m] && !u[m])
						if (u[m] = !0, c = m, d = g.GoogleAnalyticsObject, "undefined" === typeof g[a.dataLayerName] || a.forceSyntax)
							if ("function" === typeof g[d] && "function" === typeof g[d].getAll && 2 !== a.forceSyntax) g[d]("send", "event", a.category, c, a.label, {
								nonInteraction: 1
							});
							else "undefined" !== typeof g._gaq && 1 !== a.forceSyntax && g._gaq.push(["_trackEvent", a.category, c, a.label, 0, !0]);
				else g[a.dataLayerName].push({
					event: "scrollTracking",
					attributes: {
						distance: c,
						label: a.label
					}
				})
			}

			function t(e) {
				if ("number" === typeof e || parseInt(e, 10)) return parseInt(e, 10);
				try {
					var a = 1 === e.nodeType ? e : b.querySelector(e),
						c = b.body.getBoundingClientRect().top,
						d = Math.floor(a.getBoundingClientRect().top - c);
					return d
				} catch (h) {}
			}

			function v(a, f) {
				var c, d, e, b = null,
					g = 0,
					l = function() {
						g = new Date;
						b = null;
						e = a.apply(c,
							d)
					};
				return function() {
					var h = new Date;
					g || (g = h);
					var k = f - (h - g);
					c = this;
					d = arguments;
					0 >= k ? (clearTimeout(b), b = null, g = h, e = a.apply(c, d)) : b || (b = setTimeout(l, k));
					return e
				}
			}

			function n(a, b, c) {
				if (a.addEventListener) a.addEventListener(b, c);
				else if (a.attachEvent) a.attachEvent("on" + b, function(b) {
					c.call(a, b)
				});
				else if ("undefined" === typeof a["on" + b] || null === a["on" + b]) a["on" + b] = function(b) {
					c.call(a, b)
				}
			}
			var u = {};
			"loading" !== b.readyState ? l() : b.addEventListener ? n(b, "DOMContentLoaded", l) : n(g, "load", l)
		})(document, window, {
			forceSyntax: !1,
			dataLayerName: !1,
			distances: {
				percentages: {
					each: [10, 90],
					every: 25
				},
				pixels: {
					each: [],
					every: null
				}
			},
			top: null,
			bottom: null,
			category: "Scroll Tracking",
			label: document.location.pathname
		});
	</script>
	<script type="text/javascript" id="">
		(function() {
			var a = document.createElement("script"),
				b = document.getElementsByTagName("script")[0];
			a.async = !0;
			a.src = "//s.yjtag.jp/tag.js#site\x3dF3fwBuZ";
			b.parentNode.insertBefore(a, b)
		})();
	</script>
	<noscript>
		<iframe src="//b.yjtag.jp/iframe?c=F3fwBuZ" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</noscript>
	<div id="topcontrol" title="PAGETOP" style="position: fixed; bottom: 40px; right: 10px; opacity: 0; cursor: pointer;"><img src="/common_img/pagetop.png" alt="ページのトップへ"></div>
</body>
<div class="space-100"></div>

@include('layout.footer')