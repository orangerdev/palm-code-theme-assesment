(function ($) {
	$(document).ready(function () {
		var uploader = new plupload.Uploader({
			url: palm_code_assesment.ajax_url,
			filters: {
				mime_types: [{ title: "Image files", extensions: "jpg,jpeg,png,gif" }],
				max_file_size: "10mb",
				prevent_duplicates: true,
			},
			multipart_params: {
				_ajax_nonce: palm_code_assesment.nonce,
				action: "upload_image",
			},
			drop_element: "file-drag-drop-area",
			browse_button: "file-drag-drop-area",
			auto_start: false,
		});

		var selectedFile;

		uploader.bind("FilesAdded", function (up, files) {
			selectedFile = files[0];
			$("#file-drag-drop-area").html(
				'<div id="' +
					selectedFile.id +
					'">Selected ' +
					selectedFile.name +
					" (" +
					plupload.formatSize(selectedFile.size) +
					")</div>",
			);
		});

		$("#contact-form").on("submit", function (e) {
			e.preventDefault();

			if (selectedFile) {
				uploader.bind("FileUploaded", function (up, file, response) {
					var result = $.parseJSON(response.response);
					if (result.success) {
						$("#file-url").val(result.data.url);
						$("#contact-form")[0].submit();
					} else {
						alert("Upload failed: " + result.data.error);
					}
				});

				uploader.bind("Error", function (up, err) {
					alert("Error: " + err.message);
				});

				uploader.start();
			} else {
				this.submit();
			}
		});

		uploader.init();

		var header = $("#masthead");

		$(window).on("scroll", function () {
			if ($(this).scrollTop() > 50) {
				header.addClass("scrolled");
			} else {
				header.removeClass("scrolled");
			}
		});

		$(".slick").slick({
			dots: false,
			navs: true,
			slidesToShow: 3,
			autoplay: true,
			prevArrow: '<button class="slick-prev slick-arrow"></button>',
			nextArrow: '<button class="slick-next slick-arrow"></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
					},
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					},
				},
			],
		});

		$(".menu-toggle").on("click", function () {
			$("aside.offcanvas-menu").removeClass("hide-menu").addClass("show-menu");
		});

		$(".close-menu").on("click", function () {
			$("aside.offcanvas-menu").removeClass("show-menu").addClass("hide-menu");
		});
	});
})(jQuery);
