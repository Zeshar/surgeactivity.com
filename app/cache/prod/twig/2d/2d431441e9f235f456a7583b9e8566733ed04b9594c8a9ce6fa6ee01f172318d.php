<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_show_events.html.twig */
class __TwigTemplate_650e1dcf9026df13f59a2e94618e5d18cd94ef15d8f598426c35d7244e447669 extends Twig_Template
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
        return array (  36 => 13,  34 => 12,  29 => 9,  19 => 1,);
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
