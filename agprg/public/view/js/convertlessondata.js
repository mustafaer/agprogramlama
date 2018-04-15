$(function () {
    $(".convertbutton").click(function () {
        var convertType = $(this).attr('id');
        var lesson_content = $("#lesson_content").val();

        $("#converted_datas").show();

        if (convertType == "convertJSON") {
            var myObj = '{ "lesson_content" : "' + lesson_content + '"}';
        } else if (convertType == "convertXML") {
            myObj = '<Content>\n' +
                '  <lesson_content>' + lesson_content + '</lesson_content>\n' +
                '</Content>';
        }

        $("#convertedData").val(myObj);
    });
});