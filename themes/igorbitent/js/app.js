(function($) {
    
  $("#close-comments").on("click", function(event) {
      event.preventDefault();
      $.ajax({
        method: "post",
        url: red_vars.rest_url + "wp/v2/posts/" + red_vars.post_id,
        data: {
          comment_status: "closed"
        }
      }).done(function(response) {
        alert("Success! Comments are closed for this post.");
      });
    });
  })(jQuery);