<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d7fd815c0f4256a07a41914eadac9a12b3440af97e4b5b511bc3df93a607a381 extends Twig_Template
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
        $__internal_7caf67065cfe02e17ceeb32c12faec2ca9fa9f9fc5f6013c5a559aead929a8bf = $this->env->getExtension("native_profiler");
        $__internal_7caf67065cfe02e17ceeb32c12faec2ca9fa9f9fc5f6013c5a559aead929a8bf->enter($__internal_7caf67065cfe02e17ceeb32c12faec2ca9fa9f9fc5f6013c5a559aead929a8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7caf67065cfe02e17ceeb32c12faec2ca9fa9f9fc5f6013c5a559aead929a8bf->leave($__internal_7caf67065cfe02e17ceeb32c12faec2ca9fa9f9fc5f6013c5a559aead929a8bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
