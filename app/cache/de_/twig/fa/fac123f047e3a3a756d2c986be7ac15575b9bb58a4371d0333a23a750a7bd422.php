<?php

/* ZesharCRMCoreBundle:Default:index.html.twig */
class __TwigTemplate_1afb0e059f31d16c5ff0605d909b8b9c27ce787f7f6d2b77a10e1a69342fa81d extends Twig_Template
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
        $__internal_34ffbb325e0e5008b84b602b5cf89fbb157e3a7a89c189876172d46d5bbfd185 = $this->env->getExtension("native_profiler");
        $__internal_34ffbb325e0e5008b84b602b5cf89fbb157e3a7a89c189876172d46d5bbfd185->enter($__internal_34ffbb325e0e5008b84b602b5cf89fbb157e3a7a89c189876172d46d5bbfd185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_34ffbb325e0e5008b84b602b5cf89fbb157e3a7a89c189876172d46d5bbfd185->leave($__internal_34ffbb325e0e5008b84b602b5cf89fbb157e3a7a89c189876172d46d5bbfd185_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Default:index.html.twig";
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
/* Hello {{ name }}!*/
/* */
