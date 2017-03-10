<?php include _PATH . "instance/front/tpl/libValidate.php" ?>

<script type="text/javascript">
//    $("#submit").on("click", function () {
//        {
////            $("#wm_api_change").submit();
////            if ($("#wm_api_change").valid() == true) {
//            $("#modal1").openModal();
////            }
////            alert("click on submit");
//        }
//    });
    $("#wm_api_change").validate({
        ignore: [],
        rules: {
            thc: {required: true},
            thca: {required: true},
            cbd: {required: true},
            cbda: {required: true},
            cbn: {required: true},
            strain_cate: {required: true},
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
            thc: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            thca: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            cbd: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            cbda: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            cbn: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
            strain_cate: {required: '<span style="color:red;font-size:11px; ">This value is required</span>'},
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
            if (element.attr("name") == "thc") {
                error.insertAfter($('#errorbox_thc'));
            } else if (element.attr("name") == "thca") {
                error.insertAfter($('#errorbox_thca'));
            } else if (element.attr("name") == "cbd") {
                error.insertAfter($('#errorbox_cbd'));
            } else if (element.attr("name") == "cbda") {
                error.insertAfter($('#errorbox_cbda'));
            } else if (element.attr("name") == "cbn") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_cbn'));
            } else if (element.attr("name") == "strain_cate") {
                console.log(element.attr("name"));
                error.insertAfter($('#errorbox_strain_cate'));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
//            var dataValue = {autosave: 1, data: $('#form_driver_detail').serialize()}
//            var dataValue = new FormData($("#form_driver_detail")[0]);
//            dataValue.append('autosave', '1');
//            form.submit();
            ModalCall();
        }
    });
    function SaveData() {
        $("#modal1").closeModal();
        $.ajax({
            url: '<?= _U . "wm_api"; ?>',
            data: {autosave: 1, data: $('#wm_api_edit').serialize()},
            type: 'POST',
            dataType: 'json',
            success: function (r) {
//                alert(r);

                if (r.success == 1)
                {
                    Materialize.toast("Record added successfully!", 4000);
                    showWait();
                    
                    location.href = "<?= _U . 'wm_api' ?>";
                } else {
                    Materialize.toast("Warrning! Please try After Some time", 4000);
                }
            }
        });
    }
    function  ModalCall() {
        $("#lblthc").text($("#thc").val());
        $("#hidthc").val($("#thc").val());

        $("#lblthca").text($("#thca").val());
        $("#hidthca").val($("#thca").val());

        $("#lblcbd").text($("#cbd").val());
        $("#hidcbd").val($("#cbd").val());

        $("#lblcbda").text($("#cbda").val());
        $("#hidcbda").val($("#cbda").val());

        $("#lblcbn").text($("#cbn").val());
        $("#hidcbn").val($("#cbn").val());

        $("#lblstrain_cate").text($("#strain_cate").val());
        $("#hidstrain_cate").val($("#strain_cate").val());

        $("#modal1").openModal();
    }
    $(document).ready(function () {

//        $('#table1').DataTable({
//            "bLengthChange": false
//           
//        });



<?php if ($success == "1") { ?>
            Materialize.toast('<?= $msg; ?>', 4000);
<?php } ?>
<?php if ($success == "-1") { ?>
            Materialize.toast('<?= $msg; ?>', 4000);
<?php } ?>

    });

    $(document).ready(function () {
        $('.add_new').keydown(function (e) {
            if (e.keyCode === 13) {
                $.ajax({
                    url: "<?php echo _U ?>wm_api",
                    data: {addnew: 1, add_new: $(this).val()},
                    success: function () {
                        window.location.href = "<?php echo _U ?>wm_api";
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
            url: "<?php echo _U ?>wm_api",
            data: {updateStatus: 1, quote_id: $("#hiddenId").val()},
            success: function () {
                window.location.href = "<?php echo _U ?>wm_api";
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
            url: "<?php echo _U ?>wm_api",
            data: {testcheckbox: 1, id: id, status: status},
            success: function () {
                window.location.href = "<?php echo _U ?>wm_api";
            }
        });
    }

    function deletetodo(id) {
        $.ajax({
            url: "<?php echo _U ?>wm_api",
            data: {deletetodo: 1, id: id},
            success: function () {
                window.location.href = "<?php echo _U ?>wm_api";
            }
        });
    }
</script>
