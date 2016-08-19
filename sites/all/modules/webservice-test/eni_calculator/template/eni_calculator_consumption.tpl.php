<?php 
  global $base_url;
  $path_image = $base_url . '/' . drupal_get_path('theme', 'eni_theme') . '/images/';
?>

<form>
  <?php print render($form['step_2_eni_calculator']); ?>
  <?php print render($form['step_3_special_eni_calculator']); ?>
    <div data-block class="inner calculer-detail hidden">
        <h3 class="title">
            <?php print t('Ma consomation annuelle'); ?>
        </h3>
        <div class="product-group">
            <div class="row">
                <div data-energy-type="electricity" data-block class="col-md-6 product-item electric-group">
                    <h4 class="product-title">
                        <?php print t('Ma consommation d\'électricité'); ?>
                        <button type="button" name="btn-electricity-tooltip-1" id="btn-electricity-tooltip-1" class="icon-tooltip" data-custom-popover data-popover-click data-html="true" data-html-target="#electricity-tooltip-1" data-placement="right">?</button>
                        <div id="electricity-tooltip-1" class="hidden">
                            <div class="tooltip-block">
                                <div class="col">
                                    <p><?php print t('Ma consomation annuelle'); ?></p>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <!-- End: product-title -->
                    <div data-field class="row-item">
                        <div data-custom-select class="form-item-custom form-custom-select" data-action-type="[&quot;show-next-field&quot;, &quot;consumeElectric&quot;]">
                            <a title="Je ne connais pas ma consommation" href="javascript:;" data-handler data-toggle="dropdown" class="selected-label">
                                <span data-label class="label"><?php print t('Je ne connais pas ma consommation'); ?></span>
                                <img alt="arrow" src="<?php print $path_image; ?>arrow-down.png" class="icon-arrow">
                            </a>
                            <?php print render($form['consume_electric']); ?>
                        </div>
                    </div>
                    <!-- End: data-field class="row-item" -->
                    <div data-block="B5" data-field class="row-item hidden">
                        <div data-custom-select class="form-item-custom form-custom-select tooltip-style" data-action-type="show-next-field">
                            <a title="<?php print t('Choisir une optionxxxxxxxxxxxxxxxxxxxx'); ?>" href="javascript:;" data-handler data-toggle="dropdown" class="selected-label">
                                <span data-label class="label"><?php print t('Choisir une option'); ?></span>
                                <img alt="arrow" src="<?php print $path_image; ?>arrow-down.png" class="icon-arrow">
                            </a>

                            <?php print render($form['meter_electric']); ?>

                            <button type="button" name="btn-electricity-tooltip-2" id="btn-electricity-tooltip-2" class="icon-tooltip" data-custom-popover data-popover-click data-html="true" data-html-target="#electricity-tooltip-2" data-placement="right">?</button>
                            <div id="electricity-tooltip-2" class="hidden">
                                <div class="tooltip-block">
                                    <div class="col">
                                        <p><?php print t('Lorem ipsum vix ei facer praesent.'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: form-item-custom -->
                    </div>   
                    <!-- End: data-block="B5" -->
                    <div data-block="B6" data-field class="row-item hidden">
                        <div data-custom-select class="form-item-custom form-custom-select tooltip-style" data-action-type="show-next-field">
                            <a title="<?php print t('Choisir une option'); ?>" href="javascript:;" data-handler data-toggle="dropdown" class="selected-label">
                                <span data-label class="label"><?php print t('Choisir une option'); ?></span>
                                <img alt="arrow" src="<?php print $path_image; ?>arrow-down.png" class="icon-arrow">
                            </a>

                            <?php print render($form['consume_electric_type']); ?>

                            <button type="button" name="btn-electricity-tooltip-3" id="btn-electricity-tooltip-3" class="icon-tooltip" data-custom-popover data-popover-click data-html="true" data-html-target="#electricity-tooltip-3" data-placement="right">?</button>
                            <div id="electricity-tooltip-3" class="hidden">
                                <div class="tooltip-block">
                                    <div class="col">
                                        <p><?php print t('Lorem ipsum vix ei facer praesent.'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End: form-item-custom -->
                    </div>
                    <!-- End: data-block="B6" -->
                    <div data-block="C1" class="row-item hidden">
                        <div data-field class="product-consommation">
                            <div class="description">
                                <label for="c1-consumeElectric-input"><?php print t('Ma consommation'); ?></label>
                            </div><div class="number-consommation">
                                <div required class="form-item-custom form-input">
                                  <?php print render($form['c1_consume_electric_input']); ?>
                                </div>
                                <span>en KWh/an</span>
                            </div>
                        </div>
                        <!-- End: product-consommation -->
                    </div>
                    <!-- End: data-block="C1" -->
                    <div data-block="C2" class="row-item hidden">
                        <div data-field class="product-consommation">
                            <div class="description">
                                <label for="c2a-consumeElectric-input"><?php print t('Ma consommation heures pleines'); ?></label>
                            </div><div class="number-consommation">
                                <div class="form-item-custom form-input">
                                    <?php print render($form['c2a_consume_electric_input']); ?>
                                </div>
                                <span>en KWh/an</span>
                            </div>
                        </div>
                        <!-- End: product-consommation -->
                    </div>
                    <!-- End: data-block="C2" -->
                    <div data-block="C2" class="row-item hidden">
                        <div data-field class="product-consommation">
                            <div class="description">
                                <label for="c2b-consumeElectric-input"><?php print t('Ma consommation heures creuses'); ?></label>
                            </div><div class="number-consommation">
                                <div class="form-item-custom form-input">
                                    <?php print render($form['c2b_consumee_lectric_input']); ?>
                                </div>
                                <span>en KWh/an</span>
                            </div>
                        </div>
                        <!-- End: product-consommation -->
                    </div>
                    <!-- End: data-block="C2" -->
                    <div data-block="C3" class="row-item hidden">
                        <div data-field class="product-consommation">
                            <div class="description">
                                <label for="c3a-consumeElectric-input"><?php print t('Ma consommation semaine'); ?></label>
                            </div><div class="number-consommation">
                                <div class="form-item-custom form-input">
                                   <?php print render($form['c3a_consume_electric_input']); ?> 
                                </div>
                                <span>en KWh/an</span>
                            </div>
                        </div>
                        <!-- End: product-consommation -->
                    </div>
                    <!-- End: data-block="C3" -->
                    <div data-block="C3" class="row-item hidden">
                        <div data-field class="product-consommation">
                            <div class="description">
                                <label for="c3b-consumeElectric-input"><?php print t('Ma consommation week-end'); ?></label>
                            </div><div class="number-consommation">
                                <div class="form-item-custom form-input">
                                    <?php print render($form['c3b_consume_electric_input']); ?> 
                                </div>
                                <span>en KWh/an</span>
                            </div>
                        </div>
                        <!-- End: product-consommation -->
                    </div>
                    <!-- End: data-block="C3" -->
                </div>
                <!-- End: electric-group -->


                <div data-energy-type="gas" class="col-md-6 product-item gaz-group">
                    <h4 class="product-title">
                      <?php print t('Ma consommation de gaz'); ?>
                        <button type="button" name="btn-gas-tooltip-1" id="btn-gas-tooltip-1" class="icon-tooltip" data-custom-popover data-popover-click data-html="true" data-html-target="#gas-tooltip-1" data-placement="right">?</button>
                        <div id="gas-tooltip-1" class="hidden">
                            <div class="tooltip-block">
                                <div class="col">
                                    <p><?php print t('Ma consomation annuelle'); ?></p>
                                </div>
                            </div>
                        </div>
                    </h4>
                    <!-- End: product-title -->

                    <div data-field class="row-item">
                        <div data-custom-select class="form-item-custom form-custom-select" data-action-type="[&quot;show-next-field&quot;, &quot;consumeGaz-selected&quot;]">
                            <a title="Je ne connais pas ma consommation" href="javascript:;" data-handler data-toggle="dropdown" class="selected-label">
                                <span data-label class="label"><?php print t('Je ne connais pas ma consommation'); ?></span>
                                <img alt="arrow" src="<?php print $path_image; ?>arrow-down.png" class="icon-arrow">
                            </a>
                            <?php print render($form['consume_gaz_selected']); ?>
                        </div>
                    </div>
                    <!-- End: row-item -->

                    <div data-block="E1" class="row-item hidden">
                        <div data-field class="product-consommation">
                            <div class="description">
                                <label for="e1-consumeGaz-input"><?php print t('Ma consommation'); ?></label>
                            </div>
                            <div class="number-consommation">
                                <div required class="form-item-custom form-input">
                                    <?php print render($form['e1_consume_gaz_input']); ?>
                                </div>
                                <span>en KWh/an</span>
                            </div>
                        </div>
                    </div>
                    <!-- End: data-block="E1" -->
                </div>
                <!-- End: gaz-group -->
            </div>
            <!-- End: row -->
        </div>
        <!-- End: product-group -->
    </div>
    <!-- End: calculer-detail -->
    <?php
      print render($form['form_build_id']);
      print render($form['form_token']);
      print render($form['form_id']);
    ?>
    <div data-equal-height data-block class="inner button-group hidden">
        <div data-equal-height-item="" class="btn yellow-btn">
            <button id="calculer-button" name="calculer-button" type="submit"><?php print t('Estimer ma consommation en électricité et en gas'); ?></button>
        </div>
        <a href="#" title="<?php print t('Annuler'); ?>" class="btn gray-btn" data-equal-height-item data-button="cancel">
            <span><?php print t('Annuler'); ?></span>
        </a>
        <p data-block="transverse-12-message" class="noted-text hidden"><?php print t('Votre reviendez à cette étape pour calculer votre budget'); ?></p>
        <p data-block="error-message" class="noted-text error-field hidden"></p>
    </div>
    <!-- End: button-group -->
</form>
