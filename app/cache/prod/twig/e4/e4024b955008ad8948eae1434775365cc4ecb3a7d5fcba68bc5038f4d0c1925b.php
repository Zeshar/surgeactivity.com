<?php

/* ZesharCRMCoreBundle:Goal:list_action_index.html.twig */
class __TwigTemplate_beeb268354828fcf9480e863ecba9cf9f19a20810fcc3f8a50950606e8822bee extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "index", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
        echo "\"><i class=\"fa fa-plus-circle\"></i> Create</a>
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Goal:list_action_index.html.twig";
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
/* <a class="btn btn-sm btn-default view_link" href="{{ admin.generateObjectUrl('index', object) }}"><i class="fa fa-plus-circle"></i> Create</a>*/
/* */
