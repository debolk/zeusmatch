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

$(document).on("pageinit", "#page-settings", function(){
    $("#delete-settings").on("submit", function(){

        $("#delete-settings").off("submit");
        $("#delete-settings input:first").attr("value", "Weet je dit zeker?");
        $("#delete-settings input:first").button("refresh");

        return false;
    });
});
