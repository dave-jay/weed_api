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
                            <th><?php print _t('32', 'Name') ?></th>
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

                            <tr onclick="BindDataModal('<?php echo $row['id']; ?>')" class="link" style="cursor: pointer;" >
                                        <!--<td style="width: 5%;"><?php echo $_SESSION[$row['id']]; ?></td>--> 
                                <td style="width: 5%;" ><?php echo $i; ?></td> 
                                <td style="width: 10%;"><?php echo $row['name']; ?></td>
                                <td style="width: 10%;"><?php echo $row['c_thc']; ?>
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
                                <td style="width: 15%;" class="hide-on-med-and-down"><?php echo $row['c_thca']; ?></td> 
                                <td  style="width: 15%;"class="ltr hide-on-med-and-down" id="td_phone_<?= $row['id']; ?>"><?php echo $row['c_cbd']; ?></td>  
                                <td  style='word-break: break-all; width: 15%;'><?php echo $row['c_cbda']; ?></td> 
                                <td style="width: 15%;" class="hide-on-med-and-down"><?php echo $row['c_cbn']; ?></td> 
                                <td class="ltr hide-on-small-and-down" style="width: 15%;" >  
                                    <?php
                                    echo $row['c_strain_cate'];
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

                <span style="font-size: 16px;font-weight: bold;"><?php print _t('206', 'View Details') ?> </span>

                <!--<a class="btn btn-default btn-rounded" id="vehicle" onclick=" divDisplay('vehicle')" >Vehicle Info</a>-->
            </div>
            <div class="header-close modal-action modal-close" id="close1">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <div class="modal-content flow-element ">

            <!--            <a class="modal-action modal-close  waves-effect waves-green red-text btn-flat tooltipped" data-position="top" data-delay="50" data-tooltip="Click To Exit" href="#">
                            <i class="mdi-content-clear"></i>
                        </a> -->
            <!--<div id="filecontent" src="" style="height:auto;" frameborder="0" scrolling="yes">-->

            <div class="card">

