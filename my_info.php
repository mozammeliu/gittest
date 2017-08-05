<?php
    // RM Language of tab_selection
    $account_xs_class = "col-xs-12";
    $contact_xs_class = "col-xs-6";
    $med_xs_class = "col-xs-6";
    $per_xs_class = "col-xs-6";
    $files_xs_class = "col-xs-6";
    $diary_xs_class = "col-xs-6";
    $col_xs_class = "col-xs-6";
    $rem_xs_class = "col-xs-6";

    $accountTabClasses = "";
    $contactTabClasses = "";
    $medicalTabClasses = "";
    $personalTabClasses = "";
    $filesTabClasses = "";
    $diaryTabClasses = "";
    $photosTabClasses = "";
    $doctorsTabClasses = "";
    $remindersTabClasses = "";

    if(isset($language_id)){
        switch ($language_id) {
            case 'English':
                
                break;
            
            case 'Chinese':
                /*$contact_xs_class .= " text-left";
                $med_xs_class .= " text-left";
                $per_xs_class .= " text-left";
                $files_xs_class .= " text-left";
                $diary_xs_class .= " text-left";
                $col_xs_class .= " text-left";
                $rem_xs_class .= " text-left";

                $contactTabClasses = "tab-pad";
                $medicalTabClasses = "tab-pad";
                $personalTabClasses = "tab-pad";
                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";
                $remindersTabClasses = "tab-pad";*/
                break;

            case 'Spanish':
                /*$contact_xs_class = "col-xs-12";
                $med_xs_class = "col-xs-12";
                $per_xs_class = "col-xs-12";
                $files_xs_class = "col-xs-6 text-left";
                $diary_xs_class = "col-xs-6 text-left";
                $col_xs_class = "col-xs-6 text-left";
                $rem_xs_class = "col-xs-12";

                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";*/
                break;
            
            case 'Bengali':
                /*$contact_xs_class = "col-xs-12";
                $med_xs_class = "col-xs-12";
                $per_xs_class = "col-xs-12";
                $files_xs_class .= " text-left";
                $diary_xs_class .= " text-left";
                $col_xs_class .= " text-left";
                $rem_xs_class = "col-xs-12";

                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";*/
                break;

            case 'Hindi':
                /*$contact_xs_class = "col-xs-12";
                $med_xs_class = "col-xs-12";
                $per_xs_class = "col-xs-12";
                $files_xs_class .= " text-left";
                $diary_xs_class .= " text-left";
                $col_xs_class .= " text-left";
                $rem_xs_class = "col-xs-12";

                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";*/
                break;

            case 'Arabic':
                /*$contact_xs_class .= " text-left";
                $med_xs_class .= " text-left";
                $per_xs_class .= " text-left";
                $files_xs_class .= " text-left";
                $diary_xs_class .= " text-left";
                $col_xs_class .= " text-left";
                $rem_xs_class .= " text-left";
                $contactTabClasses = "tab-pad";
                $medicalTabClasses = "tab-pad";
                $personalTabClasses = "tab-pad";
                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";
                $remindersTabClasses = "tab-pad";*/
                break;

            case 'Japanese':

                /*$contact_xs_class .= " text-left";
                $med_xs_class .= " text-left";
                $per_xs_class .= " text-left";
                $files_xs_class .= " text-left";
                $diary_xs_class .= " text-left";
                $col_xs_class .= " text-left";
                $rem_xs_class .= " text-left";
                $contactTabClasses = "tab-pad";
                $medicalTabClasses = "tab-pad";
                $personalTabClasses = "tab-pad";
                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";
                $remindersTabClasses = "tab-pad";*/
                break;

            case 'Portuguese':
                /*$contact_xs_class = "col-xs-12";
                $med_xs_class = "col-xs-12";
                $per_xs_class = "col-xs-12";
                $files_xs_class = "col-xs-6 text-left";
                $diary_xs_class = "col-xs-6 text-left";
                $col_xs_class = "col-xs-6 text-left";
                $rem_xs_class = "col-xs-12";

                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";*/
                break;

            case 'Russian':
                /*$contact_xs_class = "col-xs-12";
                $med_xs_class = "col-xs-12";
                $per_xs_class = "col-xs-12";
                $files_xs_class = "col-xs-6 text-left";
                $diary_xs_class = "col-xs-6 text-left";
                $col_xs_class = "col-xs-6 text-left";
                $rem_xs_class = "col-xs-12";

                $filesTabClasses = "tab-pad";
                $diaryTabClasses = "tab-pad";
                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";*/
                break;

            case 'French':
                /*$contact_xs_class = "col-xs-12";
                $med_xs_class = "col-xs-12";
                $per_xs_class = "col-xs-12";
                $files_xs_class = "col-xs-12";
                $diary_xs_class = "col-xs-12";
                $rem_xs_class = "col-xs-12";

                $photosTabClasses = "tab-pad";
                $doctorsTabClasses = "tab-pad";*/
                break;

            case 'Germany':
                // $contact_xs_class .= " text-left";
                // $med_xs_class .= " text-left";
                // $files_xs_class .= " text-left";
                // $diary_xs_class .= " text-left";
                // $col_xs_class .= " text-left";
                // $rem_xs_class .= " text-left";

                // $contactTabClasses = "tab-pad";
                // $medicalTabClasses = "tab-pad";
                // $filesTabClasses = "tab-pad";
                // $diaryTabClasses = "tab-pad";
                // $photosTabClasses = "tab-pad";
                // $doctorsTabClasses = "tab-pad";
                // $remindersTabClasses = "tab-pad";
                break;

            default:
                
                break;
        }
    }
    $account_xs_class = "";
    $contact_xs_class = "";
    $med_xs_class = "";
    $per_xs_class = "";
    $files_xs_class = "";
    $diary_xs_class = "";
    $col_xs_class = "";
    $rem_xs_class = "";
    $help_xs_class = "";
    // RM Language of tabs END

    // We build groups of four photos
    $photoGroups = array();
    if(is_array($photos) && count($photos) > 0){
        
        $phIndex = 0;
        $group = array();
        
        foreach ($photos as $photo) {

            array_push($group, $photo);
            $phIndex++;
            
            if($phIndex % 4 == 0 || $phIndex == count($photos)){
                array_push($photoGroups, $group);
                if($phIndex < count($photos)){
                    $group = array();
                }
            }
        }
    }
?>
<style>.wrap_word{ word-wrap: break-word !important; max-width: 484px;}
@media (max-width:780px) and (min-width:200px) {.wrap_word{ word-wrap: break-word !important; }}
@media (max-width:768px){.wrap_word{ word-wrap: break-word !important;}}
</style>
<?php if($this->session->userdata('subdomain')!=""){
    ?>
<style>
    /*
    @media only screen and (min-width: 1110px) and (max-width: 1830px) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; min-width: 18%;}

    }
    @media only screen and (min-width: 1062px) and (max-width: 1110px ) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; min-width: 12%;}

    }
    @media only screen and (min-width: 1005px) and (max-width: 1062px ) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 13px; min-width: 12%;}

    }

    @media only screen and (min-width: 992px) and (max-width: 1005px ) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 12px; min-width: 12%;}

    }

    @media only screen and (min-width: 465px ) and (max-width: 765px) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; min-width: 18%;}

    }
    @media only screen and (min-width: 420px) and (max-width: 465px) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 13px; min-width: 12%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}
    }
    @media only screen and (min-width: 396px) and (max-width: 420px) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 12px; min-width: 12%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}
    }
    @media only screen and (min-width: 260px) and (max-width: 396px) {

        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 12px; min-width: 25%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}

    }
*/





    @media only screen and (min-width: 1200px) and (max-width: 1880px /*1470px*/) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; min-width: 18%;}

    }
    @media only screen and (min-width: 404px) and (max-width: 940px/*545px*/) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 12px; min-width: 19%;}

    }
    @media only screen and (min-width: 450px) and (max-width: 530px/*545px*/) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 12px; min-width: 20%;}

    }
    @media only screen and (min-width: 387px) and (max-width: 404px/*545px*/) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 12px; min-width: 20%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}
    }
    @media only screen and (min-width: 365px) and (max-width: 387px) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 11px;  min-width: 20%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}

    }
    @media only screen and (min-width: 355px) and (max-width: 365px) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1;  font-size: 11px; min-width: 20%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}

    }
    @media only screen and (min-width: 260px) and (max-width: 355px) {
        /*For mobile phones:*/
        .nav-tabs>li,.nav-pills>li{vertical-align:top;display:inline-block;margin-bottom:5px;*display:inline;zoom:1; font-size: 11px; min-width: 30%;}
        .new_photo_mlh{font-size: 12px; padding:4px;}

    }

    textarea {
        overflow-y: hidden;
    }

</style>
<?php
} ?>

<div class="underline text-center gap5y" style="margin-left:-2%; margin-right:-2%; margin-bottom: 0; border-bottom: none">
    <form action="<?php echo base_url(); ?>home/info" method="post">
        <input type="hidden" value="<?php echo $subdomain; ?>" name="subdomainid" id="subdomain"/>
        <input type="hidden" value="<?php echo $subdomain; ?>" name="subdomain" id="subdomain"/>
        <button type="submit" name="lang"  value="English" class="btn btn-outline btn-danger btn-sm pad5">ENG</button>
        <button type="submit" name="lang" value="Chinese" class="btn btn-outline btn-danger btn-sm pad5">中文</button>
        <button type="submit" name="lang"  value="Spanish" class="btn btn-outline btn-danger btn-sm pad5">SPA</button>
        <button type="submit" name="lang" value="Bengali" class="btn btn-outline btn-danger btn-sm pad5">বাংলা</button>
        <button type="submit" name="lang"  value="Hindi" class="btn btn-outline btn-danger btn-sm pad5">हिंदी</button>
        <button type="submit" name="lang" value="Arabic" class="btn btn-outline btn-danger btn-sm pad5">العربية</button><!--<br />--><!--MOZAMMEL HERE IS THE BREAK-->
        <button type="submit" name="lang"  value="Japanese" class="btn btn-outline btn-danger btn-sm pad5">日本</button>
        <button type="submit" name="lang" value="Portuguese" class="btn btn-outline btn-danger btn-sm pad5">POR</button>
        <button type="submit" name="lang"  value="Russian" class="btn btn-outline btn-danger btn-sm pad5">RUS</button>
        <button type="submit" name="lang" value="French" class="btn btn-outline btn-danger btn-sm pad5">FRA</button>
        <button type="submit" name="lang"  value="Germany" class="btn btn-outline btn-danger btn-sm pad5">DEU</button>
        <button type="submit" name="lang"  value="Korean" class="btn btn-outline btn-danger btn-sm pad5">한국어</button>
    </form>
</div>
<?php
$lang2=array();
foreach($lang as $lang1){
    $langs[$lang1['title_text']] = $lang1['lang'];
}
$json = json_encode($langs);
$language = json_decode($json);
?>

<div class="row"></div>

<div class="">
    <?php
    define("isalldone_mlh",$row['isalldone']);
    if($row['isalldone'] == 1){?>
        <fieldset>
            <div style=" clear: both; font-size: 0; height: 5px;">&nbsp;</div>
            <div class="span5" style="text-align:center">
                <div id='preview1'>
                    <?php if(!empty($row['photo'])){
                    	$fileName =  base_url()."user_images/".  strtoupper($row['subdomain'])."/".$row['photo'];
                    	
                    	if(file_exists("./user_images/".  strtoupper($row['subdomain'])."/".$row['photo'])){
                            $size = getimagesize($fileName);
                            $sourceWidth  = $size[0];
                            $sourceHeight = $size[1];
                            $targetWidth  = 150;
                            $targetHeight = 150;
                            $ratio  = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);
                            $height = $ratio['height'];
                            $width  = $ratio['width'];
                        }
                        else {
                            $fileName =  base_url()."upload/female_avatar.png";
                            $size = getimagesize($fileName);
                            $sourceWidth  = $size[0];
                            $sourceHeight = $size[1];
                            $targetWidth  = 150;
                            $targetHeight = 150;
                            $ratio  = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);
                            $height = $ratio['height'];
                            $width  = $ratio['width'];
                        }
                    	?>
                    <img width="<?php echo $width ?>" height="<?php echo $height;?>" style="border-radius: 7px; border: 1px solid #ff0000;" src="<?php echo base_url()."user_images/".  strtoupper($row['subdomain'])."/".$row['photo']; ?>"/>
                    <?php } else {
                        if($row['med_info_sex'] == 'Female'){
                        	$fileName =  base_url()."upload/female_avatar.png";
                        	$size = getimagesize($fileName);
                        	$sourceWidth  = $size[0];
                        	$sourceHeight = $size[1];
                        	$targetWidth  = 150;
                        	$targetHeight = 150;
                        	$ratio  = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);
                        	$height = $ratio['height'];
                        	$width  = $ratio['width'];
                        	?>
                            <img width="<?php echo $width?>" height="<?php echo $height;?>" src="<?php echo base_url()."upload/female_avatar.png"; ?>">
                     <?php } elseif($row['med_info_sex'] == 'Male'){
	                     	$fileName =  base_url()."upload/male_avatar.png";
	                     	$size = getimagesize($fileName);
	                     	$sourceWidth  = $size[0];
	                     	$sourceHeight = $size[1];
	                     	$targetWidth  = 150;
	                     	$targetHeight = 150;
	                     	$ratio  = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);
	                     	$height = $ratio['height'];
	                     	$width  = $ratio['width'];
                     	?>
                            <img width="<?php echo $width?>" height="<?php echo $height?>" src="<?php echo base_url()."upload/male_avatar.png"; ?>">
                     <?php } else{
	                     	$fileName =  base_url()."upload/blank_avatar.png";
	                     	$size = getimagesize($fileName);
	                     	$sourceWidth  = $size[0];
	                     	$sourceHeight = $size[1];
	                     	$targetWidth  = 150;
	                     	$targetHeight = 150;
	                     	$ratio  = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);
	                     	$height = $ratio['height'];
	                     	$width  = $ratio['width'];
                     	 ?>
                            <img width="<?php echo $width?>" height="<?php echo $height?>" src="<?php echo base_url()."upload/blank_avatar.png"; ?>">
                     <?php }} ?>
                    <!--<div class="gap5y"></div>-->
                    <!--<div  id="progress_status_photo" class="text-center">0%</div>-->
                    <div class="loading bold" id="myProgress">0%</div>
                    <div style="margin-bottom:0px !important;" class="display_none alert alert-danger img_dimention"> <?php echo $language->photo_dimension_must_be_6500pixel; ?> </div>
                    <!--<div style="margin-bottom:4px !important; margin-top:8px;" class="display_none alert alert-danger img_alert"> Please Use Photo Saved As JPG or PNG </div>-->
                    <div style="margin-bottom:4px !important; margin-top:8px;" class="display_none alert alert-danger img_alert"> <?php echo $language->use_photo_saved_as_jpg; ?> </div>
                    <!--<div style="margin-bottom:0px !important;" class="display_none alert alert-danger size_alert"> Photo Must Be 10MB Or Less. </div>-->
                    <div style="margin-bottom:0px !important;" class="display_none alert alert-danger size_alert"> <?php echo $language->file_is_too_large_10_mb_limit; ?> </div>

                    <div class="text-center">
                        <?php if($row['photo'] == '' || $row['photo'] == null){?>
                            <button id="insert_img" name="insert_btn" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->insert_photo; ?></button>


                        <?php }else{?>
                            <button id="insert_img" name="insert_btn" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix new_photo_mlh"><?php echo $language->new_photo; echo ($row['isalldone']==1)?"?":""; ?></button>



                        <?php }?>
                        <?php /*echo $img_upload_form; */?>
                    </div>

                </div>
                <?php
