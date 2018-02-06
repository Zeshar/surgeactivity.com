<?php

/* ZesharCRMCoreBundle:Reports:conversion.html.twig */
class __TwigTemplate_3141e4c70c1167674ca0fb5bc3f51ec24f69436a397a54f242a8acbb88c17116 extends Twig_Template
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
        $__internal_b44ab88e0ae7d672c3d86fa0f7cbf5bfac321381d3b1454bb8781de27d14621c = $this->env->getExtension("native_profiler");
        $__internal_b44ab88e0ae7d672c3d86fa0f7cbf5bfac321381d3b1454bb8781de27d14621c->enter($__internal_b44ab88e0ae7d672c3d86fa0f7cbf5bfac321381d3b1454bb8781de27d14621c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Reports:conversion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44ab88e0ae7d672c3d86fa0f7cbf5bfac321381d3b1454bb8781de27d14621c->leave($__internal_b44ab88e0ae7d672c3d86fa0f7cbf5bfac321381d3b1454bb8781de27d14621c_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f65e0d4d9dc0a742e3697cb3aa2aad307a6c4d8bafa7ff4ce984302ca0b79e9 = $this->env->getExtension("native_profiler");
        $__internal_7f65e0d4d9dc0a742e3697cb3aa2aad307a6c4d8bafa7ff4ce984302ca0b79e9->enter($__internal_7f65e0d4d9dc0a742e3697cb3aa2aad307a6c4d8bafa7ff4ce984302ca0b79e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7f65e0d4d9dc0a742e3697cb3aa2aad307a6c4d8bafa7ff4ce984302ca0b79e9->leave($__internal_7f65e0d4d9dc0a742e3697cb3aa2aad307a6c4d8bafa7ff4ce984302ca0b79e9_prof);

    }

    // line 25
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_47203523f235f1d5e14efc7306607cb3ff5e07378032ac554182c1b96f687cd9 = $this->env->getExtension("native_profiler");
        $__internal_47203523f235f1d5e14efc7306607cb3ff5e07378032ac554182c1b96f687cd9->enter($__internal_47203523f235f1d5e14efc7306607cb3ff5e07378032ac554182c1b96f687cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 26
        echo "    <thead class=\"title-head\">
    <tr>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")));
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
        
        $__internal_47203523f235f1d5e14efc7306607cb3ff5e07378032ac554182c1b96f687cd9->leave($__internal_47203523f235f1d5e14efc7306607cb3ff5e07378032ac554182c1b96f687cd9_prof);

    }

    // line 45
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_280775a072c6785992c31318489e401c61543202022220752e0cc7cc37b4286f = $this->env->getExtension("native_profiler");
        $__internal_280775a072c6785992c31318489e401c61543202022220752e0cc7cc37b4286f->enter($__internal_280775a072c6785992c31318489e401c61543202022220752e0cc7cc37b4286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 46
        echo "                <tbody>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dataSet"]) ? $context["dataSet"] : $this->getContext($context, "dataSet")));
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
        
        $__internal_280775a072c6785992c31318489e401c61543202022220752e0cc7cc37b4286f->leave($__internal_280775a072c6785992c31318489e401c61543202022220752e0cc7cc37b4286f_prof);

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
        return array (  253 => 78,  238 => 76,  232 => 74,  229 => 73,  223 => 71,  220 => 70,  214 => 68,  212 => 67,  208 => 65,  201 => 63,  195 => 61,  191 => 59,  186 => 58,  181 => 57,  177 => 56,  170 => 53,  168 => 52,  165 => 51,  161 => 50,  157 => 49,  154 => 48,  137 => 47,  134 => 46,  128 => 45,  119 => 41,  113 => 40,  111 => 39,  107 => 37,  105 => 36,  101 => 34,  92 => 33,  90 => 32,  86 => 30,  84 => 29,  80 => 28,  76 => 26,  70 => 25,  42 => 4,  36 => 3,  11 => 1,);
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
