<?php include _PATH . "instance/front/tpl/libValidate.php" ?>

<script type="text/javascript">
//    $("#submit").on("click", function () {
//        {
////            $("#view_wm_api_change").submit();
////            if ($("#view_wm_api_change").valid() == true) {
//            $("#modal1").openModal();
////            }
////            alert("click on submit");
//        }
//    });
    $("#view_wm_api_change").validate({
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
            url: '<?= _U . "view_wm_api"; ?>',
            data: {autosave: 1, data: $('#view_wm_api_edit').serialize()},
            type: 'POST',
            dataType: 'json',
            success: function (r) {
//                alert(r);

                if (r.success == 1)
                {
                    Materialize.toast("Record added successfully!", 4000);
                    showWait();

                    location.href = "<?= _U . 'view_wm_api' ?>";
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
    function BindDataModal(id) {
//        alert(id);
        bindData(id);

    }

    function bindData(id) {
        $.ajax({
            url: '<?= _U . "view_wm_api"; ?>',
            data: {binddata: 1, id: id},
            type: 'POST',
            dataType: 'json',
            success: function (r) {
                $("#modal1").openModal();
//                alert(r);
                $("#listing_id").text(r.listing_id);
                $("#listing_type").text(r.listing_type);
                $("#menu_item_id").text(r.menu_item_id);
                $("#api_key").text(r.api_key);
                $("#batch_number").text(r.batch_number);
                $("#name").text(r.name);
                $("#category").text(r.category);
                $("#tested_at").text(r.tested_at);
//                $("#picture_url").text(r.picture_url);
//                $("#expire_in_days").text(r.expire_in_days);
                $("#c_thc").text(r.c_thc);
                $("#c_thca").text(r.c_thca);
                $("#c_cbd").text(r.c_cbd);
                $("#c_cbda").text(r.c_cbda);
                $("#c_cbn").text(r.c_cbn);
                $("#c_strain_cate").text(r.c_strain_cate);
                $("#c_thcv").text(r.c_thcv);
                $("#c_cbdv").text(r.c_cbdv);
                $("#c_cbna").text(r.c_cbna);
                $("#c_cbg").text(r.c_cbg);
                $("#c_cbga").text(r.c_cbga);
                $("#c_cbc").text(r.c_cbc);
                $("#c_cbca").text(r.c_cbca);
                $("#c_cbl").text(r.c_cbl);
                $("#c_cbla").text(r.c_cbla);
                $("#t_alpha_pinene").text(r.t_alpha_pinene);
                $("#t_beta_pinene").text(r.t_beta_pinene);
                $("#t_linalool").text(r.t_linalool);
                $("#t_myrcene").text(r.t_myrcene);
                $("#t_limonene").text(r.t_limonene);
                $("#t_ocimene").text(r.t_ocimene);
                $("#t_terpinolene").text(r.t_terpinolene);
                $("#t_terpineol").text(r.t_terpineol);
                $("#t_valencene").text(r.t_valencene);
                $("#t_beta_caryophyllene").text(r.t_beta_caryophyllene);
                $("#t_caryophyllene").text(r.t_caryophyllene);
                $("#t_geraniol").text(r.t_geraniol);
                $("#t_alpha_humulene").text(r.t_alpha_humulene);
                $("#t_alpha_phellandrene").text(r.t_alpha_phellandrene);
                $("#t_delta_3_carene").text(r.t_delta_3_carene);
                $("#t_terpinene").text(r.t_terpinene);
                $("#t_alpha_terpinolene").text(r.t_alpha_terpinolene);
                $("#t_fenchol").text(r.t_fenchol);
                $("#t_borneol").text(r.t_borneol);
                $("#t_oxide").text(r.t_oxide);
                $("#t_alpha_bisabolol").text(r.t_alpha_bisabolol);
                $("#t_camphene").text(r.t_camphene);
                $("#t_sabinene").text(r.t_sabinene);
                $("#t_camphor").text(r.t_camphor);
                $("#t_isoborneol").text(r.t_isoborneol);
                $("#t_menthol").text(r.t_menthol);
                $("#t_alpha_cedrene").text(r.t_alpha_cedrene);
                $("#t_nerolidol").text(r.t_nerolidol);
                $("#t_eucalyptol").text(r.t_eucalyptol);
                $("#t_geranyl").text(r.t_geranyl);
                $("#t_acetate").text(r.t_acetate);
                $("#t_guaiol").text(r.t_guaiol);
                $("#t_phytol").text(r.t_phytol);
                $("#t_citronellol").text(r.t_citronellol);
                $("#t_p_cymene").text(r.t_p_cymene);
                $("#t_isopulegol").text(r.t_isopulegol);
                $("#t_pulegone").text(r.t_pulegone);

                $("#p_acequinocyl").text(r.p_acequinocyl);
                $("#p_imidacloprid").text(r.p_imidacloprid);
                $("#p_pyrethrium").text(r.p_pyrethrium);
                $("#p_spinosad").text(r.p_spinosad);
                $("#p_spiromesifen").text(r.p_spiromesifen);
                $("#p_spirotetramat").text(r.p_spirotetramat);
                $("#p_abamectin").text(r.p_abamectin);
                $("#p_bifenazate").text(r.p_bifenazate);
                $("#p_daminozide").text(r.p_daminozide);
                $("#p_fenoxycarb").text(r.p_fenoxycarb);
                $("#p_myclobutanil").text(r.p_myclobutanil);
                $("#p_paclobutrazol").text(r.p_paclobutrazol);

                $("#m_aerobic_plate_count").text(r.m_aerobic_plate_count);
                $("#m_pseudomonas").text(r.m_pseudomonas);
                $("#m_coliforms").text(r.m_coliforms);
                $("#m_e_coli").text(r.m_e_coli);
                $("#m_salmonella").text(r.m_salmonella);

                $("#s_propane").text(r.s_propane);
                $("#s_ethanol").text(r.s_ethanol);
                $("#s_methanol").text(r.s_methanol);
                $("#s_isopropanol").text(r.s_isopropanol);
                $("#s_isobutane").text(r.s_isobutane);
                $("#s_mercaptan").text(r.s_mercaptan);
                $("#s_dimethylbutane").text(r.s_dimethylbutane);
                $("#s_2_methylpentane").text(r.s_2_methylpentane);
                $("#s_3_methylpentane").text(r.s_3_methylpentane);
                $("#s_cyclohexane_benzene").text(r.s_cyclohexane_benzene);
                $("#s_isopentane").text(r.s_isopentane);
                $("#s_neopentane").text(r.s_neopentane);
                $("#s_butane").text(r.s_butane);
                $("#s_heptane").text(r.s_heptane);
                $("#s_pentane").text(r.s_pentane);
                $("#s_hexane").text(r.s_hexane);
                $('#hid_picture_url').val(r.picture_url).change();
                if (r.picture_url == "" || r.picture_url == null) {
                    $('#prev_photo').prop("style", "background-image: url(<?php print _U ?>docs/no_image2.jpg)");
                    $('#img_photo').attr("src", "<?php print _U ?>docs/no_image2.jpg)");
                    //$('#a_prev_photo_3').prop("href", "<?php print _U ?>docs/no_image.jpg");
                } else {
                    var ext = r.picture_url.split('.').pop();
                    if (ext == "jpg" || ext == "jpeg" || ext == "png" || ext == "gif") {

                        $('#prev_photo').prop("style", "background-image: url('<?php print _U ?>docs/" + r.picture_url + "')");
//                        $('#img_photo').attr("src", "<?php print _U ?>docs/" + r.photo + ")");
                        $('#img_photo').attr("src", "<?php print _U ?>docs/" + r.picture_url);
                        //$('#a_prev_photo_3').prop("href", "<?php print _U ?>docs/" + r.photo_3);
                    } else {
                        $('#prev_photo').prop("style", "background-image: url(<?php print _U ?>docs/view_pdf.jpg)");
                        //$('#a_prev_photo_3').prop("href", "<?php print _U ?>docs/" + r.photo_3);
                    }

                }

//                if (r.success == 1)
//                {
//                    Materialize.toast("Record added successfully!", 4000);
                showWait();
//
//                    location.href = "<?= _U . 'view_wm_api' ?>";
//                } else {
//                    Materialize.toast("Warrning! Please try After Some time", 4000);
//                }
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
                $("#1" + prev_id).css("background-image", "url(" + this.result + ")");
            };
        });

        if ($("#total_row").val() != "0") {
            $('#table2').DataTable({
                "bLengthChange": false, "bSort": false

            });
        }




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
                    url: "<?php echo _U ?>view_wm_api",
                    data: {addnew: 1, add_new: $(this).val()},
                    success: function () {
                        window.location.href = "<?php echo _U ?>view_wm_api";
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
            url: "<?php echo _U ?>view_wm_api",
            data: {updateStatus: 1, quote_id: $("#hiddenId").val()},
            success: function () {
                window.location.href = "<?php echo _U ?>view_wm_api";
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
            url: "<?php echo _U ?>view_wm_api",
            data: {testcheckbox: 1, id: id, status: status},
            success: function () {
                window.location.href = "<?php echo _U ?>view_wm_api";
            }
        });
    }

    function deletetodo(id) {
        $.ajax({
            url: "<?php echo _U ?>view_wm_api",
            data: {deletetodo: 1, id: id},
            success: function () {
                window.location.href = "<?php echo _U ?>view_wm_api";
            }
        });
    }
</script>
