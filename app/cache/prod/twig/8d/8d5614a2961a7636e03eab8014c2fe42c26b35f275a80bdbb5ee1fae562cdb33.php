<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history.html.twig */
class __TwigTemplate_e6a9bac3d960315d757aa86b20d2c3db867ff7d7eb563a1bb7beea23887bc1cb extends Twig_Template
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
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom close\"></button>
        </div>
        <h3>Lead Contact History</h3>
    </div>

    <div class=\"custom-form-content display-block-persistent\" style=\"display: none;\">
        <div class=\"form-column\">
            <div class=\"form-group\">
                ";
        // line 12
        echo twig_include($this->env, $context, "ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_lead_history_content.html.twig");
        echo "
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  19 => 1,);
    }
}
/* <div class="custom-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom close"></button>*/
/*         </div>*/
/*         <h3>Lead Contact History</h3>*/
/*     </div>*/
/* */
/*     <div class="custom-form-content display-block-persistent" style="display: none;">*/
/*         <div class="form-column">*/
/*             <div class="form-group">*/
/*                 {{ include('ZesharCRMCoreBundle:CRUD:DisplayPartial/lead_opportunity_show_lead_history_content.html.twig') }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
