<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ead09c787423bd9c857c5cb9b034aed504d35dc28f6633322adb25077ec140dc extends Twig_Template
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
        $__internal_c12a6f6c5a5b51b5f33eef5d5ba46e02775c7822b31bb0f047c7a788ae3e4bad = $this->env->getExtension("native_profiler");
        $__internal_c12a6f6c5a5b51b5f33eef5d5ba46e02775c7822b31bb0f047c7a788ae3e4bad->enter($__internal_c12a6f6c5a5b51b5f33eef5d5ba46e02775c7822b31bb0f047c7a788ae3e4bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c12a6f6c5a5b51b5f33eef5d5ba46e02775c7822b31bb0f047c7a788ae3e4bad->leave($__internal_c12a6f6c5a5b51b5f33eef5d5ba46e02775c7822b31bb0f047c7a788ae3e4bad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
