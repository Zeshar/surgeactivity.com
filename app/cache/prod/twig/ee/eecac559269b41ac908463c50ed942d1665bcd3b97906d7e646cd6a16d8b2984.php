<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes.html.twig */
class __TwigTemplate_da7446085dbf69e25abd809f2780c05effb6dfdf5038770e3cbab9238bb3de08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"custom-block\">
    <script type=\"text/javascript\">
        (function(\$) {
            \$(document).ready(function() {
                var leadNotesWrapper = \$('#lead_notes');
                leadNotesWrapper.on('block-data-validate', function(e, params) {
                    var values = params.values;

                        //var eventDate = new Date(eventDate);
                        // @TODO check past date/time

                });
                leadNotesWrapper.on('block-ajax-return', function(e, serverResponse) {
                    \$('#lead_notes').html(serverResponse);
                   //\$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                   //window.location.reload(); // todo - insert data without reload
                });
            });
        })(jQuery);
    </script>

    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom close\"></button>
        </div>
        <h3>Notes</h3>
    </div>

    <div id=\"lead_notes\" class=\"custom-form-content display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadNote\" style=\"display: none;\">
        ";
        // line 30
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_notes_content.html.twig");
        echo "
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 30,  19 => 1,);
    }
}
/* <div class="custom-block">*/
/*     <script type="text/javascript">*/
/*         (function($) {*/
/*             $(document).ready(function() {*/
/*                 var leadNotesWrapper = $('#lead_notes');*/
/*                 leadNotesWrapper.on('block-data-validate', function(e, params) {*/
/*                     var values = params.values;*/
/* */
/*                         //var eventDate = new Date(eventDate);*/
/*                         // @TODO check past date/time*/
/* */
/*                 });*/
/*                 leadNotesWrapper.on('block-ajax-return', function(e, serverResponse) {*/
/*                     $('#lead_notes').html(serverResponse);*/
/*                    //$(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                    //window.location.reload(); // todo - insert data without reload*/
/*                 });*/
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/* */
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom close"></button>*/
/*         </div>*/
/*         <h3>Notes</h3>*/
/*     </div>*/
/* */
/*     <div id="lead_notes" class="custom-form-content display-block-persistent" data-controller="leads_display" data-action="leadNote" style="display: none;">*/
/*         {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_notes_content.html.twig') }}*/
/*     </div>*/
/* </div>*/
/* */
/* */
