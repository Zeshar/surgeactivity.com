<?php

/* ZesharCRMCoreBundle:ActivityCRUD:list_inner_row.html.twig */
class __TwigTemplate_4de7ab1a4b5c8e2bac77229462bef736adcdc692d27bcad1012d5ce5408e8248 extends Twig_Template
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
        $__internal_748f9e14585bf89640af034768ddb3519925f3329761cc3ef9001be64b9d30ed = $this->env->getExtension("native_profiler");
        $__internal_748f9e14585bf89640af034768ddb3519925f3329761cc3ef9001be64b9d30ed->enter($__internal_748f9e14585bf89640af034768ddb3519925f3329761cc3ef9001be64b9d30ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:ActivityCRUD:list_inner_row.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 2
            echo "    ";
            if ((($this->getAttribute($context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 3
                echo "        ";
                // line 4
                echo "    ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 5
                echo "        ";
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "baseRoutePattern", array()) == "expiredactivity") && $this->getAttribute($context["loop"], "first", array()))) {
                    // line 8
                    echo "            <td class=\"sonata-ba-list-field sonata-ba-list-field-batch sonata-list-field-batch\" objectid=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()), "html", null, true);
                    echo "\">
                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "id", array()), "html", null, true);
                    echo "\">
            </td >
        ";
                }
                // line 12
                echo "        ";
                echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $context["field_description"]);
                echo "
    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_748f9e14585bf89640af034768ddb3519925f3329761cc3ef9001be64b9d30ed->leave($__internal_748f9e14585bf89640af034768ddb3519925f3329761cc3ef9001be64b9d30ed_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:ActivityCRUD:list_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  60 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  22 => 1,);
    }
}
/* {% for field_description in admin.list.elements %}*/
/*     {% if field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*         {# Action buttons disabled in ajax view! #}*/
/*     {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*         {# Disable fields with 'ajax_hidden' option set to true #}*/
/*     {% else %}*/
/*         {%  if admin.baseRoutePattern == 'expiredactivity' and loop.first%}*/
/*             <td class="sonata-ba-list-field sonata-ba-list-field-batch sonata-list-field-batch" objectid="{{ object.id }}">*/
/*                 <input type="checkbox" name="idx[]" value="{{ object.id  }}">*/
/*             </td >*/
/*         {% endif %}*/
/*         {{ object|render_list_element(field_description) }}*/
/*     {% endif %}*/
/* {% endfor %}*/
