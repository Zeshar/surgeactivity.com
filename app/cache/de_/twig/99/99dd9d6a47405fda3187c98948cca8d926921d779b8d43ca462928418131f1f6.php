<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_cancel.html.twig */
class __TwigTemplate_eded1e769e2f49e2b3afaac6caf57c973c3b28e3e6332bf6d01d3cc216dcc4b5 extends Twig_Template
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
        $__internal_61fad1def11747a4c2cfda55d99e4b8303bc9d6c4ccbd88fdb1815f22d17a342 = $this->env->getExtension("native_profiler");
        $__internal_61fad1def11747a4c2cfda55d99e4b8303bc9d6c4ccbd88fdb1815f22d17a342->enter($__internal_61fad1def11747a4c2cfda55d99e4b8303bc9d6c4ccbd88fdb1815f22d17a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:LeadsCRUD:list__action_cancel.html.twig"));

        // line 1
        if ((1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Cancel Lead\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "cancel", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">UnSold</a>
";
        }
        
        $__internal_61fad1def11747a4c2cfda55d99e4b8303bc9d6c4ccbd88fdb1815f22d17a342->leave($__internal_61fad1def11747a4c2cfda55d99e4b8303bc9d6c4ccbd88fdb1815f22d17a342_prof);

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
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% if 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Cancel Lead" href="{{ admin.generateObjectUrl('cancel', object) }}">UnSold</a>*/
/* {% endif %}*/
