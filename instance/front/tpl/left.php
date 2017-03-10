<!--
 Yay Sidebar
 Options [you can use all of theme classnames]:
   .yay-hide-to-small         - no hide menu, just set it small with big icons
   .yay-static                - stop using fixed sidebar (will scroll with content)
   .yay-gestures              - to show and hide menu using gesture swipes
   .yay-light                 - light color scheme
   .yay-hide-on-content-click - hide menu on content click

 Effects [you can use one of these classnames]:
   .yay-overlay  - overlay content
   .yay-push     - push content to right
   .yay-shrink   - shrink content width
-->
<!--<aside class="yaybar yay-shrink yay-hide-to-small yay-gestures yay-light ">-->




<!--<aside class="xyz yay-light ">-->





<!--    <div class="top">
        <div>
             Sidebar toggle 
                        <a href="#" class="yay-toggle">
                            <div class="burg1"></div>
                            <div class="burg2"></div>
                            <div class="burg3"></div>
                        </a>
             Sidebar toggle 

             Logo 
            <a href="#" class="brand-logo">
                <img style="height: 26px;" src="<?php print _MEDIA_URL ?>images/MasirApp.jpg" alt="Con">
                                <a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Pending Contract">Pending Contract</a>


            </a>
             /Logo 
        </div>
    </div>-->

<div class="nano ">

    <ul id="slide-out" class="side-nav xyz">
        <!--<ul class="collapsible " data-collapsible="accordion">-->
        <li class="active">
            <div class="collapsible-header active" style="background-color: #e0e0e0;">
                <!--<i class="mdi-content-forward tiny prefix"></i>-->
                <b><?php print _t('347', 'Pending Contract') ?></b>
            </div>
            <div class="collapsible-body" style="display: block;">
                <ul class="collection with-header">
                    <?php
                    $Office = $_SESSION['office'];
                    $querypending1 = q("select *,d.modified_at, vd.driver_id, d.id, d.fname, d.lname,d.license_plate,d.phone,d.melli_no, v.make_modal ,v.make_modal_other from tb_driver d,  tb_vehicle v,tb_vehicle_driver vd where vd.driver_id=d.id and vd.vehicle_id=v.id and d.stage=5 and v.ins_status='pass' and d.license_plate1=v.license_plate1 and d.license_plate2=v.license_plate2 and d.license_plate3=v.license_plate3 and d.license_plate4=v.license_plate4 and d.doc_signed_contract='' and d.office = '$Office' group by date(d.modified_at) desc");

                    if (!empty($querypending1)) {

                        foreach ($querypending1 as $row1) {
                            $modeigfied_at_Disp = date("d/m/Y", strtotime($row1['modified_at']));
                            $modeigfied_at = date("Y-m-d", strtotime($row1['modified_at']));
                            ?>
                            <li class="collection-header" style="background-color: #eeeeee;text-align: center;"><?php echo $modeigfied_at_Disp; ?></li>
                            <?php
                            $querypendingsub2 = q("select *, vd.driver_id, d.id, d.fname, d.lname,d.license_plate,d.phone,d.melli_no, v.make_modal ,v.make_modal_other from tb_driver d,  tb_vehicle v,tb_vehicle_driver vd where vd.driver_id=d.id and vd.vehicle_id=v.id and d.stage=5 and v.ins_status='pass' and d.license_plate1=v.license_plate1 and d.license_plate2=v.license_plate2 and d.license_plate3=v.license_plate3 and d.license_plate4=v.license_plate4 and d.doc_signed_contract='' and d.office = '$Office' and d.modified_at BETWEEN '$modeigfied_at 00:00:00' and '$modeigfied_at 23:59:59'");
                            foreach ($querypendingsub2 as $row2) {
                                ?>
                                <a style="color: #252525;" href="<?php l('contract_page') ?>? id=<?php echo $row2['id']; ?>"><li class="collection-item" style="background-color: #f5f5f5;"><?php echo $row2['fname'] . " " . $row2['lname']; ?></li></a>

                                <?php
                            }
                        }
                    } else {
                        
                    }
                    ?>
                </ul>
            </div>
        </li>
    </ul>

</div>


<!--</aside>-->

<!-- /Yay Sidebar -->