<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_reopen.html.twig */
class __TwigTemplate_c2e06d7aca65b783578d7a44cb655658f08322c9d4437976145d35d8348c2844 extends Twig_Template
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
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Reopen this lead\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "reopen", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
            echo "\">Reopen</a>
";
        }
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:LeadsCRUD:list__action_reopen.html.twig";
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
/*     <a class="btn btn-sm btn-default" title="Reopen this lead" href="{{ admin.generateObjectUrl('reopen', object) }}">Reopen</a>*/
/* {% endif %}*/
