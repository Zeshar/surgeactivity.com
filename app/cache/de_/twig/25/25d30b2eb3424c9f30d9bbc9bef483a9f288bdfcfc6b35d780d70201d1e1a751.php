<?php

/* ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig */
class __TwigTemplate_390a4107295d11b23de0ac5f5cb28a33eb3c0f2e7348eee997a99189db55687e extends Twig_Template
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
        $__internal_5b5184c7fb726a5553e0609b740dc31f9e68a8eb30f291bd3799fde88ee5d405 = $this->env->getExtension("native_profiler");
        $__internal_5b5184c7fb726a5553e0609b740dc31f9e68a8eb30f291bd3799fde88ee5d405->enter($__internal_5b5184c7fb726a5553e0609b740dc31f9e68a8eb30f291bd3799fde88ee5d405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig"));

        // line 1
        echo "<p class=\"processing-score-value tile-type yellowish lead-score\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "%</p>";
        
        $__internal_5b5184c7fb726a5553e0609b740dc31f9e68a8eb30f291bd3799fde88ee5d405->leave($__internal_5b5184c7fb726a5553e0609b740dc31f9e68a8eb30f291bd3799fde88ee5d405_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <p class="processing-score-value tile-type yellowish lead-score">{{ value }}%</p>*/
