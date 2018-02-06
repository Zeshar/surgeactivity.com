<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5c35f82c1931f31ffbcef50f281a19163d8cd71eaf417ec3eccc7bec555d2a09 extends Twig_Template
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
        $__internal_ae02da3dfef63cb54b8d9914bb7d4c17c07678d0f0f0269314da6ddadf8736af = $this->env->getExtension("native_profiler");
        $__internal_ae02da3dfef63cb54b8d9914bb7d4c17c07678d0f0f0269314da6ddadf8736af->enter($__internal_ae02da3dfef63cb54b8d9914bb7d4c17c07678d0f0f0269314da6ddadf8736af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ae02da3dfef63cb54b8d9914bb7d4c17c07678d0f0f0269314da6ddadf8736af->leave($__internal_ae02da3dfef63cb54b8d9914bb7d4c17c07678d0f0f0269314da6ddadf8736af_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
