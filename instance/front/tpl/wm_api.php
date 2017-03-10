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
<div class="card-panel" style="">
    <form action="wm_api" method="post" id="wm_api_change">
        <div class="row">

            <div class="col m12 l12 s12"> 
                <div class="input-field"> 
                    <i class="mdi-action-label prefix "></i> 
                    <!--<span for="thc" class="help-span">THC</span>-->
                    <input id="thc" type="text" name="thc" value="" > 
                    <label for="thc" class="helpertext">THC %</label> 
                    <div id="errorbox_thc" style="clear: both;"></div>
                </div> 
            </div> 
            <div class="col m12 l12 s12"> 
                <div class="input-field"> 
                    <i class="mdi-action-label prefix "></i> 
                    <input id="thca" type="text" name="thca" value="" > 
                    <label for="thca" class="helpertext">THCA</label> 
                    <div id="errorbox_thca" style="clear: both;"></div>
                </div> 
            </div> 
            <div class="col m12 l12 s12"> 
                <div class="input-field"> 
                    <i class="mdi-action-label prefix "></i> 
                    <input id="cbd" type="text" name="cbd" value="" > 
                    <label for="cbd" class="helpertext">CBD</label> 
                    <div id="errorbox_cbd" style="clear: both;"></div>
                </div> 
            </div> 
            <div class="col m12 l12 s12"> 
                <div class="input-field"> 
                    <i class="mdi-action-label prefix "></i> 
                    <input id="cbda" type="text" name="cbda" value="" > 
                    <label for="cbda" class="helpertext">CBDA</label> 
                    <div id="errorbox_cbda" style="clear: both;"></div>
                </div> 
            </div> 
            <div class="col m12 l12 s12"> 
                <div class="input-field"> 
                    <i class="mdi-action-label prefix "></i> 
                    <input id="cbn" type="text" name="cbn" value="" > 
                    <label for="cbn" class="helpertext">CBN</label> 
                    <div id="errorbox_cbn" style="clear: both;"></div>
                </div> 
            </div> 
            <div class="col m12 l12 s12"> 
                <div class="input-field"> 
                    <i class="mdi-action-label prefix "></i> 
                    <input id="strain_cate" type="text" name="strain_cate" value="" > 
                    <label for="strain_cate" class="helpertext">Strain Category</label> 
                    <div id="errorbox_strain_cate" style="clear: both;"></div>
                </div> 
            </div> 
            <div class="col m12 l12 s12" style="padding-bottom: 1rem;" > 
                <div class="right"> 

                    <!--<button type = "submit" name = "submit" class = "waves-effect waves-amber green btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Save'); ?></button>-->
                    <button type ="submit" name="submit" id="submit" class ="waves-effect waves-amber green btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Save'); ?></button>
                </div> 
            </div> 
        </div>
    </form>
</div>
<div id="modal1"  class="modal modal-fixed-footer modal-fixed-header-footer " >
    <form id="wm_api_edit" action="wm_api" method="post">
        <div class="modal-header">
            <div class="header-text">

                <span style="font-size: 16px;font-weight: bold;"><?php print _t('206', 'Content Details') ?> </span>

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
                    <div class="title">
                        <!--<div class="row">-->
                            <!--<i class="fa fa-cab prefix small"></i>&nbsp;-->
                        <span style="font-weight:bold;font-size:16px; ">
                            <?php print _t('206', 'View Details') ?> 
                        </span>

                    </div>      
                    <div class="content">
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
                        <div class="col m12 l12 s12"> 
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

                <div style="clear: both"></div>
                <br/>
                <br/>
            </div>

        </div>
        <div class="modal-footer ">
            <button data-tooltip='Click to Close' name="edit" id="close" class="right modal-close  waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin-left: 2px;"><?php print _t('179', 'Edit') ?></button>
            <button data-tooltip='Click to Save' name="save"  class="right waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin-left: 2px;" onclick="SaveData()"><?php print _t('18', 'Sumit') ?></button>
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
