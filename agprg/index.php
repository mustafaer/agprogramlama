<?php ob_start(); ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link href="public/view/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/view/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/view/css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hasan AKYÜREK</title>
    </head>
    <body>
    <div class="container-fluid col_full">
        <div class="panel panel-default col_panel">
            <div class="panel-heading">Ders Programı</div>
            <table class="table">
                <thead>
                <th>
                    Sıra No
                </th>
                <th>
                    Ders Kodu
                </th>
                <th>
                    Ders Adı
                </th>
                </thead>
                <tbody id="table_content">
                </tbody>
            </table>
            <div id="panel_body" class="panel-body">
                <div class="input-group" style="margin-bottom: 8px;">
                    <span class="input-group-addon" style="min-width: 150px;height: 45px;">Dersin Kodu : </span>
                    <input id="lesson_code" type="text" class="form-control" style="min-width: 150px;height: 45px;">
                </div>
                <div class="input-group" style="margin-bottom: 8px;">
                    <span class="input-group-addon" style="min-width: 150px;height: 45px;">Dersin Adı : </span>
                    <input id="lesson_name" type="text" class="form-control" style="min-width: 150px;height: 45px;">
                </div>
                <div class="input-group" style="margin-bottom: 8px;">
                    <span class="input-group-addon" style="min-width: 150px;height: 45px;">Dersin İçeriği : </span>
                    <input id="lesson_content" type="text" class="form-control" style="min-width: 150px;height: 45px;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 8px; padding: 0px;">
                    <input id="convertJSON" type="button"
                           class="col-lg-1 col-md-2 col-sm-6 col-xs-6 btn btn-info convertbutton"
                           style="height: 45px;float: right; border-top-left-radius: 0px;border-bottom-left-radius: 0px;"
                           value="JSON Göster">
                    <input id="convertXML" type="button"
                           class="col-lg-1 col-md-2 col-sm-6 col-xs-6 btn btn-success convertbutton"
                           style="height: 45px;float: right; border-top-right-radius: 0px;border-bottom-right-radius: 0px;"
                           value="XML Göster">
                </div>
                <div id="converted_datas" class="form-group">
                    <label for="comment">Kodlanmış Veri</label>
                    <textarea class="form-control" style="height: auto; min-height: 200px;" id="convertedData"
                              disabled></textarea>
                </div>

            </div>
        </div>
    </div>
    </body>
    <script src="public/view/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="public/view/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/view/js/loadpage.js" type="text/javascript"></script>
    <script src="public/view/js/getlessondata.js" type="text/javascript"></script>
    <script src="public/view/js/convertlessondata.js" type="text/javascript"></script>
    <script src="public/view/js/valueSaveApi.js" type="text/javascript"></script>
    </html>
<?php ob_end_flush(); ?>