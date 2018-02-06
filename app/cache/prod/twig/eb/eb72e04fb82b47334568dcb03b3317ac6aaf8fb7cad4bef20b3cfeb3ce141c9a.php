<?php

/* ZesharCRMGoalsBundle:Goal:list_action_check.html.twig */
class __TwigTemplate_3c8ce2687fd63b116eb5818656d45f79efe1d1dc0685ebdda519437d23c0a56d extends Twig_Template
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
        echo "<a class=\"btn btn-sm btn-default view_link\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "check", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\">Check</a>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMGoalsBundle:Goal:list_action_check.html.twig";
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
/* <a class="btn btn-sm btn-default view_link" href="{{ admin.generateObjectUrl('check', object) }}">Check</a>*/
/* */
