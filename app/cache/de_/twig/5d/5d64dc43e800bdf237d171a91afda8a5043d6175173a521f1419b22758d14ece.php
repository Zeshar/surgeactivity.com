<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_60ea66704a91eec814ecf03a9a98cb91d898906e64a0496101ab29a17f2240d1 extends Twig_Template
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
        $__internal_1dae4b838f6a24a12c5fefb50e6fcdac544fd5cd3af195d106ee27ca25bf9207 = $this->env->getExtension("native_profiler");
        $__internal_1dae4b838f6a24a12c5fefb50e6fcdac544fd5cd3af195d106ee27ca25bf9207->enter($__internal_1dae4b838f6a24a12c5fefb50e6fcdac544fd5cd3af195d106ee27ca25bf9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1dae4b838f6a24a12c5fefb50e6fcdac544fd5cd3af195d106ee27ca25bf9207->leave($__internal_1dae4b838f6a24a12c5fefb50e6fcdac544fd5cd3af195d106ee27ca25bf9207_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
