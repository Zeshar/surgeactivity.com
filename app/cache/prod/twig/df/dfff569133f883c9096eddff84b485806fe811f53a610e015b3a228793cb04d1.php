<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_close.html.twig */
class __TwigTemplate_ae96a8ca200144ec24c187313dbd74c2b5e7f64a2f29a02f25955867ecad30c2 extends Twig_Template
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
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Lead as success and create an opportunity\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "close", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">Sold</a>
";
        }
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
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Close Lead as success and create an opportunity" href="{{ admin.generateObjectUrl('close', object) }}">Sold</a>*/
/* {% endif %}*/
