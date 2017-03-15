<div class="card-panel" style="">
    <div class="row " style="margin:0px;padding: 1rem; ">
        <div class="col s12 m12 l12">
            <form action="testCSV" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>

        </div>
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
                            $query = q("select * from tb_form");
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
    </div>
</div>

<?php
//mysql_close($connect);
//?>