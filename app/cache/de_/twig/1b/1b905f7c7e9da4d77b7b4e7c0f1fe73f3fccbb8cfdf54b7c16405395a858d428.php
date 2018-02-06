<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_quote.html.twig */
class __TwigTemplate_9a7793b9ddd5845f31b398cd1e60e0f3c828265929a5b726dd22be49bff75751 extends Twig_Template
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
        $__internal_ef48cd63b5feadf9171ad733e8b20bcd706ea04973c8656f6ccce533d7a9f7f0 = $this->env->getExtension("native_profiler");
        $__internal_ef48cd63b5feadf9171ad733e8b20bcd706ea04973c8656f6ccce533d7a9f7f0->enter($__internal_ef48cd63b5feadf9171ad733e8b20bcd706ea04973c8656f6ccce533d7a9f7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_quote.html.twig"));

        // line 1
        if ((3 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Quote as success\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "closeQuote", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Sold Quote</a>
";
        }
        
        $__internal_ef48cd63b5feadf9171ad733e8b20bcd706ea04973c8656f6ccce533d7a9f7f0->leave($__internal_ef48cd63b5feadf9171ad733e8b20bcd706ea04973c8656f6ccce533d7a9f7f0_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_quote.html.twig";
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
/* {% if 3 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Close Quote as success" href="{{ admin.generateObjectUrl('closeQuote', object) }}">Sold Quote</a>*/
/* {% endif %}*/
