<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_reopen.html.twig */
class __TwigTemplate_6e1f8143f4e6e5dcf89872bb2d086ffee8d789f1e0df4dd9ac88055358a84da4 extends Twig_Template
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
        $__internal_24cf41992de786cfa6c66354dfb81db2174001eb018b8a36125dc5b3e6f82332 = $this->env->getExtension("native_profiler");
        $__internal_24cf41992de786cfa6c66354dfb81db2174001eb018b8a36125dc5b3e6f82332->enter($__internal_24cf41992de786cfa6c66354dfb81db2174001eb018b8a36125dc5b3e6f82332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:LeadsCRUD:list__action_reopen.html.twig"));

        // line 1
        if ((3 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Reopen this lead\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "reopen", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Reopen</a>
";
        }
        
        $__internal_24cf41992de786cfa6c66354dfb81db2174001eb018b8a36125dc5b3e6f82332->leave($__internal_24cf41992de786cfa6c66354dfb81db2174001eb018b8a36125dc5b3e6f82332_prof);

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
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% if 3 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Reopen this lead" href="{{ admin.generateObjectUrl('reopen', object) }}">Reopen</a>*/
/* {% endif %}*/
