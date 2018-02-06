<?php

/* ZesharCRMCoreBundle:Default:sonata_list_html.html.twig */
class __TwigTemplate_210554df9b33f7ba12056fde6bf78ff8f7142cfde7130ebf3e7e5a7b7e3c5fc4 extends Twig_Template
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
        $__internal_9771cd1ddc4449c8ee9bdbeeebb20ec949e4c043f5dc4446b05b0094018e031e = $this->env->getExtension("native_profiler");
        $__internal_9771cd1ddc4449c8ee9bdbeeebb20ec949e4c043f5dc4446b05b0094018e031e->enter($__internal_9771cd1ddc4449c8ee9bdbeeebb20ec949e4c043f5dc4446b05b0094018e031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Default:sonata_list_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9771cd1ddc4449c8ee9bdbeeebb20ec949e4c043f5dc4446b05b0094018e031e->leave($__internal_9771cd1ddc4449c8ee9bdbeeebb20ec949e4c043f5dc4446b05b0094018e031e_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_01b215fde550b87c1761c04b13dc401fb91bf11777c5be3d4dbe54251e9680cb = $this->env->getExtension("native_profiler");
        $__internal_01b215fde550b87c1761c04b13dc401fb91bf11777c5be3d4dbe54251e9680cb->enter($__internal_01b215fde550b87c1761c04b13dc401fb91bf11777c5be3d4dbe54251e9680cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "
";
        
        $__internal_01b215fde550b87c1761c04b13dc401fb91bf11777c5be3d4dbe54251e9680cb->leave($__internal_01b215fde550b87c1761c04b13dc401fb91bf11777c5be3d4dbe54251e9680cb_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_list_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {{ value|raw }}*/
/* {% endblock %}*/
/* */
