<div class="inner select-area">
  <div class="row">
    <div class="col-md-6">
      <h3 class="title">
        <?php print t('Mon lieu de résidence'); ?>
      </h3>
      <p><?php print t('Les prix du gaz naturel et de l’électricité dépendent de votre commune'); ?></p>
    </div>
    <div class="col-md-6">
      <div data-calculate-width class="city-selection">
        <div data-calculate-fixed class="zibcode">
          <label for="zipcode-input">
            <?php print t('Code postal'); ?> *
          </label>
          <div data-service="{ &quot;id&quot;: &quot;city-selection&quot;, &quot;url&quot;: &quot;<?php print url("ws/compare/findtownbypostalcode"); ?>&quot; }" data-field class="form-item-custom form-input type-1">
            <div class="wrap-input">
              <span class="caret"></span>
              <input type="text" name="zipcode-input" id="zipcode-input" autocomplete="off" class="input-1">
            </div>
          </div>
        </div>
        <div data-calculate-target class="select-city">
          <label for="city-selected">
            <?php print t('Commune'); ?> *
          </label>
          <div data-custom-select class="form-item-custom form-custom-select type-1" data-field data-provider="city-selection" data-action-type="[&quot;city-selected&quot;]">
            <a title="Select a city" href="javascript:;" data-handler data-toggle="dropdown" class="selected-label">
              <span class="caret"></span>
              <span class="loading fa fa-spinner"></span>
              <span data-label class="label">
                <?php print t('Select a city'); ?>
              </span>
              <img alt="arrow" src="<?php print $path_theme . "arrow-down.png";?>" class="icon-arrow">
            </a>
            <select name="city-selected" id="city-selected">
              <option value="">
                <?php print t('Select a city'); ?>
              </option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>