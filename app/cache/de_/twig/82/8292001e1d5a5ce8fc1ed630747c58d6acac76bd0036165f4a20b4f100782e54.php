<?php

/* ZesharCRMCoreBundle:Widget:target.html.twig */
class __TwigTemplate_f3dab6ad55fbc153c2aa0cbb1659239ec611d066760d455b5cd4e322b6320e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget' => array($this, 'block_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0547f840122789c2c3f8bb1a13991284d02cd65b88395d02a6eee4fa580cfa7e = $this->env->getExtension("native_profiler");
        $__internal_0547f840122789c2c3f8bb1a13991284d02cd65b88395d02a6eee4fa580cfa7e->enter($__internal_0547f840122789c2c3f8bb1a13991284d02cd65b88395d02a6eee4fa580cfa7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZesharCRMCoreBundle:Widget:target.html.twig"));

        // line 1
        $this->displayBlock('widget', $context, $blocks);
        
        $__internal_0547f840122789c2c3f8bb1a13991284d02cd65b88395d02a6eee4fa580cfa7e->leave($__internal_0547f840122789c2c3f8bb1a13991284d02cd65b88395d02a6eee4fa580cfa7e_prof);

    }

    public function block_widget($context, array $blocks = array())
    {
        $__internal_2304f0b505b1885493cbcf20680f1648e107e2a490099f18483a91cb205c8ba3 = $this->env->getExtension("native_profiler");
        $__internal_2304f0b505b1885493cbcf20680f1648e107e2a490099f18483a91cb205c8ba3->enter($__internal_2304f0b505b1885493cbcf20680f1648e107e2a490099f18483a91cb205c8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget"));

        // line 2
        echo "    <div class=\"custom-block table-block\">
        <div class=\"custom-head clear-fix\">
            <div class=\"custom-menu\">
                <button class=\"up-custom\"></button>
                <button class=\"settings-custom\"></button>
                <button class=\"close-custom\"></button>
            </div>
            <div class=\"custom-menu-select\">
                ";
        // line 10
        if ( !twig_test_empty((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")))) {
            // line 11
            echo "                    <select class=\"user_data\">
                        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
            foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
                // line 13
                echo "                            <option ";
                if (((isset($context["selectedUser"]) ? $context["selectedUser"] : $this->getContext($context, "selectedUser")) == $this->getAttribute($context["person"], "username", array()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "username", array()), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "                    </select>
                ";
        }
        // line 17
        echo "            </div>
            <h3>My Targets</h3>
        </div>
        <div class=\"custom-content targets\">

                <div class=\"small-table\">
                    <table>
                        <tr>
                            <th>Targets</th>
                            <th>Items</th>
                        </tr>
                        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 29
            echo "                            <tr >
                                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "title", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "items", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </table>
                </div>
                <div class=\"small-table next\">
                    <table>
                        <tr>
                            <th>Sold</th>
                        </tr>
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 42
            echo "                            <tr >
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "soldItems", array()), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </table>
                </div>
                <div class=\"small-table next next-three\">
                    <table>
                        <tr>
                            <th>Value</th>
                        </tr>
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 54
            echo "                            <tr >
                                <td  style='font-weight:bold; color: #00a65a'>";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["value"], "value", array()), 2, ".", ","), "html", null, true);
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </table>
                </div>

            ";
        // line 62
        echo "            ";
        // line 63
        echo "        </div>
    </div>
";
        
        $__internal_2304f0b505b1885493cbcf20680f1648e107e2a490099f18483a91cb205c8ba3->leave($__internal_2304f0b505b1885493cbcf20680f1648e107e2a490099f18483a91cb205c8ba3_prof);

    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Widget:target.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  159 => 62,  154 => 58,  145 => 55,  142 => 54,  138 => 53,  129 => 46,  120 => 43,  117 => 42,  113 => 41,  104 => 34,  95 => 31,  91 => 30,  88 => 29,  84 => 28,  71 => 17,  67 => 15,  54 => 13,  50 => 12,  47 => 11,  45 => 10,  35 => 2,  23 => 1,);
    }
}
/* {% block widget %}*/
/*     <div class="custom-block table-block">*/
/*         <div class="custom-head clear-fix">*/
/*             <div class="custom-menu">*/
/*                 <button class="up-custom"></button>*/
/*                 <button class="settings-custom"></button>*/
/*                 <button class="close-custom"></button>*/
/*             </div>*/
/*             <div class="custom-menu-select">*/
/*                 {% if persons is not empty %}*/
/*                     <select class="user_data">*/
/*                         {% for person in persons %}*/
/*                             <option {% if selectedUser == person.username %} selected {% endif %}>{{ person.username}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 {% endif %}*/
/*             </div>*/
/*             <h3>My Targets</h3>*/
/*         </div>*/
/*         <div class="custom-content targets">*/
/* */
/*                 <div class="small-table">*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th>Targets</th>*/
/*                             <th>Items</th>*/
/*                         </tr>*/
/*                         {% for key, value in data %}*/
/*                             <tr >*/
/*                                 <td>{{ value.title }}</td>*/
/*                                 <td>{{ value.items }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="small-table next">*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th>Sold</th>*/
/*                         </tr>*/
/*                         {% for key, value in data %}*/
/*                             <tr >*/
/*                                 <td>{{ value.soldItems }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                 </div>*/
/*                 <div class="small-table next next-three">*/
/*                     <table>*/
/*                         <tr>*/
/*                             <th>Value</th>*/
/*                         </tr>*/
/*                         {% for key, value in data %}*/
/*                             <tr >*/
/*                                 <td  style='font-weight:bold; color: #00a65a'>{{ value.value|number_format(2, '.', ',') }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                 </div>*/
/* */
/*             {#{% for key, value in data %}#}*/
/*             {#{% endfor %}#}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
