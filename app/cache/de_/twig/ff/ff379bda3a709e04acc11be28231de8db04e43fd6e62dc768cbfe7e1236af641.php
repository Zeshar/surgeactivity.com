<?php

/* ZesharCRMCoreBundle:Default:login.html.twig */
class __TwigTemplate_b41213575f1dafb5a44127518eac684d1bd0ee104e745c9bcb54d314789a1a47 extends Twig_Template
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
        $__internal_44bd73ff8811dc8ca218440f181987b933f1a9b6a61ff01adbf6812880853740 = $this->env->getExtension("native_profiler");
        $__internal_44bd73ff8811dc8ca218440f181987b933f1a9b6a61ff01adbf6812880853740->enter($__internal_44bd73ff8811dc8ca218440f181987b933f1a9b6a61ff01adbf6812880853740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Default:login.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_44bd73ff8811dc8ca218440f181987b933f1a9b6a61ff01adbf6812880853740->leave($__internal_44bd73ff8811dc8ca218440f181987b933f1a9b6a61ff01adbf6812880853740_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Default:login.html.twig";
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
