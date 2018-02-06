<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_warmup.html.twig */
class __TwigTemplate_d5467264adc443bb4a77045ed8790e0fb573dd3446b8b164f600a2d8ddf848f9 extends Twig_Template
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
        if (((2 != $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getType", array(), "method")) && (1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array(), "method")))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Switch a lead into Warm type\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "warmup", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">Warm Up</a>
";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:LeadsCRUD:list__action_warmup.html.twig";
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
/* {% if 2 != object.getType() and 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Switch a lead into Warm type" href="{{ admin.generateObjectUrl('warmup', object) }}">Warm Up</a>*/
/* {% endif %}*/
