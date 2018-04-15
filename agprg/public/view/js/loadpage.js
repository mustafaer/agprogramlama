$(function () {
    $(document).ready(function () {

        $("#panel_body").hide();
        $("#converted_datas").hide();

        $.ajax({
            type: "POST",
            url: "./public/controler/controler.php",
            dataType: "json",
            data: {"get_lessons": "lessons"},
            success: function (datas) {
                var table_datas = datas.answer;

                $("#table_content").html(table_datas);
            }
        });
    });
});