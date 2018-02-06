<?php

/* ZesharCRMCoreBundle:Reports:conversion.html.twig */
class __TwigTemplate_1c8320dc9ecada671180fdddfced86474d9c1becad366088b99ba3939168ba23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ZesharCRMCoreBundle:Reports:list.html.twig", "ZesharCRMCoreBundle:Reports:conversion.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ZesharCRMCoreBundle:Reports:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('select.table-select').change(function(){
                index = \$(this).parent().parent().attr('index');
                entityName = \$('tr[index=\"'+index+'\"]').find('select.table-select option:selected').attr('name');

                \$tr = \$('tr.child-row[index=\"'+index+'\"]');
                \$tr.each(function(ind,val){
                    \$(val).css('display','none');
                });

                if(entityName != \"none\"){
                    tr = \$('tr[name=\"'+entityName+'\"]')[index];
                    \$(tr).toggle();
                }
            });
        });
    </script>
";
    }

    // line 25
    public function block_table_header($context, array $blocks = array())
    {
        // line 26
        echo "    <thead class=\"title-head\">
    <tr>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 29
            echo "            ";
            // line 30
            echo "

            ";
            // line 32
            ob_start();
            // line 33
            echo "                <th class=\"sonata-ba-list-field-header-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"sonata-list-field-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" data-fieldname=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
                    <span>";
            // line 34
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</span>
                    ";
            // line 36
            echo "                    ";
            // line 37
            echo "                </th>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 39
            echo "            ";
            // line 40
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </tr>
    </thead>
";
    }

    // line 45
    public function block_table_body($context, array $blocks = array())
    {
        // line 46
        echo "                <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataSet"]) ? $context["dataSet"] : null));
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
        foreach ($context['_seq'] as $context["ind"] => $context["object"]) {
            // line 48
            echo "
                    <tr class=\"user-row\" index=\"";
            // line 49
            echo twig_escape_filter($this->env, $context["ind"], "html", null, true);
            echo "\">
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["object"]);
            foreach ($context['_seq'] as $context["key"] => $context["field"]) {
                // line 51
                echo "                            <td>
                                ";
                // line 52
                if ($this->getAttribute($context["field"], "id", array(), "any", true, true)) {
                    // line 53
                    echo "                                    <span></span>";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "</span>
                                    <select class=\"table-select\">
                                        <option name=\"none\"></option>
                                        ";
                    // line 56
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["object"], "user", array()), "productTable", array())) > 0)) {
                        echo "<option name=\"Product\">Product</option>";
                    }
                    // line 57
                    echo "                                        ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["object"], "user", array()), "sourceTable", array())) > 0)) {
                        echo "<option name=\"Source\">Source</option>";
                    }
                    // line 58
                    echo "                                        ";
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["object"], "user", array()), "campaignTable", array())) > 0)) {
                        echo "<option name=\"Activity\">Activity</option>";
                    }
                    // line 59
                    echo "                                    </select>
                                ";
                } else {
                    // line 61
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "
                                ";
                }
                // line 63
                echo "                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    </tr>

                    ";
            // line 67
            if (($this->getAttribute($context["object"], "user", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["object"], "user", array(), "any", false, true), "productTable", array(), "any", true, true))) {
                // line 68
                echo "                        ";
                echo twig_include($this->env, $context, "ZesharCRMCoreBundle:Reports:partTable.html.twig", array("entityName" => "Product", "dataTable" => $this->getAttribute($this->getAttribute($context["object"], "user", array()), "productTable", array()), "index" => $context["ind"]));
                echo "
                    ";
            }
            // line 70
            echo "                    ";
            if (($this->getAttribute($context["object"], "user", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["object"], "user", array(), "any", false, true), "sourceTable", array(), "any", true, true))) {
                // line 71
                echo "                        ";
                echo twig_include($this->env, $context, "ZesharCRMCoreBundle:Reports:partTable.html.twig", array("entityName" => "Source", "dataTable" => $this->getAttribute($this->getAttribute($context["object"], "user", array()), "sourceTable", array()), "index" => $context["ind"]));
                echo "
                    ";
            }
            // line 73
            echo "                    ";
            if (($this->getAttribute($context["object"], "user", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["object"], "user", array(), "any", false, true), "campaignTable", array(), "any", true, true))) {
                // line 74
                echo "                        ";
                echo twig_include($this->env, $context, "ZesharCRMCoreBundle:Reports:partTable.html.twig", array("entityName" => "Activity", "dataTable" => $this->getAttribute($this->getAttribute($context["object"], "user", array()), "campaignTable", array()), "index" => $context["ind"]));
                echo "
                    ";
            }
            // line 76
            echo "
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['ind'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </tbody>
            ";
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Reports:conversion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  217 => 76,  211 => 74,  208 => 73,  202 => 71,  199 => 70,  193 => 68,  191 => 67,  187 => 65,  180 => 63,  174 => 61,  170 => 59,  165 => 58,  160 => 57,  156 => 56,  149 => 53,  147 => 52,  144 => 51,  140 => 50,  136 => 49,  133 => 48,  116 => 47,  113 => 46,  110 => 45,  104 => 41,  98 => 40,  96 => 39,  92 => 37,  90 => 36,  86 => 34,  77 => 33,  75 => 32,  71 => 30,  69 => 29,  65 => 28,  61 => 26,  58 => 25,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'ZesharCRMCoreBundle:Reports:list.html.twig' %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $('select.table-select').change(function(){*/
/*                 index = $(this).parent().parent().attr('index');*/
/*                 entityName = $('tr[index="'+index+'"]').find('select.table-select option:selected').attr('name');*/
/* */
/*                 $tr = $('tr.child-row[index="'+index+'"]');*/
/*                 $tr.each(function(ind,val){*/
/*                     $(val).css('display','none');*/
/*                 });*/
/* */
/*                 if(entityName != "none"){*/
/*                     tr = $('tr[name="'+entityName+'"]')[index];*/
/*                     $(tr).toggle();*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block table_header %}*/
/*     <thead class="title-head">*/
/*     <tr>*/
/*         {% for key,name in header %}*/
/*             {#{% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}#}*/
/* */
/* */
/*             {% spaceless %}*/
/*                 <th class="sonata-ba-list-field-header-{{ key }}" class="sonata-list-field-{{ key }}" data-fieldname="{{ key }}">*/
/*                     <span>{{ name }}</span>*/
/*                     {#{% if sortable %}<a class="filter-link" href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}#}*/
/*                     {#{% if sortable %}</a>{% endif %}#}*/
/*                 </th>*/
/*             {% endspaceless %}*/
/*             {#{% endif %}#}*/
/*         {% endfor %}*/
/*     </tr>*/
/*     </thead>*/
/* {% endblock %}*/
/* */
/*             {% block table_body %}*/
/*                 <tbody>*/
/*                 {% for ind,object in dataSet %}*/
/* */
/*                     <tr class="user-row" index="{{ ind }}">*/
/*                         {% for key,field in object %}*/
/*                             <td>*/
/*                                 {% if field.id is defined %}*/
/*                                     <span></span>{{ field }}</span>*/
/*                                     <select class="table-select">*/
/*                                         <option name="none"></option>*/
/*                                         {% if object.user.productTable|length > 0  %}<option name="Product">Product</option>{% endif %}*/
/*                                         {% if object.user.sourceTable|length > 0  %}<option name="Source">Source</option>{% endif %}*/
/*                                         {% if object.user.campaignTable|length > 0  %}<option name="Activity">Activity</option>{% endif %}*/
/*                                     </select>*/
/*                                 {% else %}*/
/*                                     {{  field }}*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                         {% endfor %}*/
/*                     </tr>*/
/* */
/*                     {% if object.user is defined and object.user.productTable is defined %}*/
/*                         {{ include('ZesharCRMCoreBundle:Reports:partTable.html.twig', {'entityName': 'Product', 'dataTable':  object.user.productTable, 'index':ind }) }}*/
/*                     {% endif %}*/
/*                     {% if object.user is defined and object.user.sourceTable is defined %}*/
/*                         {{ include('ZesharCRMCoreBundle:Reports:partTable.html.twig', {'entityName': 'Source', 'dataTable':  object.user.sourceTable, 'index':ind }) }}*/
/*                     {% endif %}*/
/*                     {% if object.user is defined and object.user.campaignTable is defined %}*/
/*                         {{ include('ZesharCRMCoreBundle:Reports:partTable.html.twig', {'entityName': 'Activity', 'dataTable':  object.user.campaignTable, 'index':ind }) }}*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             {% endblock %}*/
