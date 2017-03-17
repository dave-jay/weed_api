<style>

    label.error{
        position: initial;
        padding-bottom: 10px;

    }
    .row .col{
        padding-top: 0px;
        padding-bottom: 0px;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-top: 2px;
    }
    .row{
        padding: 1rem;
    }
    .prev_image{
        height: 50px;
        width: 50px;
        background-position: center center;
        background-size: cover;
        display: none;
        border: blanchedalmond groove thin;
        box-shadow: gray 5px 5px 5px,   #000 0px 0px 1px,   #000 0px 0px 1px,
            #000 0px 0px 1px,   #000 0px 0px 1px,   #000 0px 0px 1px;
    }
</style>
<div class="card-panel" style="">
    <div class="row " style="margin:0px;padding: 1rem; ">
        <?php
//        d($_SESSION['success']);
//        d($_SESSION['msg']);
//        d($exist);
        ?>
        <div class="col s12 m12 l12">
            <form action="batch_upload" method="post" enctype="multipart/form-data" id="importFrm">
                <label>Upload CSV File:</label>
                <input type="file" name="file" required/>
                <input type="button" class="btn btn-primary" name="importSubmit" value="IMPORT" onclick="Call()">
            </form>

        </div>
    </div>
    <div class="row " style="margin:0px;padding: 1rem; ">

        <div class="col s12 m12 l12">
            <div class="card" >
                <div class="title">
                    <!--<div class="row">--> 
                        <!--<i class="fa fa-cab prefix small"></i>&nbsp;-->
                    <span style="font-weight:bold;font-size:16px; "><?php print _t('43', 'View') ?>  : <?php print _t('40', 'List Of Content') ?></span>
                    <span class="right" style="color: orangered; font-weight:bold;font-size:16px;margin-right: 10%; "></span>
                    <!--</div>-->
                </div>
                <div class="content" >
                    <table id="table2" class="display table table-hover">
                        <!--                    <div class="todo-card right">
                                                <div class="todo-task ">
                                                    <input type="checkbox" id="chkselectAll" name="chkAll" data-parsley-mincheck="2" class="subject-list" onClick="selectAll(this, 'chk-list')"  >
                                                    <label for="chkselectAll"><?php print _t('90', 'Select All') ?></label>
                                                </div>
                                            </div>-->
                        <!--                        <div class="todo-card right">
                                                    <div class="todo-task ">
                                                        <input type="checkbox" id="unchkAll" name="chkAll" checked class="subject-list" >
                                                        <label for="unchkAll">Unselect All</label>
                                                    </div>
                                                </div>-->
                        <thead>
                            <tr>
                                <th><?php print _t('346', '#') ?></th>
                                <th><?php print _t('32', 'Name') ?></th>
                                <th><?php print _t('32', 'THC %') ?></th>
                                <th class="hide-on-med-and-down" ><?php print _t('11', 'THCA') ?></th>
                                <th class="hide-on-med-and-down"><?php print _t('13', 'CBD') ?></th>
                                <th style=""><?php print _t('14', 'CBDA') ?></th>
                                <th class="hide-on-med-and-down"><?php print _t('35', 'CBN') ?></th>
                                <th class="hide-on-small-and-down"><?php print _t('34', 'Strain Category') ?></th>


<!--                                <th>Select for Next Station</th>-->
                                <th><?php print _t('', 'API Status') ?> </th>
    <!--                                <th><?php print _t('36', 'Edit') ?> </th>
                                <th><?php print _t('38', 'Move') ?> </th>
                                <th><?php print _t('39', 'Reject') ?> </th>
                                <th><?php print _t('378', 'Send SMS') ?></th>
                                <th><?php print _t('89', 'Select for Next') ?> </th>-->