//print_r($dt);


                /*define("new_photo",$language->new_photo);

                define("save_photo",$language->save_photo);*/

                /*define("bolod","Mynul");*/

                $get_info = $this->mr_model->get_info_from_subdomain($subdomain);
                $dt=array();

                $dt['subdomain'] = $subdomain;

                $dt['email'] = $get_info->email;

                $dt['photo'] = $get_info->photo;

                $dt['new_photo'] = $language->new_photo;
                //$dt['new_photo'] = "new photo";

                $dt['save_photo'] = $language->save_photo;

                //$dt['save_photo'] = "ooo";

                //$this->load->view('image_upload_form', $dt, true);
//                $this->load->view('image_upload_form', $dt, true);

                //print_r($dt);

                echo $img_upload_form2;

                ?>
            </div>
        </fieldset>

    <?php }?>

    <?php 
        $tab_index = 1;
        $highlight = 0;
    //echo $flag."<br>";
    //echo $tab_index."<br>";
    ?>
        <div class="gap5y" style="padding-top: 7px; margin-top: -4px; padding-bottom:4px;"></div>
            <ul class="nav nav-tabs text-center clearfix" role="tablist">
                <li <?php echo $flag == $tab_index ? 'class="active ' . $account_xs_class . '"': 'class="' . $account_xs_class . '"'; ?>>
                    <a class="tab_selection <?= $accountTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->account; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->account; ?>" href="#account" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->account; ?></a>
                </li>
                <?php 
                if($row['isalldone'] == 0){
                    //$highlight = 1;
                ?>
                    <li <?php echo $flag-0 == $tab_index ? 'class="active ' . $account_xs_class . '"': 'class="' . $account_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                        <a class="tab_selection <?= $accountTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->photo_id_tab; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->photo_id_tab; ?>" href="#photo" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->photo_id_tab; ?></a>
                    </li>
                <?php }?>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $contact_xs_class . '"': 'class="' . $contact_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $contactTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->contact_list; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->contact_list; ?>" href="#emergency" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->contact_list; ?></a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $med_xs_class . '"': 'class="' . $med_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $medicalTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->medical_info; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->medical_info; ?>" href="#medical" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->medical_info; ?></a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $per_xs_class . '"': 'class="' . $per_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $personalTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->Personal_Info; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->Personal_Info; ?>" href="#personal" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->Personal_Info; ?></a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $files_xs_class . '"': 'class="' . $files_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $filesTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->medical_files_tab; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->medical_files_tab; ?>"  href="#files" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->medical_files_tab; ?></a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $diary_xs_class . '"': 'class="' . $diary_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $diaryTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->diary_tab; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->diary_tab; ?>"  href="#diary" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->diary_tab; ?> </a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $col_xs_class . '"': 'class="' . $col_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $photosTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->photos_tab; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->photos_tab; ?>"  href="#photos" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->photos_tab; ?> </a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $col_xs_class . '"': 'class="' . $col_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $doctorsTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->doctors; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->doctors; ?>"  href="#doctors" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->doctors; ?> </a>
                </li>
                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $rem_xs_class . '"': 'class="' . $rem_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">
                    <a class="tab_selection <?= $remindersTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->reminders; ?>" data-text="<?php echo $tab_index;?>. <?php echo $language->reminders; ?>"  href="#reminders" role="tab" data-toggle="tab"><?php echo $tab_index++;?>. <?php echo $language->reminders; ?> </a>
                </li>

                <li <?php echo $flag-$highlight == $tab_index ? 'class="active ' . $rem_xs_class . '"': 'class="' . $rem_xs_class . '"'; ?> style="display: <?php echo $row['tab_count'] >= $tab_index?'inline-block':'none';?>">

                    <a class="tab_selection <?= $remindersTabClasses ?>" data-short="<?php echo $tab_index;?>. <?php echo $language->help_tab; ?>" data-text="<?php echo $tab_index;?>. Help"  href="#help" role="tab" data-toggle="tab" <?php /*if($flag == 11){echo 'aria-expanded="true"';}*/  ?>><?php echo $tab_index++;?>. <?php echo $language->help_tab; ?> </a>

                </li>

            </ul>
    <?php $tab_index = 1;?>    
            <div class="underline" style="margin-top:6px; margin-bottom: 11px;"></div>
            
            <div class="tab-content" style="margin-top: -2px;">
                <div class="tab-pane fade<?php echo $flag <= $tab_index ? ' in active' : ''; ?>" id="account">
                    <fieldset>
                        <legend class="text-center" ><?php echo $language->account; ?></legend>
                        <form name="info_page" onsubmit=" return check_info_mlh();" action="<?php echo base_url(); ?>home/info" method="post">
                            <div class="gap5y"></div>
                            <h4 class="" style="margin-top: -3px;"><?php echo $language->first_name; ?><!--First Name--></h4>
                            <input type="text" name="firstname" placeholder="First Name" id="txtfirstname" class="form-control" value="<?php echo $row['firstname']; ?>"  required = "required"  oninvalid="this.setCustomValidity('<?php echo VALIDATE_MSG; ?>')" oninput="this.setCustomValidity('')" />

                            <div class="gap5y"></div>
                            <h4 class=""><?php echo $language->last_name; ?><!--Last Name--></h4>
                            <input type="text" name="lastname" placeholder="Last Name" id="txtlastname" class="form-control" value="<?php echo $row['lastname']; ?>" required = "required" oninvalid="this.setCustomValidity('<?php echo VALIDATE_MSG; ?>')" oninput="this.setCustomValidity('')" />

                            <div class="gap5y"></div>
                            <h4 class=""><?php echo $language->email; ?><!--Email--></h4><p style="color: red; font-size: 14px; margin-bottom:0px;" class="display_none" id="email_change_message">**Confirmation Email Has Been Sent To You.<br/>Please Click Inside Email To Confirm Change Of Email Address.</p>
                            <input type="email" name="" id="txtemail2" onchange="email_changed();" class="form-control" required oninvalid="this.setCustomValidity('Please Enter Valid Email Address.')" oninput="customValidity(event)"  placeholder="Your Email Address" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" value="<?php echo $row['email']; ?>" />
                            <input type="hidden" name="email" id="txtemail" class="form-control" required oninvalid="this.setCustomValidity('Please Enter Valid Email Address.')" oninput="customValidity(event)"  placeholder="Your Email Address" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" value="<?php echo $row['email']; ?>" />
                            <?php
                            
                            if($get_info->key_expiry_time > time())
                            {

                                if(isset($reset_access)){$reset_key=$get_info->reset_key;}

                            }


                            if(($row['isauthenticated'] == 0) || ($reset_key!="")){
                                $required = 'required = "required"';
                                $placeholder_pin = 'placeholder="'.$language->pin_placeholder_1.'"';
                                $placeholder_pass = 'placeholder="'.$language->pass_placeholder_1.'"';
                            }else{
                                $required = "";
                                $placeholder_pin = 'placeholder="'.$language->pin_placeholder_2.'"';
                                $placeholder_pass = 'placeholder="'.$language->password_placeholder_2.'"';
                                //echo $_SERVER['REQUEST_URI']."hi";
                            }
                            ?>
                            <div class="gap5y"></div>
                            <!--Mozammel Code for Start-->
                            <style>

                                .mlhplc::-webkit-input-placeholder {
                                    color: #ff0000;
                                    font-weight: bold;
                                }
                            </style>
                            <script type="text/javascript">
                                $('input').addClass('mlhplc');

                                /* email change notification */
                                function email_changed(){
                                    var new_email=$("#txtemail2").val();
                                    var subdomain=$("#subdomain_ec").val();
                                    var firstname=$("#txtfirstname").val();
                                    var old_email="<?=$row['email']?>";

                                    if(old_email!=new_email)
                                    {
                                        $.ajax({
                                            url: "<?php echo base_url('home/change_email'); ?>",
                                            type: "post",
                                            data: {
                                                new_email: new_email,
                                                old_email: old_email,
                                                subdomain: subdomain,
                                                firstname: firstname
                                            },
                                            success: function(success) {
                                                if(success=="success"){
                                                    alert("Confirmation Email Has Been Sent To You. Please Click Inside Email To Confirm Change Of Email Address.");
                                                    $("#email_change_message").show();
                                                }


                                            }
                                        });
                                    }

                                    //alert(new_email);
                                    //alert(subdomain);
                                }



                            </script>
                            <!--Mozammel Code for end-->
                            <h4 class=""><?php echo $language->pin; ?>*</h4>
                            <div class="input-group">
                            <input type="password" value="" onchange="pinpassfilled();" <?php echo $required;?> pattern="[a-zA-Z0-9]{4,8}" inputmode="numeric" name="pin" id="txtpin" class="form-control mlhplc" maxlength="8" <?php echo $placeholder_pin;?> oninvalid="this.setCustomValidity('<?php echo MUSTPIN_VALIDATE_MSG; ?>')" oninput="this.setCustomValidity('')" />
                                <span class="input-group-addon"  id="show-pin"><i id="eye_pin" class="glyphicon glyphicon-eye-open mlhplc"></i>&nbsp;<span style="vertical-align: 5%;">See</span></span>
                            </div>



                            <div class="gap5y"></div>
                            <h4 class=""><?php echo $language->password; ?>*</h4>
                            <div class="input-group">
                            <input type="password" value="" onchange="pinpassfilled();" <?php echo $required;?> name="password" id="txtpass" class="form-control mlhplc" <?php echo $placeholder_pass;?> pattern="[^]{8,18}" oninvalid="this.setCustomValidity('<?php echo MUSTPASSWD_VALIDATE_MSG; ?>')" oninput="this.setCustomValidity('')" />
                                <span class="input-group-addon" id="show-password"><i id="eye_password" class="glyphicon glyphicon-eye-open mlhplc"></i>&nbsp;<span style="vertical-align: 5%;">See</span></span>
                            </div>
                            <script>

                                $("#show-pin").click(function(){
                                    //alert("The paragraph was clicked.");
                                    var type= $("#txtpin").attr('type');
                                    //alert(type);
                                    if(type=='password'){$('#txtpin').clone().attr('type','text').insertAfter('#txtpin').prev().remove(); $('#eye_pin').clone().attr('class','glyphicon glyphicon-eye-close mlhplc').insertAfter('#eye_pin').prev().remove();}
                                    if(type=='text'){$('#txtpin').clone().attr('type','password').insertAfter('#txtpin').prev().remove(); $('#eye_pin').clone().attr('class','glyphicon glyphicon-eye-open mlhplc').insertAfter('#eye_pin').prev().remove();}
                                    //alert(type);
                                });
                                $("#show-password").click(function(){
                                    //alert("The paragraph was clicked.");
                                    var type= $("#txtpass").attr('type');
                                    if(type=='password'){$('#txtpass').clone().attr('type','text').insertAfter('#txtpass').prev().remove(); $('#eye_password').clone().attr('class','glyphicon glyphicon-eye-close mlhplc').insertAfter('#eye_password').prev().remove();}else{$('#txtpass').clone().attr('type','password').insertAfter('#txtpass').prev().remove(); $('#eye_password').clone().attr('class','glyphicon glyphicon-eye-open mlhplc').insertAfter('#eye_password').prev().remove();}
                                    //alert(type);

                                });
                            </script>
                            <div class="gap5y"></div>
                            <div class="text-center">
                                <input type="hidden" id="subdomain_ec" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <input type="hidden" value="0" name="chk_change"/>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                /*exit button url in password mode*/
                                $exit_button1="/health_feb/home/info";
                                $exit_button2="/health_feb/home/update_info";

                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button id="next" value="<?php echo $tab_index++;?>" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                        <?php

                        if($row['isauthenticated'] == 0) {
                        ?>
                        <script>
                            function check_info_mlh()
                            {
                                //var name = $('#first_name').val();
                                var name= document.forms["info_page"]["firstname"].value;
                                if(name=="" || name==null || name==" "){alert("Enter First Name"); return false;}

                                var last_name= document.forms["info_page"]["lastname"].value;
                                if(last_name=="" || last_name==null || last_name==" "){alert("Enter Last Name"); return false;}

                                var email= document.forms["info_page"]["email"].value;
                                if(email=="" || email==null){alert("Enter Email"); return false;}
                                var x=email;
                                var atpos = x.indexOf("@");
                                var dotpos = x.lastIndexOf(".");
                                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                                    alert("Please Enter Valid Email Address");
                                    return false;
                                }

                                var name= document.forms["info_page"]["pin"].value;
                                if(name=="" || name==null){alert("Enter Pin"); return false;}

                                var digit =name.length;
                                if((digit<4)||(digit>8)){alert("Invalid Pin, It Must Be 4 To 8 Digit"); return false;}

                                var last_name= document.forms["info_page"]["password"].value;
                                if(last_name=="" || last_name==null){alert("Enter Password"); return false;}

                                var digit =last_name.length;
                                if(digit<8){alert("Invalid Password, It Must Be 8 To 18 Character"); return false;}


                            }

                        </script>
                        <?php
                        }else
                        { ?>

                        <script>
                            function check_info_mlh()
                            {
                                //var name = $('#first_name').val();
                                var name= document.forms["info_page"]["firstname"].value;
                                if(name=="" || name==null || name.length<2){alert("Enter First Name"); return false;}

                                var last_name= document.forms["info_page"]["lastname"].value;
                                if(last_name=="" || last_name==null || last_name.length<2){alert("Enter Last Name"); return false;}



                                var email= document.forms["info_page"]["email"].value;
                                if(email=="" || email==null){alert("Enter Email"); return false;}
                                var x=email;
                                var atpos = x.indexOf("@");
                                var dotpos = x.lastIndexOf(".");
                                if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                                    alert("Please Enter Valid Email Address");
                                    return false;
                                }


                                var name= document.forms["info_page"]["pin"].value;
                                if(name=="" || name==null){
                                    //alert("hi");

                                }else{
                                    var digit =name.length;
                                    if((digit<4)||(digit>8)){alert("Invalid Pin, It Must Be 4 To 8 Digit"); return false;}
                                }


                                var last_name= document.forms["info_page"]["password"].value;
                                if(last_name=="" || last_name==null){

                                }else{
                                    var digit =last_name.length;
                                    if(digit<8){alert("Invalid Password, It Must Be 8 To 18 Character"); return false;}
                                }


                            }

                        </script>
                        <?php
                        }
                        ?>
                    </fieldset>
                </div>
                <!-------------------------Start Photo Section----------------------------->
                <?php if($row['isalldone'] == 0){?>
                <div class="tab-pane fade<?php echo $flag == $tab_index++ ? ' in active' : ''; ?>" id="photo">
                    <div class="">
                        <fieldset>
                            <legend class="text-center"><?php echo $language->photo_id_tab; ?></legend>
                            <div class="span5" style="text-align:center">
                                <div id='preview1'>
                                    <?php if(!empty($row['photo'])){?>
                                    
                                    <?php 
                                        $fileName =  base_url()."user_images/".strtoupper($row['subdomain'])."/".$row['photo'];
                                        $size = getimagesize($fileName);
                                        $sourceWidth  = $size[0];
                                        $sourceHeight = $size[1];
                                        $targetWidth  = 150;
                                        $targetHeight = 150;
                                        $ratio  = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);
                                        $height = $ratio['height'];
                                        $width  = $ratio['width'];
                                    ?>
                                    
                                    <img width="<?php echo $width ?>" height="<?php echo $height;?>" style="border-radius: 7px; border: 1px solid #ff0000;" src="<?php echo $fileName; ?>"/>
                                        <!--<legend class="text-center">Your Photo</legend>-->
                                        <legend class="text-center"><?php echo $row['firstname']." ".$row['lastname']; ?></legend>
                                    <?php } else {
                                        if($row['med_info_sex'] == 'Female'){ ?>
                                            <img style="width: 150px;" src="<?php echo base_url()."upload/female_avatar.png"; ?>">
                                     <?php } elseif($row['med_info_sex'] == 'Male'){ ?>
                                            <img style="width: 150px;" src="<?php echo base_url()."upload/male_avatar.png"; ?>">
                                     <?php } else{ ?>
                                            <img style="width: 150px;" src="<?php echo base_url()."upload/blank_avatar.png"; ?>">
                                     <?php }} ?>
                    <!--                <img src="<?php echo base_url()."upload/blank_avatar.png"; ?>" width="150" height="150" align="center" />-->
                                    <!--legend class="text-center">Your Photo</legend-->
                                    <div class="gap5y"></div>
                                    <div class="text-center">
                                        <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                        <?php if(isset($row['photo']) && ($row['photo'] != NULL || $row['photo'] != '')){?>
                                            <button id="insert_img" name="insert_btn" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->new_photo;  ?></button>
                                            <button id="skip" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: #ff0000; color: #ffffff;"><?php echo $language->next; ?></button>
                                        <?php }else{?>
                                            <button id="insert_img" name="insert_btn" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->insert_photo; ?></button>
                                            <button id="skip" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->skip_photo; ?></button>
                                            <div class="loading bold" id="myProgress">0%</div>
                                            <div style="margin-bottom:0px !important; margin-top:8px;" class="display_none alert alert-danger img_dimention"> Photo Dimension Must Be 6500x6500 Pixel Or Less. </div>
                                            <div style="margin-bottom:4px !important; margin-top:8px;" class="display_none alert alert-danger img_alert"> Please Use Photo Saved As JPG or PNG </div>
                                            <div style="margin-bottom:0px !important; margin-top:8px;" class="display_none alert alert-danger size_alert"> Photo Must Be 10MB Or Less. </div>
                                        <?php }?>

                                            
                                    </div>
                                </div>
                                <?php echo $img_upload_form; ?> 
                            </div>
                            <!--<br/>-->
                        </fieldset>
                    </div>
                </div>
                <?php }?>
                
                <!-- ---------------------- End Photo Section ------------------------------>

                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="emergency">
                    <fieldset>
                        <legend><?php echo $language->emergency_contacts; ?></legend>
                        <form name="em_contact" onsubmit="return check_em_contact_mlh();" id="emergency_contact_form" action="<?php echo base_url(); ?>home/info" method="post">
                            <?php
                            for ($i = 1; $i <= 8; $i++) {
                                $style = '';
                                if ($i == 1) {
                                    $required_text = 'required = "required"';
                                    $style_field = 'style=""';
                                } else {
                                    $required_text = '';
                                    $style_field = '';
                                }
                                if (is_array($emergency) && isset($emergency[$i - 1])) {
                                    if($i == 1){
                                        $style_field = '';
                                    }
                                    $this_ec_id = $emergency[$i - 1]['ec_id'];
                                    $this_txtperson = $emergency[$i - 1]['fullname'];
                                    $this_relation = $emergency[$i - 1]['relation'];
                                    $this_txtphone = $emergency[$i - 1]['contact_number'];
                                    $this_txtemail = $emergency[$i - 1]['email'];
                                    $this_allow_post = $emergency[$i - 1]['allow_post_diary'];
                                } else {
                                    $this_txtperson = '';
                                    $this_relation = '';
                                    $this_txtphone = '';
                                    $this_txtemail = '';
                                    $this_allow_post = '';
                                }
                                if ($i > count($emergency) && $i > 4) {
                                    $style = 'style="display:none;"';
                                }
                                ?>
                                <div class="custom person_inf" <?php echo $style . ' id="show_' . $i . '"'; ?>>
                                    <div style="padding-top: 5px;">
                                        <div class="col-md-3 col-sm-3 col-xs-4">
                                            <h6 class="pull-left" onclick="remove_contact(<?=$i?>,<?=$this_ec_id?>)"><i style="color:#FF0000; font-size: 16px;" class="glyphicon glyphicon-remove"></i></h6>
                                            <H4 class="pad5-left"><?php echo $language->singular_contact; ?> <?= $i;?></H4>
                                        </div>
                                        <!-- Detecting OS and Device Type Start by Mozammel -->
                                        <?php
                                        if (stristr($_SERVER['HTTP_USER_AGENT'], 'iphone') || strstr($_SERVER['HTTP_USER_AGENT'], 'iphone')) {
                                            $device = "iphone";
                                            //echo "iOS";
                                            ?>
                                            <style>
                                                /*[id|="chkallowemail"]{ margin-top: 0px;}*/
                                                #chkallowemail1,#chkallowemail2,#chkallowemail3,#chkallowemail4,#chkallowemail5,#chkallowemail6,#chkallowemail7,#chkallowemail8{ margin-top: 0px;}
                                            </style>
                                        <?php
                                        }
                                        if (stristr($_SERVER['HTTP_USER_AGENT'], 'android') || strstr($_SERVER['HTTP_USER_AGENT'], 'android')) {
                                            $device = "android";
                                            //echo "iOS";
                                            ?>
                                            <style>
                                                /*[id|="chkallowemail"]{ margin-top: 0px;}*/
                                                #chkallowemail1,#chkallowemail2,#chkallowemail3,#chkallowemail4,#chkallowemail5,#chkallowemail6,#chkallowemail7,#chkallowemail8{ margin-top: 0px;}
                                            </style>
                                        <?php
                                        }
                                        ?>
                                        <!-- Detecting OS and Device Type End by Mozammel -->
                                        <div class="col-md-9 col-sm-9 text-right text-primary">
                                            <input type="checkbox" <?php echo !$this_allow_post?'':'checked';?> name="chkallowemail<?php echo $i; ?>" id="chkallowemail<?php echo $i; ?>" style="vertical-align: top" />
                                            <span onclick="handleContactCheckbox(<?= $i ?>);"><?php echo $language->can_add_file_1; ?></span><!--Can Add Files, Photos & Diary Entries-->
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-3 personname nopad-left">
                                        <input <?php echo $style_field;?> type="text" onchange="contactfilled(<?=$i?>);" <?php echo $required_text; ?>  name="txtperson<?php echo $i; ?>" id="txtperson<?php echo $i; ?>" class="form-control capitalize rem_req" placeholder="<?php echo $language->dr_full_name; ?>" value="<?php echo $this_txtperson; ?>" oninvalid="this.setCustomValidity('<?php echo VALIDATE_MSG; ?>')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="col-md-3 nopad">

                                        <!-- Translation to Relation in Emergency Contact By Mozammel Haque -->
                                            <?php
                                            //$lang = $lang = $this->session->userdata('lang') ? $this->session->userdata('lang') : 'English';
                                            //$row['language'];
                                            //$mlh_emergency_data=$this->db->get('languages')->row();
                                            $lang = $lang = $row['language'] ? $row['language'] : 'English';

                                            $mlh_lang_data = $this->mr_model->translate_header($lang);
                                            $mlh_lang2=array();
                                            foreach($mlh_lang_data as $mlh_lang1){
                                                $mlh_langs[$mlh_lang1['title_text']] = $mlh_lang1['lang'];
                                            }
                                            $mlh_json = json_encode($mlh_langs);
                                            $mlh_language = json_decode($mlh_json);

                                            ?>
                                        <!-- Translation to Relation in Emergency Contact By Mozammel Haque -->

                                        <select name="txtrelation<?php echo $i; ?>" <?php echo $style_field;?> id="relation<?php echo $i; ?>" required="required" class="form-control  rem_req" <?php echo $required_text; ?>>
                                            <option <?php echo $this_relation == 'Relation' ? 'Selected' : ''; ?> value="Relation"><?php echo $mlh_language->Relation; ?></option>
                                            <option <?php echo $this_relation == 'Father' ? 'Selected' : ''; ?> value="Father"><?php echo $mlh_language->Father; ?></option>
                                            <option <?php echo $this_relation == 'Mother' ? 'Selected' : ''; ?> value="Mother"><?php echo $mlh_language->Mother; ?></option>
                                            <option <?php echo $this_relation == 'Wife' ? 'Selected' : ''; ?> value="Wife"><?php echo $mlh_language->Wife; ?></option>
                                            <option <?php echo $this_relation == 'Husband' ? 'Selected' : ''; ?> value="Husband"><?php echo $mlh_language->Husband; ?></option>
                                            <option <?php echo $this_relation == 'Partner' ? 'Selected' : ''; ?> value="Partner"><?php echo $mlh_language->Partner; ?></option>
                                            <option <?php echo $this_relation == 'Daughter' ? 'Selected' : ''; ?> value="Daughter"><?php echo $mlh_language->Daughter; ?></option>
                                            <option <?php echo $this_relation == 'Son' ? 'Selected' : ''; ?> value="Son"><?php echo $mlh_language->Son; ?></option>
                                            <option <?php echo $this_relation == 'Brother' ? 'Selected' : ''; ?> value="Brother"><?php echo $mlh_language->Brother; ?></option>
                                            <option <?php echo $this_relation == 'Sister' ? 'Selected' : ''; ?> value="Sister"><?php echo $mlh_language->Sister; ?></option>
                                            <option <?php echo $this_relation == 'Doctor' ? 'Selected' : ''; ?> value="Doctor"><?php echo $mlh_language->Doctor; ?></option>
                                            <option <?php echo $this_relation == 'Supervisor' ? 'Selected' : ''; ?> value="Supervisor"><?php echo $mlh_language->Supervisor; ?></option>
                                            <option <?php echo $this_relation == 'Friend' ? 'Selected' : ''; ?> value="Friend"><?php echo $mlh_language->Friend; ?></option>
                                            <option <?php echo $this_relation == 'Neighbour' ? 'Selected' : ''; ?> value="Neighbour"><?php echo $mlh_language->Neighbour; ?></option>
                                            <option <?php echo $this_relation == 'Grandfather' ? 'Selected' : ''; ?> value="Grandfather"><?php echo $mlh_language->Grandfather; ?></option>
                                            <option <?php echo $this_relation == 'Grandmother' ? 'Selected' : ''; ?> value="Grandmother"><?php echo $mlh_language->Grandmother; ?></option>
                                            <option <?php echo $this_relation == 'Family' ? 'Selected' : ''; ?> value="Family"><?php echo $mlh_language->Family; ?></option>
                                            <option <?php echo $this_relation == 'Other' ? 'Selected' : ''; ?> value="Other"><?php echo $mlh_language->Other; ?></option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 personaltel nopad">
                                        <input type="tel" placeholder="<?php echo $language->tel_doctor; ?>"  <?php echo $required_text; ?> onchange="contactfilled(<?=$i?>);" <?php echo $style_field;?>  name="txtphone<?php echo $i; ?>" id="txtphone<?php echo $i; ?>" class="form-control rem_req" value="<?php echo $this_txtphone; ?>" pattern="[^]{1,27}" onkeypress=""  />
                                    </div>
                                    <div class="col-md-3 nopad-right">
                                        <input type="email" placeholder="<?php echo $language->email_doctor; ?>"  <?php /*echo $required_text;*/ ?> onchange="contactfilled(<?=$i?>);" <?php echo $style_field;?>  name="txtemail<?php echo $i; ?>" id="txtemail<?php echo $i; ?>" value="<?php echo $this_txtemail; ?>" class="form-control rem_req"   pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,12}$" onkeypress=""  />
                                    </div>
                                </div>
                            <?php 
                            } 
                            ?>
                            <div class="row gap5y"></div>
                            <div class="text-center">
                                <a class="btn btn-success" id="add_more"><?php echo $language->add_more_contacts; ?><!--Add More Contacts--></a>
                            </div>
                            <div class="gap5y"></div>
                            <div class="text-center">
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <input type="hidden" value="0" name="chk_change"/>
                                <button id="back_from_contact" value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit;?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nextcontact"  name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->next; ?></button>

                            </div>
                        </form>
                        <script>

                            function remove_contact(id,ec_id){

                                if (confirm("Are You Sure You Wish To Delete?")) {
                                    $.ajax({
                                        url: "<?php echo base_url('home/contact_delete'); ?>",
                                        type: "post",
                                        data: {
                                            ec_id: ec_id
                                        },
                                        success: function(success) {
                                            if(success=="success"){
                                                alert("Emergency Contact Deleted Successfully");
                                                jQuery("#show_"+id).html('');
                                            }


                                        }
                                    });

                                }
                            }



                            function check_em_contact_mlh()
                            {
                                var namecheck= document.forms["em_contact"]["txtperson1"].value;
                                if(namecheck=="" || namecheck==null || namecheck.length<2){alert("Enter Full Name of Contact 1"); return false;}
                                for (i = 1; i < 9; i++) {
                                    //alert("hi");
                                    //alert(i);
                                    var dct_name="txtperson"+i;
                                    var name= document.forms["em_contact"][dct_name].value;
                                    var dct_phone="txtphone"+i;
                                    var phone= document.forms["em_contact"][dct_phone].value;
                                    var dct_email="txtemail"+i;
                                    var email= document.forms["em_contact"][dct_email].value;
                                    var dct_relation="relation"+i;
                                    var relation= document.forms["em_contact"][dct_relation].value;
                                    if(name=="" && phone=="" && email==""){break;}
                                    if((name!="" || name!=null) || (phone!="" || phone!=null) /*|| (email!="" || email!=null)*/)
                                    {
                                        if(name=="" || name==null || name.length<2){alert("Enter Full Name"); return false;}
                                        if(phone=="" || phone==null || phone.length<4){alert("Enter Telephone Number"); return false;}
                                        //if(email=="" || email==null){alert("Enter Email"); return false;}
                                        if(relation=="Relation"){alert("Please Select Relation"); return false;}
                                        /*var x=email;
                                        var atpos = x.indexOf("@");
                                        var dotpos = x.lastIndexOf(".");
                                        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                                            alert("Please Enter Valid Email Address");
                                            return false;
                                        }*/
                                    }
                                }



                            }

                        </script>

                    </fieldset>
                </div>
                <!------------------------------------------------------>

                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="medical">
                    <fieldset>
                    <legend class="text-center"><?php echo $language->medical_info; ?></legend>
                    <!--<form id="submit_living_upload2" action="<?php echo base_url(); ?>home/info" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="gap5y"></div>
                    <label class="radio" for="living_will_uploaded"><h4 style="margin-bottom: -7px;">
                            <input type="radio" id="living_will_uploaded" onchange="living_will_color_change();" name="living_will_uploaded" <?php echo $row['living_will_uploaded'] != 0 ? 'checked' : ''; ?> value="0" /> <?php echo $language->living_will; ?> </h4></label>

                    <?php if(isset($upload_confirm)){?>
                        <div id="livinginvalid_type" class="col-lg-12 alert alert-success" style="margin-bottom: 5px !important">
                            <?= $upload_confirm;?>
                        </div>

                    <?php }?>
                    <div id="livinginvalid_size" class="alert alert-danger text-center gap10y display_none capitalized">
                        <?php echo $language->file_is_too_large_10_mb_limit; ?>
                    </div>
                    <div id="livinginvalid_type_js" class="alert alert-danger text-center gap10y display_none capitalized">

                        <?php echo $language->living_will_saved_as_pdf; ?>
                    </div>


                    <div class="col-lg-12" id="living_part" style="padding: 0 !important; margin-bottom: 6px;">
                        <input id="liv_will_subdomain" type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>

