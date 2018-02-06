<?php

/* ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_opportunity.html.twig */
class __TwigTemplate_f9e2b06f2a82fb848ed2ce88e1b79ccc617eb9977653863f4d9c3e5a9fe25fb3 extends Twig_Template
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
        $__internal_7913d9c2dc8094b65e01065a195c963a97d264bab5ba892a9ec4c0691ef2715c = $this->env->getExtension("native_profiler");
        $__internal_7913d9c2dc8094b65e01065a195c963a97d264bab5ba892a9ec4c0691ef2715c->enter($__internal_7913d9c2dc8094b65e01065a195c963a97d264bab5ba892a9ec4c0691ef2715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_opportunity.html.twig"));

        // line 1
        if ((1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method"))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Close Quote as success\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "cancelOpportunity", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">UnSold Opportunity</a>
";
        }
        
        $__internal_7913d9c2dc8094b65e01065a195c963a97d264bab5ba892a9ec4c0691ef2715c->leave($__internal_7913d9c2dc8094b65e01065a195c963a97d264bab5ba892a9ec4c0691ef2715c_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:OpportunityCRUD:list__action_cancel_opportunity.html.twig";
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
/*     <a class="btn btn-sm btn-default" title="Close Quote as success" href="{{ admin.generateObjectUrl('cancelOpportunity', object) }}">UnSold Opportunity</a>*/
/* {% endif %}*/
