<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_verification.html.twig */
class __TwigTemplate_44fa0d19acede1d2e67f17b609e11c0172e83a73cb26536574f17597cbb9686a extends Twig_Template
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
        echo "<div class=\"popup-window\" title=\"Verification\" >
    <p>This action will change the status of the ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getLabel", array(), "method"), "html", null, true);
        echo " in %change_status%. <br>
        Do you want to continue?</p>
</div>";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_verification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="popup-window" title="Verification" >*/
/*     <p>This action will change the status of the {{ admin.getLabel() }} in %change_status%. <br>*/
/*         Do you want to continue?</p>*/
/* </div>*/
