<?php

/* AdmingeneratorGeneratorBundle:Form:fields.html.twig */
class __TwigTemplate_e61513da853c85f932f2b6b0c0d8fd14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_rows', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 1
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 4
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) {
            // line 5
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 7
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_form_rows($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if (array_key_exists("options", $context)) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 17
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 21
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    <div class=\"control-group ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\">
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"controls\">
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 33
        if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
            // line 34
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 36
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 44
            echo "    ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label"))));
            // line 45
            echo "    ";
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 46
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 47
                echo "    ";
            }
            // line 48
            echo "    ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 49
                echo "        ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 50
                echo "    ";
            }
            // line 51
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 52
                echo "        ";
                $context["label"] = $this->env->getExtension('form')->renderer->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 53
                echo "    ";
            }
            // line 54
            echo "    <label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_form_errors($context, array $blocks = array())
    {
        // line 60
        ob_start();
        // line 61
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 62
            echo "    <span class=\"help-block\">
        <ul class=\"form-errors\">
        ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 65
                echo "            <li>";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messagePluralization"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"))), "html", null, true);
                // line 68
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        </ul>
    </span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  239 => 68,  236 => 65,  232 => 64,  228 => 62,  225 => 61,  223 => 60,  198 => 54,  195 => 53,  192 => 52,  186 => 50,  148 => 34,  127 => 28,  180 => 48,  175 => 61,  161 => 41,  155 => 52,  152 => 51,  137 => 30,  129 => 29,  118 => 23,  58 => 4,  34 => 27,  276 => 75,  272 => 74,  267 => 73,  251 => 67,  244 => 64,  238 => 60,  230 => 56,  215 => 52,  204 => 49,  200 => 48,  197 => 47,  194 => 46,  190 => 43,  184 => 41,  178 => 62,  174 => 46,  170 => 33,  159 => 30,  150 => 50,  146 => 33,  124 => 27,  104 => 20,  90 => 19,  81 => 16,  77 => 70,  65 => 46,  59 => 41,  53 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 65,  241 => 77,  235 => 59,  229 => 73,  224 => 55,  220 => 59,  214 => 69,  208 => 68,  169 => 58,  143 => 47,  140 => 55,  132 => 39,  128 => 19,  119 => 17,  107 => 36,  71 => 8,  177 => 47,  165 => 64,  160 => 61,  135 => 47,  126 => 45,  114 => 42,  84 => 15,  70 => 59,  67 => 58,  61 => 11,  38 => 6,  94 => 22,  89 => 20,  85 => 17,  75 => 14,  68 => 14,  56 => 9,  87 => 16,  21 => 2,  26 => 12,  93 => 20,  88 => 6,  78 => 15,  46 => 16,  27 => 4,  44 => 59,  31 => 26,  28 => 3,  201 => 92,  196 => 90,  183 => 49,  171 => 45,  166 => 43,  163 => 70,  158 => 67,  156 => 29,  151 => 57,  142 => 32,  138 => 23,  136 => 56,  121 => 33,  117 => 44,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  24 => 1,  25 => 3,  19 => 1,  79 => 13,  72 => 63,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 70,  157 => 56,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 40,  115 => 31,  111 => 37,  108 => 37,  101 => 19,  98 => 31,  96 => 8,  83 => 77,  74 => 14,  66 => 7,  55 => 9,  52 => 21,  50 => 10,  43 => 15,  41 => 58,  35 => 5,  32 => 4,  29 => 13,  209 => 50,  203 => 78,  199 => 67,  193 => 73,  189 => 51,  187 => 42,  182 => 66,  176 => 64,  173 => 74,  168 => 44,  164 => 42,  162 => 31,  154 => 36,  149 => 51,  147 => 58,  144 => 53,  141 => 51,  133 => 21,  130 => 41,  125 => 44,  122 => 43,  116 => 16,  112 => 30,  109 => 21,  106 => 36,  103 => 25,  99 => 9,  95 => 21,  92 => 17,  86 => 28,  82 => 14,  80 => 19,  73 => 19,  64 => 17,  60 => 5,  57 => 11,  54 => 10,  51 => 2,  48 => 1,  45 => 17,  42 => 7,  39 => 41,  36 => 40,  33 => 4,  30 => 7,);
    }
}
