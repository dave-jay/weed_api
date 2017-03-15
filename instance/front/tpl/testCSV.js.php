<?php include _PATH . "instance/front/tpl/libValidate.php" ?>

<script type="text/javascript">


    $(document).ready(function () {

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
    });
//    $("#submit").on("click", function () {
//        {
////            $("#testCSV_change").submit();
////            if ($("#testCSV_change").valid() == true) {
//            $("#modal1").openModal();
////            }
////            alert("click on submit");
//        }
//    });
</script>
