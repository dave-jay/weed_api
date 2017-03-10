<script type="text/javascript">

    $(document).ready(function () {
        $('.add_new').keydown(function (e) {
            if (e.keyCode === 13) {
                $.ajax({
                    url: "<?php echo _U ?>home",
                    data: {addnew: 1, add_new: $(this).val()},
                    success: function () {
                        window.location.href = "<?php echo _U ?>home";
                    }
                });
            }
        });
    });
    function showData(id) {
        $("#hiddenId").val(id);
        $("#filecontent").attr("src", "<?php print _U ?>var/quotes/quotes_" + id + ".html");

    }
    function UpdateStatus() {
        $.ajax({
            url: "<?php echo _U ?>home",
            data: {updateStatus: 1, quote_id: $("#hiddenId").val()},
            success: function () {
                window.location.href = "<?php echo _U ?>home";
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
            url: "<?php echo _U ?>home",
            data: {testcheckbox: 1, id: id, status: status},
            success: function () {
                window.location.href = "<?php echo _U ?>home";
            }
        });
    }

    function deletetodo(id) {
        $.ajax({
            url: "<?php echo _U ?>home",
            data: {deletetodo: 1, id: id},
            success: function () {
                window.location.href = "<?php echo _U ?>home";
            }
        });
    }
</script>
