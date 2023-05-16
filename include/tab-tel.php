<?php
/**
 * TEL
 */
if (qrcdr()->getConfig('tel') == true) { ?>
    <div class="tab-pane fade <?php if ($getsection === "#tel") echo "show active"; ?>" id="tel">
    <h4><?php echo qrcdr()->getString('content'); ?></h4>
        <div class="row">
            <div class="col-md-12">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="tel" class="form-control" placeholder="<?php echo qrcdr()->getString('phone_number'); ?>" required="required" value="">
			</div>
            </div>
        </div>
    </div>
    <?php
}
