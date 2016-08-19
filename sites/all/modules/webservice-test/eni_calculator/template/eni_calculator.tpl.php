<div data-budget-simulator="both" data-loading-layer class="calculer-block">
  <h2 class="title-block">
    <?php print t('Comparer nos offres<br>Gaz + Electricité'); ?>    
  </h2>
  <div data-view="absolute" data-view-state="initial" class="calculer-group">

    <!-- step 1 -->
    <?php
      // Show the call to action block.
      // On click on the CTA, this block will hide and the next block (Step 2) will show.
      $step1 = module_invoke('eni_calculator', 'block_view', 'step_1_eni_calculator');
      print $step1['content'];
    ?>

    <div data-budget-state="calculator" data-block="calculator" data-loading-layer class="calculer-row fade hidden">
      <div data-popover-container class="budget-block budget-block-2">
        <h2 class="title-calculer hidden-xs"><?php print t('Calculer mon budget'); ?></h2>
          <?php
              // Render the consumption form.
              $consumption_form = drupal_get_form('eni_calculator_consumption_form');                
              print drupal_render($consumption_form);
          ?>
      </div>
    </div>

    <!-- Step 4 -->
    <?php
      $step_4 = module_invoke('eni_calculator', 'block_view', 'step_4_eni_calculator');
      print $step_4['content'];
    ?>

  </div>
</div><br>

<!-- build:development-only -->
<script>
  var QueryString = function() {
    // This function is anonymous, is executed immediately and
    // the return value is assigned to QueryString!
    var query_string = {};
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
      var pair = vars[i].split("=");
          // If first entry with this name
      if (typeof query_string[pair[0]] === "undefined") {
        query_string[pair[0]] = decodeURIComponent(pair[1]);
          // If second entry with this name
      } else if (typeof query_string[pair[0]] === "string") {
        var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];
        query_string[pair[0]] = arr;
          // If third or later entry with this name
      } else {
        query_string[pair[0]].push(decodeURIComponent(pair[1]));
      }
    }
    return query_string;
  }();
  if (!QueryString.energySubscribed) {
    QueryString.energySubscribed = 'none';
  }
</script>
<!-- endbuild -->