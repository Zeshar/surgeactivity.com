<?php

/* ZesharCRMCoreBundle:LeadsCRUD:list__action_warmup.html.twig */
class __TwigTemplate_a1dfb802f1faf08491485d23d2c94fa521cdcd3a0f16d20fbd4ad63ac3c5bcc7 extends Twig_Template
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
        $__internal_42038cbac9b643b52f19857b2ab6a0af77a74d81be24b491ad494e4594227bbe = $this->env->getExtension("native_profiler");
        $__internal_42038cbac9b643b52f19857b2ab6a0af77a74d81be24b491ad494e4594227bbe->enter($__internal_42038cbac9b643b52f19857b2ab6a0af77a74d81be24b491ad494e4594227bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:LeadsCRUD:list__action_warmup.html.twig"));

        // line 1
        if (((2 != $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getType", array(), "method")) && (1 == $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatus", array(), "method")))) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default\" title=\"Switch a lead into Warm type\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "warmup", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Warm Up</a>
";
        }
        
        $__internal_42038cbac9b643b52f19857b2ab6a0af77a74d81be24b491ad494e4594227bbe->leave($__internal_42038cbac9b643b52f19857b2ab6a0af77a74d81be24b491ad494e4594227bbe_prof);

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
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% if 2 != object.getType() and 1 == object.getStatus() %}*/
/*     <a class="btn btn-sm btn-default" title="Switch a lead into Warm type" href="{{ admin.generateObjectUrl('warmup', object) }}">Warm Up</a>*/
/* {% endif %}*/
