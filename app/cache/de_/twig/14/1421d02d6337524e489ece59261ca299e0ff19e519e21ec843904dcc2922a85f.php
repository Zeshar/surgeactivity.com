<?php

/* ZesharCRMCoreBundle:CRUD:contact_card_list_field_action.html.twig */
class __TwigTemplate_3953c4d8e95e7abadcf677e657a5acec305a31849cd75fe6af3f00f00b2effd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65dfcd14a0721dfa207463b0e8be864308bdf33f91d6f4c1ab6929f2af2748ed = $this->env->getExtension("native_profiler");
        $__internal_65dfcd14a0721dfa207463b0e8be864308bdf33f91d6f4c1ab6929f2af2748ed->enter($__internal_65dfcd14a0721dfa207463b0e8be864308bdf33f91d6f4c1ab6929f2af2748ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65dfcd14a0721dfa207463b0e8be864308bdf33f91d6f4c1ab6929f2af2748ed->leave($__internal_65dfcd14a0721dfa207463b0e8be864308bdf33f91d6f4c1ab6929f2af2748ed_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8d82b7bd1e7ca7dd4257984b87c2c96e4023e1498b0a5fb1832b16f9c66e67ed = $this->env->getExtension("native_profiler");
        $__internal_8d82b7bd1e7ca7dd4257984b87c2c96e4023e1498b0a5fb1832b16f9c66e67ed->enter($__internal_8d82b7bd1e7ca7dd4257984b87c2c96e4023e1498b0a5fb1832b16f9c66e67ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
            Actions
            <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu actions\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 22
            echo "                ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action.html.twig", 22)->display($context);
            // line 23
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </ul>
    </div>
";
        
        $__internal_8d82b7bd1e7ca7dd4257984b87c2c96e4023e1498b0a5fb1832b16f9c66e67ed->leave($__internal_8d82b7bd1e7ca7dd4257984b87c2c96e4023e1498b0a5fb1832b16f9c66e67ed_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:CRUD:contact_card_list_field_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  67 => 23,  64 => 22,  47 => 21,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <div class="btn-group">*/
/*         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*             Actions*/
/*             <span class="caret"></span>*/
/*         </button>*/
/*         <ul class="dropdown-menu actions">*/
/*             {% for actions in field_description.options.actions %}*/
/*                 {% include actions.template %}*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
