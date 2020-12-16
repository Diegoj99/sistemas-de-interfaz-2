<?php   
/**
 * @author 		Daniel Mitchell <glockops \at\ gmail.com>
 * @copyright  	Copyright (c) 2012 D. Mitchell.
 * @license    	Creative Commons Attribution-ShareAlike 3.0 Unported
 *				http://creativecommons.org/licenses/by-sa/3.0/
 */
defined('C5_EXECUTE') or die(_("Access Denied."));
// Load helpers
$form = Loader::helper('form');
$al = Loader::helper('concrete/asset_library');
?>
<div class="stack-modal-ui ccm-ui form-stacked">
	<div class="ccm-block-field-group">
		<h2><?php  echo t('Select Link Type'); ?></h2>
        <div class="inputs-list">
            <label class="radio"><?php  echo $form->radio('linkType','text',$linkType); ?> Text</label>
            <label class="radio"><?php  echo $form->radio('linkType','image',$linkType); ?> Image</label>
        </div>
    </div> 
    <div class="ccm-block-field-group linkOption" id="linkOptionText">
    	<h2><?php  echo t('Enter Link Text'); ?></h2>
        <?php  echo $form->text('linkText',$linkText); ?>
    </div>
    
    <div class="ccm-block-field-group linkOption" id="linkOptionImage">
    	<h2><?php  echo t('Choose Image'); ?></h2>
        <?php  echo $al->image('linkImage', 'linkImage', t('Choose Image'),$linkImage);?>
        <div style="clear:both; margin-top:10px;">
        <span style=" margin-right: 20px;"><?php  echo $form->label('img_width',t('Width'),array('style'=>'float:none'));?> <?php  echo $form->text('img_width',$img_width,array('class'=>'input-mini'));?> px</span>
        <span><?php  echo $form->label('img_height',t('Height'),array('style'=>'float:none'));?> <?php  echo $form->text('img_height',$img_height,array('class'=>'input-mini'));?> px</span>
        </div>
    </div>
    
    <div class="ccm-block-field-group">
		<h2><?php  echo t('Select Stack'); ?></h2>
    	<select name="stack" id="stack">
        	<option value="0" <?php  if($stack == 0) echo 'selected="selected"'; ?>>No Stack Selected</option>
            <?php  if(count($stackList) > 0) { ?>
            	<?php  foreach($stackList as $st) {
					$checked = ($stack == $st->getCollectionID()) ? 'selected="selected"' : '';
					echo '<option value="'.$st->getCollectionID().'" '.$checked.'>'.$st->getCollectionName().'</option>';
				} ?>
            <?php  } else { ?>
            	<option value="-1" <?php  if($stack == -1) echo 'selected="selected"'; ?>>No stacks are present in the system</option>
            <?php  } ?>
        </select>
   	</div>
    
    <div class="ccm-block-field-group">
		<h2><?php  echo t('Modal Title'); ?></h2>
        <?php  echo $form->text('title',$title) ?>
        <p class="help-block">Leave blank to use stack name.</p>		
    </div>
</div>