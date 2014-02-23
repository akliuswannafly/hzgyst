var ImageBanner = function(obj) {
	this.ImgParentId = obj.Banner;
	this.ImgId = obj.Img;
	this.HoverId = obj.HoverId;
	this.Index = 0;
	this.time = 0;
	this.length = $(obj.Img).length;
	this.sleep = obj.Time;
	this.css = obj.Css;
	if (this.length != $(obj.HoverId).length) {
		throw ("this img count != hoverdom count")
	}
	this.start();
	this.Bindevent()
};
ImageBanner.prototype = {
	start: function() {
		this.BindInterval()
	},
	stop: function() {
		clearInterval(this.setInterval);
		this.setInterval = null
	},
	play: function() {
		var src = $(this.ImgId).eq(this.Index).find("img").attr("src" + this.Index);
		if (src != null) {
			$(this.ImgId).eq(this.Index).find("img").attr("src", src);
			$(this.ImgId).eq(this.Index).find("img").removeAttr("src" + this.Index)
		}
		$(this.ImgId).eq(this.Index).stop(true, true).fadeIn(400).siblings().fadeOut(400);
		$(this.HoverId).find("a").removeClass(this.css);
		$(this.HoverId).eq(this.Index).find("a").addClass(this.css)
	},
	BindInterval: function() {
		var obj = this;
		var sleeptime = this.sleep;
		//alert(this.Index);
		if (!this.setInterval) {
			
			this.setInterval = setInterval(function() {
				obj.Index++;
				if (obj.Index == obj.length) {
					obj.Index = 0
				}
				obj.play()
			},
			this.sleep)
		}
	},
	Bindevent: function() {
		var obj = this;
		var Index = -1;
		$(this.ImgParentId).hover(function() {
			obj.stop()
		},
		function() {
			Index = -1;
			obj.start()
		});
		$(this.HoverId).hover(function() {
			obj.stop();
			var hoverobj = this;
			Index = $(this).index();
			setTimeout(function() {
				if (Index == $(hoverobj).index()) {
					obj.Index = Index;
					obj.play()
				}
			},
			100)
		},
		function() {
			Index = -1;
			obj.start()
		})
	}
};
$(function() {
	new ImageBanner({
		Banner: "#IndexBanner",
		Img: "#pic a",
		HoverId: "#play li",
		Css: "on",
		Time: 3000
	})
})