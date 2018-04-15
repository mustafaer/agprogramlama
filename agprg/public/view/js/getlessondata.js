$(function () {
    $('#table_content').on('click', '.selectable_row', function(){
        var lesson_id = $(this).attr('id');
        $("#converted_datas").hide();

        if (lesson_id != ""){
            $.ajax({
                type: "POST",
                url: "./public/controler/controler.php",
                dataType: "json",
                data: {"get_lesson_datas": "lesson_data","lesson_id":lesson_id},
                success: function (datas) {
                    var lesson_code = datas.lesson_code;
                    var lesson_name = datas.lesson_name;
                    var lesson_content = datas.lesson_content;

                    $("#lesson_code").val(lesson_code);
                    $("#lesson_name").val(lesson_name);
                    $("#lesson_content").val(lesson_content);
                    $("#panel_body").show();
                }
            });
        }
    });
});