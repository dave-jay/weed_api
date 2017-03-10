

<script type="text/javascript" src="<?php print _MEDIA_URL ?>js/jquery.timepicker.js"></script>
<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>css/jquery.timepicker.css" />
<script type="text/javascript">
    $(document).ready(function () {
        $('#st5_link').css('background-color', '#C71418');
        $('#st5_link').css('color', 'white');
        $('#st5_link').css('border-radius', '30px');
<?php if ($success == "1") { ?>
            Materialize.toast('<?= $msg; ?>', 4000);
<?php } ?>
<?php if ($success == "-1") { ?>
            Materialize.toast('<?= $msg; ?>', 4000);
<?php } ?>
    });
//    var newHTML = document.createElement('div');
//    newHTML.innerHTML =
//            newHTML = document.createElement('div');
//    newHTML.innerHTML = ' <div id=\"myModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\"> <div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"></div>';
//    document.body.appendChild(newHTML);
//    $(document).load(function () {
////        $('#modal1').modal('show');
//    });
    function change() {
        $('#car_make').change(function () {
            var value = $(this).val();
            if (value == "other") {
                $('#select_make_model_other').show();
                return;
            } else
            {
                $('#select_make_model_other').hide();
            }

        });
        $('#car_make').change(function () {
            var value = $(this).val();
            if (value == "other") {
                $('#select_make_model_other2').show();
                return;
            } else
            {
                $('#select_make_model_other2').hide();
            }

        });
    }
    function letsSearch() {
        $.ajax({
            url: '<?= _U . "test1"; ?>',
            dataType: 'json',
            type: 'POST',
            data: {
                bindSearch: 1,
                search_keyword: $("#con_search").val()
            },
            success: function (data) {
                alert(data);
            }
        });
    }
    function bindData5(id)
    {
        $.ajax({
            url: '<?php echo _U ?>test1',
            dataType: "json",
            data: {getData5: 1,
                id: id
            }, success: function (data) { //                 $("#v_id").val(data.vehicle_id);
                $("#d_id").val(data.driver_id);
                $("#v_id").val(data.vehicle_id);
                $("#fName").val(data.fname).change();
                $("#lName").val(data.lname).change();
                $("#melli_no").val(data.melli_no).change();
                $("#veh_lic_no").val(data.license_plate).change();
                $("#phone").val(data.phone).change();
                $("#email").val(data.email).change();
                $("#vin_no").val(data.chassis_no).change();
                $("#car_make").val(data.make_modal);
                // console.log(data.make_modal);
                //$("#car_modal").val(data.make_modal).trigger("change");
                $('selected').material_select();
                $("#other_car").val(data.make_modal_other).change();
                $("#veh_lic_no2").val(data.license_plate).change();
                $("#car_year").val(data.year).change();
                $("#uname").val(data.username).change();
                $("#psw").val(data.password).change();
            }
        });
    }
    function bindQuestion(id, stage)
    {
        $.ajax({
            url: '<?php echo _U ?>station3',
            dataType: "json",
            data: {getQuestion: 1,
                id: id,
                stage: stage
            }, success: function (data) { //                alert(data);
                var a = [];
                var b = [];
                var c = [];
                a[0] = 'ans1yes';
                a[1] = 'ans2yes';
                a[2] = 'ans3yes';
                a[3] = 'ans4yes';
                a[4] = 'ans5yes';
                a[5] = 'ans6yes';
                a[6] = 'ans7yes';
                a[7] = 'ans8yes';
                a[8] = 'ans9yes';
                a[9] = 'ans10yes';
                a[10] = 'ans11yes';
                a[11] = 'ans12yes';
                a[12] = 'ans13yes';
                a[13] = 'ans14yes';
                a[14] = 'ans15yes';
                a[15] = 'ans16yes';
                a[16] = 'ans17yes';
                a[17] = 'ans18yes';
                a[18] = 'ans19yes';
                a[19] = 'ans20yes';
                a[20] = 'ans21yes';
                a[21] = 'ans22yes';
                a[22] = 'ans23yes';
                a[23] = 'ans24yes';
                a[24] = 'ans25yes';
                a[25] = 'ans26yes';
                a[26] = 'ans27yes';
                a[27] = 'ans28yes';
                a[28] = 'ans29yes';
                b[0] = 'ans1no';
                b[1] = 'ans2no';
                b[2] = 'ans3no';
                b[3] = 'ans4no';
                b[4] = 'ans5no';
                b[5] = 'ans6no';
                b[6] = 'ans7no';
                b[7] = 'ans8no';
                b[8] = 'ans9no';
                b[9] = 'ans10no';
                b[10] = 'ans11no';
                b[11] = 'ans12no';
                b[12] = 'ans13no';
                b[13] = 'ans14no';
                b[14] = 'ans15no';
                b[15] = 'ans16no';
                b[16] = 'ans17no';
                b[17] = 'ans18no';
                b[18] = 'ans19no';
                b[19] = 'ans20no';
                b[20] = 'ans21no';
                b[21] = 'ans22no';
                b[22] = 'ans23no';
                b[23] = 'ans24no';
                b[24] = 'ans25no';
                b[25] = 'ans26no';
                b[26] = 'ans27no';
                b[27] = 'ans28no';
                b[28] = 'ans29no';
                c[0] = '';
                c[1] = '';
                c[2] = 'ans3one';
                c[3] = 'ans4one';
                c[4] = 'ans5one';
                c[5] = 'ans6one';
                c[6] = 'ans7one';
                c[7] = '';
                c[8] = '';
                c[9] = '';
                c[10] = '';
                c[11] = '';
                c[12] = '';
                c[13] = '';
                c[14] = '';
                c[15] = '';
                c[16] = '';
                c[17] = '';
                c[18] = '';
                c[19] = '';
                c[20] = '';
                c[21] = '';
                c[22] = '';
                c[23] = '';
                c[24] = '';
                c[25] = '';
                c[26] = '';
                c[27] = '';
                c[28] = '';
                for (var i = 0; i < 29; i++)
                {
//                    console.log("i: " + i + " c" + c[i]);


//                    if (data[i] == "one")
//                    {
////                        alert(data[i]);
//                        document.getElementById(c[i]).checked = true;
//                    }
//                    else 
                    if (data[i] == "yes")
                    {
                        document.getElementById(a[i]).checked = true;
                    } else
                    {
                        if (data[i] == "no")
                        {
                            document.getElementById(b[i]).checked = true;
                        } else
                        {
                            //alert(c[i] + "-" + data[i]);
                            document.getElementById(c[i]).checked = true;
                        }
                    }
                }
            }
        });
    }
    function bindUser(id, stage)
    {
//        alert(stage);
        $.ajax({
            url: '<?php echo _U ?>station3',
            dataType: "json",
            data: {
                getUser: 1,
                id: id,
                stage: stage
            }, success: function (data) {
                $("#agent").val(data.uname + " is " + data.operation_type + " At " + data.touch_date).change();
//               alert(data);
            }
        });
    }
    function bindData(id, stage)
    {
        if (stage == "4")
        {
            bindUser(id, stage);
            bindData5(id);
            bindQuestion(id, stage);
        }
    }
    function DataSave(id)
    {
//        alert(id);
        $.ajax({
            url: '<?php echo _U; ?>test1',
            dataType: 'json',
            data: {saveRecord: 1,
                id: id
            }, success: function (data) { //                alert("success");
            }
        });
    }
