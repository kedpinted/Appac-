var Annotation = function(player, media) {

	this.player = player;
	this.media = media;

	this.data = null;

	this.time_data = null;

	this.vdo_id = null;

	this.render = function($ele, position) {
		var self = this;
		var comment_box = $("<div />")
			.addClass("comment_box")
			.css({
				position : 'absolute',
				top : position.y,
				left: position.x
			});


		var html = '';
		html+= '<i class="annotation"></i>';
		html+= '<div class="close_comment">';
		html+= 	'<i class="fa fa-times"></i>';
		html+= '</div>';
		html+= '<form id="frm_comment">';
		html+= '<div class="wrp_radio">';
		html+= '	<input type="radio" id="rb_comment" name="input_type" value="comment" checked="checked"/> <label for="rb_comment">Comment</label>';
		html+= '	<input type="radio" id="rb_handwritting" name="input_type" value="handwritting"/> <label for="rb_handwritting">Handwriting</label>';
		html+= '</div>';
		html+= '<div class="wrapper">';
		html+= '	<div class="wrp_comment">';
		html+= '		<textarea name="comment"></textarea>';
		html+= '	</div>';
		html+= '	<div class="wrp_handwritting">';
		html+= '		<textarea name="comment"></textarea>';						
		html+= '	</div>';
		html+= '</div>';
		html+= '<button type="submit">Submit</button>';

		comment_box.html(html);
		comment_box.appendTo($ele);

		$("#frm_comment").unbind("submit").submit(function(){
			var input_type = $(this).find("[name=input_type]:checked").val();
			var value = null;
			if(input_type == 'handwritting') {
				value = $("[name=handwritting_svg]").val();
			} else {
				value = $(this).find("textarea[name=comment]").val()
			}
			self.save_bookmark($("#annotation").data("vdo_id"), input_type, value, self.media.currentTime);
			return false;
		});

		// handwritting.init($(".wrp_handwritting"));

		$("input[name=input_type]").change(function(e){
			if($(this).attr("value") == 'handwritting') {
				$(".wrp_handwritting").show();
				$(".handwritting").show();
				if(!$(".wrp_handwritting").data('rendered')) {
					$("#annotation").append($("<div/>", {"class" : "handwritting"}))
					$("#annotation").append($("<textarea/>", {"name" : "handwritting_svg"}).hide())
					$(".handwritting").signature({
						color: "#FF0000",
						syncField : '[name=handwritting_svg]'
					});
					$(".wrp_handwritting").data('rendered', true);
				}
				$(".wrp_comment").hide();
			} else {
				$(".wrp_handwritting").hide();
				$(".handwritting").hide();
				$(".wrp_comment").show();
			}
		});
		$(".close_comment").click(function(e){
			e.preventDefault();
			self.destroy();
		});
	};

	this.destroy = function() {
		$("div.comment_box").remove();
		$(".handwritting").remove();
		$("[name=handwritting_svg]").remove();
	};

	this.save_bookmark = function(vdo_id, input_type, value, time){
		var self = this;
		$.ajax({
			url : 'api/save_comment.php',
			method: 'post',
			dataType : 'json',
			data : {
				vdo_id: vdo_id,
				type : input_type,
				value : value,
				time : time
			}
		}).done(function(response){
			console.log('done', response);
			self.bookmark($("#annotation").data("vdo_id"));
			self.destroy();
			self.show();
		}).fail(function(response){
			console.log('fail', response);
		});
	};

	this.get = function(vdo_id) {

		if(vdo_id == undefined) vdo_id = this.vdo_id;
		else this.vdo_id = vdo_id;

		var data = null;

		$.ajax({
			url : 'api/get_annotation.php',
			dataType : 'json',
			data : {
				vdo_id : vdo_id
			},
			async : false
		}).done(function(response){
			data = response.annotation;
		});

		this.data = data;
		this.parse_time_data();
	};

	this.parse_time_data = function() {
		var time_data = {};
		var self = this;
		$.each(this.data, function(idx, data){
			if(time_data[self.time_to_sec(data.time)] === undefined) {
				time_data[self.time_to_sec(data.time)] = [];
			}

			time_data[self.time_to_sec(data.time)].push(data);
		});

		this.time_data = time_data;
		console.log(this.time_data)
	};

	this.bookmark = function(vdo_id) {
		this.get(vdo_id);
		var self = this;
		$.each(this.data, function(idx, data){
			var bookmark = $("<a />").attr("href", "#").addClass("bookmark");
			var percent = self.time_to_sec(data.time)/self.media.duration;
			var pos_left = $("div.bookmark").width()*percent - 4;
			bookmark.data("time", self.time_to_sec(data.time))
			bookmark.css({
				left: pos_left+"px",
				pointer: 'cursor'
			});
			bookmark.click(function(e){
				e.preventDefault();
				self.jump_to($(this).data("time"));
			});
			bookmark.appendTo($("div.bookmark"));
		});
	};

	this.time_to_sec = function(time) {
		var _time = time.split(":");
		var sec = (+_time[0]) * 60 * 60 + (+_time[1]) * 60 + (+_time[2]);
		return sec;
	};

	this.bind = function() {

		this.bookmark($("#annotation").data("vdo_id"));
		var self = this;
		$("div#annotation").unbind("click").on("click", function(e){
			if($(e.target).is($(this))){
				self.player.pause();
				$(".video_control .play_pause").toggleClass("pause");
				$(".video_control .play_pause").toggleClass("play");
				$(".video_control .play_pause").text("Play");
				var position = {
					x : e.offsetX,
					y : e.offsetY
				}
				self.destroy();
				self.render($("div#annotation"), position);
			}
		});
	};

	this.show = function($ele, time) {
		if(this.data == null) this.get();
		time = parseInt(time);
		if(this.time_data[time] !== undefined) {
			$("div.comment_box:not(.comment)").remove();
			$.each(this.time_data[time], function(idx, data){
				var comment_box = $("<div />")
					.addClass("comment_box")
					.addClass("comment")
					.css({
						position : 'absolute',
						top : data.pos_y,
						left: data.pos_x,
						"background-color" : "white"
					}).text(data.comment);
				if(data.type != 'comment' || data.value == undefined || data.value.length == 0) comment_box.addClass("no-comment");
				if(data.type == 'handwritting') {
					if($(".handwritting_"+data.anno_id).length==0){
						$("<div/>", {"class" : "handwritting handwritting_"+data.anno_id})
							.width($("#annotation").width())
							.height($("#annotation").height())
							.insertAfter($("#annotation"));	
					}
					console.log("handwritting_"+data.anno_id);
					$(".handwritting_"+data.anno_id).signature({disabled : true, color : "#FF0000"});
					$(".handwritting_"+data.anno_id).signature('draw', data.value);
				}
				comment_box.appendTo($ele);
			});

		}
	};

	this.destroy_comment = function() {
		$("div.comment_box").remove();
		$(".handwritting").remove();
	};

	this.jump_to = function(time) {
		this.media.setCurrentTime(time);
		this.media.play();
		this.show(time);
	}
}

