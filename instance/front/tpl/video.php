<div class="card" id="">
    <div class="title">
        <div class="_card_title">Video</div>
    </div>
    <div class="content">
        <div class="row">
            <form data-parsley-validate action="video" method="post" enctype="multipart/form-data" >
                <div class="col l12">
                    <div class="input-field col l12 m12 s12">
                        <i class="mdi-av-subtitles prefix"> </i>
                        <input id="video_title" name="video_title" type="text" class="validate" value="" required> 
                        <label for="video_title" class="inputtext">Video Title</label>
                    </div>
                </div>
                <div class="col l12">
                    <div class="col l6">
                        <div style="font-weight: bold">Upload Video</div>
                        <div class="dropzone fallback" style="padding-top: 42px;">
                            <div class="input-field">
                                <input type="file" name="video[]" multiple id="my-awesome-dropzone" />
                            </div>
                        </div>
                    </div>
                    <div class="col l6">
                        <div style="font-weight: bold">Upload Thumbnail</div>
                        <div class="dropzone fallback" style="padding-top: 42px;">
                            <div class="input-field">
                                <input type="file" name="file[]" multiple id="my-awesome-dropzone-data" />
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="InsertData" value="1">
                <div class="clearfix"></div>
                <div class="col l12">
                    <input class="btn waves-effect waves-light" type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card" id="">
    <div class="title">
        <div class="_card_title">List of Video</div>
    </div>
    <div class="content">
        <div class="row">
            <?php
            if ($videodata != '') {
                foreach ($videodata as $key => $value) {
                    $vedio = explode(",", substr($value['video_url'], 0, -1));
                    $img = explode(",", substr($value['video_thumb'], 0, -1));


                    $vedioname = pathinfo($img['0'], PATHINFO_FILENAME);
                    ?>
                    <div class="card">
                        <div class="col l4 s12">
                            <div class="card medium">    
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light" style="height:170px;">
                                        <video style="width:100%;" preload="auto" data-setup='{"width":"100%"}' controls poster="<?php echo _MEDIA_URL ?>vediothumbnail/<?php echo $img['0'] ?>" class="video-js vjs-default-skin ">
        <!--                                            <source src="<?php echo _MEDIA_URL ?>video/<?php echo $img ?>" type="video/mp4">
                                            <source src="<?php echo _MEDIA_URL ?>video/<?php echo $vedioname ?>.webm" type="video/webm">
                                            <track kind="captions" src="<?php echo _MEDIA_URL ?>assets/video.js/captions.vtt" srclang="en" label="English"></track>-->
                                        </video>
                                    </div>
                                    <div class="content" style="padding: 1rem;">
                                        <span class="card-title activator grey-text text-darken-4">
                                            <?php echo $value['video_title'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>



<style type="text/css">
    .dropzone{
        background: #fff none repeat scroll 0 0;
        border: 2px dashed #7e57c2;
        border-radius: 5px;
        padding: 20px;;
        text-align: center;
    }
</style>