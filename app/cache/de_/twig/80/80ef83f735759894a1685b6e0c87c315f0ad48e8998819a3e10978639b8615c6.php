<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bf28b455758dad67487ad7cbfaecf473ed52ccdb3e9209bff96946bd591924ee extends Twig_Template
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
        $__internal_a0bb08e0b4f6d1aac27df4cbd6b51bf5a19551c27fbe85c3357f3763d0209525 = $this->env->getExtension("native_profiler");
        $__internal_a0bb08e0b4f6d1aac27df4cbd6b51bf5a19551c27fbe85c3357f3763d0209525->enter($__internal_a0bb08e0b4f6d1aac27df4cbd6b51bf5a19551c27fbe85c3357f3763d0209525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a0bb08e0b4f6d1aac27df4cbd6b51bf5a19551c27fbe85c3357f3763d0209525->leave($__internal_a0bb08e0b4f6d1aac27df4cbd6b51bf5a19551c27fbe85c3357f3763d0209525_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
