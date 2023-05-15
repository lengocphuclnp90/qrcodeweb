<?php
/**
 * E-MAIL
 */
if (qrcdr()->getConfig('email') == true) { ?>
    <div class="tab-pane fade <?php if ($getsection === "#email") echo "show active"; ?>" id="email">
        <h4><?php echo qrcdr()->getString('email'); ?></h4>
        <div class="row">
            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="email" name="mailto" placeholder="<?php echo qrcdr()->getString('send_to'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
			<div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="email" name="subject" placeholder="<?php echo qrcdr()->getString('subject'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
        	<div class="col-12 form-group">
			<div class="input-group">
			  <div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-text-width" aria-hidden="true"></i></span>
			  </div>
			  <textarea class="form-control rounded-0" rows="7" name="body" placeholder="<?php echo qrcdr()->getString('message'); ?>" required="required" maxlength="1000"></textarea>
			</div>
		    </div>
        </div>
    </div>
    <?php
}
