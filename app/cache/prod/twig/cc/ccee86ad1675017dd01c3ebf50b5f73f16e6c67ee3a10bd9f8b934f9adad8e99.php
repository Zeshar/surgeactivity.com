<?php

/* ZesharCRMCallsBundle:CRUD:list_action_field.html.twig */
class __TwigTemplate_339aebdb2d617cfe55eff9bea20e1ce39cc184491bcb865fc0d6883514989535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("ZesharCRMCallsBundle:CRUD:base_list_field.html.twig", "ZesharCRMCallsBundle:CRUD:list_action_field.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCallsBundle:CRUD:base_list_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "admin_zesharcrm_calls_callreporting_listShow")) {
        }
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "
        <div class=\"btn-group\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array()), "actions", array()));
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
            // line 19
            echo "                ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "ZesharCRMCallsBundle:CRUD:list_action_field.html.twig", 19)->display($context);
            // line 20
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
        // line 21
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCallsBundle:CRUD:list_action_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  61 => 20,  58 => 19,  41 => 18,  35 => 16,  32 => 15,  28 => 12,  25 => 14,  11 => 12,);
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
/* {% extends 'ZesharCRMCallsBundle:CRUD:base_list_field.html.twig' %}*/
/* {#{{ app.request.attributes.get('_route') }}#}*/
/* {% if app.request.attributes.get('_route') != 'admin_zesharcrm_calls_callreporting_listShow' %}*/
/*     {% block field %}*/
/*         {{ app.request.attributes.get('_route') }}*/
/*         <div class="btn-group">*/
/*             {% for actions in field_description.options.actions %}*/
/*                 {% include actions.template %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endif %}*/
