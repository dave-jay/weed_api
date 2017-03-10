<div class="card" id="submitdata">
    <div class="title" style="color: #58B55C">
        <h2>Header Image</h2>
    </div>
    <div class="content">
        <div class="col l12 s12 m12">
            <form data-parsley-validate action="header_image" method="post" enctype="multipart/form-data" class="dropzone">
                <input type="hidden" name="InsertData" value="1">
            </form>
        </div>
    </div>
</div>
<!--<div class="card" id="updatedata" style="display: none">
    <div class="title" style="color: #58B55C">
        <h2>Fleet</h2>
    </div>
    <div class="content">
        <div class="row">
            <div class="col l12 align-right">
                <span class="update_data hidden"></span>
                <a class="btn" onclick="UpdateData()">
                    Update <i class="mdi-content-send right"></i>
                </a>
            </div>
        </div>
    </div>
</div>-->
<?php if ($fleetdata != '') { ?>
    <table id="table1" class="display table table-bordered table-striped table-hover" style="margin-top:30px">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($fleetdata as $key => $result) {
                ?>
                <tr id="updaterow<?php echo $result['id'] ?>">
                    <td style="width:10%">
                        <?php echo $i; ?>
                    </td>
                    <td id="pr<?php echo $result['id'] ?>">
                        <?php echo $result['image'] ?>
                    </td>
                    <td style="width:25%" class="align-center">
        <!--                        <a class="waves-effect waves-light btn" id="<?php echo $result['id'] ?>" onclick="EditData(this)">
                            <i class="mdi-image-edit"></i>  Edit
                        </a>-->
                        <a class="waves-effect waves-light btn" id="<?php echo $result['id'] ?>" onclick="Delete_Data(this)" >
                            <i class="ion-ios-trash"></i>  Delete 
                        </a>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
<?php } ?>
<style type="text/css">
    .dropzone{
        background: #fff none repeat scroll 0 0;
        border: 2px dashed #7e57c2;
        border-radius: 5px;
        padding: 3rem 0 0 2rem;
        text-align: center;
    }
</style>


