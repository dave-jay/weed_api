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
</style>
<div class="card-panel" style="">
    <div class="row " style="margin:0px;padding: 1rem; ">
        <form action="wm_api" method="post" id="wm_api_change">
            <ul class="collapsible popout " data-collapsible="accordion">
                <li>
                    <div class="collapsible-header active"><i class="fa fa-plus-square-o"></i>Cannabinoids</div>
                    <div class="collapsible-body">

                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <!--<span for="thc" class="help-span">THC</span>-->
                                <input id="c_thc" type="text" name="c_thc" value="" > 
                                <label for="c_thc" class="helpertext">cannabinoids[THC%]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                            </div>
                            <span class="help-text" style="color: #888;" >THC% of test result (as % of weight)</span>
                        </div>
                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix  "></i> 
                                <input id="c_thca" type="text" name="c_thca" value="" > 
                                <label for="c_thca" class="helpertext">cannabinoids[THCa%]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                            </div>
                            <span class="help-text" >THCa% of test result (as % of weight)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbd" type="text" name="c_cbd" value="" > 
                                <label for="c_cbd" class="helpertext">cannabinoids[CBD%]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBD% of test result (as % of weight)</span>
                        </div> 
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbda" type="text" name="c_cbda" value="" > 
                                <label for="c_cbda" class="helpertext">cannabinoids[CBDa%]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBDa% of test result (as % of weight)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbn" type="text" name="c_cbn" value="" > 
                                <label for="c_cbn" class="helpertext">cannabinoids[CBN%]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBN% of test result (as % of weight)</span>
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_strain_cate" type="text" name="c_strain_cate" value="" > 
                                <label for="c_strain_cate" class="helpertext">Strain Category</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                            </div>
                            <span class="help-text" >Strain Category of test result (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_thcv" type="text" name="c_thcv" value="" > 
                                <label for="c_thcv" class="helpertext">cannabinoids[THCv%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >THCv% of test result (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbdv" type="text" name="c_cbdv" value="" > 
                                <label for="c_cbdv" class="helpertext">cannabinoids[CBDv%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBDv% of test result (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbna" type="text" name="c_cbna" value="" > 
                                <label for="c_cbna" class="helpertext">cannabinoids[CBNa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBNa% of test result (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbg" type="text" name="c_cbg" value="" > 
                                <label for="c_cbg" class="helpertext">cannabinoids[CBG%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBG% of test result (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbga" type="text" name="c_cbga" value="" > 
                                <label for="c_cbga" class="helpertext">cannabinoids[CBGa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBGa% of test result (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbc" type="text" name="c_cbc" value="" > 
                                <label for="c_cbc" class="helpertext">cannabinoids[CBC%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBC% of test result (as % of weight)</span>
                        </div>


                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbca" type="text" name="c_cbca" value="" > 
                                <label for="c_cbca" class="helpertext">cannabinoids[CBCa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBCa% of test result (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbl" type="text" name="c_cbl" value="" > 
                                <label for="c_cbl" class="helpertext">cannabinoids[CBL%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBL% of test result (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="c_cbla" type="text" name="c_cbla" value="" > 
                                <label for="c_cbla" class="helpertext">cannabinoids[CBLa%]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >CBLa% of test result (as % of weight)</span>
                        </div>

                        <div  style="clear: both;"></div>


                    </div>
                </li>
                <li>
                    <div class="collapsible-header "><i class="fa fa-plus-square-o"></i>Terpenes</div>
                    <div class="collapsible-body">

                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <!--<span for="thc" class="help-span">THC</span>-->
                                <input id="t_alpha_pinene" type="text" name="t_alpha_pinene" value="" > 
                                <label for="t_alpha_pinene" class="helpertext">terpenes[alpha_pinene]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                            </div>
                            <span class="help-text" style="color: #888;" >alpha Pinene (as % of weight)</span>
                        </div>
                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix  "></i> 
                                <input id="t_beta_pinene" type="text" name="t_beta_pinene" value="" > 
                                <label for="t_beta_pinene" class="helpertext">terpenes[beta_pinene]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                            </div>
                            <span class="help-text" >beta Pinene (as % of weight)</span>
                        </div> 

                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_linalool" type="text" name="t_linalool" value="" > 
                                <label for="t_linalool" class="helpertext">terpenes[linalool]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Linalool (as % of weight)</span>
                        </div> 
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_myrcene" type="text" name="t_myrcene" value="" > 
                                <label for="t_myrcene" class="helpertext">terpenes[myrcene]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Myrcene (as % of weight)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_limonene" type="text" name="t_limonene" value="" > 
                                <label for="t_limonene" class="helpertext">terpenes[limonene]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Limonene (as % of weight)</span>
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_ocimene" type="text" name="t_ocimene" value="" > 
                                <label for="t_ocimene" class="helpertext">terpenes[ocimene]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                            </div>
                            <span class="help-text" >Ocimene (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_terpinolene" type="text" name="t_terpinolene" value="" > 
                                <label for="t_terpinolene" class="helpertext">terpenes[terpinolene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Terpinolene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_terpineol" type="text" name="t_terpineol" value="" > 
                                <label for="t_terpineol" class="helpertext">terpenes[terpineol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Terpineol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_valencene" type="text" name="t_valencene" value="" > 
                                <label for="t_valencene" class="helpertext">terpenes[valencene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Valencene (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_beta_caryophyllene" type="text" name="t_beta_caryophyllene" value="" > 
                                <label for="t_beta_caryophyllene" class="helpertext">terpenes [beta_caryophyllene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >beta Caryophyllene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_caryophyllene" type="text" name="t_caryophyllene" value="" > 
                                <label for="t_caryophyllene" class="helpertext">terpenes[caryophyllene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Caryophyllene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_geraniol" type="text" name="t_geraniol" value="" > 
                                <label for="t_geraniol" class="helpertext">terpenes[geraniol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Geraniol (as % of weight)</span>
                        </div>


                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_alpha_humulene" type="text" name="t_alpha_humulene" value="" > 
                                <label for="t_alpha_humulene" class="helpertext">terpenes[alpha_humulene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >alpha Humulene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_alpha_phellandrene" type="text" name="t_alpha_phellandrene" value="" > 
                                <label for="t_alpha_phellandrene" class="helpertext">terpenes[alpha_phellandrene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >alpha Phellandrene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_delta_3_carene" type="text" name="t_delta_3_carene" value="" > 
                                <label for="t_delta_3_carene" class="helpertext">terpenes[delta_3_carene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >delta 3 Carene (as % of weight)</span>
                        </div>

                        <div  style="clear: both;"></div>
                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <!--<span for="thc" class="help-span">THC</span>-->
                                <input id="t_terpinene" type="text" name="t_terpinene" value="" > 
                                <label for="t_terpinene" class="helpertext">terpenes[terpinene]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                            </div>
                            <span class="help-text" style="color: #888;" >Terpinene (as % of weight)</span>
                        </div>
                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix  "></i> 
                                <input id="t_alpha_terpinolene" type="text" name="t_alpha_terpinolene" value="" > 
                                <label for="t_alpha_terpinolene" class="helpertext">terpenes[alpha_terpinolene]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                            </div>
                            <span class="help-text" >alpha Terpinolene (as % of weight)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_fenchol" type="text" name="t_fenchol" value="" > 
                                <label for="t_fenchol" class="helpertext">terpenes[fenchol]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Fenchol (as % of weight)</span>
                        </div> 
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_borneol" type="text" name="t_borneol" value="" > 
                                <label for="t_borneol" class="helpertext">terpenes[borneol]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Borneol (as % of weight)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_oxide" type="text" name="t_oxide" value="" > 
                                <label for="t_oxide" class="helpertext">terpenes[oxide]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Oxide (as % of weight)</span>
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_alpha_bisabolol" type="text" name="t_alpha_bisabolol" value="" > 
                                <label for="t_alpha_bisabolol" class="helpertext">terpenes[alpha_bisabolol]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                            </div>
                            <span class="help-text" >alpha Bisabolol (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_camphene" type="text" name="t_camphene" value="" > 
                                <label for="t_camphene" class="helpertext">terpenes[camphene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Camphene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_sabinene" type="text" name="t_sabinene" value="" > 
                                <label for="t_sabinene" class="helpertext">terpenes[sabinene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Sabinene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_camphor" type="text" name="t_camphor" value="" > 
                                <label for="t_camphor" class="helpertext">terpenes[camphor]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Camphor (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_isoborneol" type="text" name="t_isoborneol" value="" > 
                                <label for="t_isoborneol" class="helpertext">terpenes[isoborneol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Isoborneol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_menthol" type="text" name="t_menthol" value="" > 
                                <label for="t_menthol" class="helpertext">terpenes[menthol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Menthol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_alpha_cedrene" type="text" name="t_alpha_cedrene" value="" > 
                                <label for="t_alpha_cedrene" class="helpertext">terpenes[alpha_cedrene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >alpha Cedrene (as % of weight)</span>
                        </div>


                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_nerolidol" type="text" name="t_nerolidol" value="" > 
                                <label for="t_nerolidol" class="helpertext">terpenes[nerolidol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Nerolidol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_eucalyptol" type="text" name="t_eucalyptol" value="" > 
                                <label for="t_eucalyptol" class="helpertext">terpenes[eucalyptol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Eucalyptol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_geranyl" type="text" name="t_geranyl" value="" > 
                                <label for="t_geranyl" class="helpertext">terpenes[geranyl]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Geranyl (as % of weight)</span>
                        </div>

                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_acetate" type="text" name="t_acetate" value="" > 
                                <label for="t_acetate" class="helpertext">terpenes[acetate]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Acetate (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_guaiol" type="text" name="t_guaiol" value="" > 
                                <label for="t_guaiol" class="helpertext">terpenes[guaiol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Guaiol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_phytol" type="text" name="t_phytol" value="" > 
                                <label for="t_phytol" class="helpertext">terpenes[phytol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Phytol (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_citronellol" type="text" name="t_citronellol" value="" > 
                                <label for="t_citronellol" class="helpertext">terpenes[citronellol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Citronellol (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_p_cymene" type="text" name="t_p_cymene" value="" > 
                                <label for="t_p_cymene" class="helpertext">terpenes[p_cymene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >p Cymene (as % of weight)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_isopulegol" type="text" name="t_isopulegol" value="" > 
                                <label for="t_isopulegol" class="helpertext">terpenes[isopulegol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Isopulegol (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="t_pulegone" type="text" name="t_pulegone" value="" > 
                                <label for="t_pulegone" class="helpertext">terpenes[pulegone]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Pulegone (as % of weight)</span>
                        </div>
                        <div  style="clear: both;"></div>
                    </div>


                </li>
                <li>
                    <div class="collapsible-header"><i class="fa fa-plus-square-o"></i>Pesticides</div>
                    <div class="collapsible-body">

                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <!--<span for="thc" class="help-span">THC</span>-->
                                <input id="p_acequinocyl" type="text" name="p_acequinocyl" value="" > 
                                <label for="p_acequinocyl" class="helpertext">pesticides[acequinocyl]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                            </div>
                            <span class="help-text" style="color: #888;" >Acequinocyl</span>
                        </div>
                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix  "></i> 
                                <input id="p_imidacloprid" type="text" name="p_imidacloprid" value="" > 
                                <label for="p_imidacloprid" class="helpertext">pesticides[imidacloprid]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                            </div>
                            <span class="help-text" >Imidacloprid</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_pyrethrium" type="text" name="p_pyrethrium" value="" > 
                                <label for="p_pyrethrium" class="helpertext">pesticides[pyrethrium]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Pyrethrium</span>
                        </div> 
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_spinosad" type="text" name="p_spinosad" value="" > 
                                <label for="p_spinosad" class="helpertext">pesticides[spinosad]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Spinosad</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_spiromesifen" type="text" name="p_spiromesifen" value="" > 
                                <label for="p_spiromesifen" class="helpertext">pesticides[spiromesifen]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Spiromesifen</span>
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_spirotetramat" type="text" name="p_spirotetramat" value="" > 
                                <label for="p_spirotetramat" class="helpertext">pesticides[spirotetramat]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                            </div>
                            <span class="help-text" >Spirotetramat</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_abamectin" type="text" name="p_abamectin" value="" > 
                                <label for="p_abamectin" class="helpertext">pesticides[abamectin]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Abamectin</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_bifenazate" type="text" name="p_bifenazate" value="" > 
                                <label for="p_bifenazate" class="helpertext">pesticides[bifenazate]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Bifenazate</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_daminozide" type="text" name="p_daminozide" value="" > 
                                <label for="p_daminozide" class="helpertext">pesticides[daminozide]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Daminozide</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_fenoxycarb" type="text" name="p_fenoxycarb" value="" > 
                                <label for="p_fenoxycarb" class="helpertext">pesticides[fenoxycarb]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Fenoxycarb</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_myclobutanil" type="text" name="p_myclobutanil" value="" > 
                                <label for="p_myclobutanil" class="helpertext">pesticides[myclobutanil]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Myclobutanil</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="p_paclobutrazol" type="text" name="p_paclobutrazol" value="" > 
                                <label for="p_paclobutrazol" class="helpertext">pesticides[paclobutrazol]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Paclobutrazol</span>
                        </div>
                        <div  style="clear: both;"></div>


                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="fa fa-plus-square-o"></i>Microbiological</div>
                    <div class="collapsible-body">
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="m_aerobic_plate_count" type="text" name="m_aerobic_plate_count" value="" > 
                                <label for="m_aerobic_plate_count" class="helpertext">microbiological [aerobic_plate_count]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Total Aerobic Plate Count (in cfu/g)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="m_pseudomonas" type="text" name="m_pseudomonas" value="" > 
                                <label for="m_pseudomonas" class="helpertext">microbiological[pseudomonas]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Pseudomonas (in cfu/g)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="m_coliforms" type="text" name="m_coliforms" value="" > 
                                <label for="m_coliforms" class="helpertext">microbiological[coliforms]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Coliforms (in cfu/g)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="m_e_coli" type="text" name="m_e_coli" value="" > 
                                <label for="m_e_coli" class="helpertext">microbiological[e_coli]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >E Coli (in cfu/g)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="m_salmonella" type="text" name="m_salmonella" value="" > 
                                <label for="m_salmonella" class="helpertext">microbiological[salmonella]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Salmonella (in cfu/g)</span>
                        </div>

                        <div  style="clear: both;"></div>

                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="fa fa-plus-square-o"></i>Solvents</div>
                    <div class="collapsible-body">

                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <!--<span for="thc" class="help-span">THC</span>-->
                                <input id="s_propane" type="text" name="s_propane" value="" > 
                                <label for="s_propane" class="helpertext">solvents[propane]</label> 
                                <div id="errorbox_thc" style="clear: both;"></div>

                            </div>
                            <span class="help-text" style="color: #888;" >Propane (in ppm)</span>
                        </div>
                        <div class=" col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix  "></i> 
                                <input id="s_ethanol" type="text" name="s_ethanol" value="" > 
                                <label for="s_ethanol" class="helpertext">solvents[ethanol]</label> 
                                <div id="errorbox_thca" style="clear: both;"></div>

                            </div>
                            <span class="help-text" >Ethanol (in ppm)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_methanol" type="text" name="s_methanol" value="" > 
                                <label for="s_methanol" class="helpertext">solvents[methanol]</label> 
                                <div id="errorbox_cbd" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Methanol (in ppm)</span>
                        </div> 
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_isopropanol" type="text" name="s_isopropanol" value="" > 
                                <label for="s_isopropanol" class="helpertext">solvents[isopropanol]</label> 
                                <div id="errorbox_cbda" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Isopropanol (in ppm)</span>
                        </div> 
                        <!--<div  style="clear: both;"></div>-->
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_isobutane" type="text" name="s_isobutane" value="" > 
                                <label for="s_isobutane" class="helpertext">solvents[isobutane]</label> 
                                <div id="errorbox_cbn" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Isobutane (in ppm)</span>
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_mercaptan" type="text" name="s_mercaptan" value="" > 
                                <label for="s_mercaptan" class="helpertext">solvents[mercaptan]</label> 
                                <div id="errorbox_strain_cate" style="clear: both;"></div>
                            </div>
                            <span class="help-text" >Mercaptan (in ppm)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_dimethylbutane" type="text" name="s_dimethylbutane" value="" > 
                                <label for="s_dimethylbutane" class="helpertext">solvents[dimethylbutane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >2,2-Dimethylbutane (in ppm)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_2_methylpentane" type="text" name="s_2_methylpentane" value="" > 
                                <label for="s_2_methylpentane" class="helpertext">solvents[2_methylpentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >2-Methylpentane (in ppm)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_3_methylpentane" type="text" name="s_3_methylpentane" value="" > 
                                <label for="s_3_methylpentane" class="helpertext">solvents[3_methylpentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >3-Methylpentane (in ppm)</span>
                        </div>
                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_cyclohexane_benzene" type="text" name="s_cyclohexane_benzene" value="" > 
                                <label for="s_cyclohexane_benzene" class="helpertext">solvents[cyclohexane_benzene]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Cyclohexane + Benzene (in ppm)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_isopentane" type="text" name="s_isopentane" value="" > 
                                <label for="s_isopentane" class="helpertext">solvents[isopentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Isopentane (in ppm)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_neopentane" type="text" name="s_neopentane" value="" > 
                                <label for="s_neopentane" class="helpertext">solvents[neopentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Neopentane (in ppm)</span>
                        </div>


                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_butane" type="text" name="s_butane" value="" > 
                                <label for="s_butane" class="helpertext">solvents[butane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Butane (in ppm)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_heptane" type="text" name="s_heptane" value="" > 
                                <label for="s_heptane" class="helpertext">solvents[heptane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Heptane (in ppm)</span>
                        </div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_hexane" type="text" name="s_hexane" value="" > 
                                <label for="s_hexane" class="helpertext">solvents[hexane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Hexane (in ppm)</span>
                        </div>

                        <div  style="clear: both;"></div>
                        <div class="col m4 l4 s12"> 
                            <div class="input-field"> 
                                <i class="mdi-action-label prefix "></i> 
                                <input id="s_pentane" type="text" name="s_pentane" value="" > 
                                <label for="s_pentane" class="helpertext">solvents[pentane]</label> 
                                <div id="errorbox_cbg" style="clear: both;"></div>
                            </div> 
                            <span class="help-text" >Pentane (in ppm)</span>
                        </div>
                        <div  style="clear: both;"></div>


                    </div>
                </li>
            </ul>

            <div class="col m12 l12 s12" style="padding-bottom: 1rem;" > 
                <div class="right"> 

                    <!--<button type = "submit" name = "submit" class = "waves-effect waves-amber green btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Save'); ?></button>-->
                    <button type ="submit" name="submit" id="submit" class ="waves-effect waves-amber  btn-large z-depth-0 z-depth-1-hover"><?php print _t('215', 'Save'); ?></button>
                </div> 
            </div> 
        </form>
    </div>
</div>
<div id="modal1"  class="modal modal-fixed-footer modal-fixed-header-footer " >
    <form id="wm_api_edit" action="wm_api" method="post">
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
                        <div class="col m4 l4 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i> 
                                <span for="thc" class="help-span">THC % :</span>
                                <input id="hidthc" type="hidden" name="hidthc" value=""> 
                                <label id="lblthc" name="lblthc" class="help-span"></label> 
                                <!--<div id="errorbox_thc" style=""></div>-->
                            </div> 
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i> 
                                <span for="thc" class="help-span">THCA :</span>
                                <input id="hidthca" type="hidden" name="hidthca" value="" > 
                                <label id="lblthca" class="help-span"></label> 
                                <!--<div id="errorbox_thca" style=""></div>-->
                            </div> 
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i>
                                <span for="thc" class="help-span">CBD :</span>
                                <input id="hidcbd" type="hidden" name="hidcbd" value="" > 
                                <label id="lblcbd" class="help-span"></label> 
                                <!--<div id="errorbox_cbd" style=""></div>-->
                            </div> 
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i>
                                <span for="thc" class="help-span">CBDA :</span>
                                <input id="hidcbda" type="hidden" name="hidcbda" value="" > 
                                <label id="lblcbda" class="help-span"></label> 
                                <!--<div id="errorbox_cbda" style=""></div>-->
                            </div> 
                        </div> 
                        <div class="col m4 l4 s12"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i>
                                <span for="thc" class="help-span">CBN :</span>
                                <input id="hidcbn" type="hidden" name="hidcbn" value="" > 
                                <label id="lblcbn" class="help-span"></label> 
                                <!--<div id="errorbox_cbn" style=""></div>-->
                            </div> 
                        </div> 
                        <div class="col m4 l4 s12" style="padding-bottom: 10px;"> 
                            <div class="row"> 
                                <i class="mdi-action-label prefix "></i> 
                                <span for="thc" class="help-span">Strain Category :</span>
                                <input id="hidstrain_cate" type="hidden" name="hidstrain_cate" value="" > 
                                <label id="lblstrain_cate" class="help-span"></label> 
                                <!--<div id="errorbox_strain_cate" style=""></div>-->
                            </div> 
                        </div> 
                    </div>

                </div>

                <!--                <div style="clear: both"></div>-->

            </div>

        </div>
        <div class="modal-footer ">
            <button data-tooltip='Click to Save' name="save"  class="right waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;" onclick="SaveData()"><?php print _t('18', 'Confirm') ?></button>

            <button data-tooltip='Click to Close' name="edit" id="close" class="right modal-close  grey  waves-effect waves-light btn btn-default z-depth-0 z-depth-1-hover tooltipped" type="button" style="margin: 3px 10px 5px 2px;" onclick="Closed()"><?php print _t('179', 'Edit') ?></button>
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
