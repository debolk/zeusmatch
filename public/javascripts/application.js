$(document).on("pageinit", function(){
    $(".autosubmit").find(":input").each(function() {
        $(this).on("change", function() {

            var form = $(this.form);

            $.ajax(form.attr("action"), {
                type: form.attr("method"),
                data: form.serialize(),
            });

        });
    });
});
