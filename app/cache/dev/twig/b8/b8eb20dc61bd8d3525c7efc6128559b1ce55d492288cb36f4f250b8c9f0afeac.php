<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a106c71af7de5ce1abec8b66d5e3235c4b8b34eb35baacdd6f54c4ac9a6a1a03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35058b645ccab699a4137842f19d27753aa6c6893fbc0e7e05b24d79cb0fb4c9 = $this->env->getExtension("native_profiler");
        $__internal_35058b645ccab699a4137842f19d27753aa6c6893fbc0e7e05b24d79cb0fb4c9->enter($__internal_35058b645ccab699a4137842f19d27753aa6c6893fbc0e7e05b24d79cb0fb4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35058b645ccab699a4137842f19d27753aa6c6893fbc0e7e05b24d79cb0fb4c9->leave($__internal_35058b645ccab699a4137842f19d27753aa6c6893fbc0e7e05b24d79cb0fb4c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_86aca45d93bb8c2590fe48539336082248b01e9377a138e7b2e92ebab04565f4 = $this->env->getExtension("native_profiler");
        $__internal_86aca45d93bb8c2590fe48539336082248b01e9377a138e7b2e92ebab04565f4->enter($__internal_86aca45d93bb8c2590fe48539336082248b01e9377a138e7b2e92ebab04565f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_86aca45d93bb8c2590fe48539336082248b01e9377a138e7b2e92ebab04565f4->leave($__internal_86aca45d93bb8c2590fe48539336082248b01e9377a138e7b2e92ebab04565f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a152898f43c6a3e1e9cc43857739c7c31924a5776ab280871eb6d2969d7a2978 = $this->env->getExtension("native_profiler");
        $__internal_a152898f43c6a3e1e9cc43857739c7c31924a5776ab280871eb6d2969d7a2978->enter($__internal_a152898f43c6a3e1e9cc43857739c7c31924a5776ab280871eb6d2969d7a2978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a152898f43c6a3e1e9cc43857739c7c31924a5776ab280871eb6d2969d7a2978->leave($__internal_a152898f43c6a3e1e9cc43857739c7c31924a5776ab280871eb6d2969d7a2978_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e35c7a00ccc92a86290b1637ba48f50270fdb979351a5b246d740a5e18a65d3f = $this->env->getExtension("native_profiler");
        $__internal_e35c7a00ccc92a86290b1637ba48f50270fdb979351a5b246d740a5e18a65d3f->enter($__internal_e35c7a00ccc92a86290b1637ba48f50270fdb979351a5b246d740a5e18a65d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e35c7a00ccc92a86290b1637ba48f50270fdb979351a5b246d740a5e18a65d3f->leave($__internal_e35c7a00ccc92a86290b1637ba48f50270fdb979351a5b246d740a5e18a65d3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
