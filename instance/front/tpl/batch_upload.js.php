<?php include _PATH . "instance/front/tpl/libValidate.php" ?>

<script type="text/javascript">
    function pushToAPI(id, batch) {
//        alert(id + "-" + batch);
        $.ajax({
            url: '<?= _U . "batch_upload"; ?>',
            data: {
                SendToAPI: 1,
                userId: id
            },
            dataType: 'json',
            type: 'POST',
            success: function (r) {
                if (r.success == "1") {
                    Materialize.toast("Data Sent To API Successful", 4000);
//                    location.href = "<?= _U . 'batch_upload' ?>" ;

                    $("#d" + id).html("API PUSHED");
//                    $("#" + id).load("#" + id");
                } else {
                    Materialize.toast("Something Wrong Please try After Some time", 4000);
                }
            }
        });
    }
    function Call()
    {
        var dataValue = new FormData($("#importFrm")[0]);
        dataValue.append('importSubmit', '1');
//        alert(dataValue);
        $.ajax({
            url: '<?= _U . "batch_upload"; ?>',
//            data: {importSubmit: 1, data: $('#importFrm').serialize()},
            type: 'POST',
            data: dataValue,
            async: false,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            dataType: 'json',
            success: function (r) {
//                alert("Success msg");
//                alert(r.success);
//                Materialize.toast("Record added successfully!", 4000);
                if (r.success === "1") {
//                    alert(r.ID);
//                    alert(r.batch);
                    $("#modal1").openModal({dismissible: false});
//                    $.each(r.batch, function () {
//                        alert(r.batch);
//                        $("#E").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + r.batch + ': </span> <span id="" name="lblname" class="help-span">' + r.id + '</span></div>');
//                    });
                    $.each(r.batch, function (key, value) {
//                        alert(key + ": " + value);
                        $("#E").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">Batch Number: </span> <span id="" name="lblname" class="help-span">' + value + '</span><input id="hid' + value + '" type="hidden" name="hidbatch[]" value="' + value + '"> </div><div class="col l6 m6 s12"><span for="hidname" style="color:#888;" class="help-span">Photo Upload: </span> <input name="uploadfile' + value + '" type="file" id="' + value + '" class="show_preview" data-prev_id="prev_photo' + value + '" required /></div> <div class="col l2 m2 s12"><div id="prev_photo' + value + '" class="prev_image"></div></div>');
                    });
//                    Materialize.toast("Accepted!, File uploaded successfully!", 4000);
                    showWait();
//                    location.href = "<?= _U . 'batch_upload' ?>";
                } else if (r.success == '3') {
                    Materialize.toast("Accepted!, But File have Some duplicated Value!", 4000);
                    location.href = "<?= _U . 'batch_upload' ?>";
                } else {
                    Materialize.toast("Declined! File Not uploaded!", 4000);
                    location.href = "<?= _U . 'batch_upload' ?>";
                }
//                location.href = "<?= _U . 'batch_upload' ?>";
            }

        });
    }
