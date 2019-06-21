<?php
get_header();
?>
<main>
    <div>
        <p>
            Bienvenue sur HairlessNess !
        </p>
    </div>
    <div>
        <div>
          <?=apply_filters('the_content','[contact-form-7 id="38" title="Sans titre"]');?>
        </div>
    </div>
</main>

<?php
get_footer()
?>

