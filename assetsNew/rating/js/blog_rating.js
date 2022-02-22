jQuery(function () {
    
    jQuery(".star").on("mouseover", function () { //SELECTING A STAR
        jQuery(".rating").hide(); //HIDES THE CURRENT RATING WHEN MOUSE IS OVER A STAR
        var d = jQuery(this).attr("id"); //GETS THE NUMBER OF THE STAR

        //HIGHLIGHTS EVERY STAR BEHIND IT
        for (i = (d - 1); i >= 0; i--) {
            jQuery(".transparent .star:eq(" + i + ")").css({"opacity": "1.0"});
        }
    }).on("click", function () { //RATING PROCESS
        var blog_id = jQuery("#blog_content_id").val(); //GETS THE ID OF THE CONTENT
        var rating = jQuery(this).attr("id"); //GETS THE NUMBER OF THE STAR
        var data = 'rating=' + rating + '&blog_id=' + blog_id;
        jQuery.ajax({
            type: "POST",
            data: data,
            url: base_url+"blogcontroller/rate_blog", //CALLBACK FILE
            success: function (e) {
                jQuery("#ajax_vote").html(e); //DISPLAYS THE NEW RATING IN HTML
            },
            error: function (e) {
                alert(e);
            }
        });
    }).on("mouseout", function () { //WHEN MOUSE IS NOT OVER THE RATING
        jQuery(".rating").show(); //SHOWS THE CURRENT RATING
        jQuery(".transparent .star").css({"opacity": "0.25"}); //TRANSPARENTS THE BASE
    });
});