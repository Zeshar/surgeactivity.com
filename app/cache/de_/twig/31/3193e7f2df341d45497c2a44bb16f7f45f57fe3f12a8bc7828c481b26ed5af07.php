<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes.html.twig */
class __TwigTemplate_b69320d5f21dde2c1435550f9377f7ac32a3f732b52f1f519dfa647be65c53f7 extends Twig_Template
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
        $__internal_e1a5866cf9656c535c2609c0251d741eb68c3157b8e23172f63cf00f4dbfdff8 = $this->env->getExtension("native_profiler");
        $__internal_e1a5866cf9656c535c2609c0251d741eb68c3157b8e23172f63cf00f4dbfdff8->enter($__internal_e1a5866cf9656c535c2609c0251d741eb68c3157b8e23172f63cf00f4dbfdff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_notes.html.twig"));

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
        
        $__internal_e1a5866cf9656c535c2609c0251d741eb68c3157b8e23172f63cf00f4dbfdff8->leave($__internal_e1a5866cf9656c535c2609c0251d741eb68c3157b8e23172f63cf00f4dbfdff8_prof);

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
        return array (  53 => 30,  22 => 1,);
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
