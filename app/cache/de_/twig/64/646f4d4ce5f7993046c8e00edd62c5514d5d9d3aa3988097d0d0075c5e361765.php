<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_20ea79efc4381be3ffe9e4b3c0649b23dee57aa121e73b1cf71dace19fb1babd extends Twig_Template
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
        $__internal_97ce787f7c550990c160de35ebaf3bce91c2dcd8fc20c302ffd0ff2265f52860 = $this->env->getExtension("native_profiler");
        $__internal_97ce787f7c550990c160de35ebaf3bce91c2dcd8fc20c302ffd0ff2265f52860->enter($__internal_97ce787f7c550990c160de35ebaf3bce91c2dcd8fc20c302ffd0ff2265f52860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_97ce787f7c550990c160de35ebaf3bce91c2dcd8fc20c302ffd0ff2265f52860->leave($__internal_97ce787f7c550990c160de35ebaf3bce91c2dcd8fc20c302ffd0ff2265f52860_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
