<style>
    .row .col {
        padding-bottom: 0rem;
        padding-left: 1rem;
        padding-right: 1rem;
        /*margin-right: 2rem;*/
    }
    label.error{
        position: relative;
    }
</style>
<!--<div class="card-panel" style="">-->
<form action="view_wm_api" method="post" id="view_wm_api_change">
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
                            <th><?php print _t('32', 'THC %') ?></th>
                            <th class="hide-on-med-and-down" ><?php print _t('11', 'THCA') ?></th>
                            <th class="hide-on-med-and-down"><?php print _t('13', 'CBD') ?></th>
                            <th style=""><?php print _t('14', 'CBDA') ?></th>
                            <th class="hide-on-med-and-down"><?php print _t('35', 'CBN') ?></th>
                            <th class="hide-on-small-and-down"><?php print _t('34', 'Strain Category') ?></th>


<!--                                <th>Select for Next Station</th>-->
                            <!--<th><?php print _t('', 'Action') ?> </th>-->
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
                        // $query= q("select d.id,d.fname, d.lname,d.license_plate,d.phone,d.melli_no,v.make,v.modal from tb_driver d,  tb_vehicle v,tb_vehicle_driver vd where vd.driver_id=d.id and vd.vehicle_id=v.id and d.stage=2 and d.license_plate=v.license_plate");
                        $i = 1;
                        foreach ($query as $row) {
                            $_SESSION[$row['id']] = $row['id'];
                            ?>

                            <tr>
                                <!--<td style="width: 5%;"><?php echo $_SESSION[$row['id']]; ?></td>--> 
                                <td style="width: 5%;"><?php echo $i; ?></td> 
                                <td style="width: 15%;"><?php echo $row['thc']; ?>
                                    <div class="hide-on-med-and-up">
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
                                    </div>

                                </td> 
                                <td style="width: 15%;" class="hide-on-med-and-down"><?php echo $row['thca']; ?></td> 
                                <td  style="width: 15%;"class="ltr hide-on-med-and-down" id="td_phone_<?= $row['id']; ?>"><?php echo $row['cbd']; ?></td>  
                                <td  style='word-break: break-all; width: 15%;'><?php echo $row['cbda']; ?></td> 
                                <td style="width: 15%;" class="hide-on-med-and-down"><?php echo $row['cbn'];?></td> 
                                <td class="ltr hide-on-small-and-down" style="width: 15%;" >  
                                    <?php
                                     echo $row['strain_cate']; 
//                                    $vin_arr = explode('-', $row["license_plate"]);
                                    ?>
                                    
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
</form>
<!--</div>-->
<div id="modal1"  class="modal modal-fixed-footer modal-fixed-header-footer " >
    <form id="view_wm_api_edit" action="view_wm_api" method="post">
        <div class="modal-header">
            <div class="header-text">

                <span style="font-size: 16px;font-weight: bold;"><?php print _t('206', 'Confirm Details') ?> </span>

                <!--<a class="btn btn-default btn-rounded" id="vehicle" onclick=" divDisplay('vehicle')" >Vehicle Info</a>-->
            </div>
            <!--            <div class="header-close modal-action modal-close" id="close1">
                            <i class="fa fa-times"></i>
                        </div>-->
        </div>
        <div class="modal-content flow-text fixframe">

            <!-- <a class="modal-action modal-close  waves-effect waves-green red-text btn-flat tooltipped" data-position="top" data-delay="50" data-tooltip="Click To Exit" href="#">
                 <i class="mdi-content-clear"></i>
             </a> -->
            <div id="filecontent" src="" style="height:auto;" frameborder="0" scrolling="yes">

                <div class="card" id="card_basic" >
                    <!--                    <div class="title">
                                            <div class="row">
                                                <i class="fa fa-cab prefix small"></i>&nbsp;
                                            <span style="font-weight:bold;font-size:16px; ">
                    <?php print _t('206', 'View Details') ?> 
                                            </span>
                    
                                        </div>      -->
                    <div class="content" style="min-height: min-content;">
                        <div class="col m12 l12 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i> 
                                <span for="thc" class="help-span">THC % :</span>
                                <input id="hidthc" type="hidden" name="hidthc" value=""> 
                                <label id="lblthc" name="lblthc" class="help-span"></label> 
                                <!--<div id="errorbox_thc" style="clear: both;"></div>-->
                            </div> 
                        </div> 
                        <div class="col m12 l12 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i> 
                                <span for="thc" class="help-span">THCA :</span>
                                <input id="hidthca" type="hidden" name="hidthca" value="" > 
                                <label id="lblthca" class="help-span"></label> 
                                <!--<div id="errorbox_thca" style="clear: both;"></div>-->
                            </div> 
                        </div> 
                        <div class="col m12 l12 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i>
                                <span for="thc" class="help-span">CBD :</span>
                                <input id="hidcbd" type="hidden" name="hidcbd" value="" > 
                                <label id="lblcbd" class="help-span"></label> 
                                <!--<div id="errorbox_cbd" style="clear: both;"></div>-->
                            </div> 
                        </div> 
                        <div class="col m12 l12 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i>
                                <span for="thc" class="help-span">CBDA :</span>
                                <input id="hidcbda" type="hidden" name="hidcbda" value="" > 
                                <label id="lblcbda" class="help-span"></label> 
                                <!--<div id="errorbox_cbda" style="clear: both;"></div>-->
                            </div> 
                        </div> 
                        <div class="col m12 l12 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i>
                                <span for="thc" class="help-span">CBN :</span>
                                <input id="hidcbn" type="hidden" name="hidcbn" value="" > 
                                <label id="lblcbn" class="help-span"></label> 
                                <!--<div id="errorbox_cbn" style="clear: both;"></div>-->
                            </div> 
                        </div> 
                        <div class="col m12 l12 s12" style="padding-bottom: 10px;"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i> 
                                <span for="thc" class="help-span">Strain Category :</span>
                                <input id="hidstrain_cate" type="hidden" name="hidstrain_cate" value="" > 
                                <label id="lblstrain_cate" class="help-span"></label> 
                                <!--<div id="errorbox_strain_cate" style="clear: both;"></div>-->
                            </div> 
                        </div> 
                    </div>

                </div>

                <!--                <div style="clear: both"></div>-->

            </div>

        </div>
        <div class="modal-footer ">
            <button data-tooltip='Click to Save' name="save"  class="right waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;" onclick="SaveData()"><?php print _t('18', 'Confirm') ?></button>

            <button data-tooltip='Click to Close' name="edit" id="close" class="right modal-close  grey  waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;"><?php print _t('179', 'Edit') ?></button>
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
        background-color: #green;
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
