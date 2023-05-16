<?php
/**
 * WI FI
 */
if (qrcdr()->getConfig('wifi') == true) { ?>
    <div class="tab-pane fade <?php if ($getsection === "#wifi") echo "show active"; ?>" id="wifi">
	<h4><?php echo qrcdr()->getString('content'); ?></h4>
        <div class="row form-group">
            <div class="col-md-4">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="ssid" placeholder="<?php echo qrcdr()->getString('network_name'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
            <div class="col-md-4">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-cogs" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			   <select class="form-select custom-select" name="networktype">
                  <option value="WEP">WEP</option>
                  <option value="WPA">WPA/WPA2</option>
                  <option value=""><?php echo qrcdr()->getString('no_encryption'); ?></option>
                </select>
			</div>
            </div>
			
            <div class="col-md-4">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="wifipass" placeholder="<?php echo qrcdr()->getString('password'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
            </div>
        </div>
    <?php
}
