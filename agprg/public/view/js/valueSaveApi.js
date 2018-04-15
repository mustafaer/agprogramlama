$(function () {
    $("input").keyup(function(){
        var input_id = $(this).attr('id');

        if (input_id != ""){

            var input_data = $("#"+input_id).val();
            $("#converted_datas").hide();

            $.ajax({
                type: "POST",
                url: "./public/controler/controler.php",
                dataType: "json",
                data: {"save_input_data": "save","input_data":input_data,"input_id":input_id},
                success: function (datas) {

                }
            });
        }

    });
});