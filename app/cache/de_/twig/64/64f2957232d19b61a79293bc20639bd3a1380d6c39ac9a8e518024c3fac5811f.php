<?php

/* ZesharCRMCoreBundle:Reports:partTable.html.twig */
class __TwigTemplate_23577d668a6a8994a05dcd746b992123a4efaa28ffcb2a4b38e5960f8d4f7e0a extends Twig_Template
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
        $__internal_0b1ae6e95b326725c46986572934230e90e5a6b2ac32230da35cbadd0c511d38 = $this->env->getExtension("native_profiler");
        $__internal_0b1ae6e95b326725c46986572934230e90e5a6b2ac32230da35cbadd0c511d38->enter($__internal_0b1ae6e95b326725c46986572934230e90e5a6b2ac32230da35cbadd0c511d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Reports:partTable.html.twig"));

        // line 1
        echo "<tr name=\"";
        echo twig_escape_filter($this->env, (isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")), "html", null, true);
        echo "\" index=\"";
        echo twig_escape_filter($this->env, (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "html", null, true);
        echo "\" class=\"child-row\" style=\"display: none;\">
    <td colspan=\"5\">
        <table class=\"table table-sonata-list table-bordered table-striped custom-table-2\">
            <thead class=\"title-head\">
            <tr>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 7
            echo "                    ";
            // line 8
            echo "

                    ";
            // line 10
            ob_start();
            // line 11
            echo "                        <th class=\"sonata-ba-list-field-header-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"sonata-list-field-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" data-fieldname=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                            ";
            // line 12
            if (($context["key"] == "user")) {
                // line 13
                echo "                                <span>";
                echo twig_escape_filter($this->env, (isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")), "html", null, true);
                echo "</span>
                            ";
            } else {
                // line 15
                echo "                                <span>";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                            ";
            }
            // line 17
            echo "                            ";
            // line 18
            echo "                            ";
            // line 19
            echo "                        </th>
                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 21
            echo "                    ";
            // line 22
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </tr>
            </thead>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataTable"]) ? $context["dataTable"] : $this->getContext($context, "dataTable")));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 27
            echo "
                <tr>

                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 31
                echo "                        <td>
                            ";
                // line 32
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </td>
</tr>";
        
        $__internal_0b1ae6e95b326725c46986572934230e90e5a6b2ac32230da35cbadd0c511d38->leave($__internal_0b1ae6e95b326725c46986572934230e90e5a6b2ac32230da35cbadd0c511d38_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Reports:partTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  114 => 35,  105 => 32,  102 => 31,  98 => 30,  93 => 27,  89 => 26,  84 => 23,  78 => 22,  76 => 21,  72 => 19,  70 => 18,  68 => 17,  62 => 15,  56 => 13,  54 => 12,  45 => 11,  43 => 10,  39 => 8,  37 => 7,  33 => 6,  22 => 1,);
    }
}
/* <tr name="{{ entityName }}" index="{{ index }}" class="child-row" style="display: none;">*/
/*     <td colspan="5">*/
/*         <table class="table table-sonata-list table-bordered table-striped custom-table-2">*/
/*             <thead class="title-head">*/
/*             <tr>*/
/*                 {% for key,name in header %}*/
/*                     {#{% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}#}*/
/* */
/* */
/*                     {% spaceless %}*/
/*                         <th class="sonata-ba-list-field-header-{{ key }}" class="sonata-list-field-{{ key }}" data-fieldname="{{ key }}">*/
/*                             {% if key == 'user' %}*/
/*                                 <span>{{ entityName }}</span>*/
/*                             {% else %}*/
/*                                 <span>{{ name }}</span>*/
/*                             {% endif %}*/
/*                             {#{% if sortable %}<a class="filter-link" href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}#}*/
/*                             {#{% if sortable %}</a>{% endif %}#}*/
/*                         </th>*/
/*                     {% endspaceless %}*/
/*                     {#{% endif %}#}*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for row in dataTable %}*/
/* */
/*                 <tr>*/
/* */
/*                     {% for field in row %}*/
/*                         <td>*/
/*                             {{  field }}*/
/*                         </td>*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </td>*/
/* </tr>*/
