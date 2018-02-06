<?php

/* ZesharCRMCoreBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_4f23959fdcce161715aea5f27b80075935ec6db259055be50239275e9cdb57c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : null), "templates", array()), "block_base", array()), "ZesharCRMCoreBundle:Block:block_admin_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : null)) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["display"]) ? $context["display"] : null)) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                            ";
                    if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                                <tr>
                                    <td class=\"sonata-ba-list-label\" width=\"40%\">
                                        ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                        echo "
                                    </td>
                                    <td>
                                        <div class=\"btn-group\">
                                            ";
                        // line 37
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                                ";
                            if (twig_test_empty($this->getAttribute($context["admin"], "subClasses", array()))) {
                                // line 39
                                echo "                                                    <a class=\"btn btn-link btn-flat\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                        <i class=\"fa fa-plus-circle\"></i>
                                                        ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                                    </a>
                                                ";
                            } else {
                                // line 44
                                echo "                                                    <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                        <i class=\"fa fa-plus-circle\"></i>
                                                        ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                        <span class=\"caret\"></span>
                                                    </a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                                // line 50
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($context["admin"], "subclasses", array())));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                            <li>
                                                                <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, $context["subclass"], "html", null, true);
                                    echo "</a>
                                                            </li>
                                                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                                    </ul>
                                                ";
                            }
                            // line 57
                            echo "                                            ";
                        }
                        // line 58
                        echo "                                            ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                                ";
                            // line 60
                            echo "                                                    ";
                            // line 61
                            echo "                                                ";
                            // line 62
                            echo "                                                    ";
                            // line 63
                            echo "                                                ";
                            // line 64
                            echo "                                                    ";
                            $context["linkUrl"] = $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method");
                            // line 65
                            echo "                                                ";
                            // line 66
                            echo "                                                <a class=\"btn btn-link btn-flat\" href=\"";
                            echo twig_escape_filter($this->env, (isset($context["linkUrl"]) ? $context["linkUrl"] : null), "html", null, true);
                            echo "\" >
                                                    <i class=\"glyphicon glyphicon-list\"></i>
                                                    ";
                            // line 68
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 69
                            echo "</a>
                                            ";
                        }
                        // line 71
                        echo "                                        </div>
                                    </td>
                                </tr>
                            ";
                    }
                    // line 75
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 81
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ZesharCRMCoreBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 81,  184 => 76,  178 => 75,  172 => 71,  168 => 69,  166 => 68,  160 => 66,  158 => 65,  155 => 64,  153 => 63,  151 => 62,  149 => 61,  147 => 60,  145 => 59,  142 => 58,  139 => 57,  135 => 55,  124 => 52,  121 => 51,  117 => 50,  112 => 47,  110 => 46,  106 => 44,  102 => 42,  100 => 41,  94 => 39,  91 => 38,  89 => 37,  82 => 33,  78 => 31,  75 => 30,  71 => 29,  63 => 24,  59 => 22,  57 => 21,  54 => 20,  47 => 19,  44 => 18,  38 => 17,  35 => 16,  30 => 15,  27 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     {% for group in groups %}*/
/*         {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*         {% for role in group.roles if not display %}*/
/*             {% set display = is_granted(role)%}*/
/*         {% endfor %}*/
/* */
/*         {% if display %}*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">{{ group.label|trans({}, group.label_catalogue) }}</h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <table class="table table-hover">*/
/*                         <tbody>*/
/*                         {% for admin in group.items %}*/
/*                             {% if admin.hasroute('create') and admin.isGranted('CREATE') or admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                 <tr>*/
/*                                     <td class="sonata-ba-list-label" width="40%">*/
/*                                         {{ admin.label|trans({}, admin.translationdomain) }}*/
/*                                     </td>*/
/*                                     <td>*/
/*                                         <div class="btn-group">*/
/*                                             {% if admin.hasroute('create') and admin.isGranted('CREATE') %}*/
/*                                                 {% if admin.subClasses is empty %}*/
/*                                                     <a class="btn btn-link btn-flat" href="{{ admin.generateUrl('create')}}">*/
/*                                                         <i class="fa fa-plus-circle"></i>*/
/*                                                         {% trans from 'SonataAdminBundle' %}link_add{% endtrans %}*/
/*                                                     </a>*/
/*                                                 {% else %}*/
/*                                                     <a class="btn btn-link btn-flat dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                                                         <i class="fa fa-plus-circle"></i>*/
/*                                                         {% trans from 'SonataAdminBundle' %}link_add{% endtrans %}*/
/*                                                         <span class="caret"></span>*/
/*                                                     </a>*/
/*                                                     <ul class="dropdown-menu">*/
/*                                                         {% for subclass in admin.subclasses|keys %}*/
/*                                                             <li>*/
/*                                                                 <a href="{{ admin.generateUrl('create', {'subclass': subclass}) }}">{{ subclass }}</a>*/
/*                                                             </li>*/
/*                                                         {% endfor %}*/
/*                                                     </ul>*/
/*                                                 {% endif %}*/
/*                                             {% endif %}*/
/*                                             {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                                 {#{% if admin.label == 'Activity' %}#}*/
/*                                                     {#{% set linkUrl = admin.generateUrl('list')~'?isExpired=false' %}#}*/
/*                                                 {#{% elseif admin.label == 'Expired Activity' %}#}*/
/*                                                     {#{% set linkUrl = admin.generateUrl('list')~'?isExpired=true' %}#}*/
/*                                                 {#{% else %}#}*/
/*                                                     {% set linkUrl = admin.generateUrl('list') %}*/
/*                                                 {#{% endif %}#}*/
/*                                                 <a class="btn btn-link btn-flat" href="{{ linkUrl }}" >*/
/*                                                     <i class="glyphicon glyphicon-list"></i>*/
/*                                                     {% trans from 'SonataAdminBundle' %}link_list{% endtrans -%}*/
/*                                                 </a>*/
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
