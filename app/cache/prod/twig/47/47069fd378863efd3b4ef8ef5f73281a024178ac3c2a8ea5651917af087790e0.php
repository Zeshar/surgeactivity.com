<?php

/* ZesharCRMCoreBundle:Goal:list_action_check.html.twig */
class __TwigTemplate_a2fc4ce0d0a0f8f45ca564ad9d2b8ff8d4c2cf9a4bf7d2fb50ac0acb2c65db9b extends Twig_Template
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
        return "ZesharCRMCoreBundle:Goal:list_action_check.html.twig";
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
