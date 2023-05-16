<?php
/**
 * Zoom
 */
if (qrcdr()->getConfig('zoom') == true) { ?>
<div class="tab-pane fade <?php if ($getsection === "#zoom") echo "show active"; ?>" id="zoom">
<h4><?php echo qrcdr()->getString('content'); ?></h4>
    <div class="row form-group">
    <div class="col-sm-6">
				<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="zoom_id" id="zoom_id" placeholder="<?php echo qrcdr()->getString('reunion_id'); ?>" class="form-control" required="required" value="">
			</div>
    </div>
    <div class="col-sm-6">
				<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="zoom_pwd" id="zoom_pwd" placeholder="<?php echo qrcdr()->getString('password'); ?>" class="form-control" required="required" value="">
			</div>
    </div>
    </div>
</div>
    <?php
}