<?php  if($row['living_will_uploaded'] != 0){ ?>
    <a style="margin: 0 5px 5px 0; border:1px solid #ccc;" href="<?php echo base_url()."living_will/".$row['subdomain']."/".$row['living_will_file']; ?>" download class="btn btn-outline btn-red btn-danger clearfix" target="_blank" ><i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php /*echo $language->download_sample;*/ ?>View</a>
<?php }  ?>
                                <span  class="btn btn-outline btn-red btn-danger btn-primary clearfix btn-file" id="living_will_color_changes" style="margin: 0 5px 5px 0; border:1px solid #ccc;">
                                        <span id="btn-title"><i class="glyphicon glyphicon-open"></i>&nbsp;<?php echo $row['living_will_uploaded'] != 0 ? $language->replace_signed_document : $language->upload_signed_document; ?></span>


                                    <input type="file" name="living_file_upload2" id="living_file_upload" />
                                </span>





                        <a style="margin: 0 5px 5px 0; border:1px solid #ccc;" href="<?php echo base_url()?>images/LIVINGWILLDECLARATIONADVANCEDIRECTIVE.pdf" download class="btn btn-outline btn-red btn-danger clearfix" target="_blank" ><i class="glyphicon glyphicon-save"></i>&nbsp;<?php echo $language->download_sample; ?>/a>
                    </div>
                    </form>-->
                        <form id="submit_living_upload" action="<?php echo base_url(); ?>home/info" method="post" enctype="multipart/form-data" accept-charset="utf-8">



                            <h4><?php echo $language->Summary; ?> </h4>
                            <?php
                            $len=strlen($row['med_info_summary']);

                            ?>
                            <!--<div id="txtmedicalsummary" name="med_info_summary" class="divtext" contentEditable><?php /*echo $row['med_info_summary']; */?></div>-->
                            <textarea id="txtmedicalsummary" onchange="medformfil();" name="med_info_summary" class="form-control capitalized "  placeholder="" rows="3"><?php echo $row['med_info_summary']; ?></textarea>
                            <input type="hidden" value="<?php echo $tab_index; ?>" name="tabindexnow"/>
                            
                            <div class="gap5y"></div>
                            <h4 class="mlhmedtitle"><?php echo $language->Medicines; ?></h4>
                            <textarea id="txtmedicines"  onchange="medformfil();" name="med_info_medicines" class="form-control capitalized"  placeholder="" rows="3"><?php echo $row['med_info_medicines']; ?></textarea>
                            
                            <div class="gap5y"></div>
                            <h4 class="mlhmedtitle"><?php echo $language->Allergies; ?></h4>
                            <textarea id="txtallergies" onchange="medformfil();" name="med_info_allergies" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['med_info_allergies']; ?></textarea>
                            
                            <div class="gap5y"></div>
                            <h4 class="mlhmedtitle"><?php echo $language->Health_Insurance; ?> </h4>
                            <textarea id="txtinsurance" onchange="medformfil();" name="med_info_insurance" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['med_info_insurance']; ?></textarea>
                            <!--<input type="text" value="<?php echo $row['med_info_insurance']; ?>" name="med_info_insurance" class="form-control"/>-->
                            
                            <div class="gap5y"></div>
                            <label class="radio" for="resuscitate"><h4>
                            <input type="radio" id="resuscitate" name="do_resuscitate" <?php echo $row['do_resuscitate'] == 1 ? 'checked' : ''; ?> value="1" /> <?php echo $language->do_resuscitate; ?> </h4></label>

                            <label class="radio" for="not_resuscitate"><h4>
                            <input type="radio" id="not_resuscitate" name="do_resuscitate" <?php echo $row['do_resuscitate'] == 0 && $row['do_resuscitate'] != NULL ? 'checked' : ''; ?> value="0" /> <?php echo $language->do_not_resuscitate; ?> </h4></label>

                            <div class="gap5y"></div>        
                            <h4><?php echo $language->organ_donate;?></h4>
                            <textarea id="txtorgan" onchange="medformfil();" name="organ_name" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['organ_name']; ?></textarea>
                            <!--<input type="text" id="txtorgan" class="form-control" value="<?php echo $row['organ_name']; ?>" name="organ_name" style="margin-bottom: 10px;" placeholder="Specify Which Organ Here." />-->

                            <!--Living Will Old Place-->

                            <div class="gap5y"></div>
                            <label class="radio" for="living_will_uploaded"><h4 style="margin-bottom: -7px;">
                                    <input type="radio" id="living_will_uploaded" onchange="living_will_color_change();" name="living_will_uploaded" <?php echo $row['living_will_uploaded'] != 0 ? 'checked' : ''; ?> value="<?php echo $row['living_will_uploaded']; ?>" /> <?php echo $language->living_will; ?> </h4></label>

                            <?php if(isset($upload_confirm)){?>
                                <div id="livinginvalid_type" class="col-lg-12 alert  blue-background" style="margin-bottom: 5px !important">
                                    <?= $upload_confirm;?>
                                </div>

                            <?php }?>
                            <div id="livinginvalid_size" class="alert alert-danger text-center gap10y display_none capitalized">
                                <!--File Is Too Large (10MB limit). Please Resize And Retry.-->
                                <?php echo $language->file_is_too_large_10_mb_limit; ?>
                            </div>
                            <div id="livinginvalid_type_js" class="alert alert-danger text-center gap10y display_none capitalized">
                                <!--Please Upload As PDF, JPG, PNG or Document File.-->
                                <?php echo $language->living_will_saved_as_pdf; ?>
                            </div>
                            <!--<div id="livinginvalid_type" class="col-lg-12 alert alert-success" style="margin-bottom: 5px !important">
                                Please Upload As PDF, JPG, PNG or Document File                            </div>-->

                            <div class="col-lg-12" id="living_part" style="padding: 0 !important; margin-bottom: 6px;">
                                <input id="liv_will_subdomain" type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <!--<input type="hidden" value="<?php echo $row['id']; ?>" name="customer_id"/>-->
                                <!--<input type="hidden" value="<?php echo $row['email']; ?>" name="emaillll"/>-->
                                <?php  if($row['living_will_uploaded'] != 0){ ?>
                                    <a href="<?php echo base_url()."living_will/".$row['subdomain']."/".$row['living_will_file']; ?>" download class="btn btn-outline btn-red btn-danger clearfix" style="margin: 0 5px 5px 0; border:1px solid #ccc; padding:6px 8px;" target="_blank" ><i class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php /*echo $language->download_sample;*/ ?><?php echo $language->lvwil_view; ?></a>
                                <?php }  ?>
                                <span  class="btn btn-outline btn-red btn-danger btn-primary clearfix btn-file" id="living_will_color_changes" style="margin: 0 5px 5px 0; border:1px solid #ccc; padding:6px 8px;">
                                        <span id="btn-title"><i class="glyphicon glyphicon-open"></i>&nbsp;<?php echo $row['living_will_uploaded'] != 0 ? $language->replace_signed_document : $language->upload_signed_document; ?><!--Signed Document--></span>
                                        <!--<input type="file" name="living_file_upload" id="living_file_upload" />-->

                                    <input type="file" name="living_file_upload" id="living_file_upload" />
                                </span>



                                <!--<input type="file" name="living_file_upload2" class="file" id="living_file_upload2" />-->

                                <a href="<?php echo base_url()?>images/LIVINGWILLDECLARATIONADVANCEDIRECTIVE.pdf" download class="btn btn-outline btn-red btn-danger clearfix" style="margin: 0 5px 5px 0; border:1px solid #ccc; padding:6px 8px;" target="_blank" ><i class="glyphicon glyphicon-save"></i>&nbsp;<?php echo $language->download_sample; ?><!--Download Sample--></a>
                            </div>


                            <!--Living Will Old Place-->
			
                            <div class="row gap5y"></div>
                            <table class="table-mr1">
                                <tr>
                                    <td class="pad5-right" style="width: 25%;">

                                        <h4><?php echo $language->Blood_Type; ?></h4>
                                        <select  onchange="medformfil();" name="med_info_bloodtype" class="form-control">
                                            <option> </option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'O Positive') {
                                                echo 'selected';
                                            }
                                            ?> >O Positive</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'O Negative') {
                                                echo 'selected';
                                            }
                                            ?> >O Negative</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'A Positive') {
                                                echo 'selected';
                                            }
                                            ?> >A Positive</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'A Negative') {
                                                echo 'selected';
                                            }
                                            ?> >A Negative</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'B Positive') {
                                                echo 'selected';
                                            }
                                            ?> >B Positive</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'B Negative') {
                                                echo 'selected';
                                            }
                                            ?> >B Negative</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'AB Positive') {
                                                echo 'selected';
                                            }
                                            ?> >AB Positive</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'AB Negative') {
                                                echo 'selected';
                                            }
                                            ?> >AB Negative</option>
                                            <option <?php
                                            if (trim($row['med_info_bloodtype']) == 'Not Known') {
                                                echo 'selected';
                                            }
                                            ?> >Not Known</option>
                                        </select>
                                    </td>
                                    <td class="">
                                        <h4 id="mlhsmartphonetext"><?php echo $language->birth_month; ?></h4>
                                        <!--<h4><?php /*echo $language->birth_month; */?></h4>-->
                                        <select name="med_info_birthmonth"  onchange="medformfil();" class="form-control">
                                            <option> </option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Jan') {
                                                echo 'selected';
                                            }
                                            ?> >Jan</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Feb') {
                                                echo 'selected';
                                            }
                                            ?> >Feb</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Mar') {
                                                echo 'selected';
                                            }
                                            ?> >Mar</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Apr') {
                                                echo 'selected';
                                            }
                                            ?> >Apr</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'May') {
                                                echo 'selected';
                                            }
                                            ?> >May</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Jun') {
                                                echo 'selected';
                                            }
                                            ?> >Jun</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Jul') {
                                                echo 'selected';
                                            }
                                            ?> >Jul</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Aug') {
                                                echo 'selected';
                                            }
                                            ?> >Aug</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Sep') {
                                                echo 'selected';
                                            }
                                            ?> >Sep</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Oct') {
                                                echo 'selected';
                                            }
                                            ?> >Oct</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Nov') {
                                                echo 'selected';
                                            }
                                            ?> >Nov</option>
                                            <option <?php
                                            if (trim($row['med_info_birthmonth']) == 'Dec') {
                                                echo 'selected';
                                            }
                                            ?> >Dec</option>
                                        </select>
                                    </td>
                                    <td class="pad5-left" style="width: 22%;">
                                        <h4 id="mlhsmartphonetext2"><?php echo $language->birth_year; ?></h4>
                                        <!--<h4><?php /*echo $language->birth_year; */?></h4>-->
                                        <input type="text" onchange="medformfil();" class="form-control" name="med_info_birthyear" placeholder="Year" value="<?php echo $row['med_info_birthyear']; ?>" />
                                    </td>
                                    <td class="pad5-left" style="width: 28%;">
                                        <h4><?php echo $language->Sex; ?></h4>
                                        <select class="form-control" onchange="medformfil();" name="med_info_sex">
                                            <option value="">-</option>
                                            <option value="Male" <?php echo $row['med_info_sex'] == 'Male' ? 'selected' : ''; ?>><?php echo $language->sex_male; ?></option>
                                            <option value="Female" <?php echo $row['med_info_sex'] == 'Female' ? 'selected' : ''; ?>><?php echo $language->sex_female; ?></option>
                                            <option value="Others" <?php echo $row['med_info_sex'] == 'Others' ? 'selected' : ''; ?>><?php echo $language->Other; ?></option>
                                        </select>
                                    </td>                     
                                </tr>

                            </table>
                            <!-------------------->
                            <div class="gap5y"></div>
                            <div>
                                <table class="table-mr1">
                                    <tr>
                                        <td class="pad5-right" style="width: 35%;">
                                            <h4 class="mlhmedtitle"><?php echo $language->Height; ?></h4>
                                            <input type="text" style="width: 50%; display: inline;" name="med_info_height" value="<?php echo $row['med_info_height']; ?>" class="form-control" />
                                            <select style="width: 45%; display: inline;" name="med_info_height_unit" onchange="medformfil();" class="form-control" >
                                                <option value="">-</option>
                                                <option value="cm" <?php echo $row['med_info_height_unit'] == 'cm' ? 'selected' : ''; ?>>cm</option>
                                                <option value="feet" <?php echo $row['med_info_height_unit'] == 'feet' ? 'selected' : ''; ?>>ft' in"</option>
                                            </select>
                                        </td>
                                        <td class="" style="width: 35%;">
                                            <h4 class="mlhmedtitle"><?php echo $language->Weight; ?></h4>
                                            <input type="text" style="width: 50%; display: inline;" name="med_info_weight" onchange="medformfil();" value="<?php echo $row['med_info_weight']; ?>" class="form-control" />
                                            <select style="width: 45%; display: inline;" name="med_info_weight_unit" onchange="medformfil();" value="<?php echo $row['med_info_weight_unit']; ?>" class="form-control">
                                                <option value="">-</option>
                                                <option value="lbs" <?php echo $row['med_info_weight_unit'] == 'lbs' ? 'selected' : ''; ?>>lbs</option>
                                                <option value="kg" <?php echo $row['med_info_weight_unit'] == 'kg' ? 'selected' : ''; ?>>kg</option>
                                            </select>
                                        </td>
                                        <td class="pad5-left" style="width: 30%;">
                                            <h4 class="mlhmedtitle"><?php echo $language->Eyecolor; ?></h4>
                                            <select class="form-control" onchange="medformfil();" name="med_info_eyecolor">
                                                <option value="">-</option>
                                                <option value="Black" <?php echo $row['med_info_eyecolor'] == 'Black' ? 'selected' : ''; ?>><?php echo $language->eye_black; ?></option>
                                                <option value="Brown" <?php echo $row['med_info_eyecolor'] == 'Brown' ? 'selected' : ''; ?>><?php echo $language->eye_brown; ?></option>
                                                <option value="Blue" <?php echo $row['med_info_eyecolor'] == 'Blue' ? 'selected' : ''; ?>><?php echo $language->eye_blue; ?></option>
                                                <option value="Green" <?php echo $row['med_info_eyecolor'] == 'Green' ? 'selected' : ''; ?>><?php echo $language->eye_green; ?></option>
                                                <option value="Gray" <?php echo $row['med_info_eyecolor'] == 'Gray' ? 'selected' : ''; ?>><?php echo $language->eye_gray; ?></option>
                                                <option value="Other" <?php echo $row['med_info_eyecolor'] == 'Other' ? 'selected' : ''; ?>><?php echo $language->Other; ?></option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                
                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->vaccines_n_immunizations; ?></h4>
                                <textarea id="med_info_vaccines" onchange="medformfil();" name="med_info_vaccines" class="form-control capitalized"  placeholder="<?php echo $language->med_enter_type; ?>" rows="3"><?php echo $row['med_info_vaccines']; ?></textarea>
                                
                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->Medical_Details; ?> <font class='red'>(<?php echo $language->requires_pin_to_view_2; ?>)</font></h4>
                                <textarea id="txtmedicalinfoafterpin" onchange="medformfil();" name="medical_detail_after_pin" class="form-control capitalized" placeholder="<?php echo $language->med_example_history; ?>" rows="3"><?php echo $row['medical_detail_after_pin']; ?></textarea>

                                <div class="gap5y"></div>
                                <div class="text-center">
                                    <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                    <input type="hidden" value="0" name="chk_change"/>
                                    <button value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->back; ?><!--BACK--></button>
                                    <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?><!--EXIT--></button>
                                    <?php
                                    if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                    {
                                        ?>
                                        <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                    <?php
                                    }
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                    <button value="<?php echo $tab_index++;?>" id="nextmedformfill" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?><!--NEXT--></button>
                                </div>
                        </form>
                    </fieldset>
                </div>
                <!------------------------------------------------------>

                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="personal">
                    <fieldset>
                        <form action="<?php echo base_url(); ?>home/info" method="post">
                            <legend class="text-center"><?php echo $language->Personal_Info; ?></legend>
                            <div id="personalinfowithoutpin">
                                <div class="gap5y"></div>
                                <h4><?php echo $language->Hometown; ?> </h4>
                                <textarea id="txthometown" onchange="performfil();" name="personal_info_hometown" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['personal_info_hometown']; ?></textarea>
                                
                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->Nationality." / ".$language->Passport_Visas; ?></h4>
                                <!--input type="text" name="personal_info_nationality" class="form-control" onkeyup="expandtext(this);" value="<?php echo $row['personal_info_nationality']; ?>"/-->
                                <textarea name="personal_info_nationality" id="per_inf_nation" onchange="performfil();" class="form-control" placeholder="" rows="3"><?php echo $row['personal_info_nationality']; ?></textarea>

                                <!--
                                Please don't Delete. It may need later
                                <div class="gap5y"></div>
                                <h4>Passport / Visas</h4><div class="gap5y"></div>
                                <textarea id="txtpassport" name="personal_info_passport" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['personal_info_passport']; ?></textarea>-->
                                
                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->Languages; ?></h4>
                                <textarea id="txtlanguages" onchange="performfil();" name="personal_info_languages" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['personal_info_languages']; ?></textarea>
                                
                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->Religion_Congregation." / ".$language->Diet_or_Food_Restrictions; ?></h4>
                                <textarea id="txtreligion" onchange="performfil();" name="personal_info_religion" class="form-control capitalized" placeholder="" rows="3"><?php echo $row['personal_info_religion']; ?></textarea>

                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->Other; ?> </h4>
                                <textarea id="txtotherpersonalinfo" onchange="performfil();" name="personal_info_other" class="form-control capitalized" rows="2" placeholder="<?php echo $language->p_info_other; ?>"><?php echo $row['personal_info_other']; ?></textarea>

                                <div class="gap5y"></div>
                                <h4 class="mlhmedtitle"><?php echo $language->Personal_Details; ?> <font class='red'>(<?php echo $language->requires_pin_to_view_2; ?>)</font></h4>
                                <textarea id="txtpersonalinfoafterpin" onchange="performfil();" name="personal_detail_after_pin" class="form-control capitalized" placeholder="<?php echo $language->private_personal_details; ?>" rows="3"><?php echo $row['personal_detail_after_pin']; ?></textarea>

                            </div>
                            <div class="gap5y"></div>
                            <div class="text-center">
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <input type="hidden" value="0" name="chk_change"/>
                                <button value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nextperformfil" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                    </fieldset>
                </div>
                
                <!------------------------------------------------------>




                <!-- Mozammel Works for Help -->
                <?php if($row['isalldone']==0){$help_tab_index=11;}else{$help_tab_index=10;} ?>
                <div class="tab-pane fade<?php echo $flag == $help_tab_index ? ' in active' : ''; /*echo "flag:".$flag." tab_index:".$tab_index;*/ ?>  text-center" id="help">
                    <!--<div class="gap5y underline"></div>-->
                    <h4 class="bold"><?php echo $language->In_Emergency; ?></h4>
                    <!-- <div id="pin_check_help" class="display_none pin_check">
                         <h1>Mozammel Haque pin</h1>
                     </div>-->
                    <?php
                    /*Rodrigo Code Start Here */
                    // Get user's country
                    $countryCode = ip_info($_SERVER["REMOTE_ADDR"], "countryCode"); // Production
                    //$countryCode = ip_info("<ANY IP ADDRESS>", "countryCode"); // Development, use https://www.whatismyip.com/ to find current IP address for testing
                        if(!empty($countryCode)){

                        //$emergencyNumbers = $this->countries_model->get_emergency_numbers_by_code($countryCode);
                            $this->db->select('police_number, ambulance_number, fire_number');
                            $this->db->from('country');
                            $this->db->where('code', $countryCode);
                            $query = $this->db->get();
                            $emergencyNumbers = $query->row_array();
                        //$emergencyNumbers = $this->countries_model->get_emergency_numbers_by_code("BD");
                        //var_dump($emergencyNumbers);
                        if(count($emergencyNumbers) > 0){
                        if(array_key_exists('ambulance_number', $emergencyNumbers)){
                        $emergency_number = $emergencyNumbers['ambulance_number'];
                        }
                        elseif(array_key_exists('police_number', $emergencyNumbers)){
                        $emergency_number = $emergencyNumbers['police_number'];

                        }
                        elseif(array_key_exists('fire_number', $emergencyNumbers)){
                        $emergency_number = $emergencyNumbers['fire_number'];
                        }
                        else {
                        $emergency_number = "911";
                        }
                        }


                        //echo var_dump($emergency_number);
                        }

                        if(empty($emergency_number)){$emergency_number="911";}  //added by Mozammel to prevent blank button name
                        /*Rodrigo Code Ends Here */
                    ?>
                    <!--<button onclick="altmlh()" class="btn btn-sm btn-danger btn-outline" name="mlhcall" style="font-size: 30px; background-color: red; border-color: red; color: #fff;">911</button>-->
                    <button onclick="altmlh(<?php echo $emergency_number; ?>)" class="btn btn-sm btn-danger btn-outline" name="mlhcall" id="emergency_number" style="font-size: 30px; background-color: red; border-color: red; color: #fff;"><?php echo $emergency_number; ?></button>
                    <a href="<?= base_url('home/nearby_hospitals') ?>" class="btn btn-sm btn-danger btn-outline"style="font-size: 14px; background-color: red; border-color: red; color: #fff; padding: 6px 4px 7px 4px;" id="care-locations-btn" target="_blank">Nearby<br />Hospitals</a>
                    <!--<h1>Mozammel Haque</h1>-->
                    <div class="gap5y"></div>
                    <style>
                        @media (min-width:600px){
                            .help_button{
                                white-space: normal;
                                width: 24%;
                                min-height: 95px;
                                background-color: red;
                                border-color: red;
                                color: #fff !important;
                                margin: 2.5px 0;
                                padding: 5px;
                                font-size: 115%;


                            }
                            .help_button:hover{
                                white-space: normal;
                                background-color: #fff;
                                border-color: red;
                                color: red !important;
                            }
                        }
                        @media (max-width:599px){
                            .help_button{
                                white-space: normal;
                                width: 32%;
                                min-height: 90px;
                                background-color: red;
                                border-color: red;
                                color: #fff !important;
                                margin: 2.5px 0;
                                padding: 5px;
                                font-size: 105%;
                            }
                            .help_button:hover{
                                white-space: normal;
                                background-color: #fff;
                                border-color: red;
                                color: red !important;
                            }
                            .hide_tab{display: none;}

                        }
                        .btn-sq-lg {
                            width: 150px !important;
                            height: 100px !important;
                        }
                        .btn-mlh{ background-color: red; color: #ffffff; padding: 5px; margin:5px; }
                        .btn-mlh:hover{ background-color:#ffffff; color: red; padding: 5px;
                            border-color: red;}
                        .mlh{padding-top: 13px;}
                    </style>
                    <div class="text-center">
                        <a href="http://www.ordermedicalrecords.com" target="_blank" id="collect_your_records" class="btn help_button mlh">Collect<br/>Your<br/>Records</a>
                        <a href="http://www.worldcare.com" target="_blank" id="export_second_opinion" class="btn help_button mlh">Expert<br/>Second<br/>Opinion</a>
                        <a href="http://www.zocdoc.com" target="_blank" id="local_doctors_appointment" class="btn help_button mlh">Local<br/>Doctors<br/>Appointment</a>
                        <a href="http://www.meMD.com" target="_blank" id="immediate_doctor_by_video" class="btn help_button mlh">Immediate<br/>Doctor<br/>by Video</a>
                        <a href="http://www.idoc24.com" target="_blank" id="skin_exam_online" class="btn help_button mlh">Skin<br/>Exam<br/>Online</a>
                        <a href="http://www.privatemdlabs.com" target="_blank" id="private_lab_tests" class="btn help_button mlh">Private<br/>Lab<br/>Tests</a>
                        <a href="http://www.express-scripts.com" target="_blank" id="next_day_prescription_refills" class="btn help_button mlh">Next Day<br/>Prescription<br/>Refills</a>
                        <a href="http://www.medisafe.com" target="_blank" id="medicine_reminder_service" class="btn help_button mlh">Medicine<br/>Reminder<br/>Service</a>
                        <a href="http://www.saveonmedical.com" target="_blank" id="local_xray_mri_n_catscan" class="btn help_button mlh">Local<br/>XRay MRI<br/>& Catscan</a>
                        <a href="http://www.amazon.com" target="_blank" id="amazon_medical_equipment" class="btn help_button mlh">Amazon<br/>Medical<br/>Equipment</a>
                        <a href="" onclick="return false" target="_blank" id="health_advocate_coming" class="btn help_button mlh">Health<br/>Advocate<br/>'Coming'</a>
                        <a href="" onclick="return false" target="_blank" id="medical_trials_coming" class="btn help_button mlh">Medical<br/>Trials<br/>'Coming'</a>
                        <a href="http://www.Betterhelp.com" target="_blank" id="mental_health" class="btn help_button mlh">Mental<br/>Health<br/>Aid</a>
                        <a href="http://www.23andMe.com" target="_blank" id="dna_testing" class="btn help_button mlh">DNA<br/>Testing<br/>Kits</a>
                        <a href="http://www.mayoclinic.org/symptom-checker/select-symptom/itt-20009075" target="_blank" id="symptom_diagnosis" class="btn help_button mlh">Symptom<br/>Diagnosis<br/>App</a>
                        <a href="" onclick="return false" target="_blank" id="insurance_assistance_coming" class="btn help_button mlh hide_tab">Insurance<br/>Assistance<br/>'Coming'</a>
                        <!--<a href="" onclick="return false" target="_blank" id="medical_trials_coming" class="btn help_button mlh">Medical<br/>Trials<br/>'Coming'</a>-->





                        <!--<a href="#" class="btn btn-sq-lg btn-mlh">Demo Danger <br>Button</a>
                        <a href="#" class="btn btn-sq-lg btn-mlh">Demo Danger <br>Button</a>
                        <a href="#" class="btn btn-sq-lg btn-mlh">Demo Danger <br>Button</a>
                        <a href="#" class="btn btn-sq-lg btn-mlh">Demo Danger <br> Button fsdfas<br> dfsad fsdfds</a>-->
                    </div>

                    <div class="text-center">
                        <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                        <input type="hidden" value="0" name="chk_change"/>
                        <!--<button id="back_from_doctor" value="<?php /*echo $tab_index;*/?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php /*echo $language->back; */?></button>
                        -->
                        <!--<button name="btn_view_profile" type="button" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>-->
                        <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php /*echo $row['isalldone'] != 1 ? 'style="display: none"' : ''; */?>><?php /*echo $language->exit; */?></button>
                        -->
                        <!-- This will resolve the success message when finising input mode -->
                        <?php if($row['isalldone'] == 0): ?>
                            <button id="myBtn" class="btn btn-outline btn-red btn-danger btn-primary clearfix pp"  style="background-color: red; color: white;"><?php echo $language->input_finish; ?></button>
                            <button value="done" name="done" id="done"  type="button" style="background-color: red; color: white; display: none;" class="btn btn-outline btn-red btn-danger btn-primary clearfix pp"><?php echo $language->input_finish; ?></button>
                        <?php else: ?>
                            <button value="done" name="done" id="done"  type="button" style="background-color: red; color: white;" class="btn btn-outline btn-red btn-danger btn-primary clearfix pp"><?php echo $language->input_finish; ?></button>
                        <?php endif; ?>
                        <!--<button id="myBtn">Open Modal</button>-->
                    </div>
                </div>

                <div class="modal fade" id="inputModeFinishModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="text-center">
                                    <img style="width: 200px; height: auto;" src="<?= base_url('images/email_logo.png') ?>" alt="MyHealth.US">
                                </div>
                                <div class="text-center" style="font-size: 18px; font-family: arial, helvetica, sans-serif;">
                                    <p>CONGRATULATIONS</p>

                                    <h3>YOUR LIFECODE IS ACTIVATED</h3>

                                    <p>PLEASE REMEMBER TO:</p>

                                    <p>1. UPDATE PROFILE INFORMATION<br/>Go To www.MR1.Us/<?=$subdomain?> and Enter your PIN and Password to edit Information, change Reminders and add Files and Photos</p>

                                    <p>2. REPLY TO REMINDERS BY TEXT AND EMAIL<br/>to quickly add Diary Entries, Files and Photos</p>

                                    <p>3. ADD LIFECODE ICON TO YOUR HOMESCREEN<br/>for fast access from your phone.<br/><span onclick="show_android_instruction()">Click Here for Android</span> or iPhone bookmark Instructions</p>

                                    <p id="android_instruction" style="display: none;">For Android:<br/>Go to www.MR1.Us/<?=$subdomain?><br/>and click three dots in top right of Chrome browser.<br/>Select "Add to Homescreen"</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-search-red btn-danger" type="button" id="btnContinueInputModeFinish">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script type="text/javascript">

                    $(document).ready(function(){

                        $("#btnContinueInputModeFinish").click(submit_done);

                        $("#myBtn").click(function(){
                            $("#inputModeFinishModal").modal("show");
                        });

                    });

                    function submit_done()
                    {
                        $( "#done" ).trigger( "click" );
                    }

                    // To Show Android Instruction in Finish Message.
                    function show_android_instruction()
                    {
                        $("#android_instruction").show();
                    }

                    function altmlh(number)
                    {
                        window.location = "tel:"+number;
                    }

                    $("#emergency_number").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "emergency_number" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });
                    $("#care-locations-btn").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "nearby_hospital" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });
                    /* Admin Notification Email when Help Box Clicked Start */
                    $("#collect_your_records").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "collect_your_records" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });

                    $("#export_second_opinion").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "export_second_opinion" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });

                    $("#local_doctors_appointment").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "local_doctors_appointment" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });

                    $("#immediate_doctor_by_video").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "immediate_doctor_by_video" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });

                    $("#skin_exam_online").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "skin_exam_online" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });
                        //alert("Go To Google?");
                    });

                    $("#private_lab_tests").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "private_lab_tests" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#next_day_prescription_refills").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "next_day_prescription_refills" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#medicine_reminder_service").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "medicine_reminder_service" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#local_xray_mri_n_catscan").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "local_xray_mri_n_catscan" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#amazon_medical_equipment").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "amazon_medical_equipment" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#health_advocate_coming").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "health_advocate_coming" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#medical_trials_coming").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "medical_trials_coming" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#mental_health").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "mental_health" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#dna_testing").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "dna_testing" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#symptom_diagnosis").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "symptom_diagnosis" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                    $("#insurance_assistance_coming").click(function(){

                        $.ajax({
                            url:"<?php echo base_url(); ?>"+"home/help_notification",
                            type:"POST",
                            data:{ subdomain: "<?php echo $subdomain; ?>", button: "insurance_assistance_coming" },
                            //dataType: "json",
                            success:function(result){
                                //alert("Hi OK");
                                //alert(result);
                            },
                            error: function(e){
                                //alert("Failed");
                            }
                        });

                    });

                /* Admin Notification Email When Help Box Clicked End */
                </script>

                <!-- End of Tab Content -->
                <!-- Mozammel Works for Help -->

                <!------------------------------------------------------>

                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="files">
                    <div>
                        <legend class="text-center" style="margin-bottom:3px;"><?php echo $language->Medical_Files; ?></legend>
                        <form id="frm_medical_file" action="" method="post" enctype="multipart/form-data" data-upload-url="<?php echo base_url(); ?>health_records/med_file_upload" data-mode="edit" data-delete-url="<?php echo base_url('health_records/med_file_delete'); ?>" data-update-url="<?php echo base_url('health_records/med_file_edit'); ?>" data-base-url="<?php echo base_url(); ?>">
                            <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="customer_id"/>
                            <input type="hidden" value="<?php echo $row['email']; ?>" name="email"/>
                            <div class="text-center"> <span style="color: #ff0000;"><?php echo $language->uploaded_file_require_pin; ?></span>
                                <div class="gap5y" style="padding-bottom: 2px;"></div>
                                <span class="btn btn-success btn-file" style="margin-bottom: -10px;">
                                    <span id="btn-title"><?php echo $language->add_file; ?></span>
                                    <input type="file" name="med_file_upload" id="med_file_upload" />
                                    <input type="hidden" name="med_file_name" id="med_file_name" />
                                </span>

                                <a class="btn btn-success" style="margin-bottom: -10px;" href="<?php echo base_url('health_records/provider_search'); ?>" target="_blank" title="Send Form to Your Doctor to Request Copy of Your Medical Files"><?php echo $language->request_pwd; ?></a>

                            </div>
                            <div class="gap5y"></div>
                            <div id="invalid_medfile_size" style="margin-top: 15px;" class="col-sm-12 alert alert-danger text-center display_none capitalized">
                            <?php echo $language->file_is_too_large_10_mb_limit; ?>
                            </div>
                            <div id="duplicate_msg" style="margin-top: 10px;" class="col-sm-12 alert alert-danger text-center display_none capitalized">
                                <?php echo $language->you_cant_upload_file_same_name;  ?>
                            </div>
                            <div class="gap5y"></div>
                            <div id="progress_status" style="margin-top: 10px;" class="display_none text-center">0%</div>
                        </form>

                        <div class="gap5y" style="padding-top: 5px; margin-bottom: -15px;">&nbsp;</div>
                        <form action="<?php echo base_url(); ?>home/info" method="post">
                            <div id="filelist">
                                <?php foreach ($files as $file): ?>
                                <div class='file col-sm-12 col-md-12 edit-mode-medfile-row'>
                                    <div class="pull-right" style="margin-right: -15px">
                                        <i class="glyphicon glyphicon-pencil btn_edit_file" style="cursor: pointer;" id="medfile-<?= $file['id'] ?>"></i>
                                        <i class="glyphicon glyphicon-remove btn_del_file" data-fileid="<?= $file['id'] ?>"></i>&nbsp;&nbsp;
                                    </div>
                                    <a class='m_files wrap_word' data-filename="<?= $file['filename'] ?>" download href="../medical_file/<?= $row['subdomain'] . "/" . $file['filename'] ?>" data-file-id="<?= $file['id'] ?>">
                                    <?= $file['filename'] ?>
                                    </a>
                                    <div class='clearfix clear'></div>
                                </div>
                                <?php endforeach; ?>
                            </div>                            
                            <div class="gap5y"></div>
                            <div class="text-center">
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <button value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nextmedfileadd" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!------------------------------------------------------>
                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="diary">
                    <fieldset>
                        <legend class="text-center" style="margin-bottom:3px;"><?php echo $language->Personal_Health_Diary; ?></legend>
                        <form id="done_form" action="<?php echo base_url(); ?>home/info" method="post">
                            <div>
                                <div class="text-center"> <span style="color: #ff0000;"><?php echo $language->diary_require_pin; ?><!--All Diary Require PIN To View--></span>
                                    <div class="gap5y"></div>


                                    <?php


                                    //Mozammel daylight Time Saving Scheduler
                                    $dst=0;
                                    //Daylight Saving Time Scheduler

                                    if($timezone_info->start_date!="0000-00-00" && $timezone_info->end_date!="0000-00-00")
                                    {
                                        date_default_timezone_set ( 'UTC' );
                                        $newtime = time() + ($timezone_info->value * 60 * 60)+($timezone_info->minute*60);

                                        $currentTime = date('Y-m-d',$newtime);
                                        $current_year = date('Y',$newtime);
//echo $currentTime;
//if today is under dst period
                                        if($currentTime >= $timezone_info->start_date && $currentTime <= $timezone_info->end_date)
                                        {

                                            $dst=$timezone_info->use_daylight_time;

                                        }//if today is not under dst period
                                        else
                                        {
// check the last update year
                                            if($timezone_info->last_update != $current_year)
                                            {
//increment of all information by 1
                                                function increase_date_year($date)
                                                {
                                                    $dt=explode("-", $date);
                                                    $dt[0]=$dt[0]+1;
                                                    return $dt[0]."-".$dt[1]."-".$dt[2];
                                                }
                                                $mlh_dst_update= array();
                                                $mlh_dst_update['last_update'] = $timezone_info->last_update+1;
                                                $mlh_dst_update['start_date'] = increase_date_year($timezone_info->start_date);
                                                $mlh_dst_update['end_date'] = increase_date_year($timezone_info->end_date);
                                                $mlh_dst_update['id'] = $timezone_info->id;
                                                $this->mr_model->update_dst_schedule($mlh_dst_update);

                                            }
                                        }
                                    }

                                    ?>
                                    <div style="margin-top: 05px;">
                                        <button value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix pp" style="margin-bottom: 0px; margin-top: 5px;"><?php echo $language->back; ?></button>
                                        <button class="btn btn-success" style="margin-bottom: 0px; margin-top: 5px;" id="add_diary"><?php echo $language->add_entry_diary; ?></button>
                                        <button  class="btn btn-success icon-instruction" title="<?php echo $language->send_instruction; ?>" id="btn_activate_blog2" style="margin-top:5px;"></button>
                                        <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                        <button value="<?php echo $tab_index;?>" id="nextdiaryadd" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;margin-bottom: 0px; margin-top: 5px;"><?php echo $language->next; ?></button>
                                    </div>

                                    <div>
                                        <?php