//    $("#submit").on("click", function () {
//        {
////            $("#batch_upload_change").submit();
////            if ($("#batch_upload_change").valid() == true) {
//            $("#modal1").openModal();
////            }
////            alert("click on submit");
//        }
//    });
    var dataValue;
    $("#batch_upload_change").validate({
        ignore: [],
        rules: {
            c_thc: {required: true},
            c_thca: {required: true},
            c_cbd: {required: true},
            c_cbda: {required: true},
            c_cbn: {required: true},
            c_cbg: {required: true},
            c_strain_cate: {required: true},
            photo: {required: true},
            api_key: {required: true},
            listing_type: {required: true},
            listing_id: {required: true},
            tested_at: {required: true},
            name: {required: true},
            fName: {required: true, regex: '^[\u0020\u0600-\u06FF\s]+$'},
            lName: {required: true, regex: '^[\u0020\u0600-\u06FF\s]+$'},
            fatherName: {required: true, regex: '^[\u0020\u0600-\u06FF\s]+$'},
            email: {regex: '^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$'},
            city: {regex: '^[^0-9]+$'},
            melli_no: {required: true, minlength: '10', maxlength: '10'},
            post_code: {number: true, minlength: '10', maxlength: '10'},
            dob: {required: true, minlength: '10', maxlength: '10'},
            insurance_no: {number: true},
            home_address: {required: true},
            em_fName: {required: true, regex: '^[\u0020\u0600-\u06FF\s]+$'},
            em_lName: {required: true, regex: '^[\u0020\u0600-\u06FF\s]+$'},
            em_phone: {required: true, minlength: '13', maxlength: '13'},
            phone: {required: true, minlength: '9', maxlength: '13', onlynumber: true},
            veh_lic_no4: {required_lic: true},
            vin_no: {required: true, regex: '^[A-Za-z0-9]+$'},
            v_type: {required: true},
            cell_provider: {required: true},
            car_make: {required: true},
            car_year: {required: true},
            ddl_year: {required: true},
            ddl_month: {required: true},
            ddl_date: {required: true},
            l_p_type: {required: true}
        },
        messages: {
            c_thc: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            c_thca: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            c_cbd: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            c_cbda: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            c_cbn: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            c_cbg: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            c_strain_cate: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            api_key: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            listing_type: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            listing_id: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            photo: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            tested_at: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            name: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            fName: {required: '<span style="color:red;font-size:11px;">This value is required</span>', regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            lName: {required: '<span style="color:red;font-size:11px;">This value is required</span>', regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            fatherName: {required: '<span style="color:red;font-size:11px;">This value is required</span>', regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            email: {regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            city: {regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            melli_no: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            melli_ex_date: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            post_code: {number: '<span style="color:red;font-size:11px;">This value is not valid</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            dob: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            bod_no: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            insurance_no: {number: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            insurance_date: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            home_address: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            home_phone: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            phone: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', onlynumber: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            em_fName: {required: '<span style="color:red;font-size:11px;">This value is required</span>', regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            em_lName: {required: '<span style="color:red;font-size:11px;">This value is required</span>', regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            em_phone: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            endine_no: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            veh_card_no: {required: '<span style="color:red;font-size:11px;">This value is required</span>', minlength: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            vin_no: {required: '<span style="color:red;font-size:11px;">This value is required</span>', maxlength: '<span style="color:red;font-size:11px;">This value is not valid</span>', regex: '<span style="color:red;font-size:11px;">This value is not valid</span>'},
            veh_lic_no4: {required_lic: '<span style="color:red;font-size:11px;">This value is required</span>'},
            v_type: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            cell_provider: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            car_make: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            car_year: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            ddl_year: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            ddl_month: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            ddl_date: {required: '<span style="color:red;font-size:11px;">This value is required</span>'},
            l_p_type: {required: '<span style="color:red;font-size:11px;">This value is required</span>'}
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") == "c_thc") {
                error.insertAfter($('#errorbox_thc'));
            } else if (element.attr("name") == "c_thca") {
                error.insertAfter($('#errorbox_thca'));
            } else if (element.attr("name") == "c_cbd") {
                error.insertAfter($('#errorbox_cbd'));
            } else if (element.attr("name") == "c_cbda") {
                error.insertAfter($('#errorbox_cbda'));
            } else if (element.attr("name") == "c_cbn") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_cbn'));
            } else if (element.attr("name") == "c_strain_cate") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_strain_cate'));
            } else if (element.attr("name") == "api_key") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_api_key'));
            } else if (element.attr("name") == "listing_type") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_listing_type'));
            } else if (element.attr("name") == "listing_id") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_listing_id'));
            } else if (element.attr("name") == "name") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_name'));
            } else if (element.attr("name") == "c_cbg") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_c_cbg'));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
//            var dataValue = {autosave: 1, data: $('#form_driver_detail').serialize()}
//            var dataValupend('autosave', '1');
//            form.submit();
            dataValue = new FormData($("#batch_upload_change")[0]);
            dataValue.append('autosave', '1');
//            ModalCall(dataValue);
            var x = '0';
            SaveData(dataValue, x);
        }
    });
    function Closed() {
        $("#modal1").closeModal();
    }
    function titleChenage(obj) {
//        alert(obj);
        var todayTime = new Date($(obj).val());
        var month = (todayTime.getMonth() + 1);
        var day = (todayTime.getDate());
        var year = (todayTime.getUTCFullYear());
//        alert(month + "/" + day + "/" + year);
//        $("#hid_tested_at").val(month + "/" + day + "/" + year);
        $("#hid_tested_at").val(year + "-" + month + "-" + day);
        $('#dateDiscription' + id).text(month + "/" + day);
    }
    function uploadData(dataValue, x) {

    }
    function SaveData(dataValue, x) {
//    function SaveData() {
//        $("#modal1").closeModal();
//        var dataValue = new FormData($("#batch_upload_change")[0]);
////                dataValue.append('autosave', '1');
//        alert(dataValue);
        if (x == '0') {
            ModalCall(dataValue);
        } else {
//            alert("its call");
            $("#modal1").closeModal();
            $.ajax({
                url: '<?= _U . "batch_upload"; ?>',
//            data: {autosave: 1, data: $('#batch_upload_change').serialize()},
                type: 'POST',
                data: dataValue,
                async: false,
                cache: false,
                contentType: false,
                enctype: 'multipart/form-data',
                processData: false,
                dataType: 'json',
                success: function (r) {
//                alert(r);
                    Materialize.toast("Record added successfully!", 4000);
                    if (r.success == '1')
                    {
                        Materialize.toast("Record added successfully!", 4000);
                        showWait();
                        location.href = "<?= _U . 'batch_upload' ?>";
                    } else {
                        Materialize.toast("Warrning! Please try After Some time", 4000);
                    }
                    location.href = "<?= _U . 'batch_upload' ?>";
                }

            });
            location.href = "<?= _U . 'batch_upload' ?>";
        }

    }
    function  ModalCall(dataValue) {
        $("#lblname").text($("#name").val());
        $("#hidname").val($("#name").val());
        $("#lblthc").text($("#c_thc").val());
        $("#hidthc").val($("#c_thc").val());
        $("#lblthca").text($("#c_thca").val());
        $("#hidthca").val($("#c_thca").val());
        $("#lblcbd").text($("#c_cbd").val());
        $("#hidcbd").val($("#c_cbd").val());
        $("#lblcbda").text($("#c_cbda").val());
        $("#hidcbda").val($("#c_cbda").val());
        $("#lblcbn").text($("#c_cbn").val());
        $("#hidcbn").val($("#c_cbn").val());
        $("#lblstrain_cate").text($("#c_strain_cate").val());
        $("#hidstrain_cate").val($("#c_strain_cate").val());
        $("#hidData").val(dataValue);
        $("#modal1").openModal();
        var obj;
        $(".txt").each(function () {

            var data_id = $(this).data('id');
            var data_id_val = $(this).val();
            var class_id = $(this).data('class');
            var data_label = $(this).data('label');
            if (class_id == "E") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#E").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
            if (class_id == "C") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#C").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
            if (class_id == "T") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#T").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
            if (class_id == "P") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#P").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
            if (class_id == "M") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#M").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
            if (class_id == "S") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#S").append('<div class="col l4 m4 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
            if (class_id == "A") {
                if (data_id_val != "" || data_id_val != null) {
                    $("#A").append('<div class="col l6 m6 s12"><span for="hidname" style="color:#888;" class="help-span">' + data_label + ': </span> <span id="" name="lblname" class="help-span">' + data_id_val + '</span></div>');
//                    $("#A").html(data_label + "=:" + data_id_val);
//                    alert(data_label + "=:" + data_id_val);
                }
            }
        });
    }
    $(document).ready(function () {
        $("body").on("change", ".show_preview", function ()
        {
            var prev_id = $(this).data('prev_id');
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) {
                return
            }
            ;
            //if (/^image/.test( files[0].type))
            var reader = new FileReader();
            reader.readAsDataURL(files[0]);
            reader.onloadend = function () {
                $("#" + prev_id).show();
                $("#" + prev_id).css("background-image", "url(" + this.result + ")");
//                $("#1" + prev_id).css("background-image", "url(" + this.result + ")");
            };
        });
//        $('#table1').DataTable({
//            "bLengthChange": false
//           
//        });
        $('#table2').DataTable({
            "bLengthChange": false,
            "bSort": false

        });
<?php if ($success == "1") { ?>
            Materialize.toast('<?= $msg; ?>', 4000);
<?php } ?>
<?php if ($success == "-1") { ?>
            Materialize.toast('<?= $msg; ?>', 4000);
<?php } ?>
<?php
if ($_SESSION['success'] == "1") {
    $_SESSION['success'] = '0';
    ?>
            Materialize.toast('<?= $_SESSION['msg']; ?>', 4000);
<?php }
?>
<?php
if ($_SESSION['success'] == "-1") {
    $_SESSION['success'] = '0';
    ?>
            Materialize.toast('<?= $_SESSION['msg']; ?>', 4000);
<?php } ?>
<?php
if ($_SESSION['success'] == "3") {
    $_SESSION['success'] = '0';
    ?>
            Materialize.toast('<?= $_SESSION['msg']; ?>', 4000);
<?php } ?>
        //$("#doc_backgroud_check,#doc_non_owner,#photo_1, #photo_2, #photo_3,#doc_birth_cert,#doc_melli,#doc_insurance_cert,#doc_vehicle_card").on("change", function()
        $("body").on("change", ".show_preview", function ()
        {
            var prev_id = $(this).data('prev_id');
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) {
                return
            }
            ;
            //if (/^image/.test( files[0].type))
            var reader = new FileReader();
            reader.readAsDataURL(files[0]);
            reader.onloadend = function () {
                $("#" + prev_id).show();
                $("#" + prev_id).css("background-image", "url(" + this.result + ")");
                $("#1" + prev_id).css("background-image", "url(" + this.result + ")");
            };
        });
    });
    $(document).ready(function () {
        $('.add_new').keydown(function (e) {
            if (e.keyCode === 13) {
                $.ajax({
                    url: "<?php echo _U ?>batch_upload",
                    data: {addnew: 1, add_new: $(this).val()},
                    success: function () {
                        window.location.href = "<?php echo _U ?>batch_upload";
                    }
                });
            }
        });
    });
    function IsMobileNumber(phone) {
        var mob = /^[09]{1}[0-9]{9}$/;
        var txtMobile = document.getElementById(phone);
        if (mob.test(phone.value) == false) {
            // alert("Please enter valid mobile number.");
            phone.focus();
        }
        return true;
    }
    function showData(id) {
        $("#hiddenId").val(id);
        $("#filecontent").attr("src", "<?php print _U ?>var/quotes/quotes_" + id + ".html");
    }
    function UpdateStatus() {
        $.ajax({
            url: "<?php echo _U ?>batch_upload",
            data: {updateStatus: 1, quote_id: $("#hiddenId").val()},
            success: function () {
                window.location.href = "<?php echo _U ?>batch_upload";
                Materialize.toast('Quote Approved Successfully!', 4000);
            }
        });
    }
    function testcheckbox(id) {
        var status;
        if ($('#checkbox' + id).prop('checked') == true) {
            status = '1';
        } else {
            status = '0';
        }
        $.ajax({
            url: "<?php echo _U ?>batch_upload",
            data: {testcheckbox: 1, id: id, status: status},
            success: function () {
                window.location.href = "<?php echo _U ?>batch_upload";
            }
        });
    }

    function deletetodo(id) {
        $.ajax({
            url: "<?php echo _U ?>batch_upload",
            data: {deletetodo: 1, id: id},
            success: function () {
                window.location.href = "<?php echo _U ?>batch_upload";
            }
        });
    }
</script>