$(function(){
	$('#youtube1').mediaelementplayer({
		success : function(media, node, player) {
			player.controls.hide();
			var annotation = new Annotation(player, media);

			$("div#annotation").width(player.container.width());
			$("div#annotation").height(player.container.height());

			var is_bind = false;

			player.currenttime.bind('DOMSubtreeModified', function(){
				if(!is_bind) {
					is_bind = true;
					annotation.bind();
				}
				var percent = media.currentTime/media.duration * 100;
				$(".progres div.progres").css({"width" : percent+"%"});
				// annotation.destroy_comment();
				annotation.show($("div#annotation"), media.currentTime);
			});

			$(".video_control").on("click", ".pause", function(e){
				e.preventDefault();
				annotation.destroy();
				player.pause();
				$(this).toggleClass("pause");
				$(this).toggleClass("play");
				$(this).data("currenttime", media.currentTime);
				$(this).text("Play");
			});

			$("a.mark").click(function(e){
				e.preventDefault();
				annotation.save_bookmark($("#annotation").data("vdo_id"), null, null, media.currentTime);
				annotation.bookmark($("#annotation").data("vdo_id"));
			});

			$("a.fullscreen").click(function(e){
				e.preventDefault();
			    player.enterFullScreen();
			});
			
			$(".video_control").on("click", ".play", function(e){
				e.preventDefault();
				media.setCurrentTime($(this).data("currenttime"));
				player.play();
				$(this).toggleClass("pause");
				$(this).toggleClass("play");
				$(this).text("Pause");
			});

			/*$("#comment a.jump").click(function(e){
				e.preventDefault();
				annotation.jump_to(annotation.time_to_sec($(this).data("time")));
			})*/
			$(".time a.jump").click(function(e){
				e.preventDefault();
				annotation.jump_to(annotation.time_to_sec($(this).data("time")));
			})
			$(".comment_container a.jump").click(function(e){
				e.preventDefault();
				annotation.jump_to(annotation.time_to_sec($(this).data("time")));
			})
		}
	});

	/*$(".show_comment, .close_comment").click(function(e){
		e.preventDefault();
		$("#comment").toggle("slide", { direction : "right",collapsible: "true" });
	});*/

	$(".menu-opener").click(function(e){
		e.preventDefault();
  		$(".menu-opener, .menu-opener-inner, .menu, .menu_inner, .tab").toggleClass("active");
	});

});