/*                                        $class = 'display_none';
                                        if ($row['blog_request_sended'] == 0) { */?><!--
                                            <button  class="btn btn-success" id="btn_activate_blog" style="margin-top:15px;"><?php /*echo $language->send_instruction; */?></button>
                                        --><?php /*} else {
                                            $class = '';
                                        } */?>
                                    </div>
                                    <div id="msg_blog_activate_success" class="display_none">
                                        <div class="gap5y"></div>
                                        <!--<div style="color: #ff0000;" class="">​Instructions For Using Personal Health Diary<br />Have Been Emailed To You</div>-->
                                        <div style="color: #ff0000; margin-bottom:6px;" class="">​<?php echo $language->diary_instruction_emailed_to_you;  ?></div>
                                    </div>
                                    <div id="msg_blog_activate_unsuccess" class="display_none">
                                        <div class="gap5y"></div>
                                        <div class="alert alert-success capitalized"><?php echo $language->contact_with_admin_to_activate_diary;  ?></div>
                                    </div>
                                    <div id="msg_blog_activate_unsuccess_test" class="display_none">
                                        <div class="gap5y"></div>
                                        <div class="alert alert-success capitalized">Sorry. Instructions Will Not Be Sent For Test Accounts.</div>
                                    </div>
                                    <div id="read_blog" class="<?php /*echo $class;*/ ?>" style="border-radius: 4px; padding-top: 0px;">

                                        <div id="blog_add_form2" class="display_none text-left blue-background" style="border-radius: 4px; padding-top: 7px; margin-top: 10px; padding-bottom: 10px;">
                                            <div class="gap5y"></div>
                                            
                                            <input id="sDomain" type="hidden" value="<?= $subdomain; ?>" name="subdomain"/>
                                            <input id="sEmail" type="hidden" value="<?php echo $email; ?>" name="email"/>
                                            <input id="sDst" type="hidden" value="<?= $dst; ?>" name="dst"/>
                                            <input id="sTimezone_id" type="hidden" value="<?= $timezone_info->id; ?>" name="timezone_id"/>
                                            <h6 class="pull-right" onclick="$('#blog_add_form2').hide();"><i style="color:#FF0000; font-size: 16px;" class="glyphicon glyphicon-remove"></i></h6>
                                            <br/>
                                            <div class="gap5y"></div>
                                            <input type="text" name="title" id="blog_title"  class="form-control capitalized" placeholder="<?php echo $language->diary_title; ?>" value="">

                                            <div class="gap5y"></div>
                                            <textarea name="blog_desc" id="blog_desc"  class="form-control capitalized" placeholder="<?php echo $language->diary_details; ?>" rows="3"></textarea>

                                            <div class="gap5y"></div>
                                            <div class="text-center">                      
                                                <button type="submit" id="blog_save" class="btn btn-info"><?php echo $language->save_photo; ?></button>
                                            </div>
                                        </div>
                                        <?php
                                        $display="";
                                        if(count($blog)>0)
                                        { $display="blue-background";} //echo count($blog);
                                        $display="blue-background";
                                        ?>

                                        <div id="blog_list" style="margin-top: 15px; border-radius: 5px;" class=" <?php echo $display; ?>" style="border-radius: 4px; padding-top: 10px;">
                                        <?php
