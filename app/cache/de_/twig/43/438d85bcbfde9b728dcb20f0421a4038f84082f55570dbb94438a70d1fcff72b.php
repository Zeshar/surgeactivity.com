<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_scoring.html.twig */
class __TwigTemplate_d80bfde9b9788bc4857062e8b2343b312c68dbb74095c46c5e94885ec1356b85 extends Twig_Template
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
        $__internal_32d98827028c21768b0b47346d47ce7d9e6853e9f8aca1b7903e2cd653f290e9 = $this->env->getExtension("native_profiler");
        $__internal_32d98827028c21768b0b47346d47ce7d9e6853e9f8aca1b7903e2cd653f290e9->enter($__internal_32d98827028c21768b0b47346d47ce7d9e6853e9f8aca1b7903e2cd653f290e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_scoring.html.twig"));

        // line 1
        echo "<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom close\"></button>
        </div>
        <h3>Lead Scoring</h3>
    </div>
    <div class=\"clearfix\" style=\"display: none;\">
        <script type=\"text/javascript\">
            (function(\$) {
                \$(document).ready(function() {
                    \$('#lead_scoring_save').on('block-ajax-return', function(e, serverResponse) {
                        \$(this).find('input').not('[type=\"hidden\"]').val('').trigger('change');
                        window.location.reload();
                    });
                });
            })(jQuery);
        </script>
        <div id=\"lead_scoring_save\" class=\"form-column display-block-persistent\" data-controller=\"leads_display\" data-action=\"leadProcessing\">
            <div class=\"form-column\">
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ZesharCRMCoreBundle:FormItems:leadScoring", array("object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
                    <input type=\"hidden\" id=\"lead_id\" name=\"lead_id\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getId", array(), "method"), "html", null, true);
        echo "\" />
                    ";
        // line 24
        $this->loadTemplate("ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_scoring.html.twig", 24)->display(array_merge($context, array("show_cancel_link" => false)));
        // line 25
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_32d98827028c21768b0b47346d47ce7d9e6853e9f8aca1b7903e2cd653f290e9->leave($__internal_32d98827028c21768b0b47346d47ce7d9e6853e9f8aca1b7903e2cd653f290e9_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_scoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 25,  53 => 24,  49 => 23,  45 => 22,  22 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom close"></button>*/
/*         </div>*/
/*         <h3>Lead Scoring</h3>*/
/*     </div>*/
/*     <div class="clearfix" style="display: none;">*/
/*         <script type="text/javascript">*/
/*             (function($) {*/
/*                 $(document).ready(function() {*/
/*                     $('#lead_scoring_save').on('block-ajax-return', function(e, serverResponse) {*/
/*                         $(this).find('input').not('[type="hidden"]').val('').trigger('change');*/
/*                         window.location.reload();*/
/*                     });*/
/*                 });*/
/*             })(jQuery);*/
/*         </script>*/
/*         <div id="lead_scoring_save" class="form-column display-block-persistent" data-controller="leads_display" data-action="leadProcessing">*/
/*             <div class="form-column">*/
/*                 <div class="form-group">*/
/*                     {{ render(controller('ZesharCRMCoreBundle:FormItems:leadScoring', {'object': object})) }}*/
/*                     <input type="hidden" id="lead_id" name="lead_id" value="{{ object.getId() }}" />*/
/*                     {% include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_block_actions.html.twig') with {'show_cancel_link': false} %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