<!--<label>Batch Number:<?= $batchno ?></label>-->
                <div class="title">Report</div>
                <div class="content">
                    <div class="row" style=" ">

                        <!--                        <div class=" col l2 s12 m2">
                                                    <img class="prev_image" src="" width="60" height="60" alt="no images" id="img_photo"/>
                                                    <div id="prev_photo"  class="prev_image"></div>
                        
                                                </div>-->
                        <div class=" col l4 s12 m4"> 
                            <!--<i class="mdi-action-label prefix "></i>--> 
                            <!--<span for="thc" class="help-span">THC</span>-->
                            <!--<input id="name" type="text" class="txt" data-label="Name" data-class="E"  data-id="txt_name"  name="name" value="" >--> 
                            <label for="name" class="helpertext">Name</label><br/> 
                            <label id="name" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">Name</label> 
                            <div id="errorbox_name" style="clear: both;"></div>

                        </div>
                        <div class=" col l4 s12 m4"> 
                            <!--<i class="mdi-action-label prefix "></i>--> 
                            <!--<span for="thc" class="help-span">THC</span>-->
                            <!--<input id="batch_no" type="text" class="txt" data-label="Batch Number" data-class="E"  data-id="txt_batch_no" name="batch_no" value="" >--> 
                            <label for="batch_number" class="helpertext">Batch Number</label> <br/>
                            <label id="batch_number" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">Batch Number</label> 
                            <div id="errorbox_" style="clear: both;"></div>

                        </div>
                        <div class="col l4 s12 m4"> 
                            <!--<i class="mdi-action-label prefix "></i>--> 
                            <!--<span for="thc" class="help-span">THC</span>-->
                            <!--<input id="menu_item_id" type="text" class="txt" data-label="Weedmaps Menu Item ID" data-class="E"  data-id="txt_menu_item_id" name="menu_item_id" value="" >--> 
                            <label for="menu_item_id" class="helpertext">Weedmaps Menu Item ID</label> <br/>
                            <label id="menu_item_id" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">Weedmaps Menu Item ID</label> 
                            <div id="errorbox_" style="clear: both;"></div>

                        </div>
                        <div  style="clear: both;"></div>
                        <div class=" col m4 l4 s12"> 
                            <!--<div class="input-field">--> 
                                <!--<i class="mdi-action-label prefix "></i>--> 
                                <!--<span for="thc" class="help-span">THC</span>-->
                                <!--<input id="c_thc" type="text" class="txt" data-label="cannabinoids[THC%]" data-class="C"  data-id="txt_c_thc" name="c_thc" value="" >--> 
                            <label for="c_thc" class="helpertext">cannabinoids[THC%]</label> <br/>
                            <label id="c_thc" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[THC%]</label> 
                            <div id="errorbox_thc" style="clear: both;"></div>

                            <!--                            </div>
                                                        <span class="help-text" style="color: #888;" >THC% of test result (as % of weight)</span>-->
                        </div>
                        <div class=" col m4 l4 s12"> 
                            <!--                            <div class="input-field"> -->
                                                            <!--<i class="mdi-action-label prefix  "></i>--> 
                                                            <!--<input id="c_thca" type="text" class="txt" data-label="cannabinoids[THCa%]" data-class="C"  data-id="txt_c_thca" name="c_thca" value="" >--> 
                            <label for="c_thca" class="helpertext">cannabinoids[THCa%]</label> <br/>
                            <label id="c_thca" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[THCa%]</label> 
                            <div id="errorbox_thca" style="clear: both;"></div>

                            <!--</div>-->
                            <!--<span class="help-text" >THCa% of test result (as % of weight)</span>-->
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <!--<div class="input-field">--> 
                                <!--<i class="mdi-action-label prefix "></i>--> 
                                <!--<input id="c_cbd" type="text" class="txt" data-label="cannabinoids[CBD%]" data-class="C"  data-id="txt_c_cbd" name="c_cbd" value="" >--> 
                            <label for="c_cbd" class="helpertext">cannabinoids[CBD%]</label> <br/>
                            <label id="c_cbd" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBD%]</label> 
                            <div id="errorbox_cbd" style="clear: both;"></div>
                            <!--                            </div> 
                                                        <span class="help-text" >CBD% of test result (as % of weight)</span>-->
                        </div> 
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <!--                            <div class="input-field"> 
                                                            <i class="mdi-action-label prefix "></i> -->
                                                            <!--<input id="c_cbda" type="text" class="txt" data-label="cannabinoids[CBDa%]" data-class="C"  data-id="txt_c_cbda" name="c_cbda" value="" >--> 
                            <label for="c_cbda" class="helpertext">cannabinoids[CBDa%]</label> <br/>
                            <label id="c_cbda" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBDa%]</label> 
                            <!--<div id="errorbox_cbda" style="clear: both;"></div>-->
                            <!--                            </div> 
                                                        <span class="help-text" >CBDa% of test result (as % of weight)</span>-->
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <!--<div class="input-field">--> 
                                <!--<i class="mdi-action-label prefix "></i>--> 
                                <!--<input id="c_cbn" type="text" class="txt" data-label="cannabinoids[CBN%]" data-class="C"  data-id="txt_c_cbn" name="c_cbn" value="" >--> 
                            <label for="c_cbn" class="helpertext">cannabinoids[CBN%]</label> <br/>
                            <label id="c_cbn" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBN%]</label> 
                            <!--<div id="errorbox_cbn" style="clear: both;"></div>-->
                            <!--</div>--> 
                            <!--<span class="help-text" >CBN% of test result (as % of weight)</span>-->
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <!--<div class="input-field">--> 
                                <!--<i class="mdi-action-label prefix "></i>--> 
                                <!--<input id="c_strain_cate" type="text" class="txt" data-label="Strain Category" data-class="C"  data-id="txt_c_strain_cate" name="c_strain_cate" value="" >--> 
                            <label for="c_strain_cate" class="helpertext">Strain Category</label> <br/>
                            <label id="c_strain_cate" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">Strain Category</label> 
                            <div id="errorbox_strain_cate" style="clear: both;"></div>
                        </div>
                        <!--<span class="help-text" >Strain Category of test result (as % of weight)</span>-->
                        <div style="clear: both;"></div>
                        <!--                        <div class=" col l4 s12 m4 ">
                                                    <div class="input-field col l8 m8 s12">
                                                    <span class="helpertext" style="color: #888;"><?php print _t('134', 'Photo') ?>&nbsp;</span>&nbsp;
                                                                                <input type="file" name="photo"  id="photo" class="show_preview" data-prev_id="prev_photo">
                                                </div>
                                                    <div class="col l4 m4 s12">
                                                    <div id="prev_photo" class="prev_image"></div>
                                                    </div>
                                                    <div class="col s12 m2 l2">
                                                        <img class="prev_image" src="" width="100" height="100" alt="no images" id="img_photo"/>
                                                        <div id="prev_photo"  class="prev_image"></div>
                        
                                                    </div>
                                                </div>-->
                        <div class=" col l4 s12 m4 ">
                            <label class="helpertext" for="tested_at" >Tested At&nbsp;</label><br/>
                            <label class="helpertext" id="tested_at" style="color: #666;font-weight: bold;font-size: 12px; "></label>
    <!--                        <input id="tested_at" class="datepicker picker__input" name="tested_at" value="" onchange="titleChenage(this);" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="pDate0_root" type="text" class="txt" data-label="" data-class="C"  data-id="txt_">
                            <input type="hidden" name="hid_tested_at" id="hid_tested_at" value=""/>-->
                        </div>
                        <div style="clear: both;"></div>
                    </div>

                </div>


            </div>
            <ul class="collapsible popout " data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="fa fa-plus-square-o"></i>Cannabinoids</div>
                    <div class="collapsible-body" >


                        <div  class="row" style="margin:  1rem;">
                            <div class="col m4 l4 s12"> 
                                <!--<div class="input-field">--> 
