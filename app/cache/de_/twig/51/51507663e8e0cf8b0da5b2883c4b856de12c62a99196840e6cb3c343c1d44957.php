<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b31f2c3695b151dc3bb27997e031323bd4b042b6ca1d8ceabd936dd58319614f extends Twig_Template
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
        $__internal_6ea5cc9ee0440e4fb3111c5305c442e07136096f0817214e6cd8c27a5c5c645d = $this->env->getExtension("native_profiler");
        $__internal_6ea5cc9ee0440e4fb3111c5305c442e07136096f0817214e6cd8c27a5c5c645d->enter($__internal_6ea5cc9ee0440e4fb3111c5305c442e07136096f0817214e6cd8c27a5c5c645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6ea5cc9ee0440e4fb3111c5305c442e07136096f0817214e6cd8c27a5c5c645d->leave($__internal_6ea5cc9ee0440e4fb3111c5305c442e07136096f0817214e6cd8c27a5c5c645d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