//echo $blog=="";

                                        $first_blog = TRUE;
                                        foreach ($blog as $blogs) {

                                            $three_digit_timezone="UTC";
                                            $adjust_hour=0;
                                            $adjust_minute=0;
                                            
                                            if($blogs['timezone_id']!=0)
                                            {
                                                $blog_timezone= $this->mr_model->get_blog_timezone_info($blogs['timezone_id']);
                                                $three_digit_timezone=$blog_timezone->three_digit_value;
                                                $adjust_hour = $blog_timezone->value + $blogs['dst'] ;
                                                $adjust_minute= $blog_timezone->minute;
                                            }
                                            
                                            // Mozammel code edit for fractional timezone calculation
                                            $blog_publish_date = date('Y-m-d H:i:s', strtotime($blogs['publish_date'] . $adjust_hour .' hour'.$adjust_minute.'minute'));
                                            ?>
                                            <div id="blog_info_<?php echo $blogs['id']; ?>">
                                            <?php
                                            if(!$first_blog){
                                                echo '<div class="col-sm-12 blog_line pad5y"></div>';
                                            }
                                            $first_blog = FALSE;
                                            ?>
                                            <!--<div id="blog_info_<?php /*echo $blogs['id']; */?>">-->
                                            <div class="col-sm-12 pad5y"></div>
                                            <div class="pull-right">
                                                <i blog_id="<?php echo $blogs['id']; ?>" class='glyphicon glyphicon-pencil blog_edit'></i>&nbsp;&nbsp;
                                                <i id="<?php echo $blogs['id']; ?>" class='glyphicon glyphicon-remove blog_remove'></i>
                                            </div>
                                            <?php if(strlen($blogs['title']) > 0): ?>                                            
                                            <div class="bold blog">
                                                <?php echo $blog_publish_date." ".$three_digit_timezone.""; ?> <?php echo "&nbsp;&nbsp;&nbsp;"; ?>
                                                <span id="plain_title_<?= $blogs['id']; ?>"><?= $blogs['title'] ?></span>
                                            </div>
                                            <?php else: ?>
                                            <div class="bold blog">
                                                <?php echo $blog_publish_date." ".$three_digit_timezone.""; ?>
                                                <span id="plain_title_<?= $blogs['id']; ?>"><?= $blogs['title'] ?></span>
                                            </div>
                                            <?php endif; ?>
                                            <div>
                                                <div id="plain_desc_<?php echo $blogs['id']; ?>" class="blog"><?php echo nl2br($blogs['description']); ?></div>
                                            </div>

                                            <div class="row"></div>

                                            <div id="blog_edit_form_<?php echo $blogs['id']; ?>" class="display_none text-left" style="padding-bottom: 10px;">
                                                <div class="gap5y"></div>
                                                <span class="bold"><?php echo $language->diary_title; ?></span>
                                                
                                                <div class="gap5y"></div>
                                                <input type="text" name="email" id="blog_title_<?php echo $blogs['id']; ?>" class="form-control capitalized" placeholder="" value="<?php echo $blogs['title']; ?>">
                                                
                                                <div class="gap5y"></div>
                                                <span class="bold"><?php echo $language->diary_details; ?></span>
                                                
                                                <div class="gap5y"></div>
                                                <textarea id="blog_desc_<?php echo $blogs['id']; ?>" name="" class="form-control capitalized" placeholder="" rows="2"><?php echo $blogs['description']; ?></textarea>
                                                
                                                <div class="gap5y"></div>
                                                <div class="text-center">
                                                <button data-blog_id="<?php echo $blogs['id']; ?>" id="blog_save_<?php echo $blogs['id']; ?>" class="btn btn-primary blog_update"><?php echo $language->save_photo; ?></button>
                                                </div>
                                            </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="text-center">
                                <div class="gap5y"></div>
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <button value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix pp"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nextdiaryadd" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                    </fieldset>
                </div>
                <!------------------------------------------------------>
                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="photos">
                    <fieldset>
                        <legend class="text-center" style="margin-bottom:4px;"><?php echo $language->photo_journal; ?> </legend>
                        <form id="frm_photo_file" action="" method="post" enctype="multipart/form-data" data-upload-url="<?php echo base_url(); ?>photo-journal/photo_file_upload" data-mode="edit" data-delete-url="<?php echo base_url('photo-journal/photo_delete'); ?>" data-update-url="<?php echo base_url('photo-journal/photo_edit'); ?>" data-base-url="<?php echo base_url(); ?>">
                            <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="customer_id"/>
                            <input type="hidden" value="<?php echo $row['email']; ?>" name="email"/>
                            <div class="text-center" style="margin-top:-3px;"> <span style="color: #ff0000;"><?php echo $language->all_photo_require_pin; ?><!--All Photos Require PIN To View--></span>
                                <div class="gap5y"></div>
                                <!--                All Uploaded Files Require PIN To View<br/>-->
                                <div class="row">
                                <div style="margin-bottom:8px !important" id="invalid_extention" class="col-sm-6 col-sm-offset-3 alert alert-danger display_none ">
                                <!--Please Upload Photos Saved As JPG, PNG Or GIF.-->
                                    <?php echo $language->use_photo_saved_as_jpg; ?>
                            </div>
                                </div>
                            <div style="margin-bottom:8px !important; margin-top: -1px;" id="invalid_size" class="col-sm-12 alert alert-danger text-center gap10y display_none capitalized">
                                <!--Photo Is Too Large (10MB limit). Please Resize And Retry.-->
                                <?php echo $language->file_is_too_large_10_mb_limit; ?>
                            </div>
                                <div style="margin-bottom:8px !important" id="progress_status_photo" class="display_none text-center">0%</div>
                                <span style="margin-top: 5px;" class="btn btn-success btn-file">
                                    <span id="btn-title"><?php echo $language->add_photo_journal;  ?></span>
                                    <input type="file" name="photo_file_upload" id="photo_file_upload" />
                                    <input type="hidden" name="photo_file_name" id="photo_file_name" />
                                </span>
                            </div>
                            
                            <div class="gap5y"></div>
                            <div id="duplicate_msg_photo" class="display_none alert alert-danger">You Can Not Upload File With Same Name</div>
                            
                            <div class="gap5y"></div>
                        </form>

                        <div class="gap5y"></div>
                        <form action="<?php echo base_url(); ?>home/info" method="post">
                            <div class="container-fluid">
                                <div class="row" id="filelist_photo">
                                <?php foreach ($photoGroups as $phGroup): ?>
                                    <div class="row">
                                    <?php foreach ($phGroup as $photo): ?>
                                    <?php 
                                        $fileName = base_url() . 'photo_journal/' . strtoupper($subdomain) . '/' . rawurlencode($photo['filename']);

                                        $size = getimagesize($fileName);
                                        $sourceWidth = $size[0];
                                        $sourceHeight = $size[1];
                                        $targetWidth = 80;
                                        $targetHeight = 70;
                                        
                                        $ratio = imageRatio($sourceWidth,$sourceHeight,$targetWidth,$targetHeight);                             
                                        
                                        $height = $ratio['height'];
                                        $width = $ratio['width'];
                                        $singleFile = $photo['filename'];
                                        
                                        if (stristr($_SERVER['HTTP_USER_AGENT'], 'iphone') || strstr($_SERVER['HTTP_USER_AGENT'], 'iphone')) {
                                            $device = "iphone";
                                            $fnam=substr($photo['filename'], 0, 15);
                                        }
                                        elseif(stristr($_SERVER['HTTP_USER_AGENT'], 'android') || strstr($_SERVER['HTTP_USER_AGENT'], 'android')) {
                                            $device = "android";
                                            $fnam=substr($photo['filename'], 0, 15);
                                        }
                                        else{
                                            $fnam=$photo['filename'];
                                        }

                                        echo '' . '
                                        <div id="pj-photo-'.$photo['photo_journal_id'].'" data-file-id="' . $photo['photo_journal_id'] . '" class="text-left col-lg-3 col-sm-6 col-xs-6 gap5y p_files" data-filename="' . $photo['filename'] . '">' . 
                                        '   <a target="_blank" title="" href="../photo_journal/' . $row['subdomain'] . '/' . $photo['filename'] . '" class="a_url">' .
                                        '       <img style="margin: 0" width="'.$width.'" height="'.$height.'" class="thumbnail img-responsive1" src="../photo_journal/' . $row['subdomain'] . '/' . $photo['filename'] . '">' . 
                                        '   </a>' . 
                                        '   <a style="word-wrap:break-word;" target="_blank" href="../photo_journal/' . $row['subdomain'] . '/' . $photo['filename'] . '" data-toggle="tooltip" title="'.$photo['filename'].'" class="a_tooltip">'.($fnam) .
                                        '   </a>&nbsp;' .
                                        '   <i data-photo-journal-id="'.$photo['photo_journal_id'].'" class="glyphicon glyphicon-pencil pj_photo_edit" data-photo-id="' . $photo['photo_journal_id'] . '"></i>' . 
                                        '   <div class="cross">' . 
                                        '       <i id="'.$photo['photo_journal_id'].'" class="glyphicon glyphicon-remove pj_photo_remove" data-photo-id="' . $photo['photo_journal_id'] . '"></i>' . 
                                        '   </div>' . 
                                        '</div>';
                                    ?>
                                    <?php endforeach; ?>    
                                    </div>
                                <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <button value="<?php echo $tab_index; ?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nextphotojournal" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                    </fieldset>
                </div>
                <!-- Start Doctors -->
                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="doctors">
                    <fieldset>
                        <legend  style="padding-bottom: 5px;"><?php echo $language->doctors; ?></legend>
                        <form name="doctors_contact_form" id="doctors_contact_form" onsubmit="return check_dr_mlh();" action="<?php echo base_url(); ?>home/info" method="post">
                            <?php
                            for ($i = 1; $i <= 32; $i++) {
                                $style = '';
                                $required_text = '';
                                if (is_array($doctor) && isset($doctor[$i - 1])) {
                                    $this_doctorid = $doctor[$i - 1]['id'];
                                    $this_doctorname = $doctor[$i - 1]['fullname'];
                                    $this_doctorphone = $doctor[$i - 1]['contact_number'];
                                    $this_doctoremail = $doctor[$i - 1]['email'];
                                    $this_doctorfax = $doctor[$i - 1]['fax'];
                                    $this_doctornote = $doctor[$i - 1]['note'];
                                    $this_doctoraddress = $doctor[$i - 1]['address'];
                                    $this_doctorallow_post = $doctor[$i - 1]['allow_post_diary'];
                                } else {

                                    $this_doctorid = '';
                                    $this_doctorname = '';
                                    $this_doctorphone = '';
                                    $this_doctoremail = '';
                                    $this_doctorfax = '';
                                    $this_doctornote = '';
                                    $this_doctoraddress = '';
                                    $this_doctorallow_post = '';
                                }
                                if ($i > count($doctor) && $i > 2) {
                                    $style = 'style="display:none;"';  /* Make It Hidden */
                                }
                                ?>
                            
                                <div class="custom doctor_inf" <?php echo $style . ' id="show_doctor' . $i . '"'; ?>> <!-- Doctor Serial Number Here -->
                                <!-- ================= Mozammel Works Starts Here ======================= -->
                                    <div style="margin-bottom: 10px;"><!-- Mozammel Works -->
                                        <div class="col-md-3 col-sm-3 col-xs-4">
                                            <h6 class="pull-left" onclick="mlh_remove_doctor(<?php echo $i; ?>,<?=$this_doctorid?>);"><i style="color:#FF0000; font-size: 16px;" class="glyphicon glyphicon-remove"></i></h6>
                                            <H4 class="pad5-left"><?php echo $language->singular_doctor; ?> <?php echo $i; ?></H4>
                                        </div>
                                        <div class="text-right text-primary">
                                            <input type="checkbox" <?php echo !$this_doctorallow_post?'':'checked';?> name="doc_chkallowemail<?php echo $i; ?>" id="doc_chkallowemail<?php echo $i; ?>" style="vertical-align: top" />
                                            <span onclick="handleCheckbox(<?= $i ?>);"><?php echo $language->can_add_file_1; ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-3 personname nopad-left">
                                        <input type="text" onchange="drcontactfilled(<?=$i?>);" <?php echo $required_text; ?> name="doctorname<?php echo $i; ?>" id="doctorname<?php echo $i; ?>" class="form-control capitalize rem_req" placeholder="<?php echo $language->dr_full_name; ?>" value="<?php echo $this_doctorname; ?>" oninvalid="this.setCustomValidity('<?php echo VALIDATE_MSG; ?>')" oninput="this.setCustomValidity('')">
                                    </div>
                                    <div class="col-md-3 personaltel nopad">
                                        <input type="tel" onchange="drcontactfilled(<?=$i?>);" placeholder="<?php echo $language->tel_doctor; ?>" name="doctorphone<?php echo $i; ?>" id="doctorphone<?php echo $i; ?>" class="form-control rem_req" value="<?php echo $this_doctorphone; ?>" pattern="[^]{1,27}" onkeypress="" <?php echo $required_text; ?> />
                                    </div>
                                    <div class="col-md-3 nopad-right">
                                        <input type="email" onchange="drcontactfilled(<?=$i?>);" placeholder="<?php echo $language->email_doctor; ?>" name="doctoremail<?php echo $i; ?>" id="doctoremail<?php echo $i; ?>" value="<?php echo $this_doctoremail; ?>" class="form-control" />
                                    </div>
                                    <div class="col-md-3 nopad-right">
                                        <input type="text" onchange="drcontactfilled(<?=$i?>);" placeholder="<?php echo $language->fax_doctor; ?>" name="doctorfax<?php echo $i; ?>" id="doctorfax<?php echo $i; ?>" pattern="[^]{1,27}" value="<?php echo $this_doctorfax; ?>" class="form-control" />
                                    </div>
                                    <script type="text/javascript">

                                        function expandtext(textArea){
                                            while (
                                            textArea.rows > 1 &&
                                            textArea.scrollHeight < textArea.offsetHeight
                                                ){
                                                textArea.rows--;
                                            }

                                            while (textArea.scrollHeight > textArea.offsetHeight)
                                            {
                                                textArea.rows++;
                                            }
                                            textArea.rows++
                                        }
                                   
                                    </script>

                                    <div class="col-sm-12 nopad-left"><!-- Mozammel Works -->
                                        <textarea  rows="3" onchange="drcontactfilled(<?=$i?>);" onkeyup="AutoGrowTextArea(this);" style="overflow-y: hidden;"  class="mlhdraddress form-control" name="doctoraddress<?php echo $i; ?>" id="doctoraddress<?php echo $i; ?>" placeholder="<?php echo $language->address_doctor; ?>"><?php echo $this_doctoraddress; ?></textarea>
                                    </div>
                                    <div class="col-sm-12 nopad-left" style="margin-bottom: 20px;">
                                        <textarea rows="3" onchange="drcontactfilled(<?=$i?>);" onkeyup="AutoGrowTextArea(this);" style="overflow-y: hidden;" class="mlhdrnote form-control" name="doctornote<?php echo $i; ?>" id="doctornote<?php echo $i; ?>" placeholder="<?php echo $language->notes_doctor; ?>"><?php echo $this_doctornote; ?></textarea>
                                    </div>
                                </div>
                                <!-- ================= Mozammel Works Ends Here ======================= -->

                            <?php } ?>
                            <script>
                                function mlh_remove_doctor(i,id){

                                    if (confirm("Are You Sure You Wish To Delete?")) {

                                     $.ajax({
                                     url: "<?php echo base_url('home/doctor_delete'); ?>",
                                     type: "post",
                                     data: {
                                     id: id
                                     },
                                     success: function(success) {
                                     if(success=="success"){
                                         alert("Doctor Contact Deleted Successfully");
                                         jQuery("#show_doctor"+i).html('');
                                     }

                                     }
                                     });
                                }

                                }
                            </script>
                            <!--div class="row gap5y"></div-->
                            <div class="text-center">
                                <!--<a class="btn btn-info" style="margin-top: -9px;" id="add_more_doctor">Add More Doctors</a>-->
                                <a class="btn btn-success" style="margin-top: -9px;" id="add_more_doctor"><?php echo $language->add_doctor; ?></a>
                            </div>
                            <div class="gap5y"></div>
                            <div class="text-center">
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <input type="hidden" value="0" name="chk_change"/>
                                <button id="back_from_doctor" value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nextdrcontact" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                        <script>


                            function check_dr_mlh()
                            {
                                for (i = 1; i < 32; i++) {
                                    //alert("hi");
                                    //alert(i);
                                    var dct_name="doctorname"+i;
                                    var name= document.forms["doctors_contact_form"][dct_name].value;
                                    var dct_email="doctoremail"+i;
                                    var email= document.forms["doctors_contact_form"][dct_email].value;
                                    if(email=="" || email==null){

                                    }else{
                                        var x=email;
                                        var atpos = x.indexOf("@");
                                        var dotpos = x.lastIndexOf(".");
                                        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                                            alert("Please Enter Valid Email Address");
                                            return false;
                                        }}

                                    var dct_phone="doctorphone"+i;
                                    var phone= document.forms["doctors_contact_form"][dct_phone].value;
                                    if(name=="" && phone==""){break;}
                                    if((name!="" || name!=null) || (phone!="" || phone!=null))
                                    {
                                        if((name=="") || (name==null) || (name==" ")){alert("Please Enter Doctor's Name"); return false;}
                                        if((phone=="") || (phone==null) || (phone==" ")){alert("Enter Doctor's Telephone Number"); return false;}
                                    }
                                }



                            }

                        </script>
                    </fieldset>
                </div>
                <!-- ----------------  End Doctors  --------------------- -->
                <!-- ----------------  Start Reminders  --------------------- -->
                <div class="tab-pane fade<?php echo $flag == $tab_index ? ' in active' : ''; ?>" id="reminders">
                    <fieldset>
                        <legend><?php echo $language->reminders; ?></legend>
                         <?php include 'reminder.php';?>
                        <form id="reminders_form" action="<?php echo base_url(); ?>home/info" method="post">
                            
                            <div class="text-center">
                           
                                <!-- <button class="btn btn-success" id="add_reminders">Add Reminder</button>-->
                                
                                