<!--                                    <i class="mdi-action-label prefix "></i> 
                                    <input id="c_thcv" type="text" class="txt" data-label="cannabinoids[THCv%]" data-class="C"  data-id="txt_c_thcv" name="c_thcv" value="" > -->
                                <label for="c_thcv" class="helpertext">cannabinoids[THCv%]</label> <br/>
                                <label id="c_thcv" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[THCv%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >THCv% of test result (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbdv" type="text" class="txt" data-label="cannabinoids[CBDv%]" data-class="C"  data-id="txt_c_cbdv" name="c_cbdv" value="" > -->
                                <label for="c_cbdv" class="helpertext">cannabinoids[CBDv%]</label> <br/>
                                <label id="c_cbdv" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBDv%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBDv% of test result (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbna" type="text" class="txt" data-label="cannabinoids[CBNa%]" data-class="C"  data-id="txt_c_cbna" name="c_cbna" value="" > -->
                                <label for="c_cbna" class="helpertext">cannabinoids[CBNa%]</label> <br/>
                                <label id="c_cbna" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBNa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBNa% of test result (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbg" type="text" class="txt" data-label="cannabinoids[CBG%]" data-class="C"  data-id="txt_c_cbg" name="c_cbg" value="" > -->
                                <label for="c_cbg" class="helpertext">cannabinoids[CBG%]</label><br/> 
                                <label id="c_cbg" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBG%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBG% of test result (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbga" type="text" class="txt" data-label="cannabinoids[CBGa%]" data-class="C"  data-id="txt_c_cbga" name="c_cbga" value="" > -->
                                <label for="c_cbga" class="helpertext">cannabinoids[CBGa%]</label> <br/>
                                <label id="c_cbga" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBGa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBGa% of test result (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbc" type="text" class="txt" data-label="cannabinoids[CBC%]" data-class="C"  data-id="txt_c_cbc" name="c_cbc" value="" > -->
                                <label for="c_cbc" class="helpertext">cannabinoids[CBC%]</label> <br/>
                                <label id="c_cbc" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBC%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBC% of test result (as % of weight)</span>-->
                            </div>


                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbca" type="text" class="txt" data-label="cannabinoids[CBCa%]" data-class="C"  data-id="txt_c_cbca" name="c_cbca" value="" > -->
                                <label for="c_cbca" class="helpertext">cannabinoids[CBCa%]</label> <br/>
                                <label id="c_cbca" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBCa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBCa% of test result (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbl" type="text" class="txt" data-label="cannabinoids[CBL%]" data-class="C"  data-id="txt_c_cbl" name="c_cbl" value="" > -->
                                <label for="c_cbl" class="helpertext">cannabinoids[CBL%]</label> <br/>
                                <label id="c_cbl" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBL%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >CBL% of test result (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_cbla" type="text" class="txt" data-label="cannabinoids[CBLa%]" data-class="C"  data-id="txt_c_cbla" name="c_cbla" value="" > -->
                                <label for="c_cbla" class="helpertext" >cannabinoids[CBLa%]</label> <br/>
                                <label id="c_cbla" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">cannabinoids[CBLa%]</label> 
                                <!--                                    <div id="errorbox_cbg" style="clear: both;"></div>
                                                                </div> 
                                                                <span class="help-text" >CBLa% of test result (as % of weight)</span>-->
                            </div>

                            <div  style="clear: both;"></div>

                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="c_category" type="text" class="txt" data-label="Category" data-class="C"  data-id="txt_c_category" name="c_category" value="" > -->
                                <label for="c_category" class="helpertext"> Category</label> <br/>
                                <label id="c_category" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; "> Category</label> 
                                <div id="errorbox_c_category" style="clear: both;"></div>
                                <!--                                </div>
                                                                <span class="help-text" >Category of test result (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                        </div>
                        <div  style="clear: both;"></div>
                    </div>

                </li>
                <li>
                    <div class="collapsible-header "><i class="fa fa-plus-square-o"></i>Terpenes</div>
                    <div class="collapsible-body">
                        <div class="row" style="margin:  1rem;">
                            <div class=" col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <span for="thc" class="help-span">THC</span>
                                                                    <input id="t_alpha_pinene" type="text" class="txt" data-label="terpenes[alpha_pinene]" data-class="T"  data-id="txt_t_alpha_pinene" name="t_alpha_pinene" value="" > -->
                                <label for="t_alpha_pinene" class="helpertext">terpenes[alpha_pinene]</label> <br/>
                                <label id="t_alpha_pinene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[alpha_pinene]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                                <!--                                </div>
                                                                <span class="help-text" style="color: #888;" >alpha Pinene (as % of weight)</span>-->
                            </div>
                            <div class=" col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix  "></i> 
                                                                    <input id="t_beta_pinene" type="text" class="txt" data-label="terpenes[beta_pinene]" data-class="T"  data-id="txt_t_beta_pinene" name="t_beta_pinene" value="" > -->
                                <label for="t_beta_pinene" class="helpertext">terpenes[beta_pinene]</label> <br/>
                                <label id="t_beta_pinene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[beta_pinene]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                                <!--                                </div>
                                                                <span class="help-text" >beta Pinene (as % of weight)</span>-->
                            </div> 

                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_linalool" type="text" class="txt" data-label="terpenes[linalool]" data-class="T"  data-id="txt_t_linalool" name="t_linalool" value="" > -->
                                <label for="t_linalool" class="helpertext">terpenes[linalool]</label> <br/>
                                <label id="t_linalool" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[linalool]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Linalool (as % of weight)</span>-->
                            </div> 
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_myrcene" type="text" class="txt" data-label="terpenes[myrcene]" data-class="T"  data-id="txt_t_myrcene" name="t_myrcene" value="" > -->
                                <label for="t_myrcene" class="helpertext">terpenes[myrcene]</label><br/> 
                                <label id="t_myrcene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[myrcene]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Myrcene (as % of weight)</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_limonene" type="text" class="txt" data-label="terpenes[limonene]" data-class="T"  data-id="txt_t_limonene" name="t_limonene" value="" > -->
                                <label for="t_limonene" class="helpertext">terpenes[limonene]</label> <br/>
                                <label id="t_limonene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[limonene]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Limonene (as % of weight)</span>-->
                            </div> 
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_ocimene" type="text" class="txt" data-label="terpenes[ocimene]" data-class="T"  data-id="txt_t_ocimene" name="t_ocimene" value="" > -->
                                <label for="t_ocimene" class="helpertext">terpenes[ocimene]</label> <br/>
                                <label id="t_ocimene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[ocimene]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                                <!--                                </div>
                                                                <span class="help-text" >Ocimene (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_terpinolene" type="text" class="txt" data-label="terpenes[terpinolene]" data-class="T"  data-id="txt_t_terpinolene" name="t_terpinolene" value="" > -->
                                <label for="t_terpinolene" class="helpertext">terpenes[terpinolene]</label> <br/>
                                <label id="t_terpinolene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[terpinolene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Terpinolene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_terpineol" type="text" class="txt" data-label="terpenes[terpineol]" data-class="T"  data-id="txt_t_terpineol" name="t_terpineol" value="" > -->
                                <label for="t_terpineol" class="helpertext">terpenes[terpineol]</label> <br/>
                                <label id="t_terpineol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[terpineol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Terpineol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_valencene" type="text" class="txt" data-label="terpenes[valencene]" data-class="T"  data-id="txt_t_valencene" name="t_valencene" value="" > -->
                                <label for="t_valencene" class="helpertext">terpenes[valencene]</label> <br/>
                                <label id="t_valencene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[valencene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Valencene (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_beta_caryophyllene" type="text" class="txt" data-label="terpenes [beta_caryophyllene]" data-class="T"  data-id="txt_t_beta_caryophyllene" name="t_beta_caryophyllene" value="" > -->
                                <label for="t_beta_caryophyllene" class="helpertext">terpenes [beta_caryophyllene]</label> <br/>
                                <label id="t_beta_caryophyllene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes [beta_caryophyllene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >beta Caryophyllene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_caryophyllene" type="text" class="txt" data-label="terpenes[caryophyllene]" data-class="T"  data-id="txt_t_caryophyllene" name="t_caryophyllene" value="" > -->
                                <label for="t_caryophyllene" class="helpertext">terpenes[caryophyllene]</label> <br/>
                                <label id="t_caryophyllene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[caryophyllene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Caryophyllene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_geraniol" type="text" class="txt" data-label="terpenes[geraniol]" data-class="T"  data-id="txt_t_geraniol" name="t_geraniol" value="" > -->
                                <label for="t_geraniol" class="helpertext">terpenes[geraniol]</label> <br/>
                                <label id="t_geraniol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[geraniol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Geraniol (as % of weight)</span>-->
                            </div>


                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_alpha_humulene" type="text" class="txt" data-label="terpenes[alpha_humulene]" data-class="T"  data-id="txt_t_alpha_humulene" name="t_alpha_humulene" value="" > -->
                                <label for="t_alpha_humulene" class="helpertext">terpenes[alpha_humulene]</label> <br/>
                                <label id="t_alpha_humulene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[alpha_humulene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >alpha Humulene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_alpha_phellandrene" type="text" class="txt" data-label="terpenes[alpha_phellandrene]" data-class="T"  data-id="txt_t_alpha_phellandrene" name="t_alpha_phellandrene" value="" > -->
                                <label for="t_alpha_phellandrene" class="helpertext">terpenes[alpha_phellandrene]</label> <br/>
                                <label id="t_alpha_phellandrene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[alpha_phellandrene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >alpha Phellandrene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_delta_3_carene" type="text" class="txt" data-label="terpenes[delta_3_carene]" data-class="T"  data-id="txt_t_delta_3_carene" name="t_delta_3_carene" value="" > -->
                                <label for="t_delta_3_carene" class="helpertext">terpenes[delta_3_carene]</label> <br/>
                                <label id="t_delta_3_carene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[delta_3_carene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >delta 3 Carene (as % of weight)</span>-->
                            </div>

                            <div  style="clear: both;"></div>
                            <div class=" col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> -->
                                                                    <!--<span for="thc" class="help-span">THC</span>-->
                                                                    <!--<input id="t_terpinene" type="text" class="txt" data-label="terpenes[terpinene]" data-class="T"  data-id="txt_t_terpinene" name="t_terpinene" value="" >--> 
                                <label for="t_terpinene" class="helpertext">terpenes[terpinene]</label> <br/>
                                <label id="t_terpinene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[terpinene]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                                <!--                                </div>
                                                                <span class="help-text" style="color: #888;" >Terpinene (as % of weight)</span>-->
                            </div>
                            <div class=" col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix  "></i> 
                                                                    <input id="t_alpha_terpinolene" type="text" class="txt" data-label="terpenes[alpha_terpinolene]" data-class="T"  data-id="txt_t_alpha_terpinolene" name="t_alpha_terpinolene" value="" > -->
                                <label for="t_alpha_terpinolene" class="helpertext">terpenes[alpha_terpinolene]</label> <br/>
                                <label id="t_alpha_terpinolene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[alpha_terpinolene]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                                <!--                                </div>
                                                                <span class="help-text" >alpha Terpinolene (as % of weight)</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_fenchol" type="text" class="txt" data-label="terpenes[fenchol]" data-class="T"  data-id="txt_t_fenchol" name="t_fenchol" value="" > -->
                                <label for="t_fenchol" class="helpertext">terpenes[fenchol]</label> <br/>
                                <label id="t_fenchol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[fenchol]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Fenchol (as % of weight)</span>-->
                            </div> 
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_borneol" type="text" class="txt" data-label="terpenes[borneol]" data-class="T"  data-id="txt_t_borneol" name="t_borneol" value="" > -->
                                <label for="t_borneol" class="helpertext">terpenes[borneol]</label> <br/>
                                <label id="t_borneol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[borneol]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Borneol (as % of weight)</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_oxide" type="text" class="txt" data-label="terpenes[oxide]" data-class="T"  data-id="txt_t_oxide" name="t_oxide" value="" > -->
                                <label for="t_oxide" class="helpertext">terpenes[oxide]</label> <br/>
                                <label id="t_oxide" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[oxide]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Oxide (as % of weight)</span>-->
                            </div> 
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_alpha_bisabolol" type="text" class="txt" data-label="terpenes[alpha_bisabolol]" data-class="T"  data-id="txt_t_alpha_bisabolol" name="t_alpha_bisabolol" value="" > -->
                                <label for="t_alpha_bisabolol" class="helpertext">terpenes[alpha_bisabolol]</label><br/> 
                                <label id="t_alpha_bisabolol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[alpha_bisabolol]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                                <!--                                </div>
                                                                <span class="help-text" >alpha Bisabolol (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_camphene" type="text" class="txt" data-label="terpenes[camphene]" data-class="T"  data-id="txt_t_camphene" name="t_camphene" value="" > -->
                                <label for="t_camphene" class="helpertext">terpenes[camphene]</label> <br/>
                                <label id="t_camphene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[camphene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Camphene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_sabinene" type="text" class="txt" data-label="terpenes[sabinene]" data-class="T"  data-id="txt_t_sabinene" name="t_sabinene" value="" > -->
                                <label for="t_sabinene" class="helpertext">terpenes[sabinene]</label> <br/>
                                <label id="t_sabinene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[sabinene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Sabinene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_camphor" type="text" class="txt" data-label="terpenes[camphor]" data-class="T"  data-id="txt_t_camphor" name="t_camphor" value="" > -->
                                <label for="t_camphor" class="helpertext">terpenes[camphor]</label> <br/>
                                <label id="t_camphor" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[camphor]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Camphor (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_isoborneol" type="text" class="txt" data-label="terpenes[isoborneol]" data-class="T"  data-id="txt_t_isoborneol" name="t_isoborneol" value="" > -->
                                <label for="t_isoborneol" class="helpertext">terpenes[isoborneol]</label> <br/>
                                <label id="t_isoborneol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[isoborneol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Isoborneol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_menthol" type="text" class="txt" data-label="terpenes[menthol]" data-class="T"  data-id="txt_t_menthol" name="t_menthol" value="" > -->
                                <label for="t_menthol" class="helpertext">terpenes[menthol]</label> <br/>
                                <label id="t_menthol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[menthol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Menthol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_alpha_cedrene" type="text" class="txt" data-label="terpenes[alpha_cedrene]" data-class="T"  data-id="txt_t_alpha_cedrene" name="t_alpha_cedrene" value="" > -->
                                <label for="t_alpha_cedrene" class="helpertext">terpenes[alpha_cedrene]</label> <br/>
                                <label id="t_alpha_cedrene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[alpha_cedrene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >alpha Cedrene (as % of weight)</span>-->
                            </div>


                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_nerolidol" type="text" class="txt" data-label="terpenes[nerolidol]" data-class="T"  data-id="txt_t_nerolidol" name="t_nerolidol" value="" > -->
                                <label for="t_nerolidol" class="helpertext">terpenes[nerolidol]</label> <br/>
                                <label id="t_nerolidol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[nerolidol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Nerolidol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_eucalyptol" type="text" class="txt" data-label="terpenes[eucalyptol]" data-class="T"  data-id="txt_t_eucalyptol" name="t_eucalyptol" value="" > -->
                                <label for="t_eucalyptol" class="helpertext">terpenes[eucalyptol]</label> <br/>
                                <label id="t_eucalyptol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[eucalyptol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Eucalyptol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_geranyl" type="text" class="txt" data-label="terpenes[geranyl]" data-class="T"  data-id="txt_t_geranyl" name="t_geranyl" value="" > -->
                                <label for="t_geranyl" class="helpertext">terpenes[geranyl]</label> <br/>
                                <label id="t_geranyl" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[geranyl]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Geranyl (as % of weight)</span>-->
                            </div>

                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_acetate" type="text" class="txt" data-label="terpenes[acetate]" data-class="T"  data-id="txt_t_acetate" name="t_acetate" value="" > -->
                                <label for="t_acetate" class="helpertext">terpenes[acetate]</label> <br/>
                                <label id="t_acetate" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[acetate]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Acetate (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_guaiol" type="text" class="txt" data-label="terpenes[guaiol]" data-class="T"  data-id="txt_t_guaiol" name="t_guaiol" value="" > -->
                                <label for="t_guaiol" class="helpertext">terpenes[guaiol]</label> <br/>
                                <label id="t_guaiol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[guaiol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Guaiol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_phytol" type="text" class="txt" data-label="terpenes[phytol]" data-class="T"  data-id="txt_t_phytol" name="t_phytol" value="" > -->
                                <label for="t_phytol" class="helpertext">terpenes[phytol]</label> <br/>
                                <label id="t_phytol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[phytol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Phytol (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_citronellol" type="text" class="txt" data-label="terpenes[citronellol]" data-class="T"  data-id="txt_t_citronellol" name="t_citronellol" value="" > -->
                                <label for="t_citronellol" class="helpertext">terpenes[citronellol]</label><br/> 
                                <label id="t_citronellol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[citronellol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Citronellol (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_p_cymene" type="text" class="txt" data-label="terpenes[p_cymene]" data-class="T"  data-id="txt_t_p_cymene" name="t_p_cymene" value="" > -->
                                <label for="t_p_cymene" class="helpertext">terpenes[p_cymene]</label> <br/>
                                <label id="t_p_cymene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[p_cymene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >p Cymene (as % of weight)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_isopulegol" type="text" class="txt" data-label="terpenes[isopulegol]" data-class="T"  data-id="txt_t_isopulegol" name="t_isopulegol" value="" > -->
                                <label for="t_isopulegol" class="helpertext">terpenes[isopulegol]</label> <br/>
                                <label id="t_isopulegol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[isopulegol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Isopulegol (as % of weight)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="t_pulegone" type="text" class="txt" data-label="terpenes[pulegone]" data-class="T"  data-id="txt_t_pulegone" name="t_pulegone" value="" > -->
                                <label for="t_pulegone" class="helpertext">terpenes[pulegone]</label> <br/>
                                <label id="t_pulegone" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">terpenes[pulegone]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Pulegone (as % of weight)</span>-->
                            </div>

                        </div> <div  style="clear: both;"></div>
                    </div>

                    <div  style="clear: both;"></div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="fa fa-plus-square-o"></i>Pesticides</div>
                    <div class="collapsible-body">
                        <div class="row" style="margin:  1rem;">

                            <div class=" col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> -->
                                                                <!--<span for="thc" class="help-span">THC</span>-->
                                                                <!--<input id="p_acequinocyl" type="text" class="txt" data-label="pesticides[acequinocyl]" data-class="P"  data-id="txt_p_acequinocyl" name="p_acequinocyl" value="" >--> 
                                <label for="p_acequinocyl" class="helpertext">pesticides[acequinocyl]</label> <br/>
                                <label id="p_acequinocyl" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[acequinocyl]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                                <!--                            </div>
                                                            <span class="help-text" style="color: #888;" >Acequinocyl</span>-->
                            </div>
                            <div class=" col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix  "></i> 
                                                                <input id="p_imidacloprid" type="text" class="txt" data-label="pesticides[imidacloprid]" data-class="P"  data-id="txt_p_imidacloprid" name="p_imidacloprid" value="" > -->
                                <label for="p_imidacloprid" class="helpertext">pesticides[imidacloprid]</label> <br/>
                                <label id="p_imidacloprid" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[imidacloprid]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                                <!--                            </div>
                                                            <span class="help-text" >Imidacloprid</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_pyrethrium" type="text" class="txt" data-label="pesticides[pyrethrium]" data-class="P"  data-id="txt_p_pyrethrium" name="p_pyrethrium" value="" > -->
                                <label for="p_pyrethrium" class="helpertext">pesticides[pyrethrium]</label> <br/>
                                <label id="p_pyrethrium" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[pyrethrium]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Pyrethrium</span>-->
                            </div> 
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_spinosad" type="text" class="txt" data-label="pesticides[spinosad]" data-class="P"  data-id="txt_p_spinosad" name="p_spinosad" value="" > -->
                                <label for="p_spinosad" class="helpertext">pesticides[spinosad]</label> <br/>
                                <label id="p_spinosad" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[spinosad]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Spinosad</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_spiromesifen" type="text" class="txt" data-label="pesticides[spiromesifen]" data-class="P"  data-id="txt_p_spiromesifen" name="p_spiromesifen" value="" > -->
                                <label for="p_spiromesifen" class="helpertext">pesticides[spiromesifen]</label> <br/>
                                <label id="p_spiromesifen" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[spiromesifen]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Spiromesifen</span>-->
                            </div> 
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_spirotetramat" type="text" class="txt" data-label="pesticides[spirotetramat]" data-class="P"  data-id="txt_p_spirotetramat" name="p_spirotetramat" value="" > -->
                                <label for="p_spirotetramat" class="helpertext">pesticides[spirotetramat]</label> <br/>
                                <label id="p_spirotetramat" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[spirotetramat]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                                <!--                            </div>
                                                            <span class="help-text" >Spirotetramat</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_abamectin" type="text" class="txt" data-label="pesticides[abamectin]" data-class="P"  data-id="txt_p_abamectin" name="p_abamectin" value="" > -->
                                <label for="p_abamectin" class="helpertext">pesticides[abamectin]</label> <br/>
                                <label id="p_abamectin" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[abamectin]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Abamectin</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_bifenazate" type="text" class="txt" data-label="pesticides[bifenazate]" data-class="P"  data-id="txt_p_bifenazate" name="p_bifenazate" value="" > -->
                                <label for="p_bifenazate" class="helpertext">pesticides[bifenazate]</label> <br/>
                                <label id="p_bifenazate" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[bifenazate]</label>
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Bifenazate</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_daminozide" type="text" class="txt" data-label="pesticides[daminozide]" data-class="P"  data-id="txt_p_daminozide" name="p_daminozide" value="" > -->
                                <label for="p_daminozide" class="helpertext">pesticides[daminozide]</label> <br/>
                                <label id="p_daminozide" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[daminozide]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Daminozide</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_fenoxycarb" type="text" class="txt" data-label="pesticides[fenoxycarb]" data-class="P"  data-id="txt_p_fenoxycarb" name="p_fenoxycarb" value="" > -->
                                <label for="p_fenoxycarb" class="helpertext">pesticides[fenoxycarb]</label> <br/>
                                <label id="p_fenoxycarb" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[fenoxycarb]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Fenoxycarb</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_myclobutanil" type="text" class="txt" data-label="pesticides[myclobutanil]" data-class="P"  data-id="txt_p_myclobutanil" name="p_myclobutanil" value="" > -->
                                <label for="p_myclobutanil" class="helpertext">pesticides[myclobutanil]</label> <br/>
                                <label id="p_myclobutanil" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[myclobutanil]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Myclobutanil</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                            <div class="input-field"> 
                                                                <i class="mdi-action-label prefix "></i> 
                                                                <input id="p_paclobutrazol" type="text" class="txt" data-label="pesticides[paclobutrazol]" data-class="P"  data-id="txt_p_paclobutrazol" name="p_paclobutrazol" value="" > -->
                                <label for="p_paclobutrazol" class="helpertext">pesticides[paclobutrazol]</label> <br/>
                                <label id="p_paclobutrazol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">pesticides[paclobutrazol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                            </div> 
                                                            <span class="help-text" >Paclobutrazol</span>-->
                            </div>
                            <div  style="clear: both;"></div>


                        </div>
                        <div  style="clear: both;"></div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="fa fa-plus-square-o"></i>Microbiological</div>
                    <div class="collapsible-body">
                        <div class="row" style="margin:  1rem;">
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="m_aerobic_plate_count" type="text" class="txt" data-label="microbiological [aerobic_plate_count]" data-class="M"  data-id="txt_m_aerobic_plate_count" name="m_aerobic_plate_count" value="" > -->
                                <label for="m_aerobic_plate_count" class="helpertext">microbiological [aerobic_plate_count]</label> <br/>
                                <label id="m_aerobic_plate_count" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">microbiological [aerobic_plate_count]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Total Aerobic Plate Count (in cfu/g)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="m_pseudomonas" type="text" class="txt" data-label="microbiological[pseudomonas]" data-class="M"  data-id="txt_m_pseudomonas" name="m_pseudomonas" value="" > -->
                                <label for="m_pseudomonas" class="helpertext">microbiological[pseudomonas]</label> <br/>
                                <label id="m_pseudomonas" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">microbiological[pseudomonas]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Pseudomonas (in cfu/g)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="m_coliforms" type="text" class="txt" data-label="microbiological[coliforms]" data-class="M"  data-id="txt_m_coliforms" name="m_coliforms" value="" > -->
                                <label for="m_coliforms" class="helpertext">microbiological[coliforms]</label> <br/>
                                <label id="m_coliforms" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">microbiological[coliforms]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Coliforms (in cfu/g)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="m_e_coli" type="text" class="txt" data-label="microbiological[e_coli]" data-class="M"  data-id="txt_m_e_coli" name="m_e_coli" value="" > -->
                                <label for="m_e_coli" class="helpertext">microbiological[e_coli]</label> <br/>
                                <label id="m_e_coli" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">microbiological[e_coli]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >E Coli (in cfu/g)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="m_salmonella" type="text" class="txt" data-label="microbiological[salmonella]" data-class="M"  data-id="txt_m_salmonella" name="m_salmonella" value="" > -->
                                <label for="m_salmonella" class="helpertext">microbiological[salmonella]</label> <br/>
                                <label id="m_salmonella" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">microbiological[salmonella]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Salmonella (in cfu/g)</span>-->
                            </div>

                            <div  style="clear: both;"></div>

                        </div>
                        <div  style="clear: both;"></div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="fa fa-plus-square-o"></i>Solvents</div>
                    <div class="collapsible-body">
                        <div class="row" style="margin:  1rem;">
                            <div class=" col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> -->
                                                                    <!--<span for="thc" class="help-span">THC</span>-->
                                                                    <!--<input id="s_propane" type="text" class="txt" data-label="solvents[propane]" data-class="S"  data-id="txt_s_propane" name="s_propane" value="" >--> 
                                <label for="s_propane" class="helpertext">solvents[propane]</label> <br/>
                                <label id="s_propane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[propane]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                                <!--                                </div>
                                                                <span class="help-text" style="color: #888;" >Propane (in ppm)</span>-->
                            </div>
                            <div class=" col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix  "></i> 
                                                                    <input id="s_ethanol" type="text" class="txt" data-label="solvents[ethanol]" data-class="S"  data-id="txt_s_ethanol" name="s_ethanol" value="" > -->
                                <label for="s_ethanol" class="helpertext">solvents[ethanol]</label> <br/>
                                <label id="s_ethanol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[ethanol]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                                <!--                                </div>
                                                                <span class="help-text" >Ethanol (in ppm)</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_methanol" type="text" class="txt" data-label="solvents[methanol]" data-class="S"  data-id="txt_s_methanol" name="s_methanol" value="" > -->
                                <label for="s_methanol" class="helpertext">solvents[methanol]</label> <br/>
                                <label id="s_methanol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[methanol]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Methanol (in ppm)</span>-->
                            </div> 
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_isopropanol" type="text" class="txt" data-label="solvents[isopropanol]" data-class="S"  data-id="txt_s_isopropanol" name="s_isopropanol" value="" > -->
                                <label for="s_isopropanol" class="helpertext">solvents[isopropanol]</label> <br/>
                                <label id="s_isopropanol" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[isopropanol]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Isopropanol (in ppm)</span>-->
                            </div> 
                            <!--<div  style="clear: both;"></div>-->
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_isobutane" type="text" class="txt" data-label="solvents[isobutane]" data-class="S"  data-id="txt_s_isobutane" name="s_isobutane" value="" > -->
                                <label for="s_isobutane" class="helpertext">solvents[isobutane]</label> <br/>
                                <label id="s_isobutane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[isobutane]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Isobutane (in ppm)</span>-->
                            </div> 
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_mercaptan" type="text" class="txt" data-label="solvents[mercaptan]" data-class="S"  data-id="txt_s_mercaptan" name="s_mercaptan" value="" > -->
                                <label for="s_mercaptan" class="helpertext">solvents[mercaptan]</label> <br/>
                                <label id="s_mercaptan" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[mercaptan]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                                <!--                                </div>
                                                                <span class="help-text" >Mercaptan (in ppm)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_dimethylbutane" type="text" class="txt" data-label="solvents[dimethylbutane]" data-class="S"  data-id="txt_s_dimethylbutane" name="s_dimethylbutane" value="" > -->
                                <label for="s_dimethylbutane" class="helpertext">solvents[dimethylbutane]</label> <br/>
                                <label id="s_dimethylbutane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[dimethylbutane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >2,2-Dimethylbutane (in ppm)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> -->
                                                                    <!--<input id="s_2_methylpentane" type="text" class="txt" data-label="solvents[2_methylpentane]" data-class="S"  data-id="txt_s_2_methylpentane" name="s_2_methylpentane" value="" >--> 
                                <label for="s_2_methylpentane" class="helpertext">solvents[2_methylpentane]</label> <br/>
                                <label id="s_2_methylpentane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[2_methylpentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >2-Methylpentane (in ppm)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_3_methylpentane" type="text" class="txt" data-label="solvents[3_methylpentane]" data-class="S"  data-id="txt_s_3_methylpentane" name="s_3_methylpentane" value="" > -->
                                <label for="s_3_methylpentane" class="helpertext">solvents[3_methylpentane]</label> <br/>
                                <label id="s_3_methylpentane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; " >solvents[3_methylpentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >3-Methylpentane (in ppm)</span>-->
                            </div>
                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_cyclohexane_benzene" type="text" class="txt" data-label="solvents[cyclohexane_benzene]" data-class="S"  data-id="txt_s_cyclohexane_benzene" name="s_cyclohexane_benzene" value="" > -->
                                <label for="s_cyclohexane_benzene" class="helpertext">solvents[cyclohexane_benzene]</label> <br/>
                                <label id="s_cyclohexane_benzene" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[cyclohexane_benzene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Cyclohexane + Benzene (in ppm)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_isopentane" type="text" class="txt" data-label="solvents[isopentane]" data-class="S"  data-id="txt_s_isopentane" name="s_isopentane" value="" > -->
                                <label for="s_isopentane" class="helpertext">solvents[isopentane]</label> <br/>
                                <label id="s_isopentane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; "sss>solvents[isopentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Isopentane (in ppm)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_neopentane" type="text" class="txt" data-label="solvents[neopentane]" data-class="S"  data-id="txt_s_neopentane" name="s_neopentane" value="" > -->
                                <label for="s_neopentane" class="helpertext">solvents[neopentane]</label> <br/>
                                <label id="s_neopentane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[neopentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Neopentane (in ppm)</span>-->
                            </div>


                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_butane" type="text" class="txt" data-label="solvents[butane]" data-class="S"  data-id="txt_s_butane" name="s_butane" value="" > -->
                                <label for="s_butane" class="helpertext">solvents[butane]</label> <br/>
                                <label id="s_butane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[butane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Butane (in ppm)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_heptane" type="text" class="txt" data-label="solvents[heptane]" data-class="S"  data-id="txt_s_heptane" name="s_heptane" value="" > -->
                                <label for="s_heptane" class="helpertext">solvents[heptane]</label> <br/>
                                <label id="s_heptane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[heptane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Heptane (in ppm)</span>-->
                            </div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_hexane" type="text" class="txt" data-label="solvents[hexane]" data-class="S"  data-id="txt_s_hexane" name="s_hexane" value="" > -->
                                <label for="s_hexane" class="helpertext">solvents[hexane]</label> <br/>
                                <label id="s_hexane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[hexane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Hexane (in ppm)</span>-->
                            </div>

                            <div  style="clear: both;"></div>
                            <div class="col m4 l4 s12"> 
                                <!--                                <div class="input-field"> 
                                                                    <i class="mdi-action-label prefix "></i> 
                                                                    <input id="s_pentane" type="text" class="txt" data-label="solvents[pentane]" data-class="S"  data-id="txt_s_pentane" name="s_pentane" value="" > -->
                                <label for="s_pentane" class="helpertext">solvents[pentane]</label> <br/>
                                <label id="s_pentane" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">solvents[pentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                                <!--                                </div> 
                                                                <span class="help-text" >Pentane (in ppm)</span>-->
                            </div>
                            <div  style="clear: both;"></div>


                        </div>
                        <div  style="clear: both;"></div>
                    </div>
                </li>
            </ul>
            <div class="card">
               <!--<label>Batch Number:<?= $batchno ?></label>-->
                <div class="title">API Details</div>
                <div class="content">
                    <div class="row" style="margin-bottom: 5%;padding-bottom: 5%;">
                        <div class=" col l4 s12 m4"> 
                            <!--<i class="mdi-action-label prefix "></i>--> 
                            <!--<span for="thc" class="help-span">THC</span>-->
                            <!--<input id="listing_id" type="text" class="txt" data-label="Listing ID" data-class="A"  data-id="txt_listing_id" name="listing_id" value="" >--> 
                            <label for="listing_id" class="helpertext">Listing ID</label><br/> 
                            <label id="listing_id" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">Listing ID</label> 
                            <div id="errorbox_listing_id" style="clear: both;"></div>

                        </div>
                        <div class=" col l4 s12 m4"> 
                            <!--<i class="mdi-action-label prefix "></i>--> 
                            <!--<span for="thc" class="help-span">THC</span>-->
                            <!--<input id="listing_type" type="text" class="txt" data-label="Listing Type" data-class="A"  data-id="txt_listing_type" name="listing_type" value="" >--> 
                            <label for="listing_type" class="helpertext">Listing Type</label> <br/>
                            <label id="listing_type" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">Listing Type</label> 
                            <div id="errorbox_listing_type" style="clear: both;"></div>

                        </div>
                        <div class="input-field col l4 s12 m4"> 
                            <span id="dateDiscription"></span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class=" col m12 l12 s12"> 
                            <!--                            <div class="input-field"> 
                                                            <i class="mdi-action-label prefix "></i> -->
                                                            <!--<span for="thc" class="help-span">THC</span>-->
                                                            <!--<input id="api_key" type="text" class="txt" data-label="API Key" data-class="A"  data-id="txt_api_key" name="api_key" value="" >--> 
                            <label for="api_key" class="helpertext">API Key</label> <br/>
                            <label id="api_key" class="helpertext" style="color: #666;font-weight: bold;font-size: 12px; ">API Key</label> 
                            <div id="errorbox_api_key" style="clear: both;"></div>

                        </div>
<!--                        <span class="help-text" style="color: #888;" ></span>-->
                        <br/>
                    </div>
                    <br/>
                    <div  style="clear: both;"></div>
                </div>

                <div style="clear: both;"></div>
            </div>
            <div style="clear: both;"></div>
        </div>
        <!--                    <div class="col m12 l12 s12 right" style="padding: 1rem;" > 
        
        
        
                            <button type = "submit" name = "submit" class = "waves-effect waves-amber green btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Save'); ?></button>
                                <button type ="submit" name="submit" id="submit" class =" right waves-effect waves-amber  btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Save'); ?></button>
                            </div> -->

        <!--</div>-->
        <!--</div>-->

        <!--</div>-->
        <div class="modal-footer ">
            <!--<button data-tooltip='Click to Save' name="save"  class="right waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;" onclick="SaveData()"><?php print _t('18', 'Confirm') ?></button>-->

            <button data-tooltip='Click to Close' name="edit" id="close" class="right modal-close  grey  waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;"><?php print _t('179', 'CLOSE') ?></button>
            <div style="clear: both"></div>
            <input type="hidden" name="d_id" id="d_id" value="">
            <input type="hidden" name="v_id" id="v_id" value="">
            <input type="hidden" name="hid_picture_url" id="hid_picture_url" value="">
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
        background-color: skyblue;
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
