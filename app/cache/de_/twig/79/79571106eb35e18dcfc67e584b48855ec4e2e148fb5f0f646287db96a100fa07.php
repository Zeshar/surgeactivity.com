<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1235cbd376dde1c48a3a283b50abc4d30d5507efc2efeaa89d02d07c7716534e extends Twig_Template
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
        $__internal_b38cb771c1a8427b0aec87dc6042ca5f8bd439119a327fdba48571dc1589c82d = $this->env->getExtension("native_profiler");
        $__internal_b38cb771c1a8427b0aec87dc6042ca5f8bd439119a327fdba48571dc1589c82d->enter($__internal_b38cb771c1a8427b0aec87dc6042ca5f8bd439119a327fdba48571dc1589c82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b38cb771c1a8427b0aec87dc6042ca5f8bd439119a327fdba48571dc1589c82d->leave($__internal_b38cb771c1a8427b0aec87dc6042ca5f8bd439119a327fdba48571dc1589c82d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
