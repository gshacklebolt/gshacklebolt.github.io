var TxtType = function (t, e, i) {
	this.toRotate = e, this.el = t, this.loopNum = 0, this.period = parseInt(i, 10) || 2e3, this.txt = "", this.tick(), this.isDeleting = !1
};
TxtType.prototype.tick = function () {
		var t = this.loopNum % this.toRotate.length,
			e = this.toRotate[t];
		this.isDeleting ? this.txt = e.substring(0, this.txt.length - 1) : this.txt = e.substring(0, this.txt.length + 1), this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";
		var i = this,
			s = 150 - 100 * Math.random();
		this.isDeleting && (s /= 2), this.isDeleting || this.txt !== e ? this.isDeleting && "" === this.txt && (this.isDeleting = !1, this.loopNum++, s = 500) : (s = this.period, this.isDeleting = !0), setTimeout(function () {
			i.tick()
		}, s)
	}, window.onload = function () {
		for (var t = document.getElementsByClassName("typewriter"), e = 0; e < t.length; e++) {
			var i = t[e].getAttribute("data-type"),
				s = t[e].getAttribute("data-period");
			i && new TxtType(t[e], JSON.parse(i), s)
		}
		var n = document.createElement("style");
		n.type = "text/css", n.innerHTML = ".typewriter > .wrap { border-right: 0.1em solid #1688f0}", document.body.appendChild(n)
	},
	function (s) {
		s("html").removeClass("no-js"), s("header a").click(function (t) {
			if (!s(this).hasClass("no-scroll")) {
				t.preventDefault();
				var e = s(this).attr("href"),
					i = s(e).offset().top;
				s("html, body").animate({
					scrollTop: i + "px"
				}, Math.abs(window.pageYOffset - s(e).offset().top) / 1), s("header").hasClass("active") && s("header, body").removeClass("active")
			}
		}), s("#to-top").click(function () {
			s("html, body").animate({
				scrollTop: 0
			}, 500)
		}), s("#lead-down span").click(function () {
			var t = s("#lead").next().offset().top;
			s("html, body").animate({
				scrollTop: t + "px"
			}, 500)
		}), s("#experience-timeline").each(function () {
			$this = s(this), $userContent = $this.children("div"), $userContent.each(function () {
				s(this).addClass("vtimeline-content").wrap('<div class="vtimeline-point"><div class="vtimeline-block"></div></div>')
			}), $this.find(".vtimeline-point").each(function () {
				s(this).prepend('<div class="vtimeline-icon"><i class="fa fa-map-marker"></i></div>')
			}), $this.find(".vtimeline-content").each(function () {
				var t = s(this).data("date");
				t && s(this).parent().prepend('<span class="vtimeline-date">' + t + "</span>")
			})
		}), s("#mobile-menu-open").click(function () {
			s("header, body").addClass("active")
		}), s("#mobile-menu-close").click(function () {
			s("header, body").removeClass("active")
		})
	}(jQuery);
