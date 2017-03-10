


<div class="row " style="margin-top:0px">
    <form  action="test1" method="post" id='language_form' >
        <div class="card-panel" >
            <div class="col s12 m12 l12">
                <div class="collapsible-header active">
                    <div class="title"> 
                        <!--<i class="fa fa-cab prefix small"></i>&nbsp;-->

                        <span style="font-weight:bold;font-size:16px; ">Language Page</span>

                        <span class="right" style="color: orangered; font-weight:bold; ">
                            <!--<i class="mdi-action-search prefix"  style="float: right;"></i>-->
                            <input name="con_search" placeholder="Search..." width="" type="text" onkeypress="letsSearch()">
                            <!--<a class="mdi-action-search prefix"></a>-->

                        </span>
                    </div>

                </div>
                <?php
//        include("dbconfig.php");
//                $start = 0;
//                $limit = 2;
//
//                if (isset($_GET['id'])) {
//                    $id = $_GET['id'];
//                    $start = ($id - 1) * $limit;
//                } else {
//                    $id = 1;
//                }
//Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
//                if (empty($_REQUEST['con_search'])) {
//                    $query = q("select * from language LIMIT $start, $limit");
//                } else {
                    
//                }
                ?>

                <div class="row" style="margin-top:2%;  ">
<?php foreach ($query as $value): ?>
                        <div class="input-field col l6 m6 s12"> 
                            <!--<i class="mdi-maps-directions-car prefix"></i>-->
                            <textarea  id="v_note_e[<?php print $value['id'] ?>]" class="materialize-textarea" name="v_note_e[<?php print $value['id'] ?>]" data-parsley-trigger="keyup" data-parsley-maxlength="255"  ><?php echo $value['key']; ?></textarea>
                            <label  for="v_note_e[<?php print $value['id'] ?>]">English</label>
                        </div>

                        <div class="input-field col l6 m6 s12"> 
                            <!--<i class="mdi-maps-directions-car prefix"></i>-->
                            <textarea  id="v_note_p[<?php print $value['id'] ?>]" class="materialize-textarea" name="v_note_p[<?php print $value['id'] ?>]" data-parsley-trigger="keyup" data-parsley-maxlength="255"  ><?php echo $value['lang_persian']; ?></textarea>
                            <label  for="v_note_p[<?php print $value['id'] ?>]">Persian</label>
                        </div>
<?php endforeach; ?>
                </div>
                <ul>
<?php
//print 10 items
while ($result = mysqli_fetch_array($query)) {
    echo "<li>" . $result['text1'] . "</li>";
}
?>
                </ul>
                    <?php
//fetch all the data from database.
//                    $row = qs("select count(id)as Total from language");
//calculate total page number for the given table in the database 
                    $rows = $row['Total'];
                    $total = ceil($rows / $limit);
                    ?>
                <div class="input-field col l8 m6 s12"> 
                    <ul class='pagination'>
<?php
if ($id > 1) {
    //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
    echo "<li><a href='?id=" . ($id - 1) . "' class='left btn btn-flat'><i class='mdi-navigation-chevron-left'></i></a></li>";
}
?>

                        <?php
//show all the page link with page number. When click on these numbers go to particular page. 
                        for ($i = 1; $i <= $total; $i++) {
                            if ($i == $id) {
                                echo "<li class='active'>" . $i . "</li>";
                            } else {
                                echo "<li class='waves-effect'><a href='?id=" . $i . "'>" . $i . "</a></li>";
                            }
                        }
                        if ($id != $total) {
                            ////Go to previous page to show next 10 items.
                            echo "<li><a href='?id=" . ($id + 1) . "' class='right btn btn-flat'><i class='mdi-navigation-chevron-right'></i></a></li>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="input-field col l4 m6 s12"> 



                    <!--<div style="clear: both"></div>-->
                    <button data-tooltip='Click to Save'  class="right waves-effect waves-light  btn-large z-depth-0 z-depth-1-hover tooltipped" name="save" type="submit" onclick="CheckRecord()">Translate</button>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
    </form>
</div>