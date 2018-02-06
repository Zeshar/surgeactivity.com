<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history.html.twig */
class __TwigTemplate_fc5f5ffcd6b7435fedff398a452d54dd3a199028ea6b9d59c55be2dbd1c74912 extends Twig_Template
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
        $__internal_78d5596afaa3f6ba460675a485ef4fd943a096405aeeed2d1a9cd6464b1a9bbd = $this->env->getExtension("native_profiler");
        $__internal_78d5596afaa3f6ba460675a485ef4fd943a096405aeeed2d1a9cd6464b1a9bbd->enter($__internal_78d5596afaa3f6ba460675a485ef4fd943a096405aeeed2d1a9cd6464b1a9bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_lead_history.html.twig"));

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
        
        $__internal_78d5596afaa3f6ba460675a485ef4fd943a096405aeeed2d1a9cd6464b1a9bbd->leave($__internal_78d5596afaa3f6ba460675a485ef4fd943a096405aeeed2d1a9cd6464b1a9bbd_prof);

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
        return array (  35 => 12,  22 => 1,);
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