<!--                                <div class="gap5y"></div>
                                <h3 class="bold">New Features</h3>
                                <div class="gap5y"></div>
                                <h3 class="bold">Coming Soon</h3>-->
                            </div>
                            <div class="gap5y"></div>
                            <div class="text-center">
                                <div class="gap5y"></div>
                                <input type="hidden" value="<?php echo $row['subdomain']; ?>" name="subdomain"/>
                                <button value="<?php echo $tab_index;?>_back" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix pp"><?php echo $language->back; ?></button>
                                <button value="<?php echo $tab_index;?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" <?php echo $row['isalldone'] == 1 ? '' : 'style="display: none"'; ?>><?php echo $language->exit; ?></button>
                                <?php
                                if($_SERVER['REQUEST_URI']==$exit_button1 || $_SERVER['REQUEST_URI']==$exit_button2)
                                {
                                    ?>
                                    <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <?php
                                }
                                ?>
                                <!--<button value="<?php /*echo $tab_index;*/?>_exit" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix">EXIT</button>-->
                                <button value="<?php echo $tab_index++;?>" id="nexthelp" name="flag" type="submit" class="btn btn-outline btn-red btn-danger btn-primary clearfix" style="background-color: red; color: white;"><?php echo $language->next; ?></button>
                            </div>
                        </form>
                    </fieldset>
                </div>
                <!------------------End Reminders----------------------->
            </div>

