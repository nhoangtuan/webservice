<div data-budget-state="recap" data-block="recap" class="calculer-row fade hidden">
  <div class="budget-block budget-block-3">
    <h2 class="title-calculer hidden-xs"><?php print t('Calculer mon budget'); ?></h2>
    <div class="content">

      <div class="group">
        <span class="city">
          <span data-value="zipcode-input">92250</span>&nbsp;
          <span data-value="city-name-selected">La Garenne-Colombe</span>
        </span>
        <a href="#" title="<?php print t('Modifier mes informations'); ?>" class="modify hidden-xs" data-simulator-handler>
          <?php print t('Modifier mes informations'); ?>
        </a>
      </div>

      <div class="group group-1">
        <div data-energy-type="electricity" class="item hidden">
          <div class="wrap-icon vertical-middle">
            <img src="<?php print $path_theme . "img-electricity-lg.png";?>" alt="<?php print t("Consommation d'électricité"); ?>">
          </div>
          <div class="desc">
            <h3 class="name"><?php print t("Consommation d'électricité"); ?></h3>
            <span data-value="electricity" class="consume">5 600</span>&nbsp;
            <span class="consume"><?php print t('kWh/an'); ?></span>
          </div>
        </div>
        <div data-energy-type="gas" class="item hidden">
          <div class="wrap-icon vertical-middle">
            <img src="<?php print $path_theme . "img-gaz-lg.png";?>" alt="<?php print t('Consommation de gaz'); ?>">
          </div>
          <div class="desc">
            <h3 class="name"><?php print t('Consommation de gaz'); ?></h3>
            <span data-value="gas" class="consume">11 000</span>&nbsp;
            <span class="consume"><?php print t('kWh/an'); ?></span>
          </div>
        </div>
      </div>

      <div class="group visible-xs">
        <a href="#" title="Modifier mes informations" class="modify" data-simulator-handler>
          <?php print t('Modifier mes informations'); ?>
        </a>
      </div>

    </div>
  </div>
</div>