<!--                                <th>Create User</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = q("select * from tb_form order by id desc");
                            // $query= q("select d.id,d.fname, d.lname,d.license_plate,d.phone,d.melli_no,v.make,v.modal from tb_driver d,  tb_vehicle v,tb_vehicle_driver vd where vd.driver_id=d.id and vd.vehicle_id=v.id and d.stage=2 and d.license_plate=v.license_plate");
                            $i = 1;
                            foreach ($query as $row) {
                                $_SESSION[$row['id']] = $row['id'];
                                ?>

                                <tr  class="link" style="cursor: pointer;" id="<?php echo $row['id']; ?>" >
                                <!--<tr onclick="BindDataModal('<?php echo $row['id']; ?>')" class="link" style="cursor: pointer;" >-->
                                            <!--<td style="width: 5%;"><?php echo $_SESSION[$row['id']]; ?></td>--> 
                                    <td style="width: 5%;" ><?php echo $i; ?></td> 
                                    <td style="width: 10%;"><?php echo $row['name']; ?></td>
                                    <td style="width: 10%;"><?php echo $row['c_thc']; ?>
                                        <!--                                        <div class="hide-on-med-and-up">
                                                                                    <span>Melli Number:</span><br/>
                                                                                    <span><?php echo $row['melli_no']; ?></span><br/>
                                                                                    <span>Cell Number:</span><br/>
                                                                                    <span><?php echo $row['phone']; ?></span><br/>
                                                                                    <span>Make Model Year:</span><br/>
                                                                                    <span><?php
                                        $md = $row['make_modal'];
                                        if ($md == "other") {
                                            $other = $row['make_modal_other'];
                                        } else {
                                            $other = "";
                                        }
                                        echo $row['make_modal'] . ' ' . $other . '-' . $row['year'];
                                        ?></span>
                                                                                </div>-->

                                    </td> 
                                    <td style="width: 12%;" class="hide-on-med-and-down"><?php echo $row['c_thca']; ?></td> 
                                    <td  style="width: 12%;"class="ltr hide-on-med-and-down" id="td_phone_<?= $row['id']; ?>"><?php echo $row['c_cbd']; ?></td>  
                                    <td  style='word-break: break-all; width: 12%;'><?php echo $row['c_cbda']; ?></td> 
                                    <td style="width: 12%;" class="hide-on-med-and-down"><?php echo $row['c_cbn']; ?></td> 
                                    <td class="ltr hide-on-small-and-down" style="width: 12%;" >  
                                        <?php
                                        echo $row['c_strain_cate'];
//                                    $vin_arr = explode('-', $row["license_plate"]);
                                        ?>

                                    </td> 
                                    <td style="width: 15%;" class="hide-on-med-and-down">
                                        <div id="d<?= $row['id']; ?>" style="text-align: center;">
                                            <?php
                                            $flagApi = qs("select * from api_flag where tb_form_id='{$row['id']}'");
                                            if ($flagApi['push_data_api'] == "1") {
                                                echo "API PUSHED";
                                            } else {
//                                            echo "API pushed Remains";
                                                ?>
                                                <a  id = "view<?php echo $row['id']; ?>" name = "<?php echo $row['id']; ?>" onclick = "pushToAPI(<?php echo $row['id'] . ',' . $row['batch_number']; ?>)" class = "btn btn-rounded tooltipped  large center-align  cursor " data-delay = "50" data-tooltip = "PUSH TO API" title = "PUSH TO API" >
                                                <!--<i class = "mdi-editor-border-color prefix small"></i> -->
                                                    <!--<i class = "mdi-content-create prefix small"></i>-->
                                                    Push To API
                                                    <!--<span style = "font-size: 30px; line-height: 20px;">Edit</span> -->
                                                </a>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </td> 

                            <input type="hidden" value ="<?php echo $_SESSION[$row['id']]; ?>" name='record_id' />
                            </tr>
                            <?php
                            $i++;
                        }
                        if (count($query) == 0) {
                            echo "<tr><td colspan='20'>";
                            print _t('41', 'No records found!');
                            echo "</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                    <div style="clear: both"></div>
                    <br/>
                    <div>
                        <!--<button data-tooltip='Click to Next' name="submit"  class="right waves-effect waves-light btn-large z-depth-0 z-depth-1-hover tooltipped" type="submit" onclick="chkbox()"><?php print _t('50', 'Next') ?></button>-->
                    </div>
                    <div style="clear: both"></div>
                </div>

            </div>
            <div class="">
                <input type="hidden" name="id" value="<?php print $_REQUEST['id']; ?>">
                <input type="hidden" id="total_row" value="<?= count($query); ?>">
            </div>

        </div>
    </div>
</div>
<div id="modal1"  class="modal modal-fixed-footer modal-fixed-header-footer " >
    <form id="batch_upload_edit" action="batch_upload" method="post" enctype="multipart/form-data">
        <div class="modal-header">
            <div class="header-text">

                <span style="font-size: 16px;font-weight: bold;"><?php print _t('206', 'Upload Image') ?> </span>

                <!--<a class="btn btn-default btn-rounded" id="vehicle" onclick=" divDisplay('vehicle')" >Vehicle Info</a>-->
            </div>

        </div>
        <div class="modal-content  fixframe">

            <!-- <a class="modal-action modal-close  waves-effect waves-green red-text btn-flat tooltipped" data-position="top" data-delay="50" data-tooltip="Click To Exit" href="#">
                 <i class="mdi-content-clear"></i>
             </a> -->
            <div id="filecontent" src="" style="height:auto;" frameborder="0" scrolling="yes">

                <div class="card" id="card_basic" >
                    <div class="title">

                        <span style="font-weight:bold;font-size:16px; ">
                            <?php print _t('206', 'Report') ?> 
                        </span>

                    </div>      
                    <div class="content" style="min-height: min-content;">
                        <div class="card"> 
                            <div class="content" >
                                <div class="row"  id="E"></div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                        <div style="clear: both; padding-bottom: 20px;"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer ">
            <button data-tooltip='Click to Save' name="UploadImage"  class="right waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="submit" style="margin: 3px 10px 5px 2px;"><?php print _t('18', 'Confirm') ?></button>

            <!--<button data-tooltip='Click to Close' name="edit" id="close" class="right modal-close  grey  waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;" onclick="Closed()"><?php print _t('179', 'Edit') ?></button>-->
            <div style="clear: both"></div>
            <input type="hidden" name="d_id" id="d_id" value="">
            <input type="hidden" name="v_id" id="v_id" value="">
            <input type="hidden" name="edit_station2" />

        </div>
    </form>
</div>
<style>
    /*    .fixframe {
            position: fixed;
            top: 15px;
            left: 25px;
            right: 25px;
            bottom: 0px;
    
        } 
        .fixframe iframe {
            height: 100%;
            width: 100%;  
        } 
        .arrange{
            float:left;
        }
        html.rtl .arrange{
            float:right;
        }*/
</style>
<style>
    .modal-fixed-header-footer{
        border-radius: 6px;
    }
    .modal-fixed-header-footer .modal-header{
        height: 56px; border-bottom: 1px solid #ccc;padding: 14px;
        background-color: #5AB1F6;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        color:white;
    }
    .modal-fixed-header-footer .header-text{
        float: left;
    }
    .modal-fixed-header-footer .header-close{
        float: right;
    }
    .modal-fixed-header-footer {
        height: calc(100% - 112px) !important;
    }
    .my-btn{
        margin-right: 20px !important;
    }
    .my-btn-default{
        background-color: #aaaaaa;
    }
    .my-btn-default:hover ,  .my-btn-default:active, .my-btn-default:focus{
        background-color: #999999;
    }


</style>
<?php include _PATH . "instance/front/tpl/vehicle_plate_design.php" ?>
