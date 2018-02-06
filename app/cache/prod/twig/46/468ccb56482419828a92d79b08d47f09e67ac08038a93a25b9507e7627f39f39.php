<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_close_quote.html.twig */
class __TwigTemplate_09ea14c28f279b752b5b89be792f43902174a920002d52c7e1a3cdc5da07c0fb extends Twig_Template
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
        // line 1
        if ((3 == $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Quote as success\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "closeQuote", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">Sold Quote</a>
";
        }
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
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if 3 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Close Quote as success" href="{{ admin.generateObjectUrl('closeQuote', object) }}">Sold Quote</a>*/
/* {% endif %}*/
