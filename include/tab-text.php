<?php
/**
 * TEXT
 */
if (qrcdr()->getConfig('text') == true) { ?>
    <div class="tab-pane fade <?php if ($getsection === "#text") echo "show active"; ?>" id="text">
	<h4><?php echo qrcdr()->getString('content'); ?></h4>
        <div class="row">
        	<div class="col-12 form-group">
			<div class="input-group">
			  <div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-text-width" aria-hidden="true"></i></span>
			  </div>
			  <textarea class="form-control rounded-0" rows="7" name="data" placeholder="<?php echo qrcdr()->getString('message'); ?>" required="required"></textarea>
			</div>
		    </div>
		</div>
    </div>
    <?php
}
