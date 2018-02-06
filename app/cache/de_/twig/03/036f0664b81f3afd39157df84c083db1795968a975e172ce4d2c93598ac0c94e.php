<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_close.html.twig */
class __TwigTemplate_ec3cb8e57603c51413e765bf64d26e8f5c0b78c0bc2bf73920d74eefaff4ad83 extends Twig_Template
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
        $__internal_50cd6cbd3f8461114984401330de0e8bdf4afabefdbe906980e64f44ebb55db8 = $this->env->getExtension("native_profiler");
        $__internal_50cd6cbd3f8461114984401330de0e8bdf4afabefdbe906980e64f44ebb55db8->enter($__internal_50cd6cbd3f8461114984401330de0e8bdf4afabefdbe906980e64f44ebb55db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:LeadsCRUD:list__action_close.html.twig"));

        // line 1
        if ((1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Lead as success and create an opportunity\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "close", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Sold</a>
";
        }
        
        $__internal_50cd6cbd3f8461114984401330de0e8bdf4afabefdbe906980e64f44ebb55db8->leave($__internal_50cd6cbd3f8461114984401330de0e8bdf4afabefdbe906980e64f44ebb55db8_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:LeadsCRUD:list__action_close.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% if 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Close Lead as success and create an opportunity" href="{{ admin.generateObjectUrl('close', object) }}">Sold</a>*/
/* {% endif %}*/
