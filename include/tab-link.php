<?php
/**
 * LINK
 */
if (qrcdr()->getConfig('link') == true) { ?>
<div class="tab-pane fade <?php if ($getsection === "#link") echo "show active"; ?>" id="link">
    <h4><?php echo qrcdr()->getString('link'); ?></h4>
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true" style="color:#36a88e"></i></span>
  </div>
  <input type="text" name="link" id="malink" class="form-control" placeholder="https://www.facebook.com/thai.vlg" required="required" value="">
</div>
</div>
    <?php
}
