<?php

/* ZesharCRMCoreBundle:Default:sonata_list_html.html.twig */
class __TwigTemplate_c83b8a491d9ccc918dc2ef6659f8d6d3e4276df480cc528e2832bfbd7235550d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_field.html.twig", "ZesharCRMCoreBundle:Default:sonata_list_html.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo (isset($context["value"]) ? $context["value"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Default:sonata_list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {{ value|raw }}*/
/* {% endblock %}*/
/* */
