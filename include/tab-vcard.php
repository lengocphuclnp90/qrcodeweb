<?php
/**
 * V CARD
 */
if (qrcdr()->getConfig('vcard') == true) { ?>
    <div class="tab-pane fade <?php if ($getsection === "#vcard") echo "show active"; ?>" id="vcard">
        <h4><?php echo qrcdr()->getString('vcard'); ?></h4>
        <div class="row">
            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vname" placeholder="<?php echo qrcdr()->getString('first_name'); ?>" class="form-control" required="required" value="">
			</div>
			</div>
            <div class="col-md-6 form-group">
						<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vlast" placeholder="<?php echo qrcdr()->getString('last_name'); ?>" class="form-control" required="required" value="">
			</div>
			</div>
            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vphone" placeholder="<?php echo qrcdr()->getString('phone_home'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="number" name="vmobile" placeholder="<?php echo qrcdr()->getString('phone_mobile'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="email" name="vemail" placeholder="<?php echo qrcdr()->getString('email'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vurl" placeholder="<?php echo qrcdr()->getString('website'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-suitcase" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vcompany" placeholder="<?php echo qrcdr()->getString('company'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-suitcase" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vtitle" placeholder="<?php echo qrcdr()->getString('jobtitle'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 orm-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="number" name="vofficephone" placeholder="<?php echo qrcdr()->getString('phone_office'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone-square" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="number" name="vfax" placeholder="<?php echo qrcdr()->getString('fax'); ?>" class="form-control" required="required" value="">
			</div>
            </div>

            <div class="col-12 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vaddress" placeholder="<?php echo qrcdr()->getString('address'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
			
            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vcap" placeholder="<?php echo qrcdr()->getString('post_code'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vcity" placeholder="<?php echo qrcdr()->getString('city'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
            <div class="col-md-6 form-group">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vstate" placeholder="<?php echo qrcdr()->getString('state'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
            <div class="col-md-6 form-group">
						<div class="input-group mb-3">
			  <div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true" style="color:#36a88e"></i></span>
			  </div>
			  <input type="text" name="vcountry" placeholder="<?php echo qrcdr()->getString('country'); ?>" class="form-control" required="required" value="">
			</div>
            </div>
        <?php
        /*
            <div class="col-12">
                 <label><?php echo qrcdr()->getString('note'); ?></label>
                <textarea name="vnote" class="form-control" maxlength="255"></textarea>
            </div>
        */ ?>
        </div>
    </div>
    <?php
}
