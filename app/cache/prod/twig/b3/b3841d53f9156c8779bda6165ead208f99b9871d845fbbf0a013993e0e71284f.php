<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_quote.html.twig */
class __TwigTemplate_e94f678a7c4172ad13c89ac068e7249382c1362ebccb48344db9d4ed81304b02 extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "cancelQuote", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">UnSold Quote</a>
";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_quote.html.twig";
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
/*     <a class="btn btn-sm btn-default" title="Close Quote as success" href="{{ admin.generateObjectUrl('cancelQuote', object) }}">UnSold Quote</a>*/
/* {% endif %}*/
