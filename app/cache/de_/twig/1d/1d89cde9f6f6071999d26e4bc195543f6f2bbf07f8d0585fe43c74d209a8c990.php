<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e31ce625aeddc57ca54372ff42bf2cc182bc5d127ff95223c26276bb58190c95 extends Twig_Template
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
        $__internal_1184432682cacbd312a1e9749e61beb3ee418a6620f44c4876f1e606995951c3 = $this->env->getExtension("native_profiler");
        $__internal_1184432682cacbd312a1e9749e61beb3ee418a6620f44c4876f1e606995951c3->enter($__internal_1184432682cacbd312a1e9749e61beb3ee418a6620f44c4876f1e606995951c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1184432682cacbd312a1e9749e61beb3ee418a6620f44c4876f1e606995951c3->leave($__internal_1184432682cacbd312a1e9749e61beb3ee418a6620f44c4876f1e606995951c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