</div>
<style>
    .thumbnail{
        margin-bottom: 0;
        height: 100px;
        overflow: auto;
    }
</style>
<div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: none">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<!--                <button class="close" type="button" data-dismiss="modal">×</button>-->
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div id="modalCarousel" class="carousel">
                    <div class="carousel-inner"></div>
                    <a class="carousel-control left" href="#modaCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                </div>
                <form class="contact" name="contact">
                    <div class="gap5y"></div>
                    <h4 class="">Title</h4>
                    <input type="text" required="required" name="title" id="title" class="form-control" />
                    
                    <div class="gap5y"></div>
                    <h4 class="">Photo Note</h4>
                    <textarea id="txt_pj_details" name="details" class="form-control capitalized" placeholder="Your Photo Notes" rows="2"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" value="SAVE" id="submit">
                <button class="btn btn-default" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade text-center" id="medFileModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-file-ext="" data-file-id="">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <label for="med_new_filename">Please Accept or Change File Name</label>
                    <input type="text" name="med_new_filename" id="med_new_filename" class="form-control"/>
                </div>
                <button type="button" class="btn btn-primary" id="btnChangeMedFileName" data-dismiss="modal">Ok</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnCancelMedFileName">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="photoJournalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <label for="photo_new_filename">Please Accept or Change Photo Name</label>
                    <input type="text" name="photo_new_filename" id="photo_new_filename" class="form-control"/>
                </div>
                <button type="button" class="btn btn-primary" id="btnChangePhotoFileName" data-dismiss="modal">Ok</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnCancelPhotoFileName">Cancel</button>
            </div>
        </div>
    </div>
</div>

<style>
.pj_photo_remove{
position:absolute;
}
.tooltip-inner {    
  	word-break: break-all;   
}
#personal_info{display:block;}
</style>
<script type="text/javascript">

$('.step2').hide();

$('#insert_img_inside').click(function() {
    $('#image_file').trigger('click');
});

$('#insert_img').click(function(e) {
    e.preventDefault();
    $('#image_file').trigger('click');
});

$('#skip').click(function(e) {
    e.preventDefault();
    var target = "<?php echo base_url('home/photoupdate_done'); ?>";
    var form = "<form id='up_submit' action='" + target + "' method='post'><input type='hidden' name='subdomain' value='<?php echo $row['subdomain']; ?>'/></form>";
    $('body').append(form);
    $('#up_submit').submit();
});

function customValidity(event) {
    event.target.setCustomValidity("");
    if (!event.target.validity.valid) {
        event.target.setCustomValidity("Please Enter Valid Email Address.");
    }
}

function blogRemoveItem(){
    
    var blog_id = $(this).attr("id");
        
    if (confirm("Are You Sure You Wish To Delete?")) {
        $.ajax({
            url: "<?php echo base_url('home/blog_delete'); ?>",
            type: "post",
            data: {
                blog_id: blog_id
            },
            success: function() {
                var mlhid = "#blog_info_" + blog_id;
                $(mlhid).remove();
            }
        });
    }
}

