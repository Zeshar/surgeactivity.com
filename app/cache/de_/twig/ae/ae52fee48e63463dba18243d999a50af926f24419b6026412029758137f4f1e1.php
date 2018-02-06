<?php

/* ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_verification.html.twig */
class __TwigTemplate_582960ba3bae9e442b420505e0215bda89801c19a06ffa11176e33d91aaefea9 extends Twig_Template
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
        $__internal_21f6417bf09c316c32959dd6492a75baac243e5368f6ffe0dc57f9b04009e2a4 = $this->env->getExtension("native_profiler");
        $__internal_21f6417bf09c316c32959dd6492a75baac243e5368f6ffe0dc57f9b04009e2a4->enter($__internal_21f6417bf09c316c32959dd6492a75baac243e5368f6ffe0dc57f9b04009e2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD/DisplayPartial:lead_opportunity_popup_verification.html.twig"));

        // line 1
        echo "<div class=\"popup-window\" title=\"Verification\" >
    <p>This action will change the status of the ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getLabel", array(), "method"), "html", null, true);
        echo " in %change_status%. <br>
        Do you want to continue?</p>
</div>";
        
        $__internal_21f6417bf09c316c32959dd6492a75baac243e5368f6ffe0dc57f9b04009e2a4->leave($__internal_21f6417bf09c316c32959dd6492a75baac243e5368f6ffe0dc57f9b04009e2a4_prof);

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
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="popup-window" title="Verification" >*/
/*     <p>This action will change the status of the {{ admin.getLabel() }} in %change_status%. <br>*/
/*         Do you want to continue?</p>*/
/* </div>*/
