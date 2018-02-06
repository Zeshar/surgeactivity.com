<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_events.html.twig */
class __TwigTemplate_b84e97ead0c2e90afdccc4c659f48d303c1fc6d4eaec5c884acbf4d385a2802c extends Twig_Template
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
        $__internal_eaa2d851b992515771c8f800f51e82e667bc6e7e916bb4ccdfb6e04c2178fe4e = $this->env->getExtension("native_profiler");
        $__internal_eaa2d851b992515771c8f800f51e82e667bc6e7e916bb4ccdfb6e04c2178fe4e->enter($__internal_eaa2d851b992515771c8f800f51e82e667bc6e7e916bb4ccdfb6e04c2178fe4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_events.html.twig"));

        // line 1
        echo "<div class=\"custom-block calendar-block\">
    <div class=\"custom-head clearfix\">
        <div class=\"custom-menu\">
            <button class=\"up-custom close\"></button>
        </div>
        <h3>Events</h3>
    </div>
    <div class=\"clearfix\" style=\"display: none;\">
        <div id=\"lead_event_list\" ";
        // line 9
        echo " data-controller=\"leads_display_list\" data-action=\"leadEvent\">
            <div class=\"form-column\">
                <div class=\"form-group\">
                    ";
        // line 12
        $this->loadTemplate("ZesharCRMCoreBundle:FormItems:existingLeadEvents.html.twig", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_events.html.twig", 12)->display($context);
        // line 13
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_eaa2d851b992515771c8f800f51e82e667bc6e7e916bb4ccdfb6e04c2178fe4e->leave($__internal_eaa2d851b992515771c8f800f51e82e667bc6e7e916bb4ccdfb6e04c2178fe4e_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  37 => 12,  32 => 9,  22 => 1,);
    }
}
/* <div class="custom-block calendar-block">*/
/*     <div class="custom-head clearfix">*/
/*         <div class="custom-menu">*/
/*             <button class="up-custom close"></button>*/
/*         </div>*/
/*         <h3>Events</h3>*/
/*     </div>*/
/*     <div class="clearfix" style="display: none;">*/
/*         <div id="lead_event_list" {#class="display-block-persistent"#} data-controller="leads_display_list" data-action="leadEvent">*/
/*             <div class="form-column">*/
/*                 <div class="form-group">*/
/*                     {% include('ZesharCRMCoreBundle:FormItems:existingLeadEvents.html.twig') %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
