(function ($) {
	$(document).ready(function () {
		// Handle file uploader in the contact form
		var uploader = new plupload.Uploader({
			url: palm_code_assesment.ajax_url,
			filters: {
				mime_types: [{ title: "Image files", extensions: "jpg,jpeg,png,gif" }],
				max_file_size: "10mb",
				prevent_duplicates: true,
			},
			multipart_params: {
				plupload_nonce: palm_code_assesment.nonce,
				action: "upload-image",
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

		var contactMessage = $("#contact-form-message");

		function submitForm() {
			var formData = new FormData($("#contact-form")[0]);

			$.ajax({
				url: palm_code_assesment.contact_form_url,
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				beforeSend: function (xhr) {
					xhr.setRequestHeader("X-WP-Nonce", palm_code_assesment.rest_nonce);
				},
				success: function (data) {
					if (data.message) {
						contactMessage
							.html(data.message)
							.removeClass("error hidden")
							.addClass("success");
						// Clear the form
						$("#contact-form").trigger("reset");
					} else {
						contactMessage
							.html("There was an error submitting the form")
							.removeClass("success hidden")
							.addClass("error");
					}
				},
				error: function (xhr, status, error) {
					console.error("Error:", error);
					contactMessage
						.html("There was an error submitting the form")
						.removeClass("success hidden")
						.addClass("error");
				},
			});
		}

		$("#contact-form").on("submit", function (e) {
			e.preventDefault();

			if (selectedFile) {
				uploader.bind("FileUploaded", function (up, file, response) {
					var result = $.parseJSON(response.response);
					if (result.success) {
						$("#file-url").val(result.url);
						submitForm();
					} else {
						contactMessage
							.html(result.message)
							.removeClass("success hidden")
							.addClass("error");
					}
				});

				uploader.bind("Error", function (up, err) {
					contactMessage
						.html(err.message)
						.removeClass("success hidden")
						.addClass("error");
				});

				uploader.start();
			} else {
				submitForm();
			}
		});

		uploader.init();

		// Handle sticky header
		var header = $("#masthead");

		$(window).on("scroll", function () {
			if ($(this).scrollTop() > 50) {
				header.addClass("scrolled");
			} else {
				header.removeClass("scrolled");
			}
		});

		// Handle testimonial slider
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

		// Handle offcanvas menu
		$(".menu-toggle").on("click", function () {
			$("aside.offcanvas-menu").removeClass("hide-menu").addClass("show-menu");
		});

		$(".close-menu").on("click", function () {
			$("aside.offcanvas-menu").removeClass("show-menu").addClass("hide-menu");
		});
	});
})(jQuery);
