<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_cancel.html.twig */
class __TwigTemplate_695f9c88477f3f506d4867aea75d459db47672788541f51c95fdc8d24357549a extends Twig_Template
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
        if ((1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : null), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Cancel Lead\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "cancel", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">UnSold</a>
";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:LeadsCRUD:list__action_cancel.html.twig";
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
/* {% if 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Cancel Lead" href="{{ admin.generateObjectUrl('cancel', object) }}">UnSold</a>*/
/* {% endif %}*/