//    function bindData5(id)
//    {
////        alert(id);
//        $.ajax({
//            url: '<?php echo _U ?>test1',
//            dataType: "json",
//            data: {
//                getData: 1,
//                id: id
//            }, success: function (data) {
//                $("#d_id").val(data.driver_id);
//                $("#v_id").val(data.vehicle_id);
//                $("#fName").val(data.fname);
//                $("#lName").val(data.lname);
//                $("#melli_no").val(data.melli_no);
//                $("#veh_lic_no").val(data.license_plate);
//                $("#phone").val(data.phone);
//                $("#email").val(data.email);
//
//                 $("#car_make").val(data.make_modal);
//               // console.log(data.make_modal);
//                //$("#car_modal").val(data.make_modal).trigger("change");
//                $('selected').material_select();
//
//                $("#other_car").val(data.make_modal_other);
//                $("#veh_lic_no2").val(data.license_plate);
//                $("#car_year").val(data.year);
//                $("#uname").val(data.username);
//                $("#psw").val(data.password);
//            }
//        });
//    }
    //showWait();
    $('#test1_form').ready(function ()
    {
        $('#modal1').show();
    });
    $(document).ready(function () {
        $('#fName').autocomplete({
            source: function (request, response) {
                $.ajax({
                    url: '<?php echo _U ?>test1',
                    dataType: "json",
                    data: {name_startsWith: request.term
                    }, success: function (data) {
                        response($.map(data, function (item) {
                            var code = item.split("|");
                            return {
                                label: code[0] + " " + code[1] + " (" + code[3] + ")",
                                value: code[0],
                                data: item
                            }
                        }));
                    }
                });
            },
            autoFocus: true,
            minLength: 0,
            select: function (event, ui) {
                var names = ui.item.data.split("|");
                console.log(names);
                $('#lName').val(names[1]);
                $('#email').val(names[3]);
                $('#phone').val(names[2]);
            }
        });
        //        $('#test1_form').parsley().on('field:validated', function () {
        //
        //        }).on('form:submit', function () {
        //            if ($('.parsley-error').length === 0) {
        //                showWait();
        //                return true;
        //            }
        //            return false; // Don't submit form for this demo
        //        });
        //        setTimeout(_doLoadDynamicDays, 2000);



        $('.clockpicker').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });
        $(".clockpicker1").timepicker();
        $('.datepicker').pickadate({
            min: new Date(),
            //        onSet: function () {
            //            setTimeout(this.close, 0);
            //        }
            //        max: new Date(2016,12, 14)
        })


        $("#test1CardPanel").removeClass("panelWait");
        hideWait();
    })




    function initMap() {         //        $(".gMapSuggest").each(function (i, v) {
        //            new google.maps.places.Autocomplete(document.getElementById($(v).attr("id")));
        //        });

    }

    function showMoreVehicle(id) {
        $("#more_vehicle_" + id).show();
    }
    function showMoreDay(id) {
        $("#_header_" + id).click().parent().show();
    }

    function vehicleSelected(id) {
        console.log(id);
        var selectedValue = $("#vehicle_selection_box_" + id).val();
        if (selectedValue == 'other') {
            $("#vehicle_selection_custom_" + id).show();
        } else {
            $("#vehicle_selection_custom_" + id).hide().val("");
        }
        var min_hours = $("#vehicle_selection_box_" + id + " option:selected").data('minhour');
        var rate = $("#vehicle_selection_box_" + id + " option:selected").data('rate');
        $("#vehicle_selection_hours_" + id).val(min_hours);
        $("#vehicle_selection_rate_" + id).val(rate);
        console.log("#vehicle_selection_rate_" + id);
        //$("#vehicle_selection_total_" + id).val('1');

    }
    function vehicleOptionSelected(id) {
        var selectedValue = $("#vehicle_selection_box" + id).val();
        if (selectedValue == 'other') {
            $("#vehicle_selection_custom" + id).show();
        } else {
            $("#vehicle_selection_custom" + id).hide().val("");
        }
        var min_hours = $("#vehicle_selection_box" + id + " option:selected").data('minhour');
        var rate = $("#vehicle_selection_box" + id + " option:selected").data('rate');
        $("#vehicle_selection_hours" + id).val(min_hours);
        $("#vehicle_selection_rate" + id).val(rate);
        //$("#vehicle_selection_total_" + id).val('1');

    }

    function rateSelected(id) {
        var selectedValue = $("#vehicle_selection_rate_type_" + id).val();
        var helpText = selectedValue == 'hourly' ? 'Hourly Rate' : "Flat Rate";
        $("#vehicle_selection_rate_" + id).next().html(helpText).css({color: 'red'});
    }
    function rateOptionSelected(id) {
        var selectedValue = $("#vehicle_selection_rate_type" + id).val();
        var helpText = selectedValue == 'hourly' ? 'Hourly Rate' : "Flat Rate";
        $("#vehicle_selection_rate" + id).next().html(helpText).css({color: 'red'});
    }

    function addStop(id) {
        $(".stop_div_" + id).show('slow');
    }

    function addCharge(id) {
        $("#charge" + id).show('slow');
    }

    function addOption(day, vehicle, id) {
        $("#option_" + day + "_" + vehicle + "_" + id).show();
    }

    function _doLoadDynamicDays() {
        $.ajax({
            url: '<?php echo _U ?>test1',
            type: 'post',
            data: {_doLoadDynamicDays: 1, silent: 1, id:<?php print _e($_REQUEST['id'], "0"); ?>},
            success: function (r) {
                $("#LIcustInfo").after(r);
                setTimeout(function () {
                    $('.tooltipped').tooltip({delay: 50});
                    $('select').material_select();
                    initMap();
                    $('.datepicker').pickadate({
                        selectMonths: true, // Creates a dropdown to control month
                        selectYears: 15 // Creates a dropdown of 15 years to control year
                    });
                    $('.clockpicker').clockpicker({
                        placement: 'bottom',
                        align: 'left',
                        autoclose: true,
                        'default': 'now'
                    });
                    $(".clockpicker1").timepicker();
                }, 2000);
            }
        });
    }

</script>
//<?php // include _PATH . "instance/front/tpl/google_maps.js.php";                     ?>
