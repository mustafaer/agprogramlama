<?php

require './dbset.php';
@session_start();
if (isset($_POST['get_lessons'])) {
    if (isset($_POST['get_lessons']) == 'lessons') {

        $data = array();

        $query = $db->prepare("SELECT * FROM lessons");
        $query->execute();

        $datas = "";
        $cls_controle = 2;

        $active_row = 2 % 5; //last number of ogr no

        while ($control = $query->fetch(PDO::FETCH_ASSOC)) {
            $id = $control['id'];
            $order_no = $control['order_no'];
            $lesson_code = $control['lesson_code'];
            $lesson_name = $control['lesson_name'];

            if ($cls_controle % 2 == 0) {
                $cls = "active";
            } else {
                $cls = "";
            }

            if ($order_no != $active_row) {
                $datas = $datas . "
                                    <tr class='$cls'>
                                        <td>" . $order_no . "</td>
                                        <td>" . $lesson_code . "</td>
                                        <td>" . $lesson_name . "</td>
                                    </tr>";
            } else {
                $datas = $datas . "
                                    <tr class='$cls'>
                                        <td><a id='" . $id . "' class='selectable_row' style='cursor: pointer;width: 100%;'>" . $order_no . "</a></td>
                                        <td><a id='" . $id . "' class='selectable_row' style='cursor: pointer;width: 100%;'>" . $lesson_code . "</a></td>
                                        <td><a id='" . $id . "' class='selectable_row' style='cursor: pointer;width: 100%;'>" . $lesson_name . "</a></td>
                                    </tr>";
            }
            $cls_controle++;
        }
        $data['answer'] = $datas;
        echo json_encode($data);
    }
}
if (isset($_POST['get_lesson_datas'])) {
    if (isset($_POST['get_lesson_datas']) == 'lesson_data') {

        if (isset($_POST['lesson_id']) != "") {

            $lesson_id = filter_var(trim(filter_input(INPUT_POST, 'lesson_id')), FILTER_SANITIZE_STRING);
            $data = array();

            $query = $db->prepare("SELECT * FROM lessons WHERE id=? AND state=?");
            $query->execute(array($lesson_id, "1"));
            $control = $query->fetch(PDO::FETCH_ASSOC);

            if ($control) {
                $lesson_code = $control['lesson_code'];
                $lesson_name = $control['lesson_name'];
                $lesson_content = $control['lesson_content'];
                $_SESSION['selected_id'] = $lesson_id;
            }
            $data['lesson_code'] = $lesson_code;
            $data['lesson_name'] = $lesson_name;
            $data['lesson_content'] = $lesson_content;
            echo json_encode($data);
        }
    }
}
if (isset($_POST['save_input_data'])) {
    if (isset($_POST['save_input_data']) == 'save') {

        if (isset($_POST['input_data']) && isset($_POST['input_id'])) {
            $lesson_id = $_SESSION['selected_id'];

            $input_data = filter_var(trim(filter_input(INPUT_POST, 'input_data')), FILTER_SANITIZE_STRING);
            $input_id = filter_var(trim(filter_input(INPUT_POST, 'input_id')), FILTER_SANITIZE_STRING);

            if ($input_id == "lesson_code" || $input_id == "lesson_name" || $input_id == "lesson_content") {

                $query = $db->prepare("UPDATE lessons SET $input_id = ? WHERE id=?");
                $insert = $query->execute(array($input_data, $lesson_id));
            }
        }
    }
}
?>