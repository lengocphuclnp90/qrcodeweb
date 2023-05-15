<?php
/**
 * WHATSAPP
 */
if (qrcdr()->getConfig('whatsapp') == true) { ?>
    <div class="tab-pane fade<?php if ($getsection === "#whatsapp") echo " show active"; ?>" id="whatsapp">
        <h4>WhatsApp</h4>
        <div class="row">
		    <div class="col-md-12">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="wapp_number" class="form-control" placeholder="<?php echo qrcdr()->getString('phone_number'); ?>" required="required" value="">
			</div>
            </div>
		    <div class="col-12 form-group">
			<div class="input-group">
			  <div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-text-width" aria-hidden="true"></i></span>
			  </div>
			  <textarea class="form-control rounded-0" rows="7" name="wapp_message" placeholder="<?php echo qrcdr()->getString('message'); ?>" required="required" maxlength="1000"></textarea>
			</div>
		    </div>
        </div>
    </div>
    <?php
}