function diaryEdit(){

    var blog_edit_id = $(this).attr("blog_id");

    $('#blog_edit_form_' + blog_edit_id).slideDown();
    $('#blog_desc_' + blog_edit_id).autoResize();
    $('#blog_desc_' + blog_edit_id).keyup(AutoGrowTextArea);

    $('#blog_save_' + blog_edit_id).click(function(e) {
        e.preventDefault();
        var blog_title = $('#blog_title_' + blog_edit_id).val();
        var blog_desc = $('#blog_desc_' + blog_edit_id).val();
        if((blog_title=="" || blog_title==null) && (blog_desc=="" || blog_desc==null))
        {
            alert("Please Enter Diary Title or Description");

        }
        else{
        $.ajax({
            url: "<?php echo base_url('home/blog_update'); ?>",
            type: "post",
            data: {
                blog_title: blog_title,
                blog_desc: blog_desc,
                blog_edit_id: blog_edit_id
            },
            success: function() {
                $('#plain_title_' + blog_edit_id).text(blog_title);
                $('#plain_desc_' + blog_edit_id).text(blog_desc);
                $('#blog_edit_form_' + blog_edit_id).slideUp();
                $('#blog_info_' + blog_edit_id).show();
            }
        });
        }
    });
}

$(document).ready(function() {
    
    $('.tab_selection').each(function() {
        if ($(this).parent('li').hasClass('active')) {
            $(this).html($(this).data('text'));
        } else {
            $(this).html($(this).data('short'));
        }
    });

    $('form input').on('keypress', function(e) {
        return e.which !== 13;
    });

    $("input[type='text']").change(function() {
        $("input[name=chk_change]").val(1);
    });

    $("input[type='checkbox']").change(function() {
        $("input[name=chk_change]").val(1);
    });

    $("input[type='radio']").change(function() {
        $("input[name=chk_change]").val(1);
    });

    $(".form-control").change(function() {
        $("input[name=chk_change]").val(1);
    });

    $('#add_diary').click(function(e) {
        e.preventDefault();
        $('#blog_add_form2').show();
    });

    <?php
    //Mozammel Daylight Saving Time Scheduler
    //converting timezone title to timezone value

    preg_match('#\((.*?)\)#', $timezone_info->title, $match);
    $mlhnewtimezone = substr($match[1], 3);

    //Calculating Daylight Saving Time
    if ($dst != 0) {
        $arel = str_split($mlhnewtimezone);
        if ($arel[0] == "+") {
            if ($arel[1] == 0 && $arel[2] == 1 && $arel[0] == "-") {

            }


            $hour = $arel[1].$arel[2]; //echo $hour;
            $hour = $hour + $dst;
            if (strlen($hour) == 1) {
                $hour = "0".$hour;
            }
            $mlhnewtimezone = $arel[0].$hour.$arel[3].$arel[4].$arel[5];

        }

        if ($arel[0] == "-") {
            if ($arel[1] == 0 && $arel[2] == 1 && $arel[0] == "-") {
                $arel[0] = "+";
            }


            $hour = $arel[1].$arel[2]; //echo $hour;
            $hour = $hour - $dst;
            $hour = abs($hour);
            if (strlen($hour) == 1) {
                $hour = "0".$hour;
            }
            $mlhnewtimezone = $arel[0].$hour.$arel[3].$arel[4].$arel[5];

        }
    }

    ?>

    // Diary submit
    $('#blog_save').click(function(e) {
        e.preventDefault()
        var subdomain = $('#sDomain').val();
        var email = $('#sEmail').val();
        var dst = $('#sDst').val();
        var timezone_id = $('#sTimezone_id').val();
        var title = $.trim($('#blog_title').val());
        var desc = $.trim($('#blog_desc').val());
        var desmlh=$.trim($('#blog_desc').val()).replace(/\n/g,"<br>");
//alert(desmlh);
        
        if(title == "" && desc == ""){
            alert("Diary Title Or Diary Description Must Be Entered");
        }
        else{
            $.ajax({
                url: '<?php echo base_url(); ?>home/blog_add',
                type: 'post',
                data: {
                    subdomain: subdomain,
                    email: email,
                    dst: dst,
                    timezone_id: timezone_id,
                    title: title,
                    blog_desc: desc
                },
                success: function(result) {
                    $('#blog_list').prepend('' + 
                    '<div id="blog_info_' + result + '">' + '<div class="col-sm-12 pad5y"></div>' +
                        '<div class="pull-right">' + 
                        '   <i blog_id="' + result + '" class="glyphicon glyphicon-pencil blog_edit"></i>' +
                        '   &nbsp;' + 
                        '   <i id="' + result + '" class="glyphicon glyphicon-remove blog_remove"></i>'+ 
                        '</div>' +
                        '<div class="bold blog">' + moment(new Date()).utcOffset("<?php echo $mlhnewtimezone; ?>").format('YYYY-MM-D H:mm:ss') + '<?php echo " ".$timezone_info->three_digit_value.""; ?> ' + $('#blog_title').val() + '</div>' + 
                        '<div class="blog">' + desmlh + '</div>' +
                        '<div class="col-sm-12 blog_line pad5y"></div>' + 
                        '<div id="blog_edit_form_' + result + '" class="display_none text-left">' +
                        '   <div class="gap5y"></div>' +
                        '   <span class="bold"><?php echo $language->diary_title; ?></span>' +                             
                        '   <div class="gap5y"></div>' + 
                        '   <input type="text" name="email" id="blog_title_' + result + '" class="form-control capitalized" placeholder="" value="' + title + '">' +
                        '   <div class="gap5y"></div>' + 
                        '   <span class="bold"><?php echo $language->diary_details; ?></span>' + 
                        '   <div class="gap5y"></div>' +
                        '   <textarea id="blog_desc_' + result + '" name="" class="form-control capitalized" placeholder="" rows="2">' + desc + '</textarea>' +
                        '   <div class="gap5y"></div><div class="text-center">' +
                        '   <button data-blog_id="' + result + '" id="blog_save_' + result + '" class="btn btn-primary blog_update">Save</button>' + 
                        '</div></div>' +
                    '</div>');
                    
                    $('#blog_add_form2').hide();
                    $('#blog_title').val('');
                    $('#blog_desc').val('');
                    $("#nextdiaryadd").css({
                        "background-color": "red",
                        "color": "white"
                    });

                    // RM: Re-attach handler because DOM changed
                    $('.blog_remove').click(blogRemoveItem);
                    $('.blog_edit').click(diaryEdit);
                }
            });
        }
    });

    // End of diary submit
    var buttonpressed;
    $('.pp').click(function() {
        buttonpressed = $(this).attr('name')
    });

    $('.step2').hide();

    $('#btn_activate_blog').click(function(e) {
        e.preventDefault();
        var subdomain = $('[name="subdomain"]').val();
        $.ajax({
            url: "<?php echo base_url('home/blog_activation'); ?>",
            type: "post",
            data: {
                subdomainid: subdomain
            },
            success: function(data) {
                //show the error here
                //alert(data);
                if (data == 'Activated') {
                    $('#msg_blog_activate_success').slideDown();
                    $('#btn_activate_blog').hide();
                } else {
                    var test_subdomain = subdomain.substring(0, 3);
                    if((test_subdomain=="XXX") || (test_subdomain=="xxx")){
                        $('#msg_blog_activate_unsuccess_test').slideDown();
                    }else{
                        $('#msg_blog_activate_unsuccess').slideDown();
                    }
                    //$('#msg_blog_activate_unsuccess').slideDown();
                }
            }
        });
    });

    $('#btn_activate_blog2').click(function(e) {
        e.preventDefault();
        var subdomain = $('[name="subdomain"]').val();
        $.ajax({
            url: "<?php echo base_url('home/blog_activation'); ?>",
            type: "post",
            data: {
                subdomainid: subdomain
            },
            success: function(data) {
                //show the error here
                //alert(data);
                if (data == 'Activated') {
                    $('#msg_blog_activate_success').slideDown();
                    //$('#btn_activate_blog2').hide();
                } else {
                    var test_subdomain = subdomain.substring(0, 3);
                    if((test_subdomain=="XXX") || (test_subdomain=="xxx")){
                        $('#msg_blog_activate_unsuccess_test').slideDown();
                    }else{
                        $('#msg_blog_activate_unsuccess').slideDown();
                    }
                    //$('#msg_blog_activate_unsuccess').slideDown();
                }
            }
        });
    });

    $('#click_to_read_blog').click(function() {
        $('#read_blog').slideDown();
        $('#click_to_read_blog').hide();
    });

    $('.blog_edit').click(diaryEdit);

    $('.blog_remove').click(blogRemoveItem);

    $("#living_file_upload2").change(function(e) {
        var control = $(this);
        var count_duplicate = 0;
        var file_name = $(this).val().replace(/^.*[\\\/]/, '');

        var f_size = this.files[0];
        if (f_size.size >= 10000000 || f_size.fileSize >= 10000000) {
            $('#invalid_medfile_size').fadeIn();
        } else {
            // if error showed earlier
            $('#invalid_medfile_size').fadeOut();
            $('#duplicate_msg').fadeOut();

            file_name = file_name.split(' ').join('_');
            //alert(file_name);
            if (file_name == '') {
                count_duplicate++;
            }
            $('.m_files').each(function() {
                var file_str = $(this).data('file_name');
                if (file_str == file_name) {
                    count_duplicate++;
                }
            });

            $("#submit_living_upload2").submit();
            control.replaceWith(control = control.clone(true));

        }
    });

    $("#submit_living_upload2").submit(function(e) {
        e.preventDefault();
        var subdomain = $('#liv_will_subdomain').val();
        var file = $('#living_file_upload2').val();
        $.ajax({
            url: '<?php echo base_url(); ?>home/living_will_upload2/' + subdomain,
            type: 'POST',
            xhr: function() { // Custom XMLHttpRequest
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) { // Check if upload property exists
                    myXhr.upload.addEventListener('progress', progressHandlingFunction, false); // For handling the progress of the upload

                }
                return myXhr;
                //$('#progress_status').show();
            },
            data: new FormData(this),
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#progress_status').show();
                //$('#filelist').html();
            },

            success: function(data) {
                alert("Living Will Uploaded Successfully!");
                //alert(data);
            },
            error: function(e) {
                alert("Living Will Uploading Failed, Try Again!");
            }
        });
    });

    // Living Will Uploading using Ajax by Mozammel End

    // Click to Finish Create Profile
    $("button[name='done']").click(function(e) {
        e.preventDefault();
        var subdomain = $('[name="subdomain"]').val();
        var time_zone_val = $('#timezone').val();
        $('#reminders_form').attr("action", "<?php echo base_url('home/update_done'); ?>");
        $('#reminders_form').submit();
    });

    // Click on view profile
    $("button[name='btn_view_profile']").click(function(e) {
        e.preventDefault();
        var subdomain = $('[name="subdomain"]').val();
        $('#reminders_form').attr("action", "<?php echo base_url('home/update_done'); ?>");
        $('#reminders_form').submit();
    });

}); // DOM Ready end

/* Emergency Contact Limit Here */
// End of photo journal
$('#add_more').click(function() {
    var count_vis = $('.person_inf:visible').length;
    if (count_vis < 18) {
        count_vis++;
        $('#show_' + count_vis).show();
    } else {
        alert('Maximum number for Emmergency Contact has been exceeded.');
    }
});

//Add doctor dynamically
$('#add_more_doctor').click(function() {
    var count_vis = $('.doctor_inf:visible').length;
    if (count_vis < 32) {
        count_vis++;
        $('#show_doctor' + count_vis).show();
    } else {
        alert("Maximum number for Doctor's Contact has been exceeded.");
    }
});

$('.tab_selection').click(function() {
    var elem = $(this);
    $('.tab_selection').each(function() {
        $(this).html($(this).data('short'))
    });
    elem.html($(this).data('text'));
});

$('#back_from_contact').click(function() {
    $('#emergency_contact_form').find('input').prop('required', false);
});

$('#back_from_doctor').click(function() {
    $('#doctors_contact_form').find('input').prop('required', false);
});

function progressHandlingFunction(e) {
    var done = e.position || e.loaded,
        total = e.totalSize || e.total;
    var msg = '';
    if (total > 1000000) {
        msg = '(Large Files May Upload Slowly)';
    }

    $('#progress_status').html('Loading ' + (Math.floor((done * 100) / total)) + '% ' + msg);
}

function photoProgressHandling(e) {
    var done = e.loaded,
        total = e.total;
    var msg = '';
    if (total > 1000000) {
        msg = '(Large Files May Upload Slowly)';
    }
    $('#progress_status_photo').html('Loading ' + (Math.floor((done * 100) / total)) + '% ' + msg);
}

/* copy loaded thumbnails into carousel */
$('.row .thumbnail').on('load', function() {

}).each(function(i) {
    if (this.complete) {
        var item = $('<div class="item"></div>');
        var itemDiv = $(this).parents('div').children('a');
        var title = $(this).parent('a').attr("title");

        item.attr("title", title);
        $(itemDiv.html()).appendTo(item);
        item.appendTo('.carousel-inner');
        if (i == 0) { // set first item active
            item.addClass('active');
        }
    }
});

/* activate the carousel */
$('#modalCarousel').carousel({
    interval: false
});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function() {
    $('.modal-title').html($(this).find('.active').attr("title"));
});

$('.carousel-control.left').click(function() {
    $('#modalCarousel').carousel('prev');
});

function customValidity(event) {
    event.target.setCustomValidity("");
    if (!event.target.validity.valid) {
        event.target.setCustomValidity("Please Enter Valid Email Address.");
    }
}

$('[data-toggle="tooltip"]').tooltip();
$('#add_reminders').click(function(e) {
    e.preventDefault();
    $('#personal_info').click();
});

/*------//living upload----*/
$("#living_file_upload").change(function(e) {

    var ext = $('#living_file_upload').val().split('.').pop().toLowerCase();
    var f_size = this.files[0];
    if (f_size.size >= (8 * 1024 * 1024) || f_size.fileSize >= 10 * 1024 * 1024) {
        //alert(f_size.size);alert(f_size.fileSize);
        $('#livinginvalid_size').show();
        $('#livinginvalid_type').hide();
        $('#livinginvalid_type_js').hide();
        //alert("Error");
    } else if ($.inArray(ext, ['pdf', 'doc', 'docx', 'png', 'jpg', 'jpeg', 'rtf', 'txt', 'odt']) == -1) {
        //pdf|doc|docx|png|jpg|jpeg|rtf|txt|odt
        $('#livinginvalid_type_js').show();
        $('#livinginvalid_size').hide();
        $('#livinginvalid_type').hide();
        //alert("not");
    } else {
        $('#livinginvalid_size').hide();
        $('#livinginvalid_type_js').hide();
        $("#submit_living_upload").attr('action', '<?php echo base_url() . "home/living_will_upload"; ?>');
        $("#submit_living_upload").submit();

    }
});

/*------//living upload----*/

$(document).ready(function() {
    if ($('#living_will_uploaded').is(':checked')) {
        $('#living_part').show();
    } else {
        $('#living_part').hide();
    }
});

$('#living_will_uploaded').on("click", function() {
    if ($(this).is(':checked')) {
        $('#living_part').show();
    } else {
        $('#living_part').hide();
    }
});

// Checkboxes and labels
function handleCheckbox(i){
    var state = $("#doc_chkallowemail" + i).prop("checked");
    $("#doc_chkallowemail" + i).prop("checked", !state);
}

function handleContactCheckbox(i){
    var state = $("#chkallowemail" + i).prop("checked");
    $("#chkallowemail" + i).prop("checked", !state);
}

</script>
