<?php

/* ZesharCRMCoreBundle:FormItems:opportunity_show_score.html.twig */
class __TwigTemplate_1db3f1fa5caffaedd8f645faea3218eb2775e34dd292e5aee272ad025fade70b extends Twig_Template
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
        echo "<p class=\"processing-score-value tile-type yellowish lead-score\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
        echo "%</p>";
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
        return array (  19 => 1,);
    }
}
/* <p class="processing-score-value tile-type yellowish lead-score">{{ value }}%</p>*/
