<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_599ea91d859639a2594825b7e1e84ef32bba47caae542cc04d295ee36d608748 extends Twig_Template
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
        $__internal_fd0d0e76d5092645770852adb6e02e4caff733a93d56a74fbaf2583f671d843c = $this->env->getExtension("native_profiler");
        $__internal_fd0d0e76d5092645770852adb6e02e4caff733a93d56a74fbaf2583f671d843c->enter($__internal_fd0d0e76d5092645770852adb6e02e4caff733a93d56a74fbaf2583f671d843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fd0d0e76d5092645770852adb6e02e4caff733a93d56a74fbaf2583f671d843c->leave($__internal_fd0d0e76d5092645770852adb6e02e4caff733a93d56a74fbaf2583f671d843c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
