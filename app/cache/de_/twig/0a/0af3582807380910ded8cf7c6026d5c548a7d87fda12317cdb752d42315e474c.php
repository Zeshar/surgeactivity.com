<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_c184d6c82078111a20c9ad5994c56bbc84f34005153d49bd5ee68b5cf6d85b68 extends Twig_Template
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
        $__internal_b2989b672e2c523e0c40549de18d2940fd3c768e088ee3f912aa94abbd88e66f = $this->env->getExtension("native_profiler");
        $__internal_b2989b672e2c523e0c40549de18d2940fd3c768e088ee3f912aa94abbd88e66f->enter($__internal_b2989b672e2c523e0c40549de18d2940fd3c768e088ee3f912aa94abbd88e66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b2989b672e2c523e0c40549de18d2940fd3c768e088ee3f912aa94abbd88e66f->leave($__internal_b2989b672e2c523e0c40549de18d2940fd3c768e088ee3f912aa94abbd88e66f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
