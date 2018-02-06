<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9ec4c1cb9eca45fbe3dbe67f7e900be5a39a20986b9a39b0507b520641e0c635 extends Twig_Template
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
        $__internal_0fd21a3cb8504f9546e7462c90b02cb704580975feada3ae0c0baa274f637ce7 = $this->env->getExtension("native_profiler");
        $__internal_0fd21a3cb8504f9546e7462c90b02cb704580975feada3ae0c0baa274f637ce7->enter($__internal_0fd21a3cb8504f9546e7462c90b02cb704580975feada3ae0c0baa274f637ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0fd21a3cb8504f9546e7462c90b02cb704580975feada3ae0c0baa274f637ce7->leave($__internal_0fd21a3cb8504f9546e7462c90b02cb704580975feada3ae0c0baa274f637ce7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